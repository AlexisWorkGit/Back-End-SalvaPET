

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Backups')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          <i class="fa fa-database nav-icon"></i>
          <?php echo e(__('Database Backups')); ?>

        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item active"><?php echo e(__('Database Backups')); ?></li>
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
      <?php echo e(__('Backups Table')); ?>

    </h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_backup')): ?>
    <a href="<?php echo e(route('admin.backups.create')); ?>" class="btn btn-primary btn-sm float-right">
        <i class="fa fa-plus"></i> <?php echo e(__('Create Database Backup')); ?>

    </a>
    <?php endif; ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row table-responsive">
      <div class="col-12">
        <table id="example1" class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th><?php echo e(__('Backup')); ?></th>
              <th><?php echo e(__('Date')); ?></th>
              <th width="100px"><?php echo e(__('Action')); ?></th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($backup->getFilename()); ?></td>
                <td><?php echo e(date('d-m-Y',$backup->getATime())); ?></td>
                <td>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_backup')): ?>
                      <a href="<?php echo e(route('admin.backups.show',$backup->getFilename())); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-download"></i>
                      </a>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_backup')): ?>
                      <form action="<?php echo e(route('admin.backups.destroy',$backup->getFilename())); ?>" class="d-inline" method="POST">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm delete_backup">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                    <?php endif; ?>
                   
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/admin/backups.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/admin/backups/index.blade.php ENDPATH**/ ?>