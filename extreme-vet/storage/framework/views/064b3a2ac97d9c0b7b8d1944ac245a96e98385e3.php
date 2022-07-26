<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label><?php echo e(__('Name')); ?></label>
            <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Role Name')); ?>" <?php if(isset($role)): ?>
                value="<?php echo e($role['name']); ?>" <?php endif; ?> required>
        </div>
    </div>
</div>

<div class="row">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title">
                <?php echo e(__('Permissions')); ?>

            </h5>
            <button type="button" class="btn btn-danger btn-sm deselect_all_modules float-right">
                <i class="fa fa-times-circle"></i>
            </button>
    
            <button type="button" class="btn btn-primary btn-sm select_all_modules float-right mr-2">
                <i class="fa fa-check-square"></i>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title"><?php echo e($module['name']); ?></h5>
                            <button type="button" class="btn btn-danger btn-sm deselect_module float-right">
                                <i class="fa fa-times-circle"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-sm  select_module float-right mr-2">
                                <i class="fas fa-check-square"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <?php $__currentLoopData = $module['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="col-lg-9">
                                    <label for="<?php echo e($permission['key']); ?>"><?php echo e($permission['name']); ?></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="switch">
                                        <input type="checkbox" name="permissions[][permission_id]" value="<?php echo e($permission['id']); ?>"
                                            id="<?php echo e($permission['key']); ?>">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/roles/_form.blade.php ENDPATH**/ ?>