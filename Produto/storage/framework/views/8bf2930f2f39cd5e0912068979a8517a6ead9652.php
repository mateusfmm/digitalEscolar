<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">

                    <?php if(isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            Pagamento cadastrada com sucesso!
                        </div>
                    <?php endif; ?>
                    <div class="panel-heading">Relatório de pagamento mensal:</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <?php echo e(csrf_field()); ?>


                            <div class="col-md-4">
                                <?php echo e(Form::label('label-name', 'Mês:')); ?>

                                <?php echo e(Form::select('month',$month, null, array('class' => "form-control" ))); ?>

                            </div>


                            <div class="col-md-6">
                                <?php echo e(Form::label('label-phone', 'Ano')); ?>

                                <?php echo e(Form::select('year',$year, null, array('class' => "form-control" ))); ?>

                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    <?php echo e(Form::submit('Gerar Relatório' ,array('class' => "btn btn-primary"))); ?>

                                    <a href="/payments" class="btn btn-danger">
                                        Cancelar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>