@extends('layouts.app')

@section('content')
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
                <div class="row">
                    @if(isset($success))
                        <div class="alert alert-success" role="alert">
                            Escola excluida com sucesso!
                        </div>
                    @endif

                    <div class="panel-heading">Pagamento
                        <a href="/payments/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Escolas
                        </a>
                    </div>
                </div>
                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                    <table id="myTable" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="hide" scope="col">#</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Valor mensalidade: </th>
                            <th scope="col">Data de vencimento: </th>
                            <th scope="col">Data de pagamento: </th>
                            <th scope="col">Atrasado? /th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($payments as $payment)
                            <tr>
                                <th class="hide" scope="row">{{$payment->id}}</th>
                                <th>{{$payment->payer->name}}</th>
                                <th>{{$payment->value}}</th>
                                <th>{{$payment->expiration_date}}</th>
                                <th>{{$payment->payment_date}}</th>
                                <th>{{$payment->flg_late == 1 ? 'Sim' : 'Não'}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#myTable").DataTable({
                bAutoWidth: true,
                "aoColumns": [
                    { "bSortable": true },
                    { "bSortable": true },
                    { "bSortable": true },
                    { "bSortable": true },
                    { "bSortable": true },
                    { "bSortable": true },
                    { "bSortable": true }
                ],
                "paging": true,
                "searching": true,
                "pageLength": 10,
            });
        });
    </script>
@endsection
