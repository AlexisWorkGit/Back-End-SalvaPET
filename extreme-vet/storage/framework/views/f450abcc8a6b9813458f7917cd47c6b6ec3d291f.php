<?php if(isset($group['receipt_pdf'])): ?>
    <a href="<?php echo e($group['receipt_pdf']); ?>" class="btn btn-danger btn-sm">
        <i class="fa fa-print"></i>
    </a>
<?php endif; ?>

<?php if(isset($group['report_pdf'])&&$group['done']): ?>
    <a href="<?php echo e($group['report_pdf']); ?>" class="btn btn-primary btn-sm">
        <i class="fa fa-flask"></i>
    </a>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/owner/groups/_action.blade.php ENDPATH**/ ?>