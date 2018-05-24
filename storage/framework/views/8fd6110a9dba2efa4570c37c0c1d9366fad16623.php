<?php $__env->startSection('intro'); ?>
    <div class="row">
        <div class="intro">
            <h1 class="display-4 mb-4"><?php echo e($tag->name); ?></h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container section_project">
        <div class="row">

            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-12 col-md-6 mb-5">
                    <div class="card">
                        <a href="<?php echo e($project->path()); ?>">
                            <div class="fake-browser-ui">
                                <div class="frame">
                                    <span class="bt-1"></span>
                                    <span class="bt-2"></span>
                                    <span class="bt-3"></span>
                                </div>
                                <div class="project-image">
                                    <img src="<?php echo e($project->getFirstMediaUrl($project->slug)); ?>">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($project->title); ?></h5>
                                <p class="card-text"><?php echo e(\Illuminate\Support\Str::words($project->description, 20, ' [...]')); ?></p>
                            </div>
                            <div class="card-footer">
                                <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/tags/<?php echo e($tag->slug); ?>" class="badge badge-primary"><?php echo e($tag->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </a>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>