

<?php $__env->startSection('title'); ?>
<?php echo e(__('Invoice')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/print.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <?php echo e(__('Invoices')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.groups.index')); ?>"><?php echo e(__('Invoices')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Invoice')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <?php echo e(__('Invoice')); ?>

        </h3>
    </div>
    <!-- patient code -->
    <input type="hidden" name="patient_code" <?php if(isset($group['patient'])): ?> value="<?php echo e($group['patient']['code']); ?>" <?php endif; ?>
        id="patient_code">

    <div class="card-body">
        <div class="p-3 mb-3" id="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th colspan="3">
                                    <table width="100%" class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Animal code')); ?> :</span> <span
                                                        class="data"><?php if(isset($group['animal'])): ?>
                                                        <?php echo e($group['animal']['code']); ?> <?php endif; ?></span>
                                                </td>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Animal name')); ?> :</span> <span
                                                        class="data"> <?php if(isset($group['animal'])): ?>
                                                        <?php echo e($group['animal']['name']); ?> <?php endif; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Owner code')); ?> :</span> <span
                                                        class="data"><?php if(isset($group['animal'])&&isset($group['animal']['owner'])): ?>
                                                        <?php echo e($group['animal']['owner']['code']); ?> <?php endif; ?></span>
                                                </td>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Owner name')); ?> :</span> <span
                                                        class="data"> <?php if(isset($group['animal'])&&isset($group['animal']['owner'])): ?>
                                                        <?php echo e($group['animal']['owner']['name']); ?> <?php endif; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Age')); ?> :</span> <span
                                                        class="data"><?php if(isset($group['animal'])): ?>
                                                        <?php echo e($group['animal']['age']); ?> <?php endif; ?></span>

                                                </td>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Gender')); ?> :</span> <span
                                                        class="data"><?php if(isset($group['animal'])): ?>
                                                        <?php echo e($group['animal']['gender']); ?> <?php endif; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Doctor')); ?> :</span> <span
                                                        class="data"><?php if(isset($group['doctor'])): ?>
                                                        <?php echo e($group['doctor']['name']); ?> <?php endif; ?></span>
                                                </td>
                                                <td>
                                                    <span class="page_title"><?php echo e(__('Date')); ?> :</span> <span class="data">
                                                        <?php echo e(date('d-m-Y H:i',strtotime($group['created_at']))); ?></span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </th>

                            </tr>
                        </thead>

                    </table>

                </div>
                <!-- /.col -->
            </div>

            <br>

            <div class="row">
                <!-- /.col -->
                <div class="col-lg-12">
                    <p class="lead"><?php echo e(__('Due Date')); ?> : <?php echo e(date('d/m/Y',strtotime($group['created_at']))); ?></p>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%">
                            <thead class="btn-primary">
                                <tr>
                                    <th colspan="2" width="85%"><?php echo e(__('Test Name')); ?></th>
                                    <th width="15%"><?php echo e(__('Price')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="2" class="print_title">
                                        <?php if(isset($test['test'])): ?> 
                                            <?php echo e($test['test']['name']); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($test['price']); ?> <?php echo e(get_currency()); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                                <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="2" class="print_title">
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
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="card-footer">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <a href="<?php echo e($group['receipt_pdf']); ?>" class="btn btn-danger">
                    <i class="fa fa-file-pdf"></i> <?php echo e(__('Print receipt')); ?>

                </a>

                <a style="cursor: pointer" class="btn btn-warning print_barcode" data-toggle="modal" data-target="#print_barcode_modal" group_id="<?php echo e($group['id']); ?>">
                    <i class="fa fa-barcode" aria-hidden="true"></i>
                    <?php echo e(__('Print barcode')); ?>

                </a>

                <?php if($whatsapp['receipt']['active']&&isset($group['receipt_pdf'])): ?>
                    <?php 
                        $message=str_replace(['{owner_name}','{receipt_link}'],[$group['animal']['owner']['name'],$group['receipt_pdf']],$whatsapp['receipt']['message']);
                    ?>
                    <a target="_blank" href="https://wa.me/<?php echo e($group['animal']['owner']['phone']); ?>?text=<?php echo e($message); ?>" class="btn btn-success">
                        <i class="fab fa-whatsapp" aria-hidden="true" class="text-success"></i>
                        <?php echo e(__('Send Receipt')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.groups.modals.print_barcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/admin/groups.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/show.blade.php ENDPATH**/ ?>