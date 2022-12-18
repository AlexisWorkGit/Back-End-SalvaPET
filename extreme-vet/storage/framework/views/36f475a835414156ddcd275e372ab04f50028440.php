

<?php $__env->startSection('title'); ?>
<?php echo e(__('Create home visit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('plugins/datetimepicker/css/jquery.datetimepicker.min.css')); ?>">  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fa fa-home"></i>
                    <?php echo e(__('Home visits')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.visits.index')); ?>"><?php echo e(__('Home visits')); ?></a>
                    </li>
                    <li class="breadcrumb-item active"><?php echo e(__('Create home visit')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?php echo e(__('Create home visit')); ?></h3>
    </div>
    <!-- /.card-header -->
    <form method="POST" action="<?php echo e(route('admin.visits.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="col-lg-12">
                <?php echo $__env->make('admin.visits._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i>  <?php echo e(__('Save')); ?>

                </button>
            </div>
        </div>
    </form>
    <!-- /.card-body -->
</div>

<?php echo $__env->make('admin.visits.modals.animal_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.visits.modals.owner_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('plugins/datetimepicker/js/jquery.datetimepicker.full.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($api_keys['google_map']); ?>&callback=initMap&libraries=&v=weekly" defer></script>
    <script src="<?php echo e(url('js/admin/visits.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/visits/create.blade.php ENDPATH**/ ?>