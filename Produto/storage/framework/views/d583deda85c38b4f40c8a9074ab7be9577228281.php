<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <?php if(isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            Registro atualizado com sucesso!
                        </div>
                    <?php endif; ?>
                    <div class="panel-heading">Estudante</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <?php echo e(csrf_field()); ?>


                            <label for="nome" class="col-md-4 control-label text-left">ID: </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="<?php echo e($student->id); ?>" readonly="readonly">
                            </div>

                            <div class="form-group text-left">
                                <label for="nome" class="col-md-4 control-label text-left">Nome: </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name" required autofocus>
                                </div>

                                <label for="nome" class="col-md-4 control-label text-left">Telefone: </label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" value="<?php echo e($student->phone); ?>" name="phone" required autofocus>
                                </div>

                                <label for="schools" class="col-md-4 control-label">Escola: </label>
                                <div class="col-md-6">
                                    <select name="school_id" class="form-control">
                                        <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($school->id == $student->school_id): ?>
                                                <option selected value=<?php echo e($school->id); ?>> <?php echo e($school->name); ?> </option>
                                                <?php else: ?>
                                                <option value=<?php echo e($school->id); ?>> <?php echo e($school->name); ?> </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <p>
                            </div>
                            <label> Endereço: </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Logradouro: </label>
                                    <input name="street" value="<?php echo e($student->address->street); ?>" type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Número: </label>
                                    <input name="number"  value="<?php echo e($student->address->number); ?>"type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Logradouro: </label>
                                    <input name="complement"  value="<?php echo e($student->address->complement); ?>"  type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Estado: </label>
                                    <select name="state" id="inputState" class="form-control">
                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($school->address->id == $state->id): ?>
                                                <option select value=<?php echo e($state->id); ?>><?php echo e($state->name); ?></option>
                                            <?php else: ?>
                                                <option value=<?php echo e($state->id); ?>><?php echo e($state->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                    <a href="/students" class="btn btn-danger">
                                        Cancelar
</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>