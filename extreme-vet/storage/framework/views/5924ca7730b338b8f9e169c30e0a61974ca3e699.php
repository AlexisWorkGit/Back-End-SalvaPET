<div id="accordion">
    <div class="card card-info">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed"
            aria-expanded="false">
            <i class="fas fa-filter"></i> <?php echo e(__('Filters')); ?>

        </a>
        <div id="collapseOne" class="panel-collapse in collapse show">
            <div class="card-body">
                <form method="get" action="<?php echo e(route('admin.accounting.generate_report')); ?>">
                    <div class="row">

                        <!-- date range -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label><?php echo e(__('Date range')); ?>:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" name="date" class="form-control float-right datepickerrange"
                                    <?php if(request()->has('date')): ?> value="<?php echo e(request()->get('date')); ?>" <?php endif; ?> id="date"
                                required>
                            </div>
                        </div>
                        <!-- \date range -->

                        <!-- doctors -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="form-group">
                                <label><?php echo e(__('Doctor')); ?></label>
                                <select class="form-control" name="doctors[]" id="doctor" multiple>
                                    <?php if(isset($doctors)): ?>
                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($doctor['id']); ?>" selected><?php echo e($doctor['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <!-- \doctors -->

                        <!-- tests -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="form-group">
                                <label><?php echo e(__('Test')); ?></label>
                                <select class="form-control" name="tests[]" id="test" multiple>
                                    <?php if(isset($tests)): ?>
                                    <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($test['id']); ?>" selected><?php echo e($test['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <!-- \tests -->

                        <!-- cultures -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="form-group">
                                <label><?php echo e(__('Culture')); ?></label>
                                <select class="form-control" name="cultures[]" id="culture" multiple>
                                    <?php if(isset($cultures)): ?>
                                    <?php $__currentLoopData = $cultures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($culture['id']); ?>" selected><?php echo e($culture['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <!-- \cultures -->

                        <!-- Show in report -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for=""><?php echo e(__('Show Details')); ?></label>
                            <ul class="pl-0" style="list-style-type: none">
                                <li>
                                    <input type="checkbox" name="show_groups" id="show_groups"
                                        <?php if(request()->has('show_groups')): ?> checked <?php endif; ?>>
                                    <label for="show_groups"><?php echo e(__('Show Group tests')); ?></label>
                                </li>
                                <li>
                                    <input type="checkbox" name="show_expenses" id="show_expenses"
                                        <?php if(request()->has('show_expenses')): ?> checked <?php endif; ?>>
                                    <label for="show_expenses"><?php echo e(__('Show Expenses')); ?></label>
                                </li>
                                <li>
                                    <input type="checkbox" name="show_profit" id="show_profit"
                                        <?php if(request()->has('show_profit')): ?> checked <?php endif; ?>>
                                    <label for="show_profit"><?php echo e(__('Show Profit')); ?></label>
                                </li>
                            </ul>
                        </div>
                        <!-- \Show in report -->

                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 d-flex align-items-center">
                            <button type="submit" class="btn btn-primary form-control">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/_filter_form.blade.php ENDPATH**/ ?>