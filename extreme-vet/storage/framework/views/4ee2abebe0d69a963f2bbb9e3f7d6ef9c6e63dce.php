

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Edit invoice')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-layer-group"></i>
            <?php echo e(__('Invoices')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.groups.index')); ?>"><?php echo e(__('Groups')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit invoice')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   <!-- Form -->
   <form action="<?php echo e(route('admin.groups.update',$group->id)); ?>" method="POST" id="group_form">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <?php echo $__env->make('admin.groups._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </form>
   <!-- \Form -->

   <!-- Models -->
   <?php echo $__env->make('admin.groups.modals.animal_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.groups.modals.owner_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.groups.modals.doctor_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!--\Models-->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script>
    var test_arr=[];
    var culture_arr=[];

    (function($){

      "use strict";

      //selected tests
      <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        test_arr.push('<?php echo e($test["test_id"]); ?>');
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      //selected cultures
      <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        culture_arr.push('<?php echo e($culture["culture_id"]); ?>');
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    })(jQuery);
  </script>
  <script src="<?php echo e(url('js/admin/groups.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/edit.blade.php ENDPATH**/ ?>