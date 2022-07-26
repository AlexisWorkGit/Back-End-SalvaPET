

<?php $__env->startSection('title'); ?>
<?php echo e(__('Tests Library')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="fa fa-book-medical"></i>
            <?php echo e(__('Tests Library')); ?>

          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Tests Library')); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-header">
      <ul class="nav nav-pills ml-auto p-2">
        <li class="nav-item"><a class="nav-link active" href="#tests" data-toggle="tab"><?php echo e(__('Tests')); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#cultures" data-toggle="tab"><?php echo e(__('Cultures')); ?></a></li>       
      </ul>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="tests">
          <div class="row">
            <div class="col-lg-12 table-responsive">
             <table id="analyses_table" class="table table-striped table-hover table-bordered">
               <thead>
                 <tr>
                   <th width="10px">#</th>
                   <th><?php echo e(__('Name')); ?></th>
                   <th><?php echo e(__('Shortcut')); ?></th>
                   <th><?php echo e(__('Sample Type')); ?></th>
                   <th><?php echo e(__('precautions')); ?></th>
                 </tr>
               </thead>
               <tbody>
                 
               </tbody>
             </table>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="cultures">
          <div class="row">
            <div class="col-lg-12 table-responsive">
             <table id="cultures_table" class="table table-striped table-hover table-bordered" width="100%">
               <thead>
                 <tr>
                   <th width="10px">#</th>
                   <th><?php echo e(__('Name')); ?></th>
                   <th><?php echo e(__('Sample Type')); ?></th>
                   <th><?php echo e(__('precautions')); ?></th>
                 </tr>
               </thead>
               <tbody>
                 
               </tbody>
             </table>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
      </div>
    </div>
    <!-- /.card-body -->
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/owner/tests_library.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/owner/tests_library/index.blade.php ENDPATH**/ ?>