
<?php $__env->startSection('title'); ?>
  <?php echo e(__('Create Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('owner.auth.register_submit')); ?>" method="post" class="validate-form" id="register_form">

    <span class="login100-form-title p-b-20 p-t-20">
        <?php echo e(__('Create Account')); ?>

    </span>
    
    <div class="wrap-input100 validate-input <?php if($errors->has('name')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="text" name="name" value="<?php echo e(old('name')); ?>" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Name')); ?></span>
    </div>

    <div class="validate-input">
        <div class="row form-group">
            <h5 class="col-lg-3 col-md-3 col-sm-3">
                <?php echo e(__('Gender')); ?>

            </h5>
            <div class="col-lg-9 col-md-9 col-sm-9 d-inline">
                <input type="radio" name="gender" id="male" value="male" <?php if(old('gender')=='male'): ?> checked <?php endif; ?> required> <label for="male" class="d-inline"><?php echo e(__('Male')); ?></label><br>
                <input type="radio" name="gender" id="female" value="female" <?php if(old('gender')=='female'): ?> checked <?php endif; ?>  required> <label for="female" class="d-inline"><?php echo e(__('Female')); ?></label>
            </div>
        </div>
    </div>

    <div class="wrap-input100 validate-input <?php if($errors->has('phone')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="text" name="phone" value="<?php echo e(old('phone')); ?>" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Phone')); ?></span>
    </div>

    <div class="wrap-input100 validate-input <?php if($errors->has('email')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Email')); ?></span>
    </div>

    <div class="wrap-input100 validate-input <?php if($errors->has('address')): ?> error-validation <?php endif; ?>">
        <input class="input100" type="text" name="address" value="<?php echo e(old('address')); ?>">
        <span class="focus-input100"></span>
        <span class="label-input100"><?php echo e(__('Address')); ?></span>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            <?php echo e(__('Submit')); ?>

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

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('js/owner/register.js')); ?>"></script>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u997099361/domains/nacionalcode.org/public_html/veterinaria/extreme-vet/resources/views/auth/owner/register.blade.php ENDPATH**/ ?>