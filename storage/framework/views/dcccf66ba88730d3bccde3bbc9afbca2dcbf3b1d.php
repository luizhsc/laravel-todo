<?php $__env->startSection('content'); ?>


<div class="container">

    <div class="input-group" style="margin-left: 400px">
        <form action="<?php echo e(action('TarefasController@busca')); ?>" method="get">  
            <div class="input-group">
                <input type="text" size="30" placeholder="Search by Tag..." class="form-control"  name="search" onkeyup="showResult(this.value)"/>
                <span class="input-group-btn">
                    <button class="btn btn-flat btn-primary" type="submit">Search</button>    
                </span>
            </div><!-- /input-group -->
    </div>

    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Title</th>
                <th class="text-center">Description</th>
                <th class="text-center">Tag</th>
            </tr>
        </thead>
        <tbody>                 
            <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>            
                <td class="text-center"><?php echo e($tarefa->id); ?></td>
                <td class="text-center"><?php echo e($tarefa->titulo); ?></td>
                <td class="text-center"><?php echo e($tarefa->descricao); ?></td>                       
                <td class="text-center"><?php echo e($tarefa->tag); ?></td>
                <td class="text-right">                                                              
                    <a href="<?php echo e(route('tarefas.show', $tarefa->id)); ?>" class="btn btn-info">View Detail</a>
                </td>                               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>