<div class="row">
    <div class="col-lg-6">
     <div class="form-group">
      <label for="name"><?php echo e(__('Name')); ?></label>
      <input type="text" class="form-control" name="name" id="name" <?php if(isset($antibiotic)): ?> value="<?php echo e($antibiotic->name); ?>" <?php endif; ?> required>
     </div>
    </div>
    <div class="col-lg-6">
       <div class="form-group">
        <label for="shortcut"><?php echo e(__('Shortcut')); ?></label>
        <input type="text" class="form-control" name="shortcut" id="shortcut" <?php if(isset($antibiotic)): ?> value="<?php echo e($antibiotic->shortcut); ?>" <?php endif; ?> required>
       </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
             <label for="commercial_name"><?php echo e(__('Commercial Name')); ?></label>
             <textarea name="commercial_name" id="commercial_name" rows="1" class="form-control" placeholder="<?php echo e(__('Commercial Name')); ?>"><?php if(isset($antibiotic)): ?><?php echo e($antibiotic['commercial_name']); ?><?php endif; ?></textarea>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/antibiotics/_form.blade.php ENDPATH**/ ?>