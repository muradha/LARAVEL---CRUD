

<?php $__env->startSection('title', 'Tambah Data'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-6 mx-auto">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('posts.store')); ?>">
     <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="post-title">Nama barang</label>
            <input type="text" name="title" 
                   value="<?php echo e(old('title')); ?>" class="form-control" id="post-title">
        </div>
        <div class="form-group">
            <label for="post-description">Deskripsi barang</label>
            <textarea name="description" class="form-control" id="post-description" rows="3"><?php echo e(old('description')); ?></textarea>
        </div>
        <div class="form-group">
            <label for="post-price">Harga</label>
            <input type="text" name="price" 
                   value="<?php echo e(old('price')); ?>" class="form-control" id="post-price">
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel7-crud\resources\views/posts/create.blade.php ENDPATH**/ ?>