@extends('layouts.app')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Notificações</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Notificações</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="panel-heading">Notificações
                        <a href="/notifications/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Notificação
                        </a>
                    </div>
                </div>
                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                    {{$name}}
                    {{$content}}

                </div>
            </div>
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
