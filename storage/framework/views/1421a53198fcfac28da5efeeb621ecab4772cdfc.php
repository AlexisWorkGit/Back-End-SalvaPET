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
                <input type="email" class="form-control" placeholder="<?php echo e(__('Email Address')); ?>" name="email" id="email" <?php if(isset($owner)): ?> value="<?php echo e($owner->email); ?>" <?php endif; ?> required>
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
                <input type="text" class="form-control" placeholder="<?php echo e(__('Phone number')); ?>" name="phone" id="phone"  <?php if(isset($owner)): ?> value="<?php echo e($owner->phone); ?>" <?php endif; ?> required>
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
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/owners/_form.blade.php ENDPATH**/ ?>