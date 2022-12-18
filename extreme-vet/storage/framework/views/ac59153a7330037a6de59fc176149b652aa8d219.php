<div class="modal fade" id="owner_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo e(__('Create owner')); ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?php echo e(route('ajax.create_owner')); ?>" method="POST" id="create_owner">
            <?php echo csrf_field(); ?>
            <div class="text-danger" id="owner_modal_error"></div>
            <div class="modal-body" id="create_owner_inputs">
                <div class="row">
                    
                    <div class="col-lg-4">
                       <div class="form-group">
                          <label for="create_owner_name"><?php echo e(__('Name')); ?></label>
                          <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" id="create_owner_name"  required>
                       </div>
                    </div>
              
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="create_owner_gender"><?php echo e(__('Gender')); ?></label>
                                <select class="form-control" name="gender" placeholder="<?php echo e(__('Gender')); ?>" id="create_owner_gender" required>
                                  <option value="" disabled selected><?php echo e(__('Select Gender')); ?></option>
                                  <option value="male" ><?php echo e(__('Male')); ?></option>
                                  <option value="female"><?php echo e(__('Female')); ?></option>
                              </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_email"><?php echo e(__('Email')); ?></label>
                           <input type="email" class="form-control" placeholder="<?php echo e(__('Email')); ?>" name="email" id="create_owner_email"  required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_phone"><?php echo e(__('Phone')); ?></label>
                           <input type="text" class="form-control" placeholder="<?php echo e(__('Phone')); ?>" name="phone" id="create_owner_phone"  required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="create_owner_address"><?php echo e(__('Address')); ?></label>
                           <input type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>" name="address" id="create_owner_address">
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
  </div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/visits/modals/owner_modal.blade.php ENDPATH**/ ?>