

<?php $__env->startSection('title'); ?>
<?php echo e(__('Invoices')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-layer-group"></i>
            <?php echo e(__('Invoices')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Groups')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title"><?php echo e(__('Invoices Table')); ?></h3>
      <a href="<?php echo e(route('admin.groups.create')); ?>" class="btn btn-primary btn-sm float-right">
       <i class="fa fa-plus"></i> <?php echo e(__('Create')); ?> 
      </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <!-- filter -->
      <div id="accordion">
        <div class="card card-info">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-primary collapsed" aria-expanded="false">
            <i class="fas fa-filter"></i> <?php echo e(__('Filters')); ?>

          </a>
          <div id="collapseOne" class="panel-collapse in collapse">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-lg-3">
                  <div class="form-group">
                     <label for="filter_date"><?php echo e(__('Date')); ?></label>
                     <input type="text" class="form-control datepickerrange" id="filter_date" placeholder="<?php echo e(__('Date')); ?>">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                     <label for="filter_status"><?php echo e(__('Status')); ?></label>
                     <select name="filter_status" id="filter_status" class="form-control select2">
                        <option value="" selected><?php echo e(__('All')); ?></option>
                        <option value="1"><?php echo e(__('Done')); ?></option>
                        <option value="0"><?php echo e(__('Pending')); ?></option>
                     </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                     <label for="filter_barcode"><?php echo e(__('Barcode')); ?></label>
                     <input type="text" class="form-control" id="filter_barcode" placeholder="<?php echo e(__('Barcode')); ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- \filter -->
      <div class="row">
         <div class="col-lg-12 table-responsive">
            <table id="groups_table" class="table table-striped table-hover table-bordered" width="100%">
               <thead>
               <tr>
                 <th width="10px">#</th>
                 <th width="10px"><?php echo e(__('Barcode')); ?></th>
                 <th width="100px"><?php echo e(__('Animal Code')); ?></th>
                 <th><?php echo e(__('Animal Name')); ?></th>
                 <th><?php echo e(__('Owner Code')); ?></th>
                 <th><?php echo e(__('Owner Name')); ?></th>
                 <th width="100px"><?php echo e(__('Subtotal')); ?></th>
                 <th width="100px"><?php echo e(__('Discount')); ?></th>
                 <th width="100px"><?php echo e(__('Total')); ?></th>
                 <th width="100px"><?php echo e(__('Paid')); ?></th>
                 <th width="100px"><?php echo e(__('Due')); ?></th>
                 <th width="100px"><?php echo e(__('Date')); ?></th>
                 <th width="10px"><?php echo e(__('Status')); ?></th>
                 <th width="50px"><?php echo e(__('Action')); ?></th>
               </tr>
               </thead>
               <tbody>
                 
               </tbody>
             </table>
         </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <?php echo $__env->make('admin.groups.modals.print_barcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
   <script src="<?php echo e(url('js/admin/groups.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/groups/index.blade.php ENDPATH**/ ?>