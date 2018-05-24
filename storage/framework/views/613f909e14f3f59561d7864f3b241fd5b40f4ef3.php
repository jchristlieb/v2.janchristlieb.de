<?php $__env->startSection('content'); ?>

    <p>The Dashboard helps you to manage the content of your application. Please use the sidebar menu to navigate
        through the various options.</p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>