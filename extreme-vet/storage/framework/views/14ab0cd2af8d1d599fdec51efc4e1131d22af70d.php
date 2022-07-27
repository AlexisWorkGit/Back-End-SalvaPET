

<?php $__env->startSection('title'); ?>
  <?php echo e(__('Doctors')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          <i class="nav-icon fa fa-user-md"></i>   
          <?php echo e(__('Doctors')); ?>

        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item active"><?php echo e(__('Doctors')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Doctors Table')); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_contract')): ?>
    <a href="<?php echo e(route('admin.doctors.create')); ?>" class="btn btn-primary btn-sm float-right">
     <i class="fa fa-plus"></i> <?php echo e(__('Create')); ?>

    </a>
    <?php endif; ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">

    <div class="row">
      <div class="col-lg-12">
        <!-- Tools -->
        <div id="accordion">
          <div class="card card-info">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed" aria-expanded="false">
              <i class="fas fa-file-excel"></i>
              <?php echo e(__('Import / Export')); ?>

            </a>
            <div id="collapseOne" class="panel-collapse in collapse">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <a class="btn btn-success" href="<?php echo e(route('admin.doctors.export')); ?>">
                      <i class="fa fa-file-excel"></i>
                      <?php echo e(__('Export')); ?>

                    </a>
                    <a class="btn btn-success" href="<?php echo e(route('admin.doctors.download_template')); ?>">
                      <i class="fa fa-file-excel"></i>
                      <?php echo e(__('Download template')); ?>

                    </a>
                  </div>
                  <div class="col-lg-12">
                    <!-- import form -->
                    <form action="<?php echo e(route('admin.doctors.import')); ?>" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h5 class="card-title">
                                  <?php echo e(__('Import')); ?>

                              </h5>
                            </div>
                            <div class="card-body">
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile" name="import" required>
                                  <label class="custom-file-label" for="exampleInputFile"><?php echo e(__('Choose file')); ?></label>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check"></i>
                                <?php echo e(__('Import')); ?>

                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <!-- /import form -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- \Tools -->
      </div>
    </div>

    <div class="row table-responsive">
      <div class="col-12">
        <table id="doctors_table" class="table table-striped table-hover table-bordered"  width="100%">
          <thead>
            <tr>
              <th width="10px">#</th>
              <th><?php echo e(__('Code')); ?></th>
              <th><?php echo e(__('Name')); ?></th>
              <th><?php echo e(__('Phone')); ?></th>
              <th><?php echo e(__('Email')); ?></th>
              <th><?php echo e(__('Address')); ?></th>
              <th><?php echo e(__('Commission')); ?></th>
              <th><?php echo e(__('Total')); ?></th>
              <th><?php echo e(__('Paid')); ?></th>
              <th><?php echo e(__('Due')); ?></th>
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
  <script src="<?php echo e(url('js/admin/doctors.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/doctors/index.blade.php ENDPATH**/ ?>