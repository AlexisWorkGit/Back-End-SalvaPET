

<?php $__env->startSection('title'); ?>
<?php echo e(__('Create culture option')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-vial"></i>
            <?php echo e(__('Culture options')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.culture_options.index')); ?>"><?php echo e(__('Culture Options')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create culture option')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Create culture option')); ?></h3>
    </div>
    <form action="<?php echo e(route('admin.culture_options.store')); ?>" method="POST" id="option_form">
        <?php echo csrf_field(); ?>
        <!-- /.card-header -->
        <?php echo $__env->make('admin.culture_options._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
            <i class="fa fa-check"></i> <?php echo e(__('Save')); ?>

            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/admin/culture_options.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/culture_options/create.blade.php ENDPATH**/ ?>