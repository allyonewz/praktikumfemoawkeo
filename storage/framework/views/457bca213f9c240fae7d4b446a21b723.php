<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Belajar Laravel Routing</title>
 <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
 <div class="container m-5">
 <h1>Belajar Laravel Routing</h1>
 <div class="list-group list-group-numbered mt-4">
 
 <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-groupitem-action">
    Basic Routing (No View, No Controller)
   </a>
<a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
    View Route
</a>

 </div>
 </div>
 <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH D:\2GAS\SMT 6\Pemro Framework\Praktikum\Prak 4\prak4\resources\views/welcome.blade.php ENDPATH**/ ?>