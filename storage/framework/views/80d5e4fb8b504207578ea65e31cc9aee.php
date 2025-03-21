<?php $__env->startSection('title', $newsItem['title']); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($newsItem['title']); ?></h1>
    <p><?php echo e($newsItem['content']); ?></p>
    <a href="<?php echo e(route('projekty.index')); ?>" class="btn">Powrót</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ROG\OneDrive\Dokumenty\GitHub\fundacja-projekt\resources\views/show.blade.php ENDPATH**/ ?>