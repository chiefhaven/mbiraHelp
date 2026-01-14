<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('Welcome')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Laravel Installer')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <p class="fs-12 text-center">
      <?php echo e(trans('Easy Installation and Setup Wizard')); ?>

    </p>
    <p class="text-center">
      <a href="<?php echo e(route('SprukoAppInstaller::requirement')); ?>" class="button">
        <?php echo e(trans('Check Requirements')); ?>

        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
      </a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.layouts.InstallerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/welcome.blade.php ENDPATH**/ ?>