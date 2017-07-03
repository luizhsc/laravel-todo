<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,h1 {font-family: "Raleway", Arial, sans-serif}
  h1 {letter-spacing: 6px}
  .w3-row-padding img {margin-bottom: 12px}
</style>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

  <!-- Header -->
  <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
    <h1 class="w3-xlarge">ToDO</h1>
    <h1>List</h1>
    
    <div class="w3-padding-32">
      <div class="w3-bar w3-border">
        <div class="w3-dropdown-hover w3-hide-small">
          <button class="w3-padding-large w3-button" title="More">Task <i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="<?php echo e(url('/tarefas/')); ?>" class="w3-bar-item w3-button">List All</a>
            <a href="<?php echo e(url('/tarefas/create')); ?>" class="w3-bar-item w3-button">New</a>       
          </div>
        </div>

        <div class="w3-dropdown-hover w3-hide-small">
          <button class="w3-padding-large w3-button" title="More">Tag <i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="<?php echo e(url('/tags/')); ?>" class="w3-bar-item w3-button">List All</a>
            <a href="<?php echo e(url('/tags/create')); ?>" class="w3-bar-item w3-button">New</a>       
          </div>
        </div>

        <a href="<?php echo e(url('/home/')); ?>" class="w3-bar-item w3-button w3-padding-large">Contact</a>  
        
      </div>
    </div>
  </header>