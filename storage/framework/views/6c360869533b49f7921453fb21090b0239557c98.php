

<?php $__env->startSection('title', 'Laravel CRUD'); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Tambah barang</a>

 <?php if(session()->get('success')): ?>
    <div class="alert alert-success mt-3">
      <?php echo e(session()->get('success')); ?>  
    </div>
<?php endif; ?>

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($post->id); ?></th>
      <td><?php echo e($post->title); ?></td>
      <td><?php echo e($post->description); ?></td>
      <td>Rp.<?php echo e($post->price); ?></td>
      <td class="table-buttons">
        <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-success">
          <i class="fa fa-eye"></i>
        </a>
        <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-primary">
          <i class="fa fa-pencil" ></i>
        </a>
        <form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-trash"></i>
            </button>
        </form>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel7-crud\resources\views/posts/index.blade.php ENDPATH**/ ?>