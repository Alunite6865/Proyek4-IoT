<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="<?php echo e(asset('paper')); ?>/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            <?php echo e(__('Halo, User!')); ?>

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php echo e($elementActive == 'dashboard' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('page.index', 'dashboard')); ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p><?php echo e(__('Dashboard')); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH /var/www/html/proyek4/resources/views/layouts/navbars/auth.blade.php ENDPATH**/ ?>