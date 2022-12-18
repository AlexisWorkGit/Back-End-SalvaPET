
<?php $__env->startSection('content'); ?>
<style>
    .test_title{
        font-size: 20px;
        background-color: #dddddd;
        border: 1px solid black!important;
    }
    .beak-page{
        page-break-inside: avoid;
    }
    .subtitle{
        font-size: 15px;
    }
   .comment{
       margin-top: 20px;
    }
   
   .test{
       /* page-break-inside: avoid; */
       margin-top: 20px;
    }
    .transparent{
        border-color: white;
    }
    .transparent th{
        border-color: white;
    }
    .test_head td,th{
        border: 1px solid #dee2e6;
    }
    .no-border{
        border-color: white;
    }
    .sensitivity{
        margin-top: 20px;
    }
    .test_title{
        color:<?php echo e($reports_settings['test_title']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['test_title']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['test_title']['font-family']); ?>!important;
    }
    .test_name{
        color:<?php echo e($reports_settings['test_name']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['test_name']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['test_name']['font-family']); ?>!important;
    }
    .test_head th{
        color:<?php echo e($reports_settings['test_head']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['test_head']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['test_head']['font-family']); ?>!important;
    }
    .unit{
        color:<?php echo e($reports_settings['unit']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['unit']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['unit']['font-family']); ?>!important;
    }
    .reference_range{
        color:<?php echo e($reports_settings['reference_range']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['reference_range']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['reference_range']['font-family']); ?>!important;
    }
    .result{
        color:<?php echo e($reports_settings['result']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['result']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['result']['font-family']); ?>!important;
    }
    .status{
        color:<?php echo e($reports_settings['status']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['status']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['status']['font-family']); ?>!important;
    }
    .comment th,.comment td{
        color:<?php echo e($reports_settings['comment']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['comment']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['comment']['font-family']); ?>!important;
    }
    .antibiotic_name{
        color:<?php echo e($reports_settings['antibiotic_name']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['antibiotic_name']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['antibiotic_name']['font-family']); ?>!important;
    }
    .sensitivity{
        color:<?php echo e($reports_settings['sensitivity']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['sensitivity']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['sensitivity']['font-family']); ?>!important;
    }
    .commercial_name{
        color:<?php echo e($reports_settings['commercial_name']['color']); ?>!important;
        font-size:<?php echo e($reports_settings['commercial_name']['font-size']); ?>!important;
        font-family:<?php echo e($reports_settings['commercial_name']['font-family']); ?>!important;
    }
</style>
<div class="printable">
    <?php 
        $count=0;
    ?>
    <?php if(count($group['tests'])): ?>
        <?php $__currentLoopData = $group['tests']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
                $count++;
            ?>
        <table class="table test">
            <thead>
                <tr>
                    <th  class="test_title" align="center" colspan="5">
                        <h5><?php echo e($test['test']['name']); ?></h5>
                    </th>
                </tr>
                <tr class="transparent">
                    <th colspan="5"></th>
                </tr>
                <tr class="test_head">
                    <th width="30%" class="text-left">Test</th>
                    <th width="17.5%">Result</th>
                    <th width="17.5%">Unit</th>
                    <th width="17.5%">Normal Range</th>
                    <th width="17.5%">Status</th>
                </tr>
            </thead>
            <tbody class="table-bordered">
                <?php $__currentLoopData = $test["results"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Title -->
                    <?php if(isset($result['component'])): ?>
                        <?php if($result['component']['title']): ?>
                            <tr>
                                <td colspan="5" class="component_title test_name">
                                    <b><?php echo e($result['component']['name']); ?></b>
                                </td>
                            </tr>
                        <?php else: ?>
                        <tr>
                            <td class="text-captitalize test_name"><?php echo e($result["component"]["name"]); ?></td>
                            <td align="center" class="result"><?php echo e($result["result"]); ?></td>
                            <td align="center" class="unit"><?php echo e($result["component"]["unit"]); ?></td>
                            <td align="center" class="reference_range"><?php echo $result["component"]["reference_range"]; ?></td>
                            <td align="center" class="status">
                                <?php echo e($result['status']); ?>

                            </td>
                        </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Comment -->
                <?php if(isset($test['comment'])): ?>
                    <tr class="comment">
                        <td colspan="5">
                            <b>Comment :</b>
                            <?php echo e($test['comment']); ?>

                        </td>
                    </tr>
                <?php endif; ?> 
                <!-- /comment -->
            </tbody>
        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php $__currentLoopData = $group['cultures']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php 
        $count++;
    ?>
    <?php if($count>1): ?>
    <pagebreak>
    <?php endif; ?>
        <!-- culture title -->
        <h5 class="test_title" align="center">
            <?php echo e($culture['culture']['name']); ?>

        </h5>
        <!-- /culture title -->

        <!-- culture options -->
        <table class="table" width="100%">
            <tbody>
                <?php $__currentLoopData = $culture['culture_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $culture_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($culture_option['value'])&&isset($culture_option['culture_option'])): ?>
                        <tr>
                            <th class="no-border test_name" width="10px" nowrap="nowrap" align="left">
                                <span class="option_title"><?php echo e($culture_option['culture_option']['value']); ?> :</span>
                            </th>
                            <td class="no-border result">
                                <?php echo e($culture_option['value']); ?>

                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <!-- /culture options -->

        <!-- sensitivity -->
        <table class="table table-bordered sensitivity" width="100%">
            <thead class="test_head">
                <tr>
                    <th align="left">Name</th>
                    <th align="center">Sensitivity</th>
                    <th align="left">Commercial name</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $culture['high_antibiotics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $antibiotic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td width="200px" nowrap="nowrap" align="left" class="antibiotic_name">
                            <?php echo e($antibiotic['antibiotic']['name']); ?>

                        </td>
                        <td width="120px" nowrap="nowrap" align="center" class="sensitivity">
                            <?php echo e($antibiotic['sensitivity']); ?>

                        </td>
                        <td class="commercial_name">
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
                    <td width="10px" nowrap="nowrap no-border"><b>Comment</b> :</td>
                    <td><?php echo e($culture['comment']); ?></td>
                </tr>
            </tbody>
        </table>     
        <?php endif; ?>
        <!-- /comment -->
    <?php if($count>1): ?>
    </pagebreak>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/pdf/report.blade.php ENDPATH**/ ?>