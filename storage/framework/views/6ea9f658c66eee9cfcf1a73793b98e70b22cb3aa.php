<?php $__env->startSection('content'); ?>

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>                                         
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>			
                <td class="text-center"><?php echo e($tag->id); ?></td>
                <td class="text-center"><?php echo e($tag->nome); ?></td>  
                <td class="text-center">														
                <a href="<?php echo e(route('tags.show', $tag->id)); ?>" class="btn btn-info">Detail</a>
                </td>							
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>