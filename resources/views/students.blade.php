@extends('layouts.app')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Estudantes</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Segmento</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="col-12">
        <div class="card">

            <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                <div class="block" style="text-align:right">
                    <button class="btn btn-sm btn-success" href="students/create">Novo</button>
                </div>
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
                                <th></th>
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
