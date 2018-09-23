@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md">
                <div class="panel panel-default">
                    <div class="panel-heading">Escolas
                        <a href="/schools/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Escolas
                        </a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Horário entrada (Manhã)</th>
                                <th scope="col">Horário saída (Manhã)</th>
                                <th scope="col">Horário entrada (Tarde)</th>
                                <th scope="col">Horário saída (Tarde)</th>
                                <th scope="col">Editar: </th>
                                <th scope="col">Remover: </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($schools as $school)
                                <tr>
                                    <th scope="row">{{$school->id}}</th>
                                    <th>{{$school->name}}</th>
                                    <th>{{$school->phone}}</th>
                                    <th>{{$school->morning_time_in}}</th>
                                    <th>{{$school->morning_time_out}}</th>
                                    <th>{{$school->afternoon_time_in}}</th>
                                    <th>{{$school->afternoon_time_out}}</th>
                                    <th><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></th>
                                    <th><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
