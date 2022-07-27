<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_test')): ?>
    <?php if($test['parent_id']): ?>
        <a href="<?php echo e(route('admin.tests.edit',$test['parent_id'])); ?>" class="btn btn-primary btn-sm">
            <i class="fa fa-edit"></i>
        </a>
    <?php else: ?> 
        <a href="<?php echo e(route('admin.tests.edit',$test['id'])); ?>" class="btn btn-primary btn-sm">
            <i class="fa fa-edit"></i>
        </a>
    <?php endif; ?>
<?php endif; ?>


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_test')): ?>
        <form method="POST" action="<?php echo e(route('admin.tests.destroy',$test['id'])); ?>" class="d-inline">
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger btn-sm delete_test">
                <i class="fa fa-trash"></i>
            </button>
        </form>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/tests/_action.blade.php ENDPATH**/ ?>