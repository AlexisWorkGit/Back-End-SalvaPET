<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                    <i  class="fas fa-map-marked-alt nav-icon"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="<?php echo e(__('Branch name')); ?>" name="name" id="name" <?php if(isset($branch)): ?> value="<?php echo e($branch->name); ?>" <?php endif; ?> required>
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
                <input type="text" class="form-control" placeholder="<?php echo e(__('Phone number')); ?>" name="phone" id="phone" <?php if(isset($branch)): ?> value="<?php echo e($branch->phone); ?>" <?php endif; ?> required>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-map-marker-alt"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>" name="address" id="address" <?php if(isset($branch)): ?> value="<?php echo e($branch->address); ?>" <?php endif; ?> required>
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
                    <?php echo e(__('Location on map')); ?>

                </h5>
            </div>
            <input type="hidden" name="lat" id="branch_lat" <?php if(isset($branch)): ?> value="<?php echo e($branch['lat']); ?>" <?php endif; ?>>
            <input type="hidden" name="lng" id="branch_lng" <?php if(isset($branch)): ?> value="<?php echo e($branch['lng']); ?>" <?php endif; ?>>
            <input type="hidden" name="zoom_level" id="zoom_level" <?php if(isset($branch)): ?> value="<?php echo e($branch['zoom_level']); ?>" <?php endif; ?>>
            <div class="card-body">
                <div id="map" style="min-height:500px"></div>
            </div>
        </div>
   </div>
</div>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/branches/_form.blade.php ENDPATH**/ ?>