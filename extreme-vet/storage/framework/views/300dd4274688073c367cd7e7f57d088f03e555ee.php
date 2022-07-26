<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_doctor')): ?>
    <a href="<?php echo e(route('admin.doctors.edit',$doctor['id'])); ?>" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_doctor')): ?>
    <form method="POST" action="<?php echo e(route('admin.doctors.destroy',$doctor['id'])); ?>" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_doctor">
            <i class="fa fa-trash"></i>
        </button>
    </form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/doctors/_action.blade.php ENDPATH**/ ?>