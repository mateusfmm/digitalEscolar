@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">

                    @if(isset($success))
                        <div class="alert alert-success" role="alert">
                            Pagamento cadastrada com sucesso!
                        </div>
                    @endif
                    <div class="panel-heading">Relatório de pagamento mensal:</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="col-md-4">
                                {{Form::label('label-name', 'Mês:')}}
                                {{Form::select('month',$month, null, array('class' => "form-control" ))}}
                            </div>


                            <div class="col-md-6">
                                {{Form::label('label-phone', 'Ano')}}
                                {{Form::select('year',$year, null, array('class' => "form-control" ))}}
                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    {{ Form::submit('Gerar Relatório' ,array('class' => "btn btn-primary"))}}
                                    <a href="/payments" class="btn btn-danger">
                                        Cancelar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
