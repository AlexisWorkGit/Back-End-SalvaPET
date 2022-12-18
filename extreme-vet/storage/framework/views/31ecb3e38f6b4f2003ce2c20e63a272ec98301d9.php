

<?php $__env->startSection('content'); ?>
<style>
    .receipt_title td,th{
        border-color: white;
    }
    .receipt_title .total{
        background-color: #ddd;
    }
    .table th{
        color:<?php echo e($reports_settings['test_head']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['test_head']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['test_head']['font-family']); ?>!important;
    }
    .total{
        font-family:<?php echo e($reports_settings['test_head']['font-family']); ?>!important;
    }

    .due_date{
        font-family:<?php echo e($reports_settings['test_head']['font-family']); ?>!important;
    }

    .test_name{
        color:<?php echo e($reports_settings['test_name']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['test_name']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['test_name']['font-family']); ?>!important;
    }
   
</style>

<div class="invoice">
    
    <table width="100%" style="margin-bottom: 10px">
        <tbody>
            <tr>
                <td <?php if(session('rtl')): ?> align="right" <?php endif; ?>>
                        <b class="due_date">
                            <?php echo e(__('Due date')); ?> : <?php echo e(date('d-m-Y')); ?>

                        </b>
                    <br>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th colspan="2" width="85%"><?php echo e(__('Test Name')); ?></th>
                <th width="15%"><?php echo e(__('Price')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="2" class="print_title test_name">
                    <?php if(isset($test['test'])): ?> 
                        <?php echo e($test['test']['name']); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e($test['price']); ?> <?php echo e(get_currency()); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="2" class="print_title test_name">
                    <?php if(isset($culture['culture'])): ?>
                        <?php echo e($culture['culture']['name']); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e($culture['price']); ?> <?php echo e(get_currency()); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr class="receipt_title border-top">
                <td width="70%" class="no-right-border"></td>
                <td class="total">
                    <b><?php echo e(__('Subtotal')); ?></b>
                </td>
                <td class="total"><?php echo e($group['subtotal']); ?> <?php echo e(get_currency()); ?></td>
            </tr>

            <tr class="receipt_title">
                <td width="70%" class="no-right-border"></td>
                <td class="total">
                   <b>
                        <?php echo e(__('Discount')); ?>

                        <?php if(!empty($group['contract'])): ?> <br> 
                            ( <?php echo e($group['contract']['title']); ?> <?php echo e($group['contract']['discount']); ?>% ) 
                        <?php endif; ?>
                   </b>
                </td>
                <td class="total"><?php echo e($group['discount']); ?> <?php echo e(get_currency()); ?></td>
            </tr>

            <tr class="receipt_title">
                <td width="70%" class="no-right-border"></td>
                <td class="total">
                    <b><?php echo e(__('Total')); ?></b>
                </td>
                <td class="total"><?php echo e($group['total']); ?> <?php echo e(get_currency()); ?></td>
            </tr>

            <tr class="receipt_title">
                <td width="70%" class="no-right-border"></td>
                <td class="total">
                    <b>
                        <?php echo e(__('Paid')); ?>

                    </b>
                </td>
                <td class="total"><?php echo e($group['paid']); ?> <?php echo e(get_currency()); ?></td>
            </tr>

            <tr class="receipt_title">
                <td width="70%" class="no-right-border"></td>
                <td class="total">
                    <b><?php echo e(__('Due')); ?></b>
                </td>
                <td class="total"><?php echo e($group['due']); ?> <?php echo e(get_currency()); ?></td>
            </tr>

        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/pdf/receipt.blade.php ENDPATH**/ ?>