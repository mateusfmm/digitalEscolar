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
                    <div class="panel-heading">Escola:</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="col-md-4">
                                {{Form::label('label-name', 'Aluno:')}}
                                {{Form::select('payer_id', $students, null, array('class' => "form-control" ))}}
                            </div>


                            <div class="col-md-6">
                                {{Form::label('label-phone', 'Valor')}}
                                {{Form::number('value',null, array('class' => "form-control" ))}}
                            </div>


                            <div class="form-group text-left">
                                <div class="col-md-6">
                                    {{Form::label('label-name', 'Data de vencimento: ')}}
                                    {{Form::date('expiration',null, array('class' => "form-control" ))}}
                                </div>
                                <p>
                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    {{ Form::submit('Cadastrar' ,array('class' => "btn btn-primary"))}}
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
