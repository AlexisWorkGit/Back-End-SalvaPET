<div class="row">

      <div class="col-lg-4">
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-user"></i>
              </span>
            </div>
            <select name="owner_id" class="form-control" id="owner_id">
              <?php if(isset($animal)): ?>
                <option value="<?php echo e($animal['owner_id']); ?>" selected><?php echo e($animal['owner']['name']); ?></option>
              <?php endif; ?>
            </select>
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
            <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" id="name" <?php if(isset($animal)): ?> value="<?php echo e($animal->name); ?>" <?php endif; ?> required>
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
                      <option value="male"  <?php if(isset($animal)&&$animal['gender']=='male'): ?> selected <?php endif; ?>><?php echo e(__('Male')); ?></option>
                      <option value="female"  <?php if(isset($animal)&&$animal['gender']=='female'): ?> selected <?php endif; ?>><?php echo e(__('Female')); ?></option>
                  </select>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-4">
      <div class="form-group">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-birthday-cake"></i>
                </span>
              </div>
              <input type="text" class="form-control datepicker" placeholder="<?php echo e(__('DOB')); ?>" name="dob" id="dob"  <?php if(isset($animal)): ?> value="<?php echo e($animal->dob); ?>" <?php endif; ?> readonly required>
          </div>
      </div>
  </div>

    
</div>
<?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/animals/_form.blade.php ENDPATH**/ ?>