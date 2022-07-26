<?php $__currentLoopData = $role['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <span class="badge badge-primary mr-1">
        <?php if(isset($permission['permission'])): ?>
            <?php echo e($permission['permission']['name']); ?>

        <?php endif; ?>
    </span>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/roles/_permissions.blade.php ENDPATH**/ ?>