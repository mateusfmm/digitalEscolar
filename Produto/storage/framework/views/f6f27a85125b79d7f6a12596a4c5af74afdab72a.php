<?php $__env->startSection('content'); ?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Escolas</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Escolas</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="col-12">
        <div class="card">
            <div class="row">
                    <?php if(isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            Escola excluida com sucesso!
                        </div>
                    <?php endif; ?>

                    <div class="panel-heading">Escolas
                        <a href="/schools/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Escolas
                        </a>
                    </div>
            </div>
            <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead>
                            <tr>
                                <th class="hide" scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Horário entrada (Manhã)</th>
                                <th scope="col">Horário saída (Manhã)</th>
                                <th scope="col">Horário entrada (Tarde)</th>
                                <th scope="col">Horário saída (Tarde)</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th class="hide" scope="row"><?php echo e($school->id); ?></th>
                                    <th><?php echo e($school->name); ?></th>
                                    <th><?php echo e($school->phone); ?></th>
                                    <th><?php echo e($school->morning_time_in); ?></th>
                                    <th><?php echo e($school->morning_time_out); ?></th>
                                    <th><?php echo e($school->afternoon_time_in); ?></th>
                                    <th><?php echo e($school->afternoon_time_out); ?></th>
                                    <th><a href="<?php echo e(route('schools.edit',$school->id)); ?>" type="button"  class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a  href="<?php echo e(route('schools.delete',$school->id)); ?>"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>