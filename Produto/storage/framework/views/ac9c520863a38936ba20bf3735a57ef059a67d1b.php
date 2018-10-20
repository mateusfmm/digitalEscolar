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
                    <div class="panel-heading">Escola:</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <?php echo e(csrf_field()); ?>


                            <div class="col-md-4">
                                <?php echo e(Form::label('label-name', 'Aluno:')); ?>

                                <?php echo e(Form::select('id', $students, null, array('class' => "form-control" ))); ?>

                            </div>


                            <div class="col-md-6">
                                <?php echo e(Form::label('label-phone', 'Valor')); ?>

                                <?php echo e(Form::number('value',null, array('class' => "form-control" ))); ?>

                            </div>


                            <div class="form-group text-left">
                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-name', 'Data de vencimento: ')); ?>

                                    <?php echo e(Form::date('expiration',null, array('class' => "form-control" ))); ?>

                                </div>
                                <p>
                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    <?php echo e(Form::submit('Cadastrar' ,array('class' => "btn btn-primary"))); ?>

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