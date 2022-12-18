<div class="row select_animal">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="animal_id"><?php echo e(__('Select Animal')); ?></label>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_animal')): ?>
                <button type="button" class="btn btn-secondary btn-sm add_animal float-right"  data-toggle="modal" data-target="#animal_modal">
                    <i class="fa fa-exclamation-triangle"></i>  <?php echo e(__('Not Listed ?')); ?>

                </button>
            <?php endif; ?>
            <select id="animal_id" name="animal_id" class="form-control" required>
                <?php if(isset($visit)&&isset($visit['animal'])): ?>
                    <option value="<?php echo e($visit['animal']['id']); ?>" selected><?php echo e($visit['animal']['name']); ?></option>
                <?php endif; ?>
            </select>
        </div>
    </div>
</div>


<div class="row animal_info">

    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-dog"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" id="name" <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['name']); ?>"  <?php endif; ?> disabled required>
        </div>
       </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-mars"></i>
                      </span>
                    </div>
                    <select class="form-control" name="gender" placeholder="<?php echo e(__('Gender')); ?>" id="gender" <?php if(isset($visit)&&isset($visit['patient'])): ?>  <?php endif; ?> disabled required>
                        <option value="" disabled selected><?php echo e(__('Select Gender')); ?></option>
                        <option value="male"  <?php if(isset($visit)&&$visit['animal']['gender']=='male'): ?> selected <?php endif; ?>><?php echo e(__('Male')); ?></option>
                        <option value="female"  <?php if(isset($visit)&&$visit['animal']['gender']=='female'): ?> selected <?php endif; ?>><?php echo e(__('Female')); ?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-baby"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control datepicker" id="dob" placeholder="<?php echo e(__('Date of birth')); ?>" name="dob" required <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['dob']); ?>"  <?php endif; ?> style="z-index: 1000!important" disabled>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="owner_name" placeholder="<?php echo e(__('Owner name')); ?>" required <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['owner']['name']); ?>"  <?php endif; ?> disabled>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-envelope"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="<?php echo e(__('Email')); ?>" name="email" required <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['owner']['email']); ?>"  <?php endif; ?> disabled>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-phone"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="phone" placeholder="<?php echo e(__('Phone')); ?>" name="phone" required <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['owner']['phone']); ?>"  <?php endif; ?> disabled>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-map-marker-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>" name="address" id="address" <?php if(isset($visit)&&isset($visit['animal'])): ?> value="<?php echo e($visit['animal']['owner']['address']); ?>"  <?php endif; ?> disabled required>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-calendar"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control datepicker" id="visit_date" placeholder="<?php echo e(__('Visit Date')); ?>" name="visit_date" required <?php if(isset($visit)): ?> value="<?php echo e($visit['visit_date']); ?>" <?php endif; ?> style="z-index: 1000!important" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
         <div class="card card-primary">
             <div class="card-header">
                 <h5 class="card-title">
                     <i  class="fas fa-map-marked-alt nav-icon"></i>
                     <?php echo e(__('Location on map')); ?>

                 </h5>
             </div>
             <input type="hidden" name="lat" id="visit_lat" <?php if(isset($visit)): ?> value="<?php echo e($visit['lat']); ?>" <?php endif; ?>>
             <input type="hidden" name="lng" id="visit_lng" <?php if(isset($visit)): ?> value="<?php echo e($visit['lng']); ?>" <?php endif; ?>>
             <input type="hidden" name="zoom_level" id="zoom_level" <?php if(isset($visit)): ?> value="<?php echo e($visit['zoom_level']); ?>" <?php endif; ?>>
             <div class="card-body">
                 <div id="map" style="min-height:500px"></div>
             </div>
         </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">
                     <i  class="fas fa-file-pdf nav-icon"></i>
                    <?php echo e(__('Attachment')); ?>

                </h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">
                        <?php echo e(__('Attachment Image')); ?> (<?php echo e(__('optional')); ?>)
                        <?php if(!empty($visit)&&!empty($visit['attach'])): ?>
                            <a href="<?php echo e(url('uploads/visits/'.$visit['attach'])); ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                        <?php endif; ?>
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="attach" accept="image/*" class="custom-file-input" id="attachment">
                            <label class="custom-file-label" for="attachment"><?php echo e(__('Choose file')); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/visits/_form.blade.php ENDPATH**/ ?>