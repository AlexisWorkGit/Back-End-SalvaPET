

<?php $__env->startSection('title'); ?>
<?php echo e(__('Print Report')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
  <link rel="stylesheet" href="<?php echo e(url('css/print.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fa fa-flag"></i>
                    <?php echo e(__('Reports')); ?>

                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.reports.index')); ?>"><?php echo e(__('Reports')); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(__('Print Report')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('admin.reports.pdf',$group['id'])); ?>" id="print_form">
    <?php echo csrf_field(); ?>
    <!-- patient code -->
    <input type="hidden" id="patient_code" <?php if(isset($group['patient'])): ?> value="<?php echo e($group['patient']['code']); ?>" <?php endif; ?>>
    
    <div class="row mb-3">
        <div class="col-lg-6">
            <h6>
                <?php echo e(__('Select tests and cultures to be printed in the report')); ?>

            </h6>
        </div>
        <div class="col-lg-6">
          
            <button type="submit" class="btn btn-primary float-right d-inline">
                <i class="fa fa-print"></i>
                <?php echo e(__('Print')); ?>

            </button>

           
            <button type="button" class="btn btn-danger deselect_all float-right d-inline mr-2">
                <i class="fa fa-times-circle"></i>
                <?php echo e(__('Deselect all')); ?>

            </button>

            <button type="button" class="btn btn-success select_all float-right d-inline mr-2">
                <i class="fas fa-check-square"></i>
                <?php echo e(__('Select all')); ?>

            </button>

        </div>

        <div class="col-lg-12">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#patient_modal">
                <i class="fas fa-user-injured"></i> <?php echo e(__('Patient info')); ?>

            </button>
        </div>
    </div>

    <div class="row">
        <!-- Tests -->
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">

                    <div class="row">
                        <div class="col-lg-10">
                            <h3 class="card-title"><?php echo e(__('Tests')); ?></h3>
                        </div>
                       
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="accordion">
                        <div class="row">
                            <div class="col-lg-12 table-responsive">
                                <table width="100%">
                                    <tbody id="analysis_titles_sort">
                                        <?php if(!count($group['tests'])): ?>
                                        <tr class="nosort">
                                            <td class="text-center">
                                                <?php echo e(__('No data available')); ?>

                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="card card-primary card-outline collapsed-card" id="card_<?php echo e($test['id']); ?>">
        
                                                    <div class="card-header">
                                                        <h4 class="card-title">
                                                            <input type="checkbox" class="analyses_select" id="test_<?php echo e($test['id']); ?>" name="tests[]" value="<?php echo e($test['id']); ?>">
                                                            <?php if($test['done']): ?> 
                                                                <i class="fa fa-check text-success"></i>
                                                            <?php endif; ?>
                                                            <label for="test_<?php echo e($test['id']); ?>"><?php if(isset($test['test'])): ?> <?php echo e($test['test']["name"]); ?> <?php endif; ?></label>
                                                        </h4>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
        
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <td width="100%" colspan="5"  class="nosort analysis_title_row">
                                                                        <h5 class="text-center analysis_title">
                                                                            <?php if(isset($test['test'])): ?>
                                                                                <?php echo e($test['test']['name']); ?>

                                                                            <?php endif; ?>
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr  class="nosort transparent">
                                                                    <td width="100%" colspan="5" class="transparent"></td>
                                                                <tr>
                                                                <tr class="analysis_head">
                                                                    <th width="30%"><?php echo e(__('Test')); ?></th>
                                                                    <th width="17.5%" class="text-center"><?php echo e(__('Result')); ?></th>
                                                                    <th width="10%" class="text-center"><?php echo e(__('Unit')); ?></th>
                                                                    <th width="17.5%" class="text-center"><?php echo e(__('Normal Range')); ?></th>
                                                                    <th width="5%" class="text-center"><?php echo e(__('Status')); ?></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $__currentLoopData = $test["results"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(isset($result['component'])): ?>
                                                                        <!-- Title -->
                                                                        <?php if($result['component']['title']): ?>
                                                                            <tr>
                                                                                <td colspan="5" class="title">
                                                                                    <b><?php echo e($result['component']['name']); ?></b>
                                                                                </td>
                                                                            </tr>
                                                                        <?php else: ?>
                                                                        <tr>
                                                                            <td><?php echo e($result["component"]["name"]); ?></td>
                                                                            <td class="text-center"><?php echo e($result["result"]); ?></td>
                                                                            <td class="text-center"><?php echo e($result["component"]["unit"]); ?></td>
                                                                            <td class="text-center"><?php echo $result["component"]["reference_range"]; ?></td>
                                                                            <td class="text-center">
                                                                               <?php echo e($result["status"]); ?>

                                                                            </td>
                                                                        </tr>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(isset($test['comment'])): ?>
                                                                <tr>
                                                                    <td colspan="5">
                                                                        <table width="100%">
                                                                            <tbody>
                                                                                <tr class="comment">
                                                                                    <th width="90px"><?php echo e(__('Comment')); ?> :</th>
                                                                                    <td><?php echo e($test['comment']); ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>                                                                        
                                                                    </td>
                                                                </tr>
                                                                <?php endif; ?>
                                                            </tbody>
        
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                    </tbody>
        
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- \Tests -->

        <!-- Cultures -->
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">

                    <div class="row">
                        <div class="col-lg-10">
                            <h3 class="card-title"><?php echo e(__('Cultures')); ?></h3>
                        </div>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="accordion">
                        <div class="row">
                            <div class="col-lg-12 table-responsive">
                                <?php if(!count($group['cultures'])): ?>
                                    <p class="text-center">
                                        <?php echo e(__('No data available')); ?>

                                    </p>
                                <?php endif; ?>
                                <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card card-primary card-outline collapsed-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <input type="checkbox" class="analyses_select" id="culture_<?php echo e($culture['id']); ?>" name="cultures[]" value="<?php echo e($culture['id']); ?>">
                                            <?php if($culture['done']): ?> 
                                                <i class="fa fa-check text-success"></i>
                                            <?php endif; ?>
                                            <label for="culture_<?php echo e($culture['id']); ?>">
                                                <?php echo e($culture['culture']['name']); ?>

                                            </label>
                                        </div>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- culture options -->
                                        <table  width="100%">
                                            <tbody>
                                                <?php $__currentLoopData = $culture['culture_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(isset($culture_option['value'])&&isset($culture_option['culture_option'])): ?>
                                                        <tr>
                                                            <th class="no-border nowrap" width="10px" nowrap="nowrap">
                                                                <span class="option_title"><?php echo e($culture_option['culture_option']['value']); ?> :</span>
                                                            </th>
                                                            <td class="no-border">
                                                                <?php echo e($culture_option['value']); ?>

                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <!-- /culture options -->

                                        <!-- sensitivity -->
                                        <table class="table table-bordered" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Sensitivity</th>
                                                    <th>Commercial name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $culture['high_antibiotics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td width="200px" nowrap="nowrap" align="left">
                                                            <?php echo e($antibiotic['antibiotic']['name']); ?>

                                                        </td>
                                                        <td width="120px" nowrap="nowrap" align="center">
                                                            <?php echo e($antibiotic['sensitivity']); ?>

                                                        </td>
                                                        <td>
                                                            <?php echo e($antibiotic['antibiotic']['commercial_name']); ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php $__currentLoopData = $culture['moderate_antibiotics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td width="200px" nowrap="nowrap" align="left">
                                                            <?php echo e($antibiotic['antibiotic']['name']); ?>

                                                        </td>
                                                        <td width="120px" nowrap="nowrap" align="center">
                                                            <?php echo e($antibiotic['sensitivity']); ?>

                                                        </td>
                                                        <td>
                                                            <?php echo e($antibiotic['antibiotic']['commercial_name']); ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php $__currentLoopData = $culture['resident_antibiotics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td width="200px" nowrap="nowrap" align="left">
                                                        <?php echo e($antibiotic['antibiotic']['name']); ?>

                                                    </td>
                                                    <td width="120px" nowrap="nowrap" align="center">
                                                        <?php echo e($antibiotic['sensitivity']); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($antibiotic['antibiotic']['commercial_name']); ?>

                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>

                                        <!-- Comment -->
                                        <?php if(isset($culture['comment'])): ?>
                                        <table width="100%"  class="comment">
                                            <tbody>
                                                <tr>
                                                    <td width="100px" nowrap="nowrap"><b><?php echo e(__('Comment')); ?></b> :</td>
                                                    <td><?php echo e($culture['comment']); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>     
                                        <?php endif; ?>
                                        <!-- /comment -->
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                               
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- \Cultures -->
    </div>
</form>

<?php echo $__env->make('admin.reports._patient_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('js/admin/reports.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/reports/show.blade.php ENDPATH**/ ?>