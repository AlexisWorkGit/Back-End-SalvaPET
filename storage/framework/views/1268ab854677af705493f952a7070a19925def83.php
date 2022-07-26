

<?php $__env->startSection('title'); ?>
<?php echo e(__('Activity Logs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          <i class="nav-icon fas fa-server"></i>   
          <?php echo e(__('Activity Logs')); ?>

        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item active"><?php echo e(__('Activity logs')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Activity Logs Table')); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('clear_activity_log')): ?>
      <form action="<?php echo e(route('admin.activity_logs.clear')); ?>" method="POST">
        <button type="submit" class="btn btn-danger btn-sm float-right">
          <i class="fa fa-trash"></i> <?php echo e(__('Clear')); ?>

        </button>
      </form>
    <?php endif; ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <!-- filter -->
    <div id="accordion">
        <div class="card card-info">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed" aria-expanded="false">
            <i class="fas fa-filter"></i> <?php echo e(__('Filters')); ?>

          </a>
          <div id="collapseOne" class="panel-collapse in collapse">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-lg-3">
                  <div class="form-group">
                     <label for="filter_user"><?php echo e(__('User')); ?></label>
                     <select name="filter_user" id="filter_user" class="form-control select2">
                        <option value="" selected><?php echo e(__('All')); ?></option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user['id']); ?>"><?php echo e($user['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- \filter -->

    <div class="row">
      <div class="col-12 table-responsive">
        <table id="activity_logs_table" class="table table-striped table-hover table-bordered"  width="100%">
          <thead>
            <tr>
              <th width="10px">#</th>
              <th><?php echo e(__('Action')); ?></th>
              <th><?php echo e(__('User')); ?></th>
              <th><?php echo e(__('Time')); ?></th>
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
  <script src="<?php echo e(url('js/admin/activity_logs.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/activity_logs/index.blade.php ENDPATH**/ ?>