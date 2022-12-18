<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-cog"></i>
    </button>
    
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      
       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_group')): ?>
          <a href="<?php echo e(route('admin.groups.edit',$group['id'])); ?>" class="dropdown-item">
             <i class="fa fa-edit"></i>
             <?php echo e(__('Edit')); ?>

          </a>
       <?php endif; ?>

       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_group')): ?>
         <a style="cursor: pointer" data-toggle="modal" data-target="#print_barcode_modal" class="dropdown-item print_barcode" group_id="<?php echo e($group['id']); ?>">
            <i class="fa fa-barcode" aria-hidden="true"></i>
            <?php echo e(__('Print barcode')); ?>

         </a>

         <a href="<?php echo e(route('admin.groups.show',$group['id'])); ?>" class="dropdown-item">
            <i class="fa fa-print" aria-hidden="true"></i>
            <?php echo e(__('Show Receipt')); ?>

         </a>

         <?php if($whatsapp['receipt']['active']&&isset($group['receipt_pdf'])): ?>
         <a target="_blank" href="<?php echo e(whatsapp_notification($group,'receipt')); ?>" class="dropdown-item">
            <i class="fab fa-whatsapp" aria-hidden="true" class="text-success"></i>
            <?php echo e(__('Send Receipt')); ?>

         </a>
         <?php endif; ?>

         <?php if($email['receipt']['active']&&isset($group['receipt_pdf'])): ?>
            <form action="<?php echo e(route('admin.groups.send_receipt_mail',$group['id'])); ?>" method="POST" class="d-inline">
               <?php echo csrf_field(); ?>
               <button type="submit" class="dropdown-item">
                  <i class="fa fa-envelope" aria-hidden="true" class="text-success"></i>
                  <?php echo e(__('Send Receipt')); ?>

               </button>
            </form>
         <?php endif; ?>
       <?php endif; ?>
       
       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_report')): ?>
         <a href="<?php echo e(route('admin.reports.edit',$group['id'])); ?>" class="dropdown-item">
            <i class="fa fa-flask"></i>
            <?php echo e(__('Enter results')); ?>

         </a>
       <?php endif; ?>

       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_group')): ?>
          <form method="POST" action="<?php echo e(route('admin.groups.destroy',$group['id'])); ?>" class="d-inline">
             <input type="hidden" name="_method" value="delete">
             <a href="#" class="dropdown-item delete_group">
                <i class="fa fa-trash"></i>
                <?php echo e(__('Delete')); ?>

             </a>
          </form>
       <?php endif; ?>
    </div>
 </div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/_action.blade.php ENDPATH**/ ?>