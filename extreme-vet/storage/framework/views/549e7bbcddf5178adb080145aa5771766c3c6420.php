<div class="row text-center">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">
                    <?php echo e(__('Select branch')); ?>

                </h5>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-map-marked-alt nav-icon"></i>
                      </span>
                    </div>

                    <?php if(isset($group)): ?>
                        <input type="hidden" value="<?php echo e($group['branch_id']); ?>" id="branch_id">
                    <?php endif; ?>

                    <?php if(isset($visit)): ?>
                        <input type="hidden" value="<?php echo e($visit['animal']['id']); ?>" animal_name="<?php echo e($visit['animal']['name']); ?>" id="visit_animal_id">
                    <?php endif; ?>

                    <select name="branch_id" id="branch" class="form-control" required>
                        <option value="" selected disabled><?php echo e(__('Select tests branch')); ?></option>
                        <?php if(isset($group['branch'])&&!$branches->contains('id',$group['branch_id'])): ?>
                            <option value="<?php echo e($group['branch']['id']); ?>"><?php echo e($group['branch']['name']); ?></option>
                        <?php endif; ?>
                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($branch['id']); ?>"><?php echo e($branch['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Animal Info -->
 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <?php echo e(__('Animal Info')); ?>

        </h3>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_animal')): ?>
            <button type="button" class="btn btn-secondary btn-sm add_animal float-right"  data-toggle="modal" data-target="#animal_modal">
                <i class="fa fa-exclamation-triangle"></i>  <?php echo e(__('Not Listed ?')); ?>

            </button>
        <?php endif; ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Code')); ?></label>
                    <select id="code" name="animal_id" class="form-control" required>
                        <?php if(isset($group)&&isset($group['animal'])): ?>
                            <option value="<?php echo e($group['animal']['id']); ?>" selected><?php echo e($group['animal']['code']); ?></option>
                        <?php endif; ?>
                    </select>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Name')); ?></label>
                    <select id="name" name="animal_id" class="form-control" required>
                        <?php if(isset($group)&&isset($group['animal'])): ?>
                            <option value="<?php echo e($group['animal']['id']); ?>" selected><?php echo e($group['animal']['name']); ?></option>
                        <?php endif; ?>
                    </select>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Gender')); ?></label>
                    <input class="form-control" id="gender" <?php if(isset($group)&&isset($group['animal'])): ?> value="<?php echo e($group['animal']['gender']); ?>" <?php endif; ?> readonly>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Date of birth')); ?></label>
                    <input class="form-control" id="dob" <?php if(isset($group)&&isset($group['animal'])): ?> value="<?php echo e($group['animal']['dob']); ?>" <?php endif; ?> readonly>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Owner name')); ?></label>
                    <input class="form-control" id="owner_name" <?php if(isset($group)&&isset($group['animal'])): ?> value="<?php echo e($group['animal']['owner']['name']); ?>" <?php endif; ?>  readonly>
                </div> 
            </div>
            
            <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo e(__('Doctor')); ?></label> 
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_doctor')): ?>
                        <button type="button" class="btn btn-secondary btn-sm float-right"  data-toggle="modal" data-target="#doctor_modal">
                            <i class="fa fa-exclamation-triangle"></i> 
                            <?php echo e(__('Not Listed ?')); ?>

                        </button>
                    <?php endif; ?>
                    <select class="form-control" name="doctor_id" id="doctor">
                        <?php if(isset($group)&&isset($group['doctor'])): ?>
                            <option value="<?php echo e($group['doctor']['id']); ?>" selected><?php echo e($group['doctor']['name']); ?></option>
                        <?php endif; ?>
                    </select>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- /animal info-->

<!-- test -->
<div class="row">
    <div class="col-lg-6">
        <div class="card card-danger">
            <div class="card-header">
                <h5 class="card-title">
                    <?php echo e(__('Tests')); ?>

                </h5>
            </div>
            <div class="card-body tests">
                <table class="table table-bordered table-sm datatables" width="100%">
                    <thead>
                        <tr>
                            <td><?php echo e(__('Test Name')); ?></td>
                            <td><?php echo e(__('Price')); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <input type="checkbox"  class="test" id="test_<?php echo e($test['id']); ?>" value="<?php echo e($test['id']); ?>" price="<?php echo e($test['price']); ?>"> 
                                    <label for="test_<?php echo e($test['id']); ?>"><?php echo e($test['name']); ?></label>
                                </td>
                                <td>
                                    <?php echo e(formated_price($test['price'])); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
       <div class="card card-danger">
           <div class="card-header">
               <h5 class="card-title text-center">
                   <?php echo e(__('Cultures')); ?>

               </h5>
           </div>
           <div class="card-body cultures">
                <table class="table table-bordered table-sm datatables" width="100%">
                    <thead>
                        <tr>
                            <td><?php echo e(__('Culture Name')); ?></td>
                            <td><?php echo e(__('Price')); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cultures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <input type="checkbox" class="culture" id="culture_<?php echo e($culture['id']); ?>" value="<?php echo e($culture['id']); ?>" price="<?php echo e($culture['price']); ?>"> 
                                    <label for="culture_<?php echo e($culture['id']); ?>"><?php echo e($culture['name']); ?></label>
                                </td>
                                <td>
                                    <?php echo e(formated_price($culture['price'])); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           </div>
       </div>
    </div>
 </div>  
<!-- \End test -->

<!-- Receipt -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <?php echo e(__('Receipt')); ?>

        </h3>
    </div>
    <div class="card-body" id="receipt">
         <div class="row">
             <div class="col-lg-8 offset-lg-2">
                <table class="table  table-stripped" id="receipt_table">
                    <tbody>

                        <tr>
                            <td><?php echo e(__('Subtotal')); ?></td>
                            <td>
                                <input type="number" id="subtotal" name="subtotal"  <?php if(isset($group)): ?> value="<?php echo e($group['subtotal']); ?>" <?php else: ?> value="0"  <?php endif; ?> readonly class="form-control">
                            </td>
                            <td>
                                <?php echo e(get_currency()); ?>

                            </td>
                        </tr>

                        <tr>
                            <td><?php echo e(__('Contract')); ?></td>
                            <td>
                                <?php if(isset($group)): ?>
                                    <input type="hidden" value="<?php echo e($group['contract_id']); ?>" id="contract_id">
                                <?php endif; ?>
                                <select name="contract_id" id="contract_discount" class="form-control select2">
                                    <option value=""></option>
                                    <?php if(isset($group['contract'])&&!$contracts->contains('id',$group['contract_id'])): ?>
                                        <option value="<?php echo e($group['contract']['id']); ?>"><?php echo e($group['contract']['title']); ?> ( <?php echo e($contract['discount']); ?> % )</option>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($contract['id']); ?>" discount="<?php echo e($contract['discount']); ?>"><?php echo e($contract['title']); ?> ( <?php echo e($contract['discount']); ?> % )</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </td>
                            <td>
                                <button type="button" id="cancel_contract" class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo e(__('Discount')); ?></td>
                            <td>
                                <input type="number" id="discount" name="discount"  <?php if(isset($group)): ?> value="<?php echo e($group['discount']); ?>" <?php else: ?> value="0"  <?php endif; ?> readonly class="form-control">
                            </td>
                            <td>
                                <?php echo e(get_currency()); ?>

                            </td>
                        </tr>
                        
                        <tr>
                            <td><?php echo e(__('Total')); ?></td>
                            <td>
                                <input type="number" id="total" name="total" class="form-control" <?php if(isset($group)): ?> value="<?php echo e($group['total']); ?>" <?php else: ?> value="0"  <?php endif; ?>  readonly>
                            </td>
                            <td>
                                <?php echo e(get_currency()); ?>

                            </td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Paid')); ?></td>
                            <td>
                                <input type="number" id="paid" name="paid" min="0" class="form-control" <?php if(isset($group)): ?> value="<?php echo e($group['paid']); ?>" <?php else: ?> value="0"  <?php endif; ?>   required>
                            </td>
                            <td>
                                <?php echo e(get_currency()); ?>

                            </td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Due')); ?></td>
                            <td>
                                <input type="number" id="due" name="due" class="form-control" <?php if(isset($group)): ?> value="<?php echo e($group['due']); ?>" <?php else: ?> value="0"  <?php endif; ?>   readonly>
                            </td>
                            <td>
                                <?php echo e(get_currency()); ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
             </div>
         </div>  
    </div>
</div>
<!-- \Receipt -->


<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <button type="submit" class="btn btn-primary form-control"><?php echo e(__('Save')); ?></button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <a href="<?php echo e(route('admin.groups.index')); ?>" class="btn btn-danger form-control"><?php echo e(__('Cancel')); ?></a>
    </div>
</div>

<br>
<?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/groups/_form.blade.php ENDPATH**/ ?>