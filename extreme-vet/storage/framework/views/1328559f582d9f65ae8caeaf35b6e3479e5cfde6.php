<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_expense_category')): ?>
    <a href="<?php echo e(route('admin.expense_categories.edit',$expense_category['id'])); ?>" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_expense_category')): ?>
    <form method="POST" action="<?php echo e(route('admin.expense_categories.destroy',$expense_category['id'])); ?>"  class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_expense_category">
            <i class="fa fa-trash"></i>
        </button>
    </form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/expense_categories/_action.blade.php ENDPATH**/ ?>