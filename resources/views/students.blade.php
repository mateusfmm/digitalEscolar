@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Estudantes
                            <a href="/students/create"  type="button" class="btn btn-sm btn-success pull-right">
                                + Estudante
                            </a>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Escola</th>
                                <th scope="col">Endereço</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($students as $student)
                            <tr>
                                <th scope="row">{{$student->id}}</th>
                                <th>{{$student->name}}</th>
                                <th>{{$student->phone}}</th>
                                <th>{{$student->school->name}}</th>
                                <th>{{$student->address->street}}</th>
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
