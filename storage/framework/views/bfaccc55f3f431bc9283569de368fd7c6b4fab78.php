<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Update version')); ?> <?php echo e($version); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
        <form method="get" action="<?php echo e(route('admin.thirdupdate',$version)); ?>" class="tabs-wrap">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="row">

                <div class="buttons">
                    <button class="button" type="submit" id="buttonfinal" onclick="button(this)">
                        <?php echo e(trans('Update')); ?>

                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.updatemaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/newupdate/newupdate.blade.php ENDPATH**/ ?>