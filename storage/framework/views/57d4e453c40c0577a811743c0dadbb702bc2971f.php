<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank"><?php echo e(__('Creative Tim')); ?></a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank"><?php echo e(__('Licenses')); ?></a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script><?php echo e(__(', made with ')); ?><i class="fa fa-heart heart"></i><?php echo e(__(' by ')); ?><a class="<?php if(Auth::guest()): ?> text-white <?php endif; ?>" href="https://www.creative-tim.com" target="_blank"><?php echo e(__('Kelompok A6')); ?></a>
                </span>
            </div>
        </div>
    </div>
</footer><?php /**PATH /var/www/html/proyek4/resources/views/layouts/footer.blade.php ENDPATH**/ ?>