@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="alert alert-success" role="alert">
                        LOGADO COM SUCESSO!
                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#myTable").DataTable({
                bAutoWidth: true,
                "aoColumns": [
                    { "bSortable": false },
                    { "bSortable": true }
                ],
                "paging": true,
                "searching": true,
                "pageLength": 10,
            });
        });
    </script>
@endsection
