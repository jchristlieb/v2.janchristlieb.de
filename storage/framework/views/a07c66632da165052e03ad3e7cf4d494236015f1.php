<?php $__env->startSection('intro'); ?>
    <div class="row">
        <div class="intro">
            <h1 class="display-4 mb-4"><?php echo e($project->title); ?></h1>
            <a class="lead" href="<?php echo e($project->link); ?>"><?php echo e($project->link); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row section_project">
        <div class="m-4">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">


                        <?php $i = 1 ?>

                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <div class="carousel-item<?php if ($i === 1) echo ' active' ?>">
                                <div class="fake-browser-ui">
                                    <div class="frame">
                                        <span class="bt-1"></span>
                                        <span class="bt-2"></span>
                                        <span class="bt-3"></span>
                                    </div>
                                    <img class="d-block w-100" src="<?php echo e($image->getUrl()); ?>" alt="First slide">
                                </div>
                            </div>


                            <?php $i++ ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-12">
            <div class="m-4">
                <h2 class="mb-2"><?php echo e($project->title); ?></h2>
                <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge badge-primary"><?php echo e($tag->name); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p class="mt-2"><?php echo e($project->description); ?></p>
            </div>
        </div>
        <div class="col-12">
            <div class="m-4">
                <h2>In a nutshell</h2>
                <h5 class="text-muted mt-4">Client</h5>
                <p class="lead"><?php echo e($project->client); ?></p>
                <h5 class="text-muted mt-4">Year</h5>
                <p class="lead"><?php echo e($project->date); ?></p>
                <h5 class="text-muted mt-4">Link</h5>
                <a class="lead" href="<?php echo e($project->link); ?>"><?php echo e($project->link); ?></a>
                <h5 class="text-muted mt-4">Repository</h5>
                <a class="lead" href="<?php echo e($project->repository); ?>"><?php echo e($project->repository); ?></a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script type="text/javascript" src="<?php echo e(URL::asset('js/app.js')); ?>"></script>

    <script>

        $('.carousel').carousel()

    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>