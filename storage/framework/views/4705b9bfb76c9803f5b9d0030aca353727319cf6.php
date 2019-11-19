<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row profile-top">
            <div class="col-3 p-5">
                <img src="/storage/<?php echo e($user->profile->profile_pic); ?>" alt="DP" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5 pl-5">
                <div class="d-flex justify-content-between align-items-center pl-3 pb-3 username">
                    <div class="d-flex align-items-center">
                        <?php echo e($user->username); ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <?php else: ?>
                            <follow-button user-id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></follow-button>
                        <?php endif; ?>
                    </div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <a href="<?php echo e(route('profile.edit', $user->id)); ?>" class="btn btn-outline-secondary" role="button">Edit Profile</a>
                        <a href="<?php echo e(route('posts.create')); ?>"><img src="/svg/addposticon.png" alt="Add New Post" style="max-height: 40px;"></a>
                    <?php endif; ?>
                </div>
                <div class="d-flex pl-3">
                    <div class="pr-5"><strong><?php echo e($user->posts->count()); ?></strong> posts</div>
                    <div class="pr-5"><strong><?php echo e($user->profile->followers->count()); ?></strong> followers</div>
                    <div class="pr-5"><strong><?php echo e($user->following->count()); ?></strong> following</div>
                </div>
                <div class="pt-4 pl-3" style="font-size: 16px;"><strong><?php echo e($user->profile->title); ?></strong></div>
                <div class="pl-3" style="font-size: 16px;">
                    <?php echo e($user->profile->bio); ?>

                </div>
                <div class="pl-3" style="font-size: 16px;">
                    <a href="<?php echo e($user->profile->website); ?>">
                        <strong><?php echo e($user->profile->website); ?></strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-5 pl-5 pr-5">
            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4 pb-4">
                    <a href="<?php echo e(route('posts.show', $post->id)); ?>">
                        <img alt="<?php echo e($post->caption); ?>"
                        decoding="auto"
                        width="293"
                        height="293"
                        src="/storage/<?php echo e($post->image); ?>"
                        style="object-fit: cover;">
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ganztagram\resources\views/profiles/index.blade.php ENDPATH**/ ?>