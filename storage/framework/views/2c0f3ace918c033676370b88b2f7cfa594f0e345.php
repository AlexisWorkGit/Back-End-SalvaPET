<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="<?php echo e(route('owner.index')); ?>" class="nav-link" id="dashboard">
            <i class="nav-icon fas fa-th"></i>
            <p>
                <?php echo e(__('Dashboard')); ?>

            </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('owner.profile.edit')); ?>" class="nav-link" id="profile">
          <i class="nav-icon fas fa-user-circle"></i>
          <p>
            <?php echo e(__('Profile')); ?>

          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('owner.groups.index')); ?>" class="nav-link" id="groups">
          <i class="nav-icon fas fa-flask"></i>
          <p>
            <?php echo e(__('Reports')); ?>

          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('owner.tests_library.index')); ?>" class="nav-link" id="tests_library">
          <i class="fas fa-book-medical nav-icon"></i>
          <p>
            <?php echo e(__('Tests Library')); ?>

          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="<?php echo e(route('owner.visits.index')); ?>" class="nav-link" id="visits">
          <i class="nav-icon fas fa-home"></i>
          <p>
            <?php echo e(__('Home Visit')); ?>

          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('owner.branches.index')); ?>" class="nav-link" id="branches">
          <i class="fas fa-map-marked-alt nav-icon"></i>
          <p>
            <?php echo e(__('Our Branches')); ?>

          </p>
        </a>
      </li>
    </ul>
  </nav><?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/partials/owner_sidebar.blade.php ENDPATH**/ ?>