<?php $__env->startSection('content'); ?>
<div class="col-md-10 col-md-offset-1     margin-top: 75px !important">

    <h1 class="text-primary">Create new Tag</h1>
    <hr>
	
	
    <?php echo Form::open(array('route' => 'tags.store', 'class' => 'form')); ?>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">			
        <?php echo Form::text('nome', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Name')); ?>

    </div>
	<hr>

    <div class="form-group">
		 <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-warning">Back</a>
        <?php echo Form::submit('Save', 
        array('class'=>'btn btn-primary')); ?>

       
    </div>

	
    <?php echo Form::close(); ?>

	
		
	
	


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>