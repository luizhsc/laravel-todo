<html>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">      
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body style="margin-top: 80px">    
    <!-- Navbar (sit on top) -->
    
    <?php echo $__env->yieldContent('content'); ?>         
</body>
</html>
<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>