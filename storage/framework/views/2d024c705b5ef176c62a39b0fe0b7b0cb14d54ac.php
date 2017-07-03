<?php $__env->startSection('content'); ?>

<div class="col-md-10 col-md-offset-1 container">
    <h1><?php echo e($tarefa->titulo); ?></h1>
    <p><?php echo e($tarefa->descricao); ?></p>
    <hr>	

    <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-info">Back</a>
    <a href="<?php echo e(route('tarefas.edit', $tarefa->id)); ?>" class="btn btn-primary">Edit</a>

    <div class="pull-right">     
        <?php echo Form::open([
        'method' => 'DELETE',
        'route' => ['tarefas.destroy', $tarefa->id]
        ]); ?>

        <?php echo Form::submit('Delete this task?', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

    </div>    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>