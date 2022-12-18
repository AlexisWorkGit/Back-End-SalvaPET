<?php if($group['due']>0): ?>
    <span class="text-danger text-bold">
        <?php echo e(formated_price($group['due'])); ?>

    </span>
<?php else: ?> 
    <span class="text-success">
        <?php echo e(formated_price($group['due'])); ?>

    </span>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/_due.blade.php ENDPATH**/ ?>