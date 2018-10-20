<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">

                    <?php if(isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            Escola cadastrada com sucesso!
                        </div>
                    <?php endif; ?>
                    <div class="panel-heading">Escola: </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group text-left">
                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-name', 'Nome')); ?>

                                    <?php echo e(Form::text('name',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-phone', 'Telefone')); ?>

                                    <?php echo e(Form::text('phone',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-phone', 'Horário entrada(manhã)')); ?>

                                    <?php echo e(Form::time('morning_time_in',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-phone', 'Horário saída(manhã)')); ?>

                                    <?php echo e(Form::time('morning_time_out',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-phone', 'Horário entrada(tarde)')); ?>

                                    <?php echo e(Form::time('afternoon_time_in',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-6">
                                    <?php echo e(Form::label('label-phone', 'Horário saída(tarde)')); ?>

                                    <?php echo e(Form::time('afternoon_time_out',null, array('class' => "form-control" ))); ?>

                                </div>

                                <p>
                            </div>

                            <label> Endereço: </label>
                            <div class="form-row">

                                <div class=" col-md-4">
                                    <?php echo e(Form::label('label-name', 'Logradouro:')); ?>

                                    <?php echo e(Form::text('street',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-2">
                                    <?php echo e(Form::label('label-name', 'Número:')); ?>

                                    <?php echo e(Form::number('number',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-4">
                                    <?php echo e(Form::label('label-name', 'Complemento:')); ?>

                                    <?php echo e(Form::text('complement',null, array('class' => "form-control" ))); ?>

                                </div>

                                <div class="col-md-4">
                                    <?php echo e(Form::label('label-name', 'Estado:')); ?>

                                    <?php echo e(Form::select('state',$states,null,array('class' => "form-control" ))); ?>

                                </div>

                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    <?php echo e(Form::submit('Cadastrar' ,array('class' => "btn btn-primary"))); ?>

                                    <a href="/schools" class="btn btn-danger">
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