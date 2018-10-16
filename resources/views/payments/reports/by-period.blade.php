<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pagamentos</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Pagamentos</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                    <table id="myTable" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="hide" scope="col">#</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Valor mensalidade: </th>
                            <th scope="col">Data de vencimento: </th>
                            <th scope="col">Data de pagamento: </th>
                            <th scope="col">Atrasado? </th>
                        </tr>
                        </thead>
                        <tbody>

                        {{$sum = 0}}
                        @foreach($payments as $payment)
                            <tr>
                                <th class="hide" scope="row">{{$payment->id}}</th>
                                {{$sum = $payment->value + $sum}}
                                <th>{{$payment->payer->name}}</th>
                                <th>{{$payment->value}}</th>
                                <th>{{\Carbon\Carbon::parse($payment->expiration_date)->format('d/m/Y')}}</th>
                                <th>{{\Carbon\Carbon::parse($payment->payment_date)->format('d/m/Y')}}</th>
                                <th>{{$payment->flg_late == 1 ? 'Sim' : 'Não'}}</th>
                            </tr>
                        @endforeach
                        <th colspan="6">Valor total recebido: {{$sum}}</th>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
