

<?php $__env->startSection('title'); ?>
<?php echo e(__('Culture options')); ?>

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
            <li class="breadcrumb-item active"><?php echo e(__('Culture options')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Culture options Table')); ?></h3>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_culture_option')): ?>
      <a href="<?php echo e(route('admin.culture_options.create')); ?>" class="btn btn-primary btn-sm float-right">
        <i class="fa fa-plus"></i>  <?php echo e(__('Create')); ?> 
      </a>
      <?php endif; ?>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <table id="culture_options_table" class="table table-striped table-hover table-bordered"  width="100%">
            <thead>
              <tr>
                <th width="10px">#</th>
                <th><?php echo e(__('Option')); ?></th>
                <th width="80px"><?php echo e(__('Action')); ?></th>
              </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/admin/culture_options.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/culture_options/index.blade.php ENDPATH**/ ?>