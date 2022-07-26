<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo e(url('img/logo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e($info['name']); ?></span>
    </a>
    <!-- \Brand Logo -->

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo e(url('dist/img/LOGO.png')); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php if(Auth::guard('admin')->check()): ?>
                <?php echo e(Auth::guard('admin')->user()->name); ?>

              <?php else: ?>
                <?php echo e(Auth::guard('owner')->user()->name); ?><br>
                <?php echo e(__('Code')); ?>: <?php echo e(Auth::guard('owner')->user()->code); ?>

              <?php endif; ?>
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <!-- Admin sidebar -->
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
        <?php echo $__env->make('partials.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- \Admin sidebar -->
        <!-- Owner sidebar -->
        <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('owner')): ?>
          <?php echo $__env->make('partials.owner_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!-- \Owner sidebar -->
      <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>