<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_owner')): ?>
    <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.owners.edit',$owner['id'])); ?>">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_owner')): ?>
    <form method="POST" action="<?php echo e(route('admin.owners.destroy',$owner['id'])); ?>" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_owner">
            <i class="fa fa-trash"></i>
        </button>
    </form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/owners/_action.blade.php ENDPATH**/ ?>