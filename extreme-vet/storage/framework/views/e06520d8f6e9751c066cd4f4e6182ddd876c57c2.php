
<?php $__env->startSection('title'); ?>
  <?php echo e(__('Login Admin Panel')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('admin.auth.login_submit')); ?>" method="post" class="validate-form">

    <span class="login100-form-title p-b-43">
        <?php echo e(__('Login Admin')); ?>

    </span>
    
    <div class="wrap-input100 validate-input <?php if($errors->has('email')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Email')); ?></span>
    </div>
    
    
    <div class="wrap-input100 validate-input <?php if($errors->has('password')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="password" name="password" id="password" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Password')); ?></span>
    </div>

    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1">
                <?php echo e(__('Remember Me')); ?>

            </label>
        </div>

        <div>
            <a href="<?php echo e(route('admin.reset.mail')); ?>" class="txt1">
                <?php echo e(__('Forgot Password?')); ?>

            </a>
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
            <?php echo e(__('Login')); ?>

        </button>
    </div>


</form>

<span class="login100-form-title p-b-30 p-t-30">
    <a href="<?php echo e(url('/')); ?>"> 
        <h5 class="d-inline">
            <i class="fas fa-id-card-alt"></i> 
            <?php echo e(__('Login owner')); ?>

        </h5>
    </a>
</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/auth/admin/login.blade.php ENDPATH**/ ?>