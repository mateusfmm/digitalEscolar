@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(isset($success))
                        <div class="alert alert-success" role="alert">
                            Aluno excluido com sucesso!
                        </div>
                    @endif
                    <div class="panel-heading">Alunos
                            <a href="/students/create"  type="button" class="btn btn-sm btn-success pull-right">
                                + Aluno
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
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
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
                                <th><a href="{{route('students.edit',$student->id)}}" type="button"  class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a></th>
                                <th><a  href="{{route('students.delete',$student->id)}}"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>
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
