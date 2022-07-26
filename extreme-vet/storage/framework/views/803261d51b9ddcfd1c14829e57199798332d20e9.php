

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Our Branches')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fas fa-map-marked-alt nav-icon"></i>
            <?php echo e(__('Our Branches')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('owner.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Our Branches')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">
                    <?php echo e($branch['name']); ?>

                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h6>
                            <i class="fas fa-phone-alt"></i> 
                            <a href="tel:<?php echo e($branch['phone']); ?>">
                                <?php echo e($branch['phone']); ?>

                            </a>
                        </h6>
                        <h6>
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="http://maps.google.com/maps?q=<?php echo e($branch['lat']); ?>,<?php echo e($branch['lng']); ?>">
                             <?php echo e($branch['address']); ?>

                            </a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="http://maps.google.com/maps?q=<?php echo e($branch['lat']); ?>,<?php echo e($branch['lng']); ?>" class="btn btn-primary">
                  <i class="fas fa-map-marker-alt"></i>  <?php echo e(__('View On Map')); ?>

                </a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/owner/branches.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/owner/branches/index.blade.php ENDPATH**/ ?>