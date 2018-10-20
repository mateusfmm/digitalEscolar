<?php $__env->startSection('content'); ?>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pagamentos</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Pagamentos</li>
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

                    <div class="panel-heading">Pagamento
                        <a href="/payments/create"  type="button" class="btn btn-sm btn-success pull-right">
                            + Escolas
                        </a>
                    </div>
                </div>
                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                    <table id="myTable" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="hide" scope="col">#</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Valor mensalidade: </th>
                            <th scope="col">Data de vencimento: </th>
                            <th scope="col">Data de pagamento: </th>
                            <th scope="col">Atrasado? /th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th class="hide" scope="row"><?php echo e($payment->id); ?></th>
                                <th><?php echo e($payment->payer->name); ?></th>
                                <th><?php echo e($payment->value); ?></th>
                                <th><?php echo e(\Carbon\Carbon::parse($payment->expiration_date)->format('d/m/Y')); ?></th>
                                <th><?php echo e(\Carbon\Carbon::parse($payment->payment_date)->format('d/m/Y')); ?></th>
                                <th><?php echo e($payment->flg_late == 1 ? 'Sim' : 'Não'); ?></th>
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
                    { "bSortable": true }
                ],
                "paging": true,
                "searching": true,
                "pageLength": 10,
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>