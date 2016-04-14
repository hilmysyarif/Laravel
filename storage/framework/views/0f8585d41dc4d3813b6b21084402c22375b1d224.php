<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Edit <?php echo e($product->title); ?></h3>
        <?php echo Form::model($product, ['route' => ['products.update', $product], 'method' =>'patch', 'files' => true]); ?>

          <?php echo $__env->make('products._form', ['model' => $product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>