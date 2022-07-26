

<?php $__env->startSection('title'); ?>
<?php echo e(__('Cultures Price List')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fa fa-list"></i>
                    <?php echo e(__('Cultures Price List')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Cultures Price List')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title"><?php echo e(__('Cultures Table')); ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <!-- Tool -->
        <div class="row">
            <div class="col-lg-12">
                <div id="accordion">
                    <div class="card card-info">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed" aria-expanded="false">
                            <i class="fas fa-file-excel"></i>
                            <?php echo e(__('Import / Export')); ?>

                        </a>
                        <div id="collapseOne" class="panel-collapse in collapse">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <a href="<?php echo e(route('admin.prices.cultures_prices_export')); ?>" class="btn btn-success">
                                            <i class="fa fa-file-excel"></i>
                                            <?php echo e(__('Export')); ?>

                                        </a>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- import form -->
                                        <form action="<?php echo e(route('admin.prices.cultures_prices_import')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="card card-primary">
                                                <div class="card-header">
                                                    <h5 class="card-title"><?php echo e(__('Import cultures')); ?></h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="import">
                                                        <label class="custom-file-label" for="exampleInputFile"><?php echo e(__('Choose file')); ?></label>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check"></i>
                                                    <?php echo e(__('Import')); ?>

                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                        <!-- /import form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- \Tool -->

        <div class="row">
            <div class="col-lg-12  p-0">
                <form method="POST" action="<?php echo e(route('admin.prices.cultures_submit')); ?>">
                <?php echo csrf_field(); ?>
                    <table id=""  class="table table-striped table-hover table-bordered datatable"  width="100%">
                        <thead>
                            <tr>
                                <th width="10px">#</th>
                                <th><?php echo e(__('Culture')); ?></th>
                                <th width="200px"><?php echo e(__('Price')); ?></th>
                            </tr>
                        </thead>
                        <!-- Analyses Prices Form -->
                    
                            <tbody>
                                <?php $__currentLoopData = $cultures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($culture['id']); ?></td>
                                        <td><?php echo e($culture['name']); ?></td>
                                        <td>
                                            <div class="input-group form-group mb-3">
                                                <input type="number" name="culture[<?php echo e($culture['id']); ?>]" class="form-control culture" value="<?php echo e($culture['price']); ?>" culture_id="<?php echo e($culture['id']); ?>" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">
                                                      <?php echo e(get_currency()); ?>

                                                  </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check"></i>  <?php echo e(__('Save')); ?>

                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        <!-- /Analyses Prices Form -->
                    </table>
                    <?php $__currentLoopData = $cultures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="culture[<?php echo e($culture['id']); ?>]" value="<?php echo e($culture['price']); ?>" id="culture_<?php echo e($culture['id']); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    (function($){
       
        "use strict";
        
        //active
        $('#prices').addClass('menu-open');
        $('#prices_link').addClass('active');
        $('#cultures_prices').addClass('active');

        //change hidden cultures
        $(document).on('input','.culture',function(){
            var culture_id=$(this).attr('culture_id');
            var price=$(this).val();
            $('#culture_'+culture_id).val(price);
        });

    })(jQuery);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/prices/cultures.blade.php ENDPATH**/ ?>