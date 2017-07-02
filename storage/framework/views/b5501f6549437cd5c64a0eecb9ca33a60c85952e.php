 <div class="w3-top">
          <div class="w3-bar w3-white w3-card-2" id="myNavbar">
            <a href="<?php echo e(route('tarefas.index')); ?>" class="w3-bar-item w3-button w3-wide">HOME</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
              <a href="<?php echo e(route('tags.index')); ?>" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TAG</a>
              <a href="<?php echo e(url('/tarefas/create')); ?>" class="w3-bar-item w3-button"><i class="fa fa-th"></i> TASK</a>         
              <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
              <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>