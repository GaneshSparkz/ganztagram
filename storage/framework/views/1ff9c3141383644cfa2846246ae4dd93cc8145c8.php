<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img src="/storage/<?php echo e($post->image); ?>" alt="Post" class="w-100" style="max-height: 600px; max-width: 600px;">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="pr-3"><a href="<?php echo e(route('profile.show', $post->user->id)); ?>"><img src="/storage/<?php echo e($post->user->profile->profile_pic); ?>" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                                <a href="<?php echo e(route('profile.show', $post->user->id)); ?>" class="special-link"><div class="font-weight-bold text-dark"> <?php echo e($post->user->username); ?></div></a>
                                <?php if($post->user->id == auth()->user()->id): ?>
                                <?php else: ?>
                                    <img src="/svg/dot.png" style="max-height: 14px;">
                                    <div><follow-link user-id="<?php echo e($post->user->id); ?>" follows="<?php echo e($follows); ?>"></follow-link></div>
                                <?php endif; ?>
                            </div>
                            <hr>
                            <div class="d-flex pt-3">
                                <div class="pr-3"><a href="<?php echo e(route('profile.show', $post->user->id)); ?>"><img src="/storage/<?php echo e($post->user->profile->profile_pic); ?>" alt="DP" class="rounded-circle" style="max-height: 35px;"></a></div>
                                <span><a href="<?php echo e(route('profile.show', $post->user->id)); ?>" class="special-link"><span class="font-weight-bold text-dark"><?php echo e($post->user->username); ?></span></a> <?php echo e($post->caption); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ganztagram\resources\views/posts/show.blade.php ENDPATH**/ ?>