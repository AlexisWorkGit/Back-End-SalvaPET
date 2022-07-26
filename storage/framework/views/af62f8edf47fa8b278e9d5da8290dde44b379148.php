

<?php $__env->startSection('title'); ?>
<?php echo e(__('Edit Translation')); ?>

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
                    <?php echo e(__('Edit Translation')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.translations.index')); ?>"><?php echo e(__('Translations')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Edit Translation')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <?php echo e(__('Edit Translation')); ?>

        </h3>
    </div>
    <form action="<?php echo e(route('admin.translations.update',$id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <!-- /.card-header -->
    <div class="card-body">
            <div class="col-lg-12  p-0">
                <table  class="table table-striped table-hover table-bordered"  width="100%">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Key Word')); ?></th>
                            <th><?php echo e(__('Translation')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($key); ?>

                                </td>
                                <td>
                                   <input type="text" name="trans[<?php echo e($key); ?>]" class="form-control" value="<?php echo e($value); ?>" required>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-check"></i> <?php echo e(__('Save')); ?>

        </button>
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/admin/translations.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/admin/translations/edit.blade.php ENDPATH**/ ?>