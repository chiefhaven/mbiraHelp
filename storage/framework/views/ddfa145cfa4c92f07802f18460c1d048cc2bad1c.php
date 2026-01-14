<?php $__env->startSection('template_title'); ?>
<?php echo e(trans('installer_messages.final.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<?php echo e(trans('installer_messages.final.title')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<?php if($message = Session::get('success')): ?>

<p class="paragraph para-heading text-center">
    <?php echo e(trans($message)); ?>

</p>
<?php endif; ?>
<?php if($message = Session::get('info')): ?>

<p class="paragraph para-heading text-center">
    <?php echo e(trans($message)); ?>

</p>
<?php endif; ?>

<div class="border-bottom pb-20">
    <p class="url-title">Admin Url:</p>
    <p class="link"><span id="clipurl" class="clipurl"><?php echo e(url('/') . '/admin'); ?></span>
        <a class="btn" href="javascript:void(0);" data-clipboard-target="#clipurl">
            <i class="fa fa-copy"></i>
        </a>
    </p>

    <?php if($message = Session::get('success')): ?>

    <p class="paragraph text-bold"><span class="url-link">Username:-</span> <span id="clipurl1"
            class="clipurl"><?php echo e(Session::get('emails')); ?></span>
        <a class="btn" href="javascript:void(0);" data-clipboard-target="#clipurl1">
            <i class="fa fa-copy"></i>
        </a>
    </p>
    <p class="paragraph  text-bold"><span class="url-link">Password:-</span> <span id="clipurl2" class="clipurl"><?php echo e(Session::get('password')); ?></span>
            <a class="btn" href="javascript:void(0);" data-clipboard-target="#clipurl2">
                <i class="fa fa-copy"></i>
            </a>
    </p>
    <?php endif; ?>

    <div class="buttons">
        <a href="<?php echo e(url('/') .'/admin'); ?>" class="button">Go to Admin url</a>
    </div>
</div>


<div>
    <p class="url-title">Frontend Url:</p>
    <p class="link"><span id="clipfurl" class="clipurl"><?php echo e(url('/')); ?></span>
        <a class="btn" href="javascript:void(0);" data-clipboard-target="#clipfurl">
            <i class="fa fa-copy"></i>
        </a>
    </p>
    <div class="buttons">
        <a href="<?php echo e(url('/')); ?>" class="button">Go to Frontend Url</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('installer/clipboard/clipboard.js')); ?>?v=<?php echo time(); ?>"></script>

    <script type="text/javascript">

        "use strict";
        var clipboard = new ClipboardJS('.btn');

        clipboard.on('success', function (e) {
        });

        clipboard.on('error', function (e) {
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.layouts.InstallerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/final.blade.php ENDPATH**/ ?>