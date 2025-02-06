

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Post Details</h4>
                </div>

                <div class="card-body">
                    <h1 class="mb-4"><?php echo e($post->title); ?></h1>
                    <p class="lead"><?php echo e($post->description); ?></p>
                    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_sys\resources\views/posts/show.blade.php ENDPATH**/ ?>