

<?php $__env->startSection('title'); ?>
<?php echo e(__('Reports')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fas fa-flask"></i>
            <?php echo e(__('Reports')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('owner.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Reports')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Reports list')); ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="accordion">
        <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
        <div class="card card-info">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed" aria-expanded="false">
            <i class="fas fa-filter"></i> <?php echo e(__('Filters')); ?>

          </a>
          <div id="collapseOne" class="panel-collapse in collapse">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-lg-3">
                  <div class="form-group">
                     <label for="filter_status"><?php echo e(__('Status')); ?></label>
                     <select name="filter_status" id="filter_status" class="form-control select2">
                        <option value="" selected><?php echo e(__('All')); ?></option>
                        <option value="1"><?php echo e(__('Done')); ?></option>
                        <option value="0"><?php echo e(__('Pending')); ?></option>
                     </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 table-responsive">
          <table id="owner_groups_table" class="table table-striped table-bordered" width="100%">
            <thead>
            <tr>
              <th width="20px">#</th>
              <th width="150px"><?php echo e(__('Date')); ?></th>
              <th><?php echo e(__('Animal name')); ?></th>
              <th><?php echo e(__('Tests')); ?></th>
              <th><?php echo e(__('Total')); ?></th>
              <th><?php echo e(__('Paid')); ?></th>
              <th><?php echo e(__('Due')); ?></th>
              <th width="10px"><?php echo e(__('Done')); ?></th>
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
  <script src="<?php echo e(url('js/owner/groups.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/owner/groups/index.blade.php ENDPATH**/ ?>