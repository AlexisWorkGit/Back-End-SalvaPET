

<?php $__env->startSection('title'); ?>
<?php echo e(__('Profile')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?php echo e(__('Profile')); ?></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('owner.index')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item active"><?php echo e(__('Profile')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Edit Profile')); ?></h3>
  </div>
  <!-- /.card-header -->
  <form method="POST" action="<?php echo e(route('owner.profile.update')); ?>">
    <?php echo csrf_field(); ?>
    <div class="card-body">

      <div class="row">
        <div class="col-lg-4">
           <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                      <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" id="name" <?php if(isset($owner)): ?> value="<?php echo e($owner->name); ?>" <?php endif; ?> required>
            </div>
           </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-envelope"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="<?php echo e(__('Email')); ?>" name="email" id="email" <?php if(isset($owner)): ?> value="<?php echo e($owner->email); ?>" <?php endif; ?> required>
                </div>
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-phone-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone"  <?php if(isset($owner)): ?> value="<?php echo e($owner->phone); ?>" <?php endif; ?> required>
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
                        <select class="form-control" name="gender" placeholder="<?php echo e(__('Gender')); ?>" id="gender" required>
                            <option value="" disabled selected><?php echo e(__('Select Gender')); ?></option>
                            <option value="male"  <?php if(isset($owner)&&$owner['gender']=='male'): ?> selected <?php endif; ?>><?php echo e(__('Male')); ?></option>
                            <option value="female"  <?php if(isset($owner)&&$owner['gender']=='female'): ?> selected <?php endif; ?>><?php echo e(__('Female')); ?></option>
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
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>" name="address" id="address" <?php if(isset($owner)): ?> value="<?php echo e($owner->address); ?>" <?php endif; ?>>
                  </div>
              </div>
          </div>
      </div>
      
        
    </div>
    

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
  <script src="<?php echo e(url('js/owner/profile.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/owner/profile/edit.blade.php ENDPATH**/ ?>