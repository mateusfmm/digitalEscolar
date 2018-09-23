@extends('layouts.app')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Alunos</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Alunos</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="col-12">
        <div class="card">
            <div class="row">
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
</div>

            <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr role="row">
                            <th class="hide">#</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Escola</th>
                            <th>Endereco</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $classe="odd"; ?>
                        @foreach ($students as $student)
                            @if($classe == "odd")
                                $classe = "even";
                            @else
                                $classe = "odd";
                            @endif
                            <tr class="{{$classe}}">
                                <th class="hide" scope="row">{{$student->id}}</th>
                                <th>{{$student->name}}</th>
                                <th>{{$student->phone}}</th>
                                <th>{{$student->school->name}}</th>
                                <th>{{$student->address->street}}</th>
                                <th><a href="{{route('students.edit',$student->id)}}" type="button"  class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a>
                                <a  href="{{route('students.delete',$student->id)}}"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
<div>
        </div>
    </div> 
<script type="text/javascript">
    $(document).ready(function () {

        $("#myTable").DataTable({
            bAutoWidth: true,
            "aoColumns": [
              { "bSortable": true },
              { "bSortable": true },
              { "bSortable": true },
              { "bSortable": true },
              { "bSortable": true },
              { "bSortable": false }
            ],
            "paging": true,
            "searching": true,
            "pageLength": 10,
        });
    });
</script>
@endsection
