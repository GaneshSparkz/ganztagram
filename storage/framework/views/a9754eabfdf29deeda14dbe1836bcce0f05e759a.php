<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('posts.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Create New Post</h1>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="image" class="file-upload__label">Upload Image</label>
                        <input id="image" class="file-upload__input" type="file" name="image">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label"><strong>Caption</strong></label>
                        <textarea
                        id="caption"
                        class="form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        name="caption"
                        value="<?php echo e(old('caption')); ?>"
                        autocomplete="caption" autofocus></textarea>

                        <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-primary" type="submit">Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ganztagram\resources\views/posts/create.blade.php ENDPATH**/ ?>