

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Home visits')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('plugins/swtich-netliva/css/netliva_switch.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fa fa-home"></i>
            <?php echo e(__('Home visits')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><a href="#"><?php echo e(__('Home visits')); ?></a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <?php echo e(__('Home visits table')); ?>

      </h3>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_visit')): ?>
        <a href="<?php echo e(route('admin.visits.create')); ?>" class="btn btn-primary btn-sm float-right">
          <i class="fa fa-plus"></i> <?php echo e(__('Create')); ?>

        </a>
      <?php endif; ?>
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
                            <option value="1"><?php echo e(__('Completed')); ?></option>
                            <option value="0"><?php echo e(__('Pending')); ?></option>
                          </select>
                      </div>
                    </div>
        
                    <div class="col-lg-3">
                      <div class="form-group">
                          <label for="filter_read"><?php echo e(__('Viewed')); ?></label>
                          <select name="filter_read" id="filter_read" class="form-control select2">
                            <option value="" selected><?php echo e(__('All')); ?></option>
                            <option value="1"><?php echo e(__('Viewed')); ?></option>
                            <option value="0"><?php echo e(__('Pending')); ?></option>
                          </select>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-12 table-responsive">
            <table id="visits_table" class="table table-striped table-hover table-bordered"  width="100%">
              <thead>
                <tr>
                  <th width="10px">#</th>
                  <th><?php echo e(__('Animal Name')); ?></th>
                  <th><?php echo e(__('Owner Name')); ?></th>
                  <th><?php echo e(__('Phone')); ?></th>
                  <th><?php echo e(__('Address')); ?></th>
                  <th><?php echo e(__('Visit Date')); ?></th>
                  <th class="text-center"><?php echo e(__('Viewed')); ?></th>
                  <th><?php echo e(__('Status')); ?></th>
                  <th class="text-center" width="100px"><?php echo e(__('Action')); ?></th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
        </div>

    </div>
    <!-- /.card-body -->
  </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/admin/visits.js')); ?>"></script>
  <!-- Switch -->
  <script src="<?php echo e(url('plugins/swtich-netliva/js/netliva_switch.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/visits/index.blade.php ENDPATH**/ ?>