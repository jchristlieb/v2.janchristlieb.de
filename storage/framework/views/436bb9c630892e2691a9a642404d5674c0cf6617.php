<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Edit project <strong><?php echo e($project->name); ?></strong></h2>
    <form method="post" action="/admin/projects/<?php echo e($project->id); ?>">

        <?php echo e(csrf_field()); ?>


        <?php echo e(method_field('patch')); ?>


        <div class="form-group">
            <label>Project Name</label>
            <input name="name" type="text" class="form-control" value="<?php echo e($project->name); ?>" required>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" value="<?php echo e($project->title); ?>" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control" required><?php echo e($project->description); ?></textarea>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input name="client" type="text" class="form-control" value="<?php echo e($project->client); ?>">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input name="date" type="date" class="form-control" value="<?php echo e($project->date); ?>" required>
        </div>
        <div class="form-group">
            <label>Project Website</label>
            <input name="link" type="text" class="form-control" value="<?php echo e($project->link); ?>" required>
        </div>
        <div class="form-group">
            <label>GitHub Repository</label>
            <input name="repository" type="text" class="form-control" value="<?php echo e($project->repository); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Edit project</button>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>