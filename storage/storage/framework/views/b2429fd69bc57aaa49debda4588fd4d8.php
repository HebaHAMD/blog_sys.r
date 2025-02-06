

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Posts</h1>
        <div class="text-center mb-4">
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success btn-lg">Create New Post</a>
        </div>
        
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <div class="card shadow-sm rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-primary"><?php echo e($post->title); ?></h4>
                            <p class="card-text text-muted"><?php echo e(\Str::limit($post->description, 100)); ?></p>
                            
                            <!-- Buttons aligned to the left with increased space between them -->
                            <div class="d-flex justify-content-start">
                                <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-info mr-3">View</a> <!-- Adjusted margin -->
                                
                                <?php if(Auth::id() == $post->user_id): ?>
                                    <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning mr-3">Edit</a> <!-- Adjusted margin -->
                                    
                                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger ml-3">Delete</button> <!-- Added left margin to delete button -->
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_sys\resources\views/posts/index.blade.php ENDPATH**/ ?>