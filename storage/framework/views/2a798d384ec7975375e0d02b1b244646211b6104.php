<div class="row">
    <div class="col-lg-6">
     <div class="form-group">
      <label for="title"><?php echo e(__('Title')); ?></label>
      <input type="text" class="form-control" name="title" placeholder="<?php echo e(__('Contract title')); ?>" id="title" <?php if(isset($contract)): ?> value="<?php echo e($contract->title); ?>" <?php endif; ?> required>
     </div>
    </div>
    <div class="col-lg-6">
       <div class="form-group">
        <label for="discount"><?php echo e(__('Discount')); ?> %</label>
        <input type="number" class="form-control" name="discount" id="discount" placeholder="<?php echo e(__('Contract discount %')); ?>" min="0" max="100" <?php if(isset($contract)): ?> value="<?php echo e($contract->discount); ?>" <?php endif; ?> required>
       </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
         <label for="description"><?php echo e(__('Description')); ?></label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php if(!empty($contract)): ?><?php echo e($contract['description']); ?><?php endif; ?></textarea>
        </div>
     </div>
</div>
<?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/contracts/_form.blade.php ENDPATH**/ ?>