@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notificação</div>

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

                                <label for="schools" class="col-md-4 control-label">Conteudo: </label>
                                <div class="col-md-6">
                                    <input id="nome" type="textarea" class="form-control" name="nome" required autofocus>

                                </div>
                                <p>
                            </div>


                            <label> Enviar para : </label>

                            <div class="col-md-6">
                                @foreach($users as $user)
                                    <input id="nome" type="checkbox" class="form-control" name="{{$user->value}}" required autofocus>
                                    <label for="horns">{{$user->name}}</label>
                                @endforeach
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
