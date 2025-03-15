<?php $__env->startSection('content'); ?>
    <h1>Welcome View and Blade!</h1>
    <hr>
    <h3>Page 3</h3>
    <h3>The value is: <?php echo e($value); ?></h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\notes\resources\views/page3.blade.php ENDPATH**/ ?>