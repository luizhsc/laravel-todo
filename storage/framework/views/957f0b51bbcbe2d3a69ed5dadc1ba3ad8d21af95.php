<?php $__env->startSection('content'); ?>


<div class="col-md-10 col-md-offset-1 container">
    <h1>Edit Tag: <?php echo e($tag->nome); ?> </h1>
    
    <hr>

    <?php echo Form::model($tag, ['method' => 'PUT','route' => ['tags.update', $tag->id]]); ?>


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">
        <?php echo Form::label('nome', 'Name of Tag:', ['class' => 'control-label']); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">       
      <a href="<?php echo e(route('tags.index')); ?>" class="btn btn-warning">Back</a>
      <?php echo Form::submit('Update Tag', ['class' => 'btn btn-primary']); ?>      
  </div>

  <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>