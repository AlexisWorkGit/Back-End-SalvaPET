<div class="row">
    <div class="col-lg-3">
      <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input type="text" class="form-control" name="name" id="name" <?php if(isset($test)): ?> value="<?php echo e($test->name); ?>" <?php endif; ?> required>
      </div> 
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label for="shortcut"><?php echo e(__('Shortcut')); ?></label>
        <input type="text" class="form-control" name="shortcut" id="shortcut" <?php if(isset($test)): ?> value="<?php echo e($test->shortcut); ?>" <?php endif; ?> required>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label for="sample_type"><?php echo e(__('Sample Type')); ?></label>
        <input type="text" class="form-control" name="sample_type" id="sample_type" <?php if(isset($test)): ?> value="<?php echo e($test->sample_type); ?>" <?php endif; ?> required>
      </div>
    </div>
    <div class="col-lg-3">
       <div class="form-group">
            <label for="price"><?php echo e(__('Price')); ?></label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="price" min="0" id="price" <?php if(isset($test)): ?> value="<?php echo e($test->price); ?>" <?php endif; ?> required>
                <div class="input-group-append">
                <span class="input-group-text">
                    <?php echo e(get_currency()); ?>

                </span>
                </div>
            </div>
       </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
             <label for="precautions"><?php echo e(__('Precautions')); ?></label>
             <textarea name="precautions" id="precautions" rows="3" class="form-control" placeholder="<?php echo e(__('Precautions')); ?>"><?php if(isset($test)): ?><?php echo e($test['precautions']); ?><?php endif; ?></textarea>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><?php echo e(__('Test Components')); ?></h3>
                <ul class="list-style-none">
                    <li class="d-inline float-right">
                        <button type="button" class="btn btn-primary btn-sm add_component">
                            <i class="fa fa-plus"></i>
                            <?php echo e(__('Component')); ?>

                        </button>
                    </li>
                    <li class="d-inline float-right mr-1">
                        <button type="button" class="btn btn-primary btn-sm  add_title">
                            <i class="fa fa-plus"></i>
                            <?php echo e(__('Title')); ?>

                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: auto">
                        <table class="table table-striped table-bordered table-hover components" width="100%">
                            <thead class="btn-primary">
                                <th width="200px"><?php echo e(__('Name')); ?></th>
                                <th width="100px"><?php echo e(__('Unit')); ?></th>
                                <th width="200px"><?php echo e(__('Result')); ?></th>
                                <th width="200px"><?php echo e(__('Reference Range')); ?></th>
                                <th width="150px" class="text-center"><?php echo e(__('Separated')); ?></th>
                                <th width="10px" class="text-center"><?php echo e(__('status')); ?></th>
                                <th width="10px"></th>
                            </thead>
                            <tbody class="items">
                                <?php 
                                  $count=0;
                                ?>
                                <?php if(isset($test)): ?>
                                    <?php $__currentLoopData = $test['components']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php 
                                            $count++;
                                        ?>
                                        <tr num="<?php echo e($count); ?>" test_id="<?php echo e($component['id']); ?>">
                                            <?php if($component['title']): ?>
                                                <td colspan="6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="component[<?php echo e($count); ?>][title]" value="true">
                                                        <input type="hidden" name="component[<?php echo e($count); ?>][id]" value="<?php echo e($component['id']); ?>">
                                                        <input type="text" class="form-control" name="component[<?php echo e($count); ?>][name]" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($component['name']); ?>" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger delete_row">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            <?php else: ?>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="hidden" name="component[<?php echo e($count); ?>][id]" value="<?php echo e($component['id']); ?>">
                                                        <input type="text" class="form-control" name="component[<?php echo e($count); ?>][name]" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($component['name']); ?>" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="component[<?php echo e($count); ?>][unit]" placeholder="<?php echo e(__('Unit')); ?>" value="<?php echo e($component['unit']); ?>" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="p-0 list-style-none">
                                                        <li>
                                                            <input class="select_type" value="text" type="radio" name="component[<?php echo e($count); ?>][type]" id="text_<?php echo e($count); ?>" <?php if($component['type']=='text'): ?> checked <?php endif; ?> required> <label for="text_<?php echo e($count); ?>"><?php echo e(__('Text')); ?></label>
                                                        </li>
                                                        <li>
                                                            <input class="select_type" value="select" type="radio" name="component[<?php echo e($count); ?>][type]" id="select_<?php echo e($count); ?>" <?php if($component['type']=='select'): ?> checked <?php endif; ?> required> <label for="select_<?php echo e($count); ?>"><?php echo e(__('Select')); ?></label>
                                                        </li>
                                                    </ul>
                                                    <div class="options">
                                                        <?php if($component['type']=='select'): ?>
                                                        <table width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo e(__('Option')); ?></th>
                                                                    <th width="10px" class="text-center">
                                                                        <button type="button" class="btn btn-primary btn-sm add_option">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </head>
                                                            <tbody>
                                                            <?php $__currentLoopData = $component['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr option_id="<?php echo e($option['id']); ?>">
                                                                    <td>
                                                                        <input type="text" name="component[<?php echo e($count); ?>][old_options][<?php echo e($option['id']); ?>]" value="<?php echo e($option['name']); ?>" class="form-control" required>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-danger btn-sm text-center delete_option">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="component[<?php echo e($count); ?>][reference_range]" placeholder="<?php echo e(__('Reference Range')); ?>"><?php echo $component['reference_range']; ?></textarea>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="check_separated" num="<?php echo e($count); ?>" type="checkbox" name="component[<?php echo e($count); ?>][separated]" <?php if($component['separated']): ?> checked <?php endif; ?>>
                                                    <div class="component_price">
                                                        <?php if($component['separated']): ?>
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <h5 class="card-title">
                                                                <?php echo e(__('Price')); ?>

                                                                </h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="input-group form-group mb-3">
                                                                    <input type="number" class="form-control" name="component[<?php echo e($count); ?>][price]" value="<?php echo e($component['price']); ?>" min="0" class="price" required>
                                                                    <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <?php echo e(get_currency()); ?>

                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input  type="checkbox" name="component[<?php echo e($count); ?>][status]" <?php if($component['status']): ?> checked <?php endif; ?>>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger delete_row">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<input type="hidden" name="" id="count" value="<?php echo e($count); ?>"> 
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/tests/_form.blade.php ENDPATH**/ ?>