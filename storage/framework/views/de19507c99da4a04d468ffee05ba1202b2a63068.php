<?php $__env->startSection('content'); ?>


<div class="col-md-10 col-md-offset-1 margin-top">
    <h1>Edit Task - <?php echo e($tarefa->titulo); ?> </h1>
    <p class="lead">Edit this task below. <a href="<?php echo e(route('tarefas.index')); ?>">Go back to all tasks.</a></p>
    <hr>
    
    <?php echo Form::model($tarefa, ['method' => 'PUT','route' => ['tarefas.update', $tarefa->id]]); ?>


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">
        <?php echo Form::label('titulo', 'Title:', ['class' => 'control-label']); ?>

        <?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

    </div>
	
	<div class="form-group">        
			<select name="tag" class="form-control">
				<option value="">Select Tag</option>
			  <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($tag); ?>"><?php echo e($tag); ?></option>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
    </div>

    <div class="form-group">
        <?php echo Form::label('description', 'Description:', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('descricao', null, ['class' => 'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Update Task', ['class' => 'btn btn-primary']); ?>



        <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-warning">Back</a>
    </div>
    <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>