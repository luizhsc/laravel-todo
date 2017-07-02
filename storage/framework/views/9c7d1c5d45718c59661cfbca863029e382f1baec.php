<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">

            <h1 class="text-primary">Index</h1>
            <br>        
         
                    
            <br>
            
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
                        <td class="text-left"><?php echo e($tarefa->tag); ?></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>