

<?php $__env->startSection('title'); ?>
<?php echo e(__('Create Expense Category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <h1 class="m-0 text-dark">
              <i class="nav-icon fas fa-dollar-sign"></i> 
              <?php echo e(__('Expense Categories')); ?>

            </h1>
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item "><a href="<?php echo e(route('admin.expenses.index')); ?>"><?php echo e(__('Expense Categories')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Expense Category')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Create Expense Category')); ?></h3>
    </div>
    <form method="POST" action="<?php echo e(route('admin.expense_categories.store')); ?>">
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('admin.accounting.expense_categories._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check"></i> <?php echo e(__('Save')); ?>

            </button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/admin/expense_categories.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/expense_categories/create.blade.php ENDPATH**/ ?>