@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notificações
                        <a href="/notifications/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Notificação
                        </a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Conteudo</th>
                                <th scope="col">Remetente: </th>
                                <th scope="col">Destinatário</th>
                                <th scope="col">Deletar</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($notifications as $notification)
                                <tr>
                                    <th scope="row">{{$notification->id}}</th>
                                    <th>{{$notification->name}}</th>
                                    <th>{{$notification->notification_content}}</th>
                                    <th>{{$notification->mailer_user->name}}</th>
                                    <th>{{$notification->receiver_user->name}}</th>
                                    <th><a  href="{{route('notifications.delete',$notification->id)}}"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection