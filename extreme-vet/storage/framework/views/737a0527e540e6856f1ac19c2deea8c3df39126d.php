<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="<?php echo e(route('admin.index')); ?>" class="nav-link" id="dashboard">
            <i class="nav-icon fas fa-th"></i>
            <p>
                <?php echo e(__('Dashboard')); ?>

            </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('admin.profile.edit')); ?>" class="nav-link" id="profile">
            <i class="nav-icon fas fa-user-circle"></i>
            <p>
                <?php echo e(__('Profile')); ?>

            </p>
        </a>
      </li>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_group')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.groups.index')); ?>" class="nav-link" id="groups">
          <i class="nav-icon fas fa-layer-group"></i>
          <p>
            <?php echo e(__('Invoices')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_report')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.reports.index')); ?>" class="nav-link" id="reports">
          <i class="nav-icon fas fa-flag"></i>
          <p>
            <?php echo e(__('Reports')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_branch')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.branches.index')); ?>" class="nav-link" id="branches">
            <i class="fas fa-map-marked-alt nav-icon"></i>
            <p><?php echo e(__('Branches')); ?></p>
          </a>
        </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_test')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.tests.index')); ?>" class="nav-link" id="tests">
          <i class="nav-icon fas fa-flask"></i>
          <p>
            <?php echo e(__('Tests')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_culture')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.cultures.index')); ?>" class="nav-link" id="cultures">
          <i class="nav-icon fas fa-vial"></i>
          <p>
            <?php echo e(__('Cultures')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_culture_option')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.culture_options.index')); ?>" class="nav-link" id="culture_options">
          <i class="nav-icon fas fa-vial"></i>
          <p>
            <?php echo e(__('Culture options')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_antibiotic')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.antibiotics.index')); ?>" class="nav-link" id="antibiotics">
          <i class="nav-icon fas fa-capsules"></i>
          <p>
            <?php echo e(__('Antibiotics')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_doctor')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.doctors.index')); ?>" class="nav-link" id="doctors">
          <i class="nav-icon fa fa-user-md"></i>
          <p>
            <?php echo e(__('Doctors')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['view_test_prices','view_culture_prices'])): ?>
        <li class="nav-item has-treeview" id="prices">
          <a href="#" class="nav-link" id="prices_link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              <?php echo e(__('Price List')); ?>

              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_test_prices')): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('admin.prices.tests')); ?>" class="nav-link" id="tests_prices">
                <i class="far fa-circle nav-icon"></i>
                <p><?php echo e(__('Tests')); ?></p>
              </a>
            </li>
            <?php endif; ?>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_culture_prices')): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('admin.prices.cultures')); ?>" class="nav-link" id="cultures_prices">
                <i class="far fa-circle nav-icon"></i>
                <p><?php echo e(__('Cultures')); ?></p>
              </a>
            </li>
            <?php endif; ?>
          
          </ul>
        </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_contract')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.contracts.index')); ?>" class="nav-link" id="contracts">
          <i class="fas fa-file-contract nav-icon"></i>
          <p><?php echo e(__('Contracts')); ?></p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_owner')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.owners.index')); ?>" class="nav-link" id="owners">
          <i class="nav-icon fas fa-id-card-alt"></i>
          <p>
            <?php echo e(__('Animal owners')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_animal')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.animals.index')); ?>" class="nav-link" id="animals">
          <i class="nav-icon fas fa-paw"></i>
          <p>
            <?php echo e(__('Animals')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_visit')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.visits.index')); ?>" class="nav-link" id="visits">
          <i class="nav-icon fas fa-home"></i>
          <p>
            <?php echo e(__('Home Visits')); ?>

          </p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_chat')): ?>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.chat.index')); ?>" class="nav-link" id="chat">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                <?php echo e(__('Chat')); ?>

              </p>
            </a>
          </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['view_accounting_reports','view_expense','view_expense_category'])): ?>
      <li class="nav-item has-treeview" id="accounting">
        <a href="#" class="nav-link" id="accounting_link">
          <i class="nav-icon fas fa-calculator"></i>
          <p>
            <?php echo e(__('Accounting')); ?>

            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_expense_category')): ?>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.expense_categories.index')); ?>" class="nav-link" id="expense_categories">
              <i class="far fa-circle nav-icon"></i>
              <p>
                <?php echo e(__('Expense Categories')); ?>

              </p>
            </a>
          </li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_expense')): ?>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.expenses.index')); ?>" class="nav-link" id="expenses">
              <i class="far fa-circle nav-icon"></i>
              <p>
                <?php echo e(__('Expenses')); ?>

              </p>
            </a>
          </li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_accounting_reports')): ?>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.accounting.index')); ?>" class="nav-link" id="accounting_reports">
              <i class="far fa-circle nav-icon"></i>
              <p>
                <?php echo e(__('Accounting Report')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.accounting.doctor_report')); ?>" class="nav-link" id="accounting_doctor_reports">
              <i class="far fa-circle nav-icon"></i>
              <p>
                <?php echo e(__('Doctor report')); ?>

              </p>
            </a>
          </li>
          <?php endif; ?>

        </ul>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['view_user','view_role'])): ?>
        <li class="nav-item has-treeview" id="users_roles">
          <a href="#" class="nav-link" id="users_roles_link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              <?php echo e(__('Roles And Users')); ?>

              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_role')): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('admin.roles.index')); ?>" class="nav-link" id="roles">
                <i class="far fa-circle nav-icon"></i>
                <p><?php echo e(__('Roles')); ?></p>
              </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_user')): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link" id="users">
                <i class="far fa-circle nav-icon"></i>
                <p><?php echo e(__('Users')); ?></p>
              </a>
            </li>
            <?php endif; ?>

          </ul>
        </li>
      <?php endif; ?>
      
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_setting')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.settings.index')); ?>" class="nav-link" id="settings">
          <i class="fa fa-cogs nav-icon"></i>
          <p><?php echo e(__('Settings')); ?></p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_translation')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.translations.index')); ?>" class="nav-link" id="translations">
          <i class="fa fa-book nav-icon"></i>
          <p><?php echo e(__('Translations')); ?></p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_activity_log')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.activity_logs.index')); ?>" class="nav-link" id="activity_logs">
          <i class="fa fa-server nav-icon"></i>
          <p><?php echo e(__('Activity Logs')); ?></p>
        </a>
      </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_backup')): ?>
      <li class="nav-item">
        <a href="<?php echo e(route('admin.backups.index')); ?>" class="nav-link" id="backups">
          <i class="fa fa-database nav-icon"></i>
          <p><?php echo e(__('Database Backups')); ?></p>
        </a>
      </li>
      <?php endif; ?>


    </ul>
  </nav><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/partials/admin_sidebar.blade.php ENDPATH**/ ?>