<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Edit tag <strong><?php echo e($tag->name); ?></strong></h2>

    <form method="post" action="/admin/tags/<?php echo e($tag->id); ?>">

        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('patch')); ?>


        <div class="form-group">
            <label>Tag name</label>
            <input name="name" type="text" class="form-control" value="<?php echo e($tag->name); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Edit tag</button>

    </form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>