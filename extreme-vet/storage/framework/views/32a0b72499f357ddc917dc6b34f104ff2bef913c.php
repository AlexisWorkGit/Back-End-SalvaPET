<div class="modal fade" id="print_barcode_modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo e(__('Print barcode')); ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="POST" id="print_barcode_form" target="_blank">
            <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="number"><?php echo e(__('Number of samples')); ?></label>
                            <input type="number" id="number" name="number" placeholder="<?php echo e(__('Number of samples')); ?>" class="form-control" value="1" min="1" required>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                <button type="submit" class="btn btn-primary"><?php echo e(__('Print')); ?></button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/admin/groups/modals/print_barcode.blade.php ENDPATH**/ ?>