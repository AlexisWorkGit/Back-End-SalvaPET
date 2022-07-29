

<?php $__env->startSection('title'); ?>
  <?php echo e(__('Dashboard')); ?>

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
            <i class="nav-icon fas fa-th"></i>
            <?php echo e(__('Dashboard')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><?php echo e(__('Dashboard')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>

<!-- Admin Reports -->
<div class="row">
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($tests_count); ?></h3>
          <p><?php echo e(__('Tests')); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-flask"></i>
        </div>
        <a href="<?php echo e(route('admin.tests.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($cultures_count); ?></h3>
          <p><?php echo e(__('Cultures')); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-vial"></i>
        </div>
        <a href="<?php echo e(route('admin.cultures.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($antibiotics_count); ?></h3>
          <p><?php echo e(__('Antibiotics')); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-capsules"></i>
        </div>
        <a href="<?php echo e(route('admin.antibiotics.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($owners_count); ?></h3>
          <p><?php echo e(__('Animal owners')); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-id-card-alt"></i>
        </div>
        <a href="<?php echo e(route('admin.owners.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($animals_count); ?></h3>
          <p><?php echo e(__('Animals')); ?></p>
        </div>
        <div class="icon">
          <i class="fas fa-paw"></i>
        </div>
        <a href="<?php echo e(route('admin.animals.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-2 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo e($visits_count); ?></h3>
          <p><?php echo e(__('Home visits')); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-home"></i>
        </div>
        <a href="<?php echo e(route('admin.visits.index')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- today statistics -->
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Today income amount')); ?></span>
          <span class="info-box-number"><?php echo e($today_paid); ?> <?php echo e(get_currency()); ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Today expense amount')); ?></span>
          <span class="info-box-number"><?php echo e($today_total_expense); ?> <?php echo e(get_currency()); ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success color-palette">
        <span class="info-box-icon">
          <i class="fas fa-money-bill-wave"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Today profit amount')); ?></span>
          <span class="info-box-number"><?php echo e($today_profit); ?> <?php echo e(get_currency()); ?></span>
        </div>
      </div>
    </div>
    <!-- /today statistics -->

    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Tests')); ?></span>
          <span class="info-box-number"><?php echo e($group_tests_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning">
        <span class="info-box-icon"><i class="fa fa-pause-circle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Pending Tests')); ?></span>
          <span class="info-box-number"><?php echo e($pending_tests_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="fa fa-check-double"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Completed Tests')); ?></span>
          <span class="info-box-number"><?php echo e($done_tests_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-info">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Cultures')); ?></span>
          <span class="info-box-number"><?php echo e($group_cultures_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-warning">
        <span class="info-box-icon"><i class="fa fa-pause-circle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Pending Culltures')); ?></span>
          <span class="info-box-number"><?php echo e($pending_cultures_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="fa fa-check-double"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo e(__('Completed Cultures')); ?></span>
          <span class="info-box-number"><?php echo e($done_cultures_count); ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>
  <!-- /.row -->
<!-- /Admin Reports -->

<div class="row">
  <!-- Today scheduled visits -->
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_visit')): ?>
  <div class="col-lg-12 table-responsive">
      <div class="card card-info">
        <div class="card-header">
          <h5 class="card-title">
            <i class="fas fa-bell"></i> <?php echo e(__('Today scheduled home visits')); ?>  ( <?php echo e(count($today_visits)); ?> )
          </h5>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          <?php if(count($today_visits)): ?>
          <table class="table table-bordered table-striped datatable-no-buttons">
            <thead>
              <tr>
                 <th><?php echo e(__('Animal')); ?></th>
                 <th><?php echo e(__('Owner name')); ?></th>
                 <th><?php echo e(__('Phone')); ?></th>
                 <th><?php echo e(__('Address')); ?></th>
                 <th width="10px" class="text-center"><?php echo e(__('Status')); ?></th>
                 <th width="10px" class="text-center"><?php echo e(__('Viewed')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $today_visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <?php if(isset($visit['animal'])): ?>
                    <?php echo e($visit['animal']['name']); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if(isset($visit['animal']['owner'])): ?>
                    <?php echo e($visit['animal']['owner']['name']); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if(isset($visit['animal']['owner'])): ?>
                    <?php echo e($visit['animal']['owner']['phone']); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if(isset($visit['animal']['owner'])): ?>
                    <?php echo e($visit['animal']['owner']['address']); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <?php if($visit['status']): ?>
                    <input type="checkbox" id="change_status_<?php echo e($visit['id']); ?>" visit-id="<?php echo e($visit['id']); ?>" checked netliva-switch data-active-text="<?php echo e(__('Completed')); ?>" data-passive-text=" <?php echo e(__('Pending visit')); ?>"/>
                  <?php else: ?> 
                    <input type="checkbox" id="change_status_<?php echo e($visit['id']); ?>" visit-id="<?php echo e($visit['id']); ?>" netliva-switch data-active-text="<?php echo e(__('Completed')); ?>" data-passive-text=" <?php echo e(__('Pending visit')); ?>"/>
                  <?php endif; ?>
                </td>
                <td class="text-center">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_visit')): ?>
                    <a href="<?php echo e(route('admin.visits.show',$visit['id'])); ?>" class="btn btn-danger btn-sm">
                      <i class="fa fa-eye"></i>
                    </a>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           
          </table>
          <?php else: ?> 
            <p class="text-danger text-center"><?php echo e(__('No data available')); ?></p>
          <?php endif; ?>
        </div>
      </div>
       
  </div>
  <?php endif; ?>
  <!-- /Today scheduled visits -->

  <!-- Online Users -->
  <div class="col-lg-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-wifi"></i> <?php echo e(__('Online users')); ?> ( <span class="online_count">0</span> )</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body pt-0 pb-0">
        <ul class="products-list product-list-in-card pl-2 pr-2 online_list">
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- \Online Users -->
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <!-- Switch -->
  <script src="<?php echo e(url('plugins/swtich-netliva/js/netliva_switch.js')); ?>"></script>
  <script src="<?php echo e(url('js/admin/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/index.blade.php ENDPATH**/ ?>