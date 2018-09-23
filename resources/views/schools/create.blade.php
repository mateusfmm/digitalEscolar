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

                                <label for="nome" class="col-md-4 control-label text-left">Nome: </label>
                                <div class="col-md-6">
                                    <input name="name"  type="text" class="form-control" required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Telfone: </label>
                                <div class="col-md-6">
                                    <input name="phone" type="text" class="form-control"  required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Horário entrada(manhã): </label>
                                <div class="col-md-6">
                                    <input name="morning_time_in" type="time" class="form-control"required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Horário saída(manhã): </label>
                                <div class="col-md-6">
                                    <input name="morning_time_out" type="time" class="form-control"required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Horário entrada(tarde): </label>
                                <div class="col-md-6">
                                    <input name="afternoon_time_in" type="time" class="form-control"required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Horário saída(tarde): </label>
                                <div class="col-md-6">
                                    <input name="afternoon_time_out" type="time" class="form-control"required autofocus>
                                </div>


                                <p>
                            </div>

                            <label> Endereço: </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Logradouro: </label>
                                    <input name="street" type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Número: </label>
                                    <input name="number" type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Logradouro: </label>
                                    <input name="complement" type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Estado: </label>
                                    <select name="state" id="inputState" class="form-control">
                                        @foreach($states as $state)
                                            <option value={{$state->id}}>{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
