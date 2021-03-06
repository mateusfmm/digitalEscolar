<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <?php if(isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            Notificação enviada com sucesso!
                        </div>
                    <?php endif; ?>
                    <div class="panel-heading">Notificação</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group text-left">
                                <label class="col-md-4 control-label text-left">Nome: </label>
                                <div class="col-md-6">
                                    <input name="name" type="text" class="form-control" required autofocus>
                                </div>

                                <label class="col-md-4 control-label">Conteudo: </label>
                                <div class="col-md-6">
                                    <textarea rows="6" name="content" type="textarea" class="form-control"  required autofocus>
                                    </textarea>
                                </div>
                                <p>
                            </div>


                            <label style="margin-left:30px"> Enviar para : </label>

                            <div class="col-md-12">
                            <div id="myTable_wrapper" class="dataTables_wrapper no-footer" style="margin:15px">
                            <table id="myTable" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"><input id="selectAll" type="checkbox"/></th>
                                        <th scope="col">Alunos</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e(Form::checkbox('users[]', $user->id)); ?></th>
                                        <th><?php echo e(Form::label('nome', $user->name)); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                            <div class="form-group">
                                <div style="text-align:center" class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                    <a href="/notifications" class="btn btn-danger">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>