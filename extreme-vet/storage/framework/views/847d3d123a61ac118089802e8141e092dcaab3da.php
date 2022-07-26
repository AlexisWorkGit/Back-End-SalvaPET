

<?php $__env->startSection('title'); ?>
<?php echo e(__('Create animal')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-paw"></i>
            <?php echo e(__('Animals')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item "><a href="<?php echo e(route('admin.animals.index')); ?>"><?php echo e(__('Animals')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create animal')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Create animal')); ?></h3>
    </div>
    <form method="POST" action="<?php echo e(route('admin.animals.store')); ?>" id="patient_form">
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('admin.animals._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/admin/animals.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/animals/create.blade.php ENDPATH**/ ?>