<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="<?php echo e(__('Name')); ?>" name="name" value="<?php echo e(auth()->guard('admin')->user()->name); ?>" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <input type="email" class="form-control" placeholder="<?php echo e(__('Email Address')); ?>" name="email" value="<?php echo e(auth()->guard('admin')->user()->email); ?>"  required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
              </span>
            </div>
            <input type="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>" name="password" id="password">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
              </span>
            </div>
            <input type="password" class="form-control" placeholder="<?php echo e(__('Password Confirmation')); ?>" name="password_confirmation" id="password_confirmation">
        </div>
    </div>
</div>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sign_report')): ?>
<div class="row">
    <div class="col-lg-10">
            
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                      <i class="fas fa-signature" aria-hidden="true"></i>
                </span>
              </div>
            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" id="exampleInputFile" name="signature">
                <label class="custom-file-label" for="exampleInputFile"><?php echo e(__('Choose your signature')); ?></label>
            </div>
        </div>
            
    </div>
    <div class="col-lg-2">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title" style="text-align: center!important;float: unset;">
                    <?php echo e(__('Signature')); ?>

                </h5>
            </div>
            <div class="card-body p-1">
                <img class="img-thumbnail" src="<?php if(!empty(auth()->guard('admin')->user()->signature)): ?><?php echo e(url('uploads/signature/'.auth()->guard('admin')->user()->signature)); ?> <?php else: ?> <?php echo e(url('img/no-image.png')); ?> <?php endif; ?>" alt="<?php echo e(__('Signature')); ?>">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\veterinaria\extreme-vet\resources\views/admin/profile/_form.blade.php ENDPATH**/ ?>