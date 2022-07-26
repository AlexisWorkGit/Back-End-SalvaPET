<div class="card-body">
    <div class="row">
        <div class="col-lg-12">
           <div class="form-group">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input type="text" name="name" id="name" class="form-control" <?php if(isset($option)): ?> value="<?php echo e($option['value']); ?>" <?php endif; ?> required>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-title">
                        <?php echo e(__('Options')); ?>

                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Option')); ?></th>
                                        <th width="10px">
                                            <button type="button" class="btn btn-sm btn-primary add_option">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $count=0;
                                    ?>
                                    <?php if(isset($option)): ?>
                                        <?php $__currentLoopData = $option['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $count=$child['id'];
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="text" name="old_option[<?php echo e($child['id']); ?>]" id="" placeholder="<?php echo e(__('Option name')); ?>" value="<?php echo e($child['value']); ?>" class="form-control" required>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm delete_row" option_id="<?php echo e($child['id']); ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <input type="hidden" name="" id="count_options" value="<?php echo e($count); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/culture_options/_form.blade.php ENDPATH**/ ?>