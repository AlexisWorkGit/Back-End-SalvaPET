<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="category"><?php echo e(__('Category')); ?></label>
            <input type="text" placeholder="<?php echo e(__('Expense category name')); ?>" name="name" id="category" class="form-control" <?php if(isset($expense_category)): ?> value="<?php echo e($expense_category['name']); ?>" <?php endif; ?> required>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/expense_categories/_form.blade.php ENDPATH**/ ?>