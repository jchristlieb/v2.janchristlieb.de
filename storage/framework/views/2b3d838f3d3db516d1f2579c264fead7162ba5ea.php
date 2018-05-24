<?php $__env->startSection('content'); ?>

    <h2 class="mb-4">Add a new project</h2>
    <form method="post" action="/admin/projects" enctype="multipart/form-data">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label>Project Name</label>
            <input name="name" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input name="client" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input name="date" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Project Website</label>
            <input name="link" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>GitHub Repository</label>
            <input name="repository" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Select tags</label>
            <select multiple class="form-control" name="tags[]">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <hr>

        <div class="row">

            <div class="form-group col-sm-6">
                <label>Select Images</label>
                <input multiple type="file" name="images[]" class="form-control-file">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Save new project</button>


    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>