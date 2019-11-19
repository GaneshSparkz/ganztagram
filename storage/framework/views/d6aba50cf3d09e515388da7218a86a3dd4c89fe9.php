<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row justify-content-center pt-4 pb-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-3"><a href="<?php echo e(route('profile.show', $post->user->id)); ?>"><img src="/storage/<?php echo e($post->user->profile->profile_pic); ?>" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                            <a href="<?php echo e(route('profile.show', $post->user->id)); ?>" class="special-link"><div class="font-weight-bold text-dark"> <?php echo e($post->user->username); ?></div></a>
                        </div>
                    </div>
                    <a href="<?php echo e(route('posts.show', $post->id)); ?>"><img src="/storage/<?php echo e($post->image); ?>" alt="Post" class="w-100"></a>
                    <div class="card-footer">
                        <div class="d-flex pt-3">
                            <div class="pr-3"><a href="<?php echo e(route('profile.show', $post->user->id)); ?>"><img src="/storage/<?php echo e($post->user->profile->profile_pic); ?>" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                            <span><a href="<?php echo e(route('profile.show', $post->user->id)); ?>" class="special-link"><span class="font-weight-bold text-dark"><?php echo e($post->user->username); ?></span></a> <?php echo e($post->caption); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row pt-4">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ganztagram\resources\views/posts/index.blade.php ENDPATH**/ ?>