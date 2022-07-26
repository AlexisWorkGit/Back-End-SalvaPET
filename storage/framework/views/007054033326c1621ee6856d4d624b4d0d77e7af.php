<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_animal')): ?>
    <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.animals.edit',$animal['id'])); ?>">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_animal')): ?>
    <form method="POST" action="<?php echo e(route('admin.animals.destroy',$animal['id'])); ?>" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_animal">
            <i class="fa fa-trash"></i>
        </button>
    </form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/animals/_action.blade.php ENDPATH**/ ?>