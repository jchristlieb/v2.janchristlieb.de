<nav class="navbar navbar-expand mt-4 mb-4">
    <ul class="navbar-nav text-center">
        <li class="nav-link pl-0"><a href="/">Home</a></li>
        
        
        
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin">Dashboard</a>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <?php endif; ?>
    </ul>
</nav>

