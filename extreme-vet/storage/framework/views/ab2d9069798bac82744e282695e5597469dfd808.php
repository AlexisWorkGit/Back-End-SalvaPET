
<?php $__env->startSection('title'); ?>
<?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-th"></i>
            <?php echo e(__('Dashboard')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><?php echo e(__('Dashboard')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Small boxes (Stat box) -->
<div class="row">
    <!-- ./col -->
    <div class="col-lg-4">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3><?php echo e($group_tests_count); ?></h3>
            <p><?php echo e(__('Total Reports')); ?></p>
          </div>
          <div class="icon">
            <i class="fa fa-layer-group"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    <!-- ./col -->
    <div class="col-lg-4">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?php echo e($pending_tests_count); ?></h3>
            <p><?php echo e(__('Pending Reports')); ?></p>
          </div>
          <div class="icon">
            <i class="fa fa-pause-circle"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-4">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo e($done_tests_count); ?></h3>
            <p><?php echo e(__('Completed Reports')); ?></p>
          </div>
          <div class="icon">
            <i class="fa fa-check"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
  </div>
  <!-- /.row -->
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script>
    (function($){
      
      "use strict";
      
      $('#dashboard').addClass('active');
    })(jQuery);
  
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/owner/index.blade.php ENDPATH**/ ?>