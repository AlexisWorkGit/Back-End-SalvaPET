<?php if($owner['due']>0): ?>
    <span class="text-danger text-bold">
        <?php echo e(formated_price($owner['due'])); ?>

    </span>
<?php else: ?> 
    <span class="text-success">
        <?php echo e(formated_price($owner['due'])); ?>

    </span>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/owners/_due.blade.php ENDPATH**/ ?>