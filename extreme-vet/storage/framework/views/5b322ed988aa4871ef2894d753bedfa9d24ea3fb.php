<ul>
    <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php if($test['done']): ?> text-success <?php endif; ?>"><?php echo e($test['test']['name']); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php if($culture['done']): ?> text-success <?php endif; ?>"><?php echo e($culture['culture']['name']); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/owner/groups/_tests.blade.php ENDPATH**/ ?>