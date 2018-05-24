<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Manage projects</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">last modified</th>
            <th scope="col">project name</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($project->updated_at); ?></td>
                <td><a href="/projects/<?php echo e($project->slug); ?>" target="_blank"><?php echo e($project->name); ?></a></td>
                <td><a href="/admin/projects/<?php echo e($project->id); ?>/edit" class="btn btn-primary btn-sm mr-2">Edit</a>
                    <form class="d-inline" method="post" action="/admin/projects/<?php echo e($project->id); ?>">
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