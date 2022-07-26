<?php if($doctor['due']>0): ?>
    <span class="text-danger"><?php echo e(formated_price($doctor['due'])); ?></span>
<?php else: ?> 
    <span class="text-success"><?php echo e(formated_price($doctor['due'])); ?></span>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/doctors/_due.blade.php ENDPATH**/ ?>