<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_report')): ?>
            <a class="dropdown-item" href="<?php echo e(route('admin.reports.edit',$group['id'])); ?>">
               <i class="fa fa-flask" aria-hidden="true"></i>
               <?php echo e(__('Edit Report')); ?> 
            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sign_report')): ?>
            <a class="dropdown-item" href="<?php echo e(route('admin.reports.sign',$group['id'])); ?>">
               <i class="fas fa-signature" aria-hidden="true"></i>
               <?php echo e(__('Sign Report')); ?> 
            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_report')): ?>
            <a class="dropdown-item" href="<?php echo e(route('admin.reports.show',$group['id'])); ?>">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <?php echo e(__('Show')); ?>

            </a>
            <a style="cursor: pointer" data-toggle="modal" data-target="#print_barcode_modal" class="dropdown-item print_barcode" group_id="<?php echo e($group['id']); ?>">
                <i class="fa fa-barcode" aria-hidden="true"></i>
                <?php echo e(__('Print barcode')); ?>

                </a>
            <?php if($whatsapp['report']['active']&&isset($group['report_pdf'])): ?>
                <a target="_blank" href="<?php echo e(whatsapp_notification($group,'report')); ?>" class="dropdown-item">
                    <i class="fab fa-whatsapp" aria-hidden="true" class="text-success"></i>
                    <?php echo e(__('Send Report')); ?>

                </a>
            <?php endif; ?>
            <?php if($email['report']['active']&&isset($group['report_pdf'])): ?>
                <form action="<?php echo e(route('admin.reports.send_report_mail',$group['id'])); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dropdown-item">
                    <i class="fa fa-envelope" aria-hidden="true" class="text-success"></i>
                    <?php echo e(__('Send Report')); ?>

                </button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/reports/_action.blade.php ENDPATH**/ ?>