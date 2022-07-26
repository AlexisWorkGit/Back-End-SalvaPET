<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item dropdown text-uppercase">
        <button class="btn btn-primary btn-sm dropdown-toggle text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-globe"></i>  <?php echo e(app()->getLocale()); ?>

        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 0px">
          <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(app()->getLocale()!=$lang['iso']): ?> <a class="dropdown-item"  href="<?php echo e(route('change_locale',$lang['iso'])); ?>"><?php echo e($lang['iso']); ?></a> <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </li>
 
    </ul>
    <!-- \Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_visit')): ?>
      <!-- home visits notification -->
      <li class="nav-item dropdown visits_notification">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge visits_count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><span class="visits_count">0</span> <?php echo e(__('New home visits')); ?></span>
          <div class="dropdown-divider"></div>
          <div class="list_visits">
            
          </div>
        </div>
      </li>
      <!-- \home visits notification -->
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_chat')): ?>
      <!--  messages notifications -->
        <li class="nav-item dropdown show messages_notification">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge unread_messages_count">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <span class="dropdown-item dropdown-header"><span class="unread_messages_count">0</span> <?php echo e(__('New messages')); ?></span>
            <div class="dropdown-divider"></div>
            <div class="list_unread_messages">

            </div>
          </div>
        </li>
      <!--  \messages notifications -->
      <?php endif; ?>

      <!--  logout  -->
      <li class="nav-item">
        
        <button type="button" class="btn btn-danger btn-sm"  role="button" onclick="document.getElementById('sign_out').submit();">
          <i class="fas fa-sign-out-alt"></i>
        </button>
        <form id="sign_out" method="POST" action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('admin.logout')); ?><?php else: ?><?php echo e(route('owner.logout')); ?><?php endif; ?>">
          <?php echo csrf_field(); ?>
        </form>
      </li>
      <!--  \logout  -->
    </ul>
    <!-- \Right navbar links -->

  </nav><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/partials/nav.blade.php ENDPATH**/ ?>