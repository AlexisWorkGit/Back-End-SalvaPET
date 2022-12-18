
<!-- Modal patient information -->
<div class="modal fade" id="patient_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Patient info')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="p-0 list-style-none">
                    <li>
                        <h6>
                            <b><?php echo e(__('Name')); ?> : </b> <?php echo e($group['animal']['name']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Gender')); ?> : </b> <?php echo e(__($group['animal']['gender'])); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Date of birth')); ?> : </b> <?php echo e($group['animal']['dob']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Age')); ?> : </b> <?php echo e($group['animal']['age']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Owner name')); ?> : </b> <?php echo e($group['animal']['owner']['name']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Phone')); ?> : </b> <?php echo e($group['animal']['owner']['phone']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Email')); ?> : </b> <?php echo e($group['animal']['owner']['email']); ?>

                        </h6>
                    </li>
                    <li>
                        <h6>
                            <b><?php echo e(__('Address')); ?> : </b> <?php echo e($group['animal']['owner']['address']); ?>

                        </h6>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- \Modal patient information -->
<?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/reports/_patient_modal.blade.php ENDPATH**/ ?>