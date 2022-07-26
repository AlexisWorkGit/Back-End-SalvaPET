
<?php $__env->startSection('title'); ?>
  <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('owner.auth.login_submit')); ?>" method="post" class="validate-form">

    <span class="login100-form-title p-b-20 p-t-20">
        <?php echo e(__('Login owner')); ?>

    </span>
    
    <div class="wrap-input100 validate-input <?php if($errors->has('code')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="text" name="code" id="code" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Owner Code')); ?></span>
    </div>
   
    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1">
                <?php echo e(__('Remember Me')); ?>

            </label>
        </div>

        <div>
            <a href="<?php echo e(route('owner.auth.mail')); ?>" class="txt1">
                <?php echo e(__('Forgot Code ?')); ?>

            </a>
        </div>
    </div>

    <div class="container-login100-form-btn mb-10">
        <button class="login100-form-btn">
            <?php echo e(__('Login')); ?>

        </button>
    </div>

    <br>
    
    <span class="login100-form-title mt-10">
        <span class="h6"><?php echo e(__('New here ?')); ?></span> 
        <a href="<?php echo e(route('owner.auth.register')); ?>">
           <span class="h6"><?php echo e(__('Create Account')); ?></span> 
        </a>
    </span>
    
</form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/auth/owner/login.blade.php ENDPATH**/ ?>