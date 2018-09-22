@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Escola: </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group text-left">
                                <label for="nome" class="col-md-4 control-label text-left">Nome: </label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="schools" class="col-md-4 control-label">Telfone: </label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="nome" required autofocus>
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
