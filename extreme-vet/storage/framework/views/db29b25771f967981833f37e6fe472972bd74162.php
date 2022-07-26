<div class="modal fade" id="animal_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo e(__('Create animal')); ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?php echo e(route('ajax.create_animal')); ?>" method="POST" id="create_animal">
            <?php echo csrf_field(); ?>
            <div class="text-danger" id="animal_modal_error"></div>
            <div class="modal-body" id="create_animal_inputs">
                <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="create_owner_id"><?php echo e(__('Owner')); ?></label>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_owner')): ?>
                          <button type="button" class="btn btn-secondary btn-sm add_owner float-right"  data-toggle="modal" data-target="#owner_modal">
                              <i class="fa fa-exclamation-triangle"></i>  <?php echo e(__('Not Listed ?')); ?>

                          </button>
                        <?php endif; ?>
                        <select name="owner_id" class="form-control" id="create_owner_id" width="100%"></select>
                      </div>
                    </div>

                    <div class="col-lg-4">
                       <div class="form-group">
                          <label for="create_name"><?php echo e(__('Name')); ?></label>
                          <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" id="create_name"  required>
                       </div>
                    </div>
              
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="create_gender"><?php echo e(__('Gender')); ?></label>
                                <select class="form-control" name="gender" placeholder="<?php echo e(__('Gender')); ?>" id="create_gender" required>
                                  <option value="" disabled selected><?php echo e(__('Select Gender')); ?></option>
                                  <option value="male" ><?php echo e(__('Male')); ?></option>
                                  <option value="female"><?php echo e(__('Female')); ?></option>
                              </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="create_dob"><?php echo e(__('Date of birth')); ?></label>
                                <input type="text" class="form-control datepicker" id="create_dob" placeholder="<?php echo e(__('Date of birth')); ?>" name="dob" required>
                            </div>
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
  </div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/modals/animal_modal.blade.php ENDPATH**/ ?>