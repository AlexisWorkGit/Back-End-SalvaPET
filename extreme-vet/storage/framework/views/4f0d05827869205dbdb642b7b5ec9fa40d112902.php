<div class="row">
  <div class="col-lg-4">
     <div class="form-group">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-user"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="<?php echo e(__('Doctor Name')); ?>" name="name" id="name" <?php if(isset($doctor)): ?> value="<?php echo e($doctor->name); ?>" <?php endif; ?> required>
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
              <input type="email" class="form-control" placeholder="<?php echo e(__('Email Address')); ?>" name="email" id="email" <?php if(isset($doctor)): ?> value="<?php echo e($doctor->email); ?>" <?php endif; ?> required>
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
            <input type="text" class="form-control" placeholder="<?php echo e(__('Phone number')); ?>" name="phone" id="phone"  <?php if(isset($doctor)): ?> value="<?php echo e($doctor->phone); ?>" <?php endif; ?> required>
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
                  <input type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>" name="address" id="address" <?php if(isset($doctor)): ?> value="<?php echo e($doctor->address); ?>" <?php endif; ?> required>
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
                    <i class="fas fa-percentage"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="<?php echo e(__('Commission')); ?>" name="commission" id="commission" <?php if(isset($doctor)): ?> value="<?php echo e($doctor->commission); ?>" <?php endif; ?> min="0" max="100" required>
            </div>
        </div>
    </div>
  </div>
  
  
</div>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/doctors/_form.blade.php ENDPATH**/ ?>