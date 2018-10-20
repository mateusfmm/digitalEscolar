<?php $__env->startSection('content'); ?>
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
                    <table id="myTable" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="hide" scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Conteudo</th>
                                <th scope="col">Remetente: </th>
                                <th scope="col">Destinatário</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th class="hide" scope="row"><?php echo e($notification->id); ?></th>
                                    <th><?php echo e($notification->name); ?></th>
                                    <th><?php echo e($notification->notification_content); ?></th>
                                    <th><?php echo e($notification->mailer_user->name); ?></th>
                                    <th><?php echo e($notification->receiver_user->name); ?></th>
                                    <th><a  href="<?php echo e(route('notifications.delete',$notification->id)); ?>"  type="button"class="btn btn-danger btn-xs" data-title="Delete" ><span class="glyphicon glyphicon-trash"></span></a></th>                                </tr>
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