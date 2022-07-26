

<?php $__env->startSection('title'); ?>
<?php echo e(__('Translation')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('plugins/swtich-netliva/css/netliva_switch.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fa fa-list"></i>
                    <?php echo e(__('Translation')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Translation')); ?></li>
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
            <?php echo e(__('Translation')); ?>

        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0 m-0">
        <div class="col-lg-12 p-0">
                <table id="" class="table table-striped table-hover table-bordered m-0"  width="100%">
                    <thead class="btn-primary">
                        <tr>
                            <th><?php echo e(__('Language')); ?></th>
                            <th width="10px" class="text-center"><?php echo e(__('Active')); ?></th>
                            <th width="10px" class="text-center"><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($lang['iso']); ?>

                                </td>
                                <td class="text-center">
                                    <?php if($lang['active']): ?>
                                        <input type="checkbox" class="change_lang_status" id="change_status_<?php echo e($lang['id']); ?>" lang-id='<?php echo e($lang['id']); ?>' checked netliva-switch data-active-text="<?php echo e(__('Active')); ?>" data-passive-text=" <?php echo e(__('Deactive')); ?>"/>
                                    <?php else: ?> 
                                        <input type="checkbox" class="change_lang_status" id="change_status_<?php echo e($lang['id']); ?>" lang-id='<?php echo e($lang['id']); ?>' netliva-switch data-active-text="<?php echo e(__('Active')); ?>" data-passive-text="<?php echo e(__('Deactive')); ?>"/>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.translations.edit',$lang['iso'])); ?>" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/admin/translations.js')); ?>"></script>
    <!-- Switch -->
    <script src="<?php echo e(url('plugins/swtich-netliva/js/netliva_switch.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/translations/index.blade.php ENDPATH**/ ?>