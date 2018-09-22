@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Estudante</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="nome" class="col-md-4 control-label">Nome: </label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="schools" class="col-md-4 control-label">Escola: </label>
                                <div class="col-md-6">
                                    <select name="school" class="form-control">
                                        @foreach($schools as $school)
                                            <option value={{$school->id}}> {{$school->name}} </option>
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
