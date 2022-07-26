

<?php $__env->startSection('title'); ?>
<?php echo e(__('Home Visit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('plugins/datetimepicker/css/jquery.datetimepicker.min.css')); ?>">    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fas fa-home"></i>
            <?php echo e(__('Home visit')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('owner.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Home visit')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Request a home visit')); ?></h3>
    </div>
    <form action="<?php echo e(route('owner.visits.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                  
                    <div class="row owner_info">
                    
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-dog"></i>
                                        </span>
                                    </div>
                                    <select name="animal_id" class="form-control" id="code" required></select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-dog"></i>
                                        </span>
                                    </div>
                                    <select name="animal_id" class="form-control" id="name" required></select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-mars"></i>
                                        </span>
                                        </div>
                                        <select class="form-control" name="gender" placeholder="<?php echo e(__('Gender')); ?>" id="gender" disabled required>
                                            <option value="" readonly selected><?php echo e(__('Select Gender')); ?></option>
                                            <option value="male" <?php if($owner['gender']=='male'): ?> selected <?php endif; ?>><?php echo e(__('Male')); ?></option>
                                            <option value="female" <?php if($owner['gender']=='female'): ?> selected <?php endif; ?>><?php echo e(__('Female')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-baby"></i>
                                        </span>
                                        </div>
                                        <input type="text" class="form-control datepicker" id="dob" placeholder="<?php echo e(__('Date Of Birth')); ?>" name="dob" value="<?php echo e($owner['dob']); ?>" disabled readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-calendar"></i>
                                        </span>
                                        </div>
                                        <input type="text" class="form-control datepicker" id="visit_date" placeholder="<?php echo e(__('Visit Date')); ?>" name="visit_date" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        <i  class="fas fa-map-marked-alt nav-icon"></i>
                                        <?php echo e(__('Location On Map')); ?>

                                    </h5>
                                </div>
                                <input type="hidden" name="lat" id="visit_lat">
                                <input type="hidden" name="lng" id="visit_lng">
                                <input type="hidden" name="zoom_level" id="zoom_level">
                                <div class="card-body">
                                    <div id="map" style="min-height:500px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        <i  class="fas fa-file-pdf nav-icon"></i>
                                        <?php echo e(__('Attachment')); ?>

                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">
                                            <?php echo e(__('Attachment Image')); ?> (<?php echo e(__('optional')); ?>)
                                        </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="attach" accept="image/*" class="custom-file-input" id="attachment">
                                                <label class="custom-file-label" for="attachment"><?php echo e(__('Choose file')); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Save')); ?>

            </button>
        </div>
        <!-- /.card-footer -->
    </form>


  </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('plugins/datetimepicker/js/jquery.datetimepicker.full.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($api_keys['google_map']); ?>&callback=initMap&libraries=&v=weekly" defer></script>
    <script src="<?php echo e(url('js/owner/visits.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/owner/visits/index.blade.php ENDPATH**/ ?>