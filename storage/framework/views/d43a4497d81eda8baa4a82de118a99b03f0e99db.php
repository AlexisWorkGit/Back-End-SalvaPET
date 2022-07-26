<div class="modal fade" id="doctor_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo e(__('Create Doctor')); ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?php echo e(route('ajax.create_doctor')); ?>" method="POST" id="create_doctor">
            <?php echo csrf_field(); ?>
            <div class="text-danger" id="doctor_modal_error"></div>
            <div class="modal-body" id="create_doctor_inputs">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="create_name"><?php echo e(__('Name')); ?></label>
                            <input type="name" id="create_doctor_name" name="name" placeholder="<?php echo e(__('Doctor Name')); ?>" class="form-control" required>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                  <i class="fa fa-times"></i>
                  <?php echo e(__('Close')); ?>

                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i>
                  <?php echo e(__('Save')); ?>

                </button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/modals/doctor_modal.blade.php ENDPATH**/ ?>