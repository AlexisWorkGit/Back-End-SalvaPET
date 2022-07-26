
<?php $__env->startSection('title'); ?>
<?php echo e(__('Send owner code')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<form action="<?php echo e(route('owner.auth.mail_submit')); ?>" method="post" class="validate-form">

    <span class="login100-form-title p-b-43">
        <?php echo e(__('Send owner code')); ?>

    </span>

    <div class="wrap-input100 validate-input <?php if($errors->has('email')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="text" name="email" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Email Or Phone')); ?></span>
    </div>
   

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            <?php echo e(__('Send')); ?>

        </button>
    </div>

</form>

<span class="login100-form-title p-b-20 p-t-20">
    <a href="<?php echo e(url('/')); ?>"> 
        <h5 class="d-inline">
            <i class="fas fa-sign-in-alt"></i> 
            <?php echo e(__('Login')); ?>

        </h5>
    </a>
</span>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/auth/owner/mail.blade.php ENDPATH**/ ?>