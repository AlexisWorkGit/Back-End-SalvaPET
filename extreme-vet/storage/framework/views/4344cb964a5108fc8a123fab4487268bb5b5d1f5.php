

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Doctor report')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          <i class="nav-icon fas fa-calculator"></i>
          <?php echo e(__('Accounting')); ?>

        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item active"><?php echo e(__('Doctor report')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
  <!-- card-header -->
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Doctor report')); ?></h3>
  </div>
  <!-- /.card-header -->
  <!-- card-body -->
  <div class="card-body">

    <!-- Filtering Form -->
    <?php echo $__env->make('admin.accounting._doctor_filter_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Filtering Form -->

    <?php if(request()->has('date')||request()->has('doctors')||request()->has('tests')||request()->has('cultures')): ?>
    <div class="printable">
      <div class="row">
        <div class="col-12 text-center mt-3 mb-3">
          <h3><?php echo e(__('Accounting Report')); ?></h3>
          <h5><?php echo e(__('Doctor')); ?> : <?php echo e($doctor['name']); ?></h5>
          <h6 class="text-center"><?php echo e(__('Due Date')); ?>: <?php echo e(date('d-m-Y')); ?></h6>
          <p>
            <b><?php echo e(__('From')); ?></b> 
            <?php echo e(date('d-m-Y',strtotime($from))); ?> 
            <b><?php echo e(__('To')); ?></b>
            <?php echo e(date('d-m-Y',strtotime($to))); ?> 
          </p>
        </div>
      </div>

      <!-- Report Details -->
      <?php if(request()->has('show_groups')): ?>
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Group Tests')); ?></h5>
          <div class="card-tools no-print">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-bordered datatable">
            <thead>
              <tr>
                <th><?php echo e(__('Date')); ?></th>
                <th><?php echo e(__('Patient Name')); ?></th>
                <th><?php echo e(__('Tests')); ?></th>
                <th><?php echo e(__('Subtotal')); ?></th>
                <th><?php echo e(__('Discount')); ?></th>
                <th><?php echo e(__('Total')); ?></th>
                <th><?php echo e(__('Paid')); ?></th>
                <th><?php echo e(__('Due')); ?></th>
                <th><?php echo e(__('Commission')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <?php echo e($group['created_at']); ?>

                </td>
                <td>
                  <?php if(isset($group['patient'])): ?>
                  <?php echo e($group['patient']['name']); ?>

                  <?php endif; ?>
                </td>
                <td>
                  <ul class="p-2">
                    <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($test['test']['name']); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($culture['culture']['name']); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </td>
                <td><?php echo e(formated_price($group['subtotal'])); ?></td>
                <td><?php echo e(formated_price($group['discount'])); ?></td>
                <td><?php echo e(formated_price($group['total'])); ?></td>
                <td><?php echo e(formated_price($group['paid'])); ?></td>
                <td><?php echo e(formated_price($group['due'])); ?></td>
                <td><?php echo e(formated_price($group['doctor_commission'])); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php endif; ?>
      <!-- \Report Details -->

      <!-- Payments Details -->
      <?php if(request()->has('show_payments')): ?>
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Payments')); ?></h5>
          <div class="card-tools no-print">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-bordered datatable">
            <thead>
              <tr>
                <th><?php echo e(__('Date')); ?></th>
                <th><?php echo e(__('Amount')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(date('d-m-Y',strtotime($payment['date']))); ?></td>
                <td><?php echo e(formated_price($payment['amount'])); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php endif; ?>
      <!-- \Payments Details -->

      <!--  Report Summary  -->
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Accounting Report Summary')); ?></h5>
          <div class="card-tools no-print">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover table-stripped">
            <tbody>
              <tr>
                <th width="100px"><?php echo e(__('Total')); ?>:</th>
                <td><?php echo e(formated_price($total)); ?></td>
              </tr>
              <tr>
                <th width="100px"><?php echo e(__('Paid')); ?>:</th>
                <td><?php echo e(formated_price($paid)); ?></td>
              </tr>
              <tr>
                <th width="100px"><?php echo e(__('Due')); ?>:</th>
                <td><?php echo e(formated_price($due)); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- \ Report Summary-->
    </div>
    <?php endif; ?>
  </div>
  <!-- /.card-body -->

  <!-- card-footer -->
  <?php if(isset($pdf)): ?>
  <div class="card-footer">
    <a href="<?php echo e($pdf); ?>" class="btn btn-danger">
       <i class="fas fa-file-pdf"></i> <?php echo e(__('PDF')); ?>

    </a>
  </div>
  <?php endif; ?>
  <!-- /.card-footer -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(url('js/admin/accounting_doctor.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/accounting/doctor_report.blade.php ENDPATH**/ ?>