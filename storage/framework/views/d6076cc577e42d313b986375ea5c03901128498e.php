<?php $__env->startSection('content'); ?>

<div class="col-md-10 col-md-offset-1">
    <h1><?php echo e($tag->id); ?>  -  <?php echo e($tag->nome); ?></h1>    	  
    <hr>	

    <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-warning">Back</a>
    <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-primary">Edit</a>

    <div class="pull-right">
        <div class="pull-right">
            <?php echo Form::open([
            'method' => 'DELETE',
            'route' => ['tags.destroy', $tag->id]
            ]); ?>

            <?php echo Form::submit('Delete this tag?', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>