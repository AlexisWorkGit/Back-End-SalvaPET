
<?php $__env->startSection('title'); ?>
  <?php echo e(__('Chat')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
  <link rel="stylesheet" href="<?php echo e(url('css/plugins.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('css/chat.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden"  id="current_user" value="<?php echo e(auth()->guard('admin')->user()['id']); ?>">
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="chat-system">
            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
            <div class="user-list-box">
                <div class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>">
                </div>
                <div class="people ps ps--active-y">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="person" data-chat="person<?php echo e($user['id']); ?>" user-id="<?php echo e($user['id']); ?>">
                      <div class="user-info">
                          <div class="f-head">
                              <img src="<?php echo e(url('img/user-profile.png')); ?>" alt="avatar">
                          </div>
                          <div class="f-body">
                              <div class="meta-info">
                                  <span class="user-name" data-name="<?php echo e($user['name']); ?>"><?php echo e($user['name']); ?></span>
                                  <span class="badge badge-danger float-right user_unread_count" user-id="<?php echo e($user['id']); ?>"></span>
                              </div>
                              <span class="preview">
                                  <?php if(\Cache::has('user-'.$user['id'])): ?>
                                      <i class="fas fa-circle text-success"></i> <?php echo e(__('Online')); ?>

                                  <?php else: ?> 
                                      <i class="fas fa-circle text-danger"></i> <?php echo e(__('Offline')); ?>

                                  <?php endif; ?>
                              </span>
                          </div>
                      </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 478px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 218px;"></div></div></div>
            </div>
            <div class="chat-box">
                <div class="chat-not-selected">
                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><?php echo e(__('Click User To Chat')); ?></p>
                </div>
                <div class="chat-box-inner">
                    <div class="chat-meta-user">
                        <div class="current-chat-user-name"><span><img src="assets/img/90x90.jpg" alt="dynamic-image"><span class="name"></span></span></div>
                    </div>
                    <div class="chat-conversation-box">
                        <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="chat" data-chat="person<?php echo e($user['id']); ?>" id="chat_<?php echo e($user['id']); ?>" user-id="user_<?php echo e($user['id']); ?>">
                                
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="chat-footer">
                        <div class="chat-input">
                            <form class="chat-form" action="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <input type="text" class="mail-write-box form-control" placeholder="<?php echo e(__('Message')); ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(url('js/admin/chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\extreme-vet\resources\views/admin/chat/index.blade.php ENDPATH**/ ?>