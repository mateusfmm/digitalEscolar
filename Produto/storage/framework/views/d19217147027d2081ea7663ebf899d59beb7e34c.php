<?php $__env->startSection('content'); ?>

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
                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($classe == "odd"): ?>
                                $classe = "even";
                            <?php else: ?>
                                $classe = "odd";
                            <?php endif; ?>
                            <tr class="<?php echo e($classe); ?>">
                                <th class="hide" scope="row"><?php echo e($student->id); ?></th>
                                <th><?php echo e($student->name); ?></th>
                                <th><?php echo e($student->phone); ?></th>
                                <th><?php echo e($student->school->name); ?></th>
                                <th><?php echo e($student->address->street); ?></th>
                                <th></th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>