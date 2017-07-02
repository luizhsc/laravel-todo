<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1 class="text-primary">Tag</h1>       

            <br>      

            <a class="btn btn-success right" href="<?php echo e(url('/tags/create')); ?>" role="button">New Tag
            </a>
			
			<hr>
			
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>                      
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>			
                        <td class="text-left"><?php echo e($tag->id); ?></td>
                        <td class="text-left"><?php echo e($tag->nome); ?></td>  
						<td class="text-left">																
                            <a href="<?php echo e(route('tags.show', $tag->id)); ?>" class="btn btn-info">Detail Tag</a>
                        </td>							
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>