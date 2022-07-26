<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_antibiotic')): ?>
<a href="<?php echo e(route('admin.antibiotics.edit',$antibiotic['id'])); ?>" class="btn btn-primary btn-sm">
  <i class="fa fa-edit"></i>
</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_antibiotic')): ?>
<form method="POST" action="<?php echo e(route('admin.antibiotics.destroy',$antibiotic['id'])); ?>" class="d-inline">
  <input type="hidden" name="_method" value="delete">
  <button type="submit" class="btn btn-danger btn-sm delete_antibiotic">
      <i class="fa fa-trash"></i>
  </button>
</form>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/antibiotics/_action.blade.php ENDPATH**/ ?>