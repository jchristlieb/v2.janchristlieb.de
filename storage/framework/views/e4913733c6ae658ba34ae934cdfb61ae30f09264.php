<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Add a tag</h2>

    <form method="post" action="/admin/tags">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label>Tag name</label>
            <input name="name" type="text" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add tag</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>