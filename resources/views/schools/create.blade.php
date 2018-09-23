@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">

                    @if(isset($success))
                        <div class="alert alert-success" role="alert">
                            Escola cadastrada com sucesso!
                        </div>
                    @endif
                    <div class="panel-heading">Escola: </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group text-left">
                                <div class="col-md-6">
                                    {{Form::label('label-name', 'Nome')}}
                                    {{Form::text('name',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-6">
                                    {{Form::label('label-phone', 'Telefone')}}
                                    {{Form::text('phone',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-6">
                                    {{Form::label('label-phone', 'Horário entrada(manhã)')}}
                                    {{Form::time('morning_time_in',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-6">
                                    {{Form::label('label-phone', 'Horário saída(manhã)')}}
                                    {{Form::time('morning_time_out',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-6">
                                    {{Form::label('label-phone', 'Horário entrada(tarde)')}}
                                    {{Form::time('afternoon_time_in',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-6">
                                    {{Form::label('label-phone', 'Horário saída(tarde)')}}
                                    {{Form::time('afternoon_time_out',null, array('class' => "form-control" ))}}
                                </div>

                                <p>
                            </div>

                            <label> Endereço: </label>
                            <div class="form-row">

                                <div class=" col-md-4">
                                    {{Form::label('label-name', 'Logradouro:')}}
                                    {{Form::text('street',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-2">
                                    {{Form::label('label-name', 'Número:')}}
                                    {{Form::number('number',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-4">
                                    {{Form::label('label-name', 'Complemento:')}}
                                    {{Form::text('complement',null, array('class' => "form-control" ))}}
                                </div>

                                <div class="col-md-4">
                                    {{Form::label('label-name', 'Estado:')}}
                                    {{Form::select('state',$states,null,array('class' => "form-control" ))}}
                                </div>

                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    {{ Form::submit('Cadastrar' ,array('class' => "btn btn-primary"))}}
                                    <a href="/schools" class="btn btn-danger">
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
