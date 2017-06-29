<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1 class="text-primary">Home</h1>

            <form action="stationary-add-item" method="POST">
                <div class="form-group">
                    <input type="text" name="searchname" class="form-control" id="searchname" placeholder="Search">	
                </div> 
            </form>

            <div class="form-group">
                <a class="btn btn-success pull-left" href="<?php echo e(url('/tarefas/create')); ?>" role="button">New Task</a>
                <!--<a class="btn btn-success pull-left" href="<?php echo e(url('/tags/create')); ?>" role="button">New Tag</a>-->
            </div> 

            <table class="table">				
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Tag</th>							
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>			
                        <td class="text-left"><?php echo e($tarefa->id); ?></td>
                        <td class="text-left"><?php echo e($tarefa->titulo); ?></td>
                        <td class="text-left"><?php echo e($tarefa->descricao); ?></td>	
                        <td class="text-left"><?php echo e($tag->name); ?></td>									
                        <td class="text-left">																
                            <a href="<?php echo e(route('tarefas.show', $tarefa->id)); ?>" class="btn btn-info">View Task</a>
                        </td>								
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>