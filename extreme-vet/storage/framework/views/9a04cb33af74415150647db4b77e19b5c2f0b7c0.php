<div class="row">
    <div class="col-lg-3">
     <div class="form-group">
      <label for="category"><?php echo e(__('Category')); ?></label>
        
        <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#category_modal">
            <i class="fa fa-info-circle"></i>
            <?php echo e(__('Not Listed ?')); ?>

        </button>

        <?php if(isset($expense)&&isset($expense['category'])): ?>
          <input type="hidden" value="<?php echo e($expense['expense_category_id']); ?>" id="expense_category_id">
        <?php endif; ?>

        <select name="expense_category_id" id="category" class="form-control select2" required>
            <option value="" value=""></option>
            <?php if(isset($expense['category'])&&!$expense_categories->contains('id',$expense['expense_category_id'])): ?>
                <option value="<?php echo e($expense['category']['id']); ?>"><?php echo e($expense['category']['name']); ?></option>
            <?php endif; ?>
            <?php $__currentLoopData = $expense_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
     </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
         <label for="name"><?php echo e(__('Date')); ?></label>
         <input type="text" class="form-control" name="date" id="date" <?php if(isset($expense)): ?> value="<?php echo e($expense->date); ?>" <?php endif; ?> readonly required>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
         <label for="name"><?php echo e(__('Doctor')); ?></label>
         <select class="form-control" name="doctor_id" id="doctor">
            <?php if(isset($expense)&&isset($expense['doctor'])): ?>
                <option value="<?php echo e($expense['doctor']['id']); ?>" selected><?php echo e($expense['doctor']['name']); ?></option>
            <?php endif; ?>
         </select>
        </div>
    </div>

    <div class="col-lg-3">
       <div class="form-group">
        <label for="amount"><?php echo e(__('Amount')); ?></label>
        <input type="number" class="form-control" name="amount" id="amount" min="0" <?php if(isset($expense)): ?> value="<?php echo e($expense->amount); ?>" <?php endif; ?> required>
       </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="notes"><?php echo e(__('Notes')); ?></label>
            <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" required><?php if(isset($expense)): ?><?php echo e($expense->notes); ?><?php endif; ?> </textarea>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/expenses/_form.blade.php ENDPATH**/ ?>