<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<?php echo $__env->make('snippets.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="mt-md-4 mb-md-4">

<div class="container bg__main-col rounded">

    <div class="row">
        <div class="col-12">
            <?php echo $__env->make('snippets.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    <div class="row">
        <div class="intro">
            <h1 class="display-4">Dashboard</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/projects/create">
                            <i class="fal fa-pen-square pr-2"></i>Add project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/projects">
                            <i class="fal fa-list-alt pr-2"></i>Manage projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/tags/create">
                            <i class="fal fa-tag pr-2"></i>Add tag</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/tags">
                            <i class="fal fa-tags pr-2"></i>Manage tags</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <?php echo $__env->make('snippets.form-errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <?php echo $__env->make('snippets.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>