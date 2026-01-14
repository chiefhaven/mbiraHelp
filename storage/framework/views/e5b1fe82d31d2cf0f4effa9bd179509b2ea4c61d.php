<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Update version')); ?> <?php echo e($version); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
    <form method="post" action="<?php echo e(route('update.datachecking')); ?>" class="tabs-wrap">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="row">

            <div class="form-group col-6 <?php echo e($errors->has('app_firstname') ? ' has-error ' : ''); ?>">
                <label for="app_firstname">
                    <?php echo e(trans('Enter Your Firstname')); ?>

                    <span class="text-red">*</span>
                </label>
                <input type="text" name="app_firstname" id="app_firstname" value="" placeholder="<?php echo e(trans('Enter Your Firstname')); ?>" />
                <?php if($errors->has('app_firstname')): ?>
                    <span class="error-block">
                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                        <?php echo e($errors->first('app_firstname')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group col-6 <?php echo e($errors->has('app_lastname') ? ' has-error ' : ''); ?>">
                <label for="app_lastname">
                    <?php echo e(trans('Enter Your Lastname')); ?>

                    <span class="text-red">*</span>
                </label>
                <input type="text" name="app_lastname" id="app_lastname" value="" placeholder="<?php echo e(trans('Enter Your Lastname')); ?>" />
                <?php if($errors->has('app_lastname')): ?>
                    <span class="error-block">
                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                        <?php echo e($errors->first('app_lastname')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group col-6 <?php echo e($errors->has('app_email') ? ' has-error ' : ''); ?>">
                <label for="app_email">
                    <?php echo e(trans('Enter Your Email')); ?>

                    <span class="text-red">*</span>
                </label>
                <input type="email" name="app_email" id="app_email" value="" placeholder="<?php echo e(trans('Enter Your Email')); ?>" />
                <?php if($errors->has('app_email')): ?>
                    <span class="error-block">
                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                        <?php echo e($errors->first('app_email')); ?>

                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group col-6 <?php echo e($errors->has('envato_purchasecode') ? ' has-error ' : ''); ?>">
                <label for="envato_purchasecode">
                    <?php echo e(trans('Enter the Envato Purchase Code')); ?>

                    <span class="text-red">*</span>
                </label>
                <div class="pos-relative">
                    <input type="text" name="envato_purchasecode" id="envato_purchasecode" value="" placeholder="<?php echo e(trans('Enter the Envato Purchase Code ')); ?>" />
                </div>

                <?php if($errors->has('envato_purchasecode')): ?>
                    <span class="error-block">
                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                        <?php echo e($errors->first('envato_purchasecode')); ?>

                    </span>
                <?php elseif($message = Session::get('error')): ?>
                    <span class="error-block text-red">
                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                        <?php echo e(trans($message)); ?>

                    </span>
                <?php endif; ?>

            </div>
        </div>

        <div class="buttons">
            <button class="button" type="submit" id="buttonfinal" onclick="button(this)">
                <?php echo e(trans('Update')); ?>

                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
            </button>
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

        <script type="text/javascript">

            "use strict";


            function button(bt){
                document.getElementById("buttonfinal").innerHTML = `Please Wait... <i class="fa fa-spinner fa-spin"></i>`;
                bt.disabled = true;
                bt.form.submit();
                document.getElementById("buttonfinal").style.cursor = "not-allowed";
                document.getElementById("buttonfinal").style.opacity = "0.5";
            }

        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.updatemaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/newupdate/thirdupdate.blade.php ENDPATH**/ ?>