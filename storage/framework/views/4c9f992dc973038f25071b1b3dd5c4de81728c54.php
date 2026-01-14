<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(trans('Update Version')); ?></title>
        <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-16x16.png')); ?>" sizes="16x16"/>
        <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-32x32.png')); ?>" sizes="32x32"/>
        <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-96x96.png')); ?>" sizes="96x96"/>
        <link href="<?php echo e(asset('installer/css/style.css')); ?>" rel="stylesheet"/>
        <?php echo $__env->yieldContent('style'); ?>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div class="master">
            <div class="box">
                 <div class="text-center main-logo"> <img src="<?php echo e(asset('installer/img/logo-white.png')); ?>" class="header-brand-img desktop-lgo" alt="logo"> </div>
                <div class="box-content">
                    <div class="header">
                        <h1 class="header__title"><?php echo $__env->yieldContent('title'); ?></h1>
                    </div>
                    <div class="main">
                        <?php if(session('message')): ?>
                            <p class="alert text-center">
                                <strong>
                                    <?php if(is_array(session('message'))): ?>
                                        <?php echo e(session('message')['message']); ?>

                                    <?php else: ?>
                                        <?php echo e(session('message')); ?>

                                    <?php endif; ?>
                                </strong>
                            </p>
                        <?php endif; ?>

                        <?php echo $__env->yieldContent('container'); ?>
                    </div>
                </div>
                <div class="copyright"> Copyright © <?php echo e(now()->format('Y')); ?> <a href="javascript:void(0);">Uhelp</a>. Developed by <a href="javascript:void(0);">HavenPlus Technologies Pvt.Ltd. </a> All rights reserved </div>
            </div>


        </div>
        <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
<?php /**PATH C:\wamp64\www\helpdesk\resources\views/layouts/updatemaster.blade.php ENDPATH**/ ?>