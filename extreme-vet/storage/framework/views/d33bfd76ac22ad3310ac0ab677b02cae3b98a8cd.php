<div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input type="text" class="form-control" name="name" id="name" <?php if(isset($culture)): ?> value="<?php echo e($culture->name); ?>" <?php endif; ?> required>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="sample_type"><?php echo e(__('Sample Type')); ?></label>
        <input type="text" class="form-control" name="sample_type" id="sample_type" <?php if(isset($culture)): ?> value="<?php echo e($culture->sample_type); ?>" <?php endif; ?> required>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
              <label for="price"><?php echo e(__('Price')); ?></label>
              <div class="input-group form-group mb-3">
              <input type="number" class="form-control" name="price" id="price" min="0" <?php if(isset($culture)): ?> value="<?php echo e($culture->price); ?>" <?php endif; ?> required>
                <div class="input-group-append">
                  <span class="input-group-text">
                      <?php echo e(get_currency()); ?>

                  </span>
                </div>
            </div>
      </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
             <label for="precautions"><?php echo e(__('Precautions')); ?></label>
             <textarea name="precautions" id="precautions" rows="1" class="form-control" placeholder="<?php echo e(__('Precautions')); ?>"><?php if(isset($culture)): ?><?php echo e($culture['precautions']); ?><?php endif; ?></textarea>
        </div>
    </div>
    
</div>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/cultures/_form.blade.php ENDPATH**/ ?>