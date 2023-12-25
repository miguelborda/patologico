<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Sistema <?php $__env->startSection('titulo'); ?> <?php echo $__env->yieldSection(); ?></title>
    <link href="<?php echo e(asset("assets/librerias/bootstrap-icons/bootstrap-icons.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("assets/librerias/bootstrap4/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href=<?php echo e(asset("assets/librerias/alerts/toastr.min.css")); ?> rel="stylesheet" />
    <link href="<?php echo e(asset("assets/css/dashboard/plantilla.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("assets/css/dashboard/boxicons.min.css")); ?>" rel="stylesheet" type="text/css" />

    <?php $__env->startSection('styles'); ?> <?php echo $__env->yieldSection(); ?>
</head>
<body>

      <!--INICIO SIDEBAR aqui barra lateral y contenido-->
      <?php echo $__env->make("Home/sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="home-section">
          <div class="home-content">
              <i class="bi bi-list" style="font-size: 2rem;"></i>  
              <span class="text">Menu</span>
          </div>
          <main class="main col">
              <div class="columnas">
                  <!--CONTENIDO -->
                  <?php echo $__env->yieldContent('contenido'); ?>
              </div>
           </main>
      </div>

    <script src="<?php echo e(asset("assets/scripts/dashboard/plantilla.js")); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset("assets/librerias/jquery/jquery-3.3.1.min.js")); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset("assets/librerias/alerts/toastr.min.js")); ?>" type="text/javascript"></script> 
    <script src="<?php echo e(asset('assets/scripts/alert.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset("assets/librerias/bootstrap4/js/bootstrap.min.js")); ?>" type="text/javascript"></script> 
    <script src="<?php echo e(asset("assets/librerias/bootstrap4/js/bootstrap.bundle.min.js")); ?>" type="text/javascript"></script> 

    <?php $__env->startSection('scripts'); ?> <?php echo $__env->yieldSection(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\patologico\resources\views/Home/index.blade.php ENDPATH**/ ?>