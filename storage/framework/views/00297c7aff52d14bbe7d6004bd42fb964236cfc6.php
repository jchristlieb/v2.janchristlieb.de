<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Manage tags</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">last modified</th>
            <th scope="col">tag name</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($tag->updated_at); ?></td>
                <td><a href="/tags/<?php echo e($tag->slug); ?>" target="_blank"><?php echo e($tag->name); ?></a></td>
                <td><a href="/admin/tags/<?php echo e($tag->id); ?>/edit" class="btn btn-primary btn-sm mr-2">Edit</a>
                    <form class="d-inline" method="post" action="/admin/tags/<?php echo e($tag->id); ?>">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('delete')); ?>

                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>