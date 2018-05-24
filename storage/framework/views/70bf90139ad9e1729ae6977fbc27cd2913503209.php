<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<?php echo $__env->make('snippets.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="mt-md-4 mb-md-4">

<div class="container bg__main-col rounded">

    <div class="row">
        <div class="col">
            
        </div>
    </div>


    <?php echo $__env->yieldContent('intro'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('snippets.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>