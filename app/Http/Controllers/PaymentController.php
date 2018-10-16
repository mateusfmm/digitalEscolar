<?php

namespace App\Http\Controllers;

use App\Model\Payment;
use App\Model\Student;
use Illuminate\Http\Request;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    private $users;
    private $students;
    private $payment;

    function __construct()
    {
        $this->users = User::all();
        $this->students = Student::all();
        $this->payment = new Payment();
    }

    public function create(Request $request)
    {
        foreach($this->students as $student){
            $data['students'][$student->id] = $student->name;
        }
        if ($request->isMethod('get')) {
            return view('payments.create', $data);
        }

        $this->payment->payer_id = $request->post('payer_id');
        $this->payment->value = $request->post('value');
        $this->payment->expiration_date = $request->post('expiration_date');
        $this->payment->driver_id = Auth::user()->id;

        $this->payment->save();

        $data['payments'] = Payment::all();
        if ($request->isMethod('get')) {
            return view('payments.list', $data);
        }
    }

    public function list()
    {
        $data['payments'] = Payment::all();
        return view('payments.list', $data);
    }

    public function reports(Request $request)
    {
        $data['month'] = array(
            '01' => 'Janeiro',
            '02' => 'Fevereiro',
            '03' => 'Março',
            '04' => 'Abril',
            '05' => 'Maio',
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro'
        );
        $data['year'] = array(2018);

        if ($request->isMethod('get')) {
            return view('payments.reports', $data);
        }

        $carbon = Carbon::createFromDate(2018, $request->post('month'), 01, 'America/Sao_Paulo');
        $start = $carbon->startOfMonth();
        $carbon = Carbon::createFromDate(2018, $request->post('month'), 01, 'America/Sao_Paulo');
        $end = $carbon->endOfMonth();

        dd($this->payment->getPaymentsByPeriod($start,$end));


    }

}
