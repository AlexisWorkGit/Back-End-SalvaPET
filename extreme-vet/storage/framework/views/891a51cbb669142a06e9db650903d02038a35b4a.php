<?php if(isset($activity['causer_id'])): ?>
    <a href="<?php echo e(route('admin.users.show',$activity['causer_id'])); ?>"><?php echo e($activity['causer']['name']); ?></a>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/activity_logs/_causer.blade.php ENDPATH**/ ?>