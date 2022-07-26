<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_culture_option')): ?>
    <a href="<?php echo e(route('admin.culture_options.edit',$culture_option['id'])); ?>" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_culture')): ?>
    <form method="POST" action="<?php echo e(route('admin.culture_options.destroy',$culture_option['id'])); ?>" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_culture_option">
            <i class="fa fa-trash"></i>
        </button>
    </form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/culture_options/_action.blade.php ENDPATH**/ ?>