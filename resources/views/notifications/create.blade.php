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
                                <label class="col-md-4 control-label text-left">Nome: </label>
                                <div class="col-md-6">
                                    <input name="name" type="text" class="form-control" required autofocus>
                                </div>

                                <label class="col-md-4 control-label">Conteudo: </label>
                                <div class="col-md-6">
                                    <input name="content" type="textarea" class="form-control"  required autofocus>
                                </div>
                                <p>
                            </div>


                            <label> Enviar para : </label>

                            <div class="col-md-6">
                                @foreach($users as $user)
                                    {{ Form::checkbox('users[]', $user->id) }}
                                    {{ Form::label('nome', $user->name) }}
                                @endforeach
                            </div>a


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
