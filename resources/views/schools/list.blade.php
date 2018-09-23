@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md">
                <div class="panel panel-default">

                    @if(isset($success))
                        <div class="alert alert-success" role="alert">
                            Escola excluida com sucesso!
                        </div>
                    @endif

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
                                    <th><a href="{{route('schools.edit',$school->id)}}" type="button"  class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a></th>
                                    <th><a  href="{{route('schools.delete',$school->id)}}"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>

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
