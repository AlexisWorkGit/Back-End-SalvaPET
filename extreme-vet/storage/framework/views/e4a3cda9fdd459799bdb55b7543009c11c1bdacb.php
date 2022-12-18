

<?php $__env->startSection('title'); ?>
<?php echo e(__('Edit Report')); ?>

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
          <li class="breadcrumb-item active"><?php echo e(__('Edit Report')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_report')): ?>
<div class="row">
  <div class="col-lg-12">

    <a href="<?php echo e(route('admin.reports.show',$group['id'])); ?>" class="btn btn-danger float-right mb-3">
      <i class="fa fa-file-pdf"></i> <?php echo e(__('Print Report')); ?>

    </a>

    <button type="button" class="btn btn-info float-right mb-3 mr-1" data-toggle="modal" data-target="#patient_modal">
      <i class="fas fa-user-injured"></i> <?php echo e(__('Patient info')); ?>

    </button>

  </div>
</div>
<?php endif; ?>

<!-- tests -->
<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Tests')); ?></h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <?php if(count($group['tests'])): ?>
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="taps">
          <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="nav-item">
            <a class="nav-link text-capitalize" href="#test_<?php echo e($test['id']); ?>" data-toggle="tab"><?php if($test['done']): ?> <i class="fa fa-check text-success"></i> <?php endif; ?> <?php echo e($test['test']['name']); ?></a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="tab-pane overflow-auto" id="test_<?php echo e($test['id']); ?>">
            <form action="<?php echo e(route('admin.reports.update',$test['id'])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <table class="table table-hover table-bordered">
                <thead>
                  <th><?php echo e(__('Name')); ?></th>
                  <th width="100px"><?php echo e(__('Unit')); ?></th>
                  <th width="300px"><?php echo e(__('Reference Range')); ?></th>
                  <th width="300px"><?php echo e(__('Result')); ?></th>
                  <th style="width:200px"><?php echo e(__('Status')); ?></th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $test['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($result['component'])): ?>
                      <?php if($result['component']['title']): ?>
                        <tr>
                          <td colspan="5">
                            <b><?php echo e($result['component']['name']); ?></b>
                          </td>
                        </tr>
                      <?php else: ?>
                        <tr>
                          <td><?php echo e($result['component']['name']); ?></td>
                          <td><?php echo e($result['component']['unit']); ?></td>
                          <td><?php echo $result['component']['reference_range']; ?></td>
                          <td>
                            <?php if($result['component']['type']=='text'): ?>
                              <input type="text" name="result[<?php echo e($result['id']); ?>][result]" class="form-control"
                              value="<?php echo e($result['result']); ?>">
                            <?php else: ?>
                              <select name="result[<?php echo e($result['id']); ?>][result]" id="" class="form-control select_result">
                                <option value="" value="" disabled selected><?php echo e(__('Select result')); ?></option>
                                <?php $__currentLoopData = $result['component']['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($option['name']); ?>" <?php if($option['name']==$result['result']): ?> selected <?php endif; ?>><?php echo e($option['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- Deleted option -->
                                <?php if(!$result['component']['options']->contains('name',$result['result'])): ?>
                                  <option value="<?php echo e($result['result']); ?>" selected><?php echo e($result['result']); ?></option>
                                <?php endif; ?>
                                <!-- \Deleted option -->
                              </select>
                            <?php endif; ?>
                          </td>
                          <td style="width:10px" class="text-center">
                            <?php if($result['component']['status']): ?>
                              <select name="result[<?php echo e($result['id']); ?>][status]" class="form-control select_result">
                                <option value="" value="" disabled selected><?php echo e(__('Select status')); ?></option>
                                <option value="High" <?php if($result['status']=='High'): ?> selected <?php endif; ?>><?php echo e(__('High')); ?></option>
                                <option value="Normal" <?php if($result['status']=='Normal'): ?> selected <?php endif; ?>><?php echo e(__('Normal')); ?></option>
                                <option value="Low" <?php if($result['status']=='Low'): ?> selected <?php endif; ?>><?php echo e(__('Low')); ?></option>
                                <!-- New status -->
                                <?php if(!empty($result['status'])&&!in_array($result['status'],['High','Normal','Low'])): ?>
                                  <option value="<?php echo e($result['status']); ?>" selected><?php echo e($result['status']); ?></option>
                                <?php endif; ?>
                                <!-- \New status -->
                              </select>
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endif; ?>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td colspan="5">
                      <textarea name="comment" id="" cols="30" rows="3" placeholder="<?php echo e(__('Comment')); ?>" class="form-control"><?php echo e($test['comment']); ?></textarea>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5">
                      <button class="btn btn-primary"><i class="fa fa-check"></i> <?php echo e(__('Save')); ?></button>
                    </td>
                  </tr>
                </tfoot>
              </table>

            </form>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <?php else: ?> 
     <!-- check  tests selected -->
       <h6 class="text-center">
          <?php echo e(__('No data available')); ?>

       </h6>
      <!-- End check  tests selected -->
    <?php endif; ?>
   
  </div>
  <!-- /.card-body -->
</div>
<!-- End tests -->

<!-- Cultures -->
<?php
  $antibiotic_count=0; 
?>
<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title"><?php echo e(__('Cultures')); ?></h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    <?php if(count($group['cultures'])): ?>
      <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
          <ul class="nav nav-tabs" id="taps">
            <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="#culture_<?php echo e($culture['id']); ?>" data-toggle="tab"><?php if($culture['done']): ?> <i class="fa fa-check text-success"></i> <?php endif; ?> <?php echo e($culture['culture']['name']); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tab-pane" id="culture_<?php echo e($culture['id']); ?>">
              <form method="POST" action="<?php echo e(route('admin.reports.update_culture',$culture['id'])); ?>" class="culture_form">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <?php $__currentLoopData = $culture['culture_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if(isset($culture_option['culture_option'])): ?>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="culture_option_<?php echo e($culture_option['id']); ?>"><?php echo e($culture_option['culture_option']['value']); ?></label>
                            <select class="form-control select2" name="culture_options[<?php echo e($culture_option['id']); ?>]" id="culture_option_<?php echo e($culture_option['id']); ?>">
                              <option value="" selected><?php echo e(__('none')); ?></option>
                              <?php $__currentLoopData = $culture_option['culture_option']['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($option['value']); ?>" <?php if($option['value']==$culture_option['value']): ?> selected <?php endif; ?>)><?php echo e($option['value']); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                      <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="row">
                  <div class="col-lg-12 overflow-auto">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th width=""><?php echo e(__('Antibiotic')); ?></th>
                            <th width="200px"><?php echo e(__('Sensitivity')); ?></th>
                            <th width="20px">
                              <button type="button" class="btn btn-primary btn-sm"
                                onclick="add_antibiotic('<?php echo e($select_antibiotics); ?>',this)">
                                <i class="fa fa-plus"></i>
                              </button>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="antibiotics">
                          <?php $__currentLoopData = $culture['antibiotics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                              $antibiotic_count++; 
                            ?>
                          <tr>
                            <td>
                              <select class="form-control antibiotic" name="antibiotic[<?php echo e($antibiotic_count); ?>][antibiotic]" required>
                                <option value="" disabled selected><?php echo e(__('Select Antibiotic')); ?></option>
                                <?php $__currentLoopData = $select_antibiotics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select_antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($select_antibiotic['id']); ?>"
                                  <?php if($select_antibiotic['id']==$antibiotic['antibiotic_id']): ?> selected <?php endif; ?>>
                                  <?php echo e($select_antibiotic['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="antibiotic[<?php echo e($antibiotic_count); ?>][sensitivity]" required>
                                <option value="" disabled selected><?php echo e(__('Select Sensitivity')); ?></option>
                                <option value="<?php echo e(__('High')); ?>" <?php if($antibiotic['sensitivity']==__('High')): ?> selected <?php endif; ?>><?php echo e(__('High')); ?>

                                </option>
                                <option value="<?php echo e(__('Moderate')); ?>" <?php if($antibiotic['sensitivity']==__('Moderate')): ?> selected <?php endif; ?>><?php echo e(__('Moderate')); ?>

                                </option>
                                <option value="<?php echo e(__('Resident')); ?>" <?php if($antibiotic['sensitivity']==__('Resident')): ?> selected <?php endif; ?>><?php echo e(__('Resident')); ?>

                                </option>
                              </select>
                            </td>
                            <td>
                              <button type="button" class="btn btn-danger btn-sm delete_row">
                                <i class="fa fa-trash"></i>
                              </button>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="3">
                              <label for="culture_comment_<?php echo e($culture['id']); ?>"><?php echo e(__('Comment')); ?></label>
                              <textarea class="form-control" name="comment" id="" cols="30" rows="3"><?php echo e($culture['comment']); ?></textarea>
                            </td>
                         </tr>
                          <tr>
                            <td colspan="3">
                              <button class="btn btn-primary"><i class="fa fa-check"></i> <?php echo e(__('Save')); ?></button>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                  </div>
                </div>
              </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /.tab-pane -->
          </div>
        </div>
      </div>
    <?php else: ?> 
      <!-- Check Cultures Selected -->
      <h6 class="text-center">
        <?php echo e(__('No data available')); ?>

      </h6>
      <!-- End Check Cultures Selected -->
    <?php endif; ?>
  </div>
</div>

<!-- antibiotic count -->
<input type="hidden" id="antibiotic_count" value="<?php echo e($antibiotic_count); ?>">

<!-- End Cultures-->

<?php echo $__env->make('admin.reports._patient_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(url('js/admin/reports.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/reports/edit.blade.php ENDPATH**/ ?>