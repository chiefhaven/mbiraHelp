<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('Step 3 | Environment Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo trans('Environment Settings'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <div class="tabs tabs-full">


        <form method="post" action="<?php echo e(route('SprukoAppInstaller::environmentSaveWizard')); ?>" class="tabs-wrap">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="row">
                    <div class="form-group col-6 <?php echo e($errors->has('app_name') ? ' has-error ' : ''); ?>">
                        <div class="label_note">
                            <label for="app_name">
                            <?php echo e(trans('AppName')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <small class="err_note"><?php echo trans('No spaces included'); ?></small>
                        </div>
                        <input type="text" name="app_name" id="app_name" value="" placeholder="<?php echo e(trans('Ex: appName')); ?>" />

                        <?php if($errors->has('app_name')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('app_name')); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mt-3 col-6 <?php echo e($errors->has('app_url') ? ' has-error ' : ''); ?>">
                        <label for="app_url">
                            <?php echo e(trans('App Url')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <input type="url" name="app_url" id="app_url" value="<?php echo e(url('/')); ?>" placeholder="<?php echo e(trans('App Url')); ?>" />
                        <?php if($errors->has('app_url')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('app_url')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-6 <?php echo e($errors->has('database_hostname') ? ' has-error ' : ''); ?>">
                        <label for="database_hostname">
                            <?php echo e(trans('Database Host')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <input type="text" name="database_hostname" id="database_hostname" value="127.0.0.1" placeholder="<?php echo e(trans('Database Host')); ?>" />
                        <?php if($errors->has('database_hostname')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('database_hostname')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-6 <?php echo e($errors->has('database_port') ? ' has-error ' : ''); ?>">
                        <label for="database_port">
                            <?php echo e(trans('Database Port')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <input type="number" name="database_port" id="database_port" value="3306" placeholder="<?php echo e(trans('Database Port')); ?>" />
                        <?php if($errors->has('database_port')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('database_port')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-6 <?php echo e($errors->has('database_name') ? ' has-error ' : ''); ?>">
                        <label for="database_name">
                            <?php echo e(trans('Database Name')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <input type="text" name="database_name" id="database_name" value="" placeholder="<?php echo e(trans('Database Name')); ?>" />
                        <?php if($errors->has('database_name')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('database_name')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-6 <?php echo e($errors->has('database_username') ? ' has-error ' : ''); ?>">
                        <label for="database_username">
                            <?php echo e(trans('Database User Name')); ?>


                            <span class="text-red">*</span>
                        </label>
                        <input type="text" name="database_username" id="database_username" value="" placeholder="<?php echo e(trans('Database User Name')); ?>" />
                        <?php if($errors->has('database_username')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('database_username')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group col-6 <?php echo e($errors->has('database_password') ? ' has-error ' : ''); ?>">
                        <label for="database_password">
                            <?php echo e(trans('Database Password')); ?>

                        </label>
                        <input type="password" name="database_password" id="database_password" value="" placeholder="<?php echo e(trans('Database Password')); ?>" />
                        <?php if($errors->has('database_password')): ?>
                            <span class="error-block">
                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo e($errors->first('database_password')); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="buttons">
                    <button class="button" id="nextbutton" type="submit"  onclick="button(this)">
                        <?php echo e(trans('Next')); ?>

                        
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script type="text/javascript">

        "use strict";

        function button(bt){
            document.getElementById("nextbutton").innerHTML = `Please Wait... <i class="fa fa-spinner fa-spin"></i>`;
            bt.disabled = true;
            bt.form.submit();
            document.getElementById("nextbutton").style.cursor = "not-allowed";
            document.getElementById("nextbutton").style.opacity = "0.5";
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.layouts.InstallerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/installer/environment.blade.php ENDPATH**/ ?>