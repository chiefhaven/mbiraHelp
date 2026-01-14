<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php if(trim($__env->yieldContent('template_title'))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(trans('installer_messages.title')); ?></title>
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
                    <ul class="step">
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::final')); ?>">
                            <i class="step__icon fa fa-server" aria-hidden="true"></i>
                        </li>
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::register')); ?>">
                            <i class="step__icon fa fa-user" aria-hidden="true"></i>
                        </li>
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::environment')); ?> <?php echo e(isActive('SprukoAppInstaller::environmentWizard')); ?> <?php echo e(isActive('SprukoAppInstaller::environmentClassic')); ?>">
                            <?php if(Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') ): ?>
                                <a href="<?php echo e(route('SprukoAppInstaller::environment')); ?>">
                                    <i class="step__icon fa fa-cog" aria-hidden="true"></i>
                                </a>
                            <?php else: ?>
                                <i class="step__icon fa fa-cog" aria-hidden="true"></i>
                            <?php endif; ?>
                        </li>
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::permissions')); ?>">
                            <?php if(Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') ): ?>
                                <a href="<?php echo e(route('SprukoAppInstaller::permissions')); ?>">
                                    <i class="step__icon fa fa-key" aria-hidden="true"></i>
                                </a>
                            <?php else: ?>
                                <i class="step__icon fa fa-key" aria-hidden="true"></i>
                            <?php endif; ?>
                        </li>
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::requirement')); ?>">
                            <?php if(Request::is('install') || Request::is('install/requirement') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') ): ?>
                                <a href="">
                                    <i class="step__icon fa fa-list" aria-hidden="true"></i>
                                </a>
                            <?php else: ?>
                                <i class="step__icon fa fa-list" aria-hidden="true"></i>
                            <?php endif; ?>
                        </li>
                        <li class="step__divider"></li>
                        <li class="step__item <?php echo e(isActive('SprukoAppInstaller::welcome')); ?>">
                            <?php if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') ): ?>
                                <a href="">
                                    <i class="step__icon fa fa-home" aria-hidden="true"></i>
                                </a>
                            <?php else: ?>
                                <i class="step__icon fa fa-home" aria-hidden="true"></i>
                            <?php endif; ?>
                        </li>
                        <li class="step__divider"></li>
                    </ul>
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
                <div class="copyright"> Copyright © <?php echo e(now()->format('Y')); ?> <a href="javascript:void(0);">Uhelp</a>. Developed by <a href="javascript:void(0);"> Spruko Technologies Pvt.Ltd. </a> All rights reserved </div>
            </div>


        </div>
        <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html>
<?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/layouts/InstallerMaster.blade.php ENDPATH**/ ?>