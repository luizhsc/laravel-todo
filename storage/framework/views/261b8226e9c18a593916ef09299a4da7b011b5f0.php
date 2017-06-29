<?php $__env->startSection('content'); ?>
<div class="col-md-10 col-md-offset-1">

    <h1 class="text-primary">Create new Task</h1>
    <br>
    <?php echo Form::open(array('route' => 'tarefas.store', 'class' => 'form')); ?>


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">			
        <?php echo Form::text('titulo', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Title')); ?>

    </div>
    
    <div class="form-group">
        <select class="form-control">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->nome); ?>"><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>


    <div class="form-group">				
        <?php echo Form::textarea('descricao', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Description')); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Save', 
        array('class'=>'btn btn-primary')); ?>

        <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-warning">Back</a>
    </div>
    <div class="form-group">

    </div>
    <?php echo Form::close(); ?>




</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>