

<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
       <h3><?php echo e($post->title); ?></h3>
       <p><?php echo e($post->description); ?></p>
       <p><b><?php echo e($post->price); ?>$</b></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel7-crud\resources\views/posts/show.blade.php ENDPATH**/ ?>