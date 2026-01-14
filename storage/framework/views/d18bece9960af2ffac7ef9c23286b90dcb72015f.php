
							<?php $__env->startSection('content'); ?>

                            <!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(lang('Envato')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <h4 class="card-title"><?php echo e(lang('Envato Settings')); ?></h4>
                                            </div>
                                            <form action="<?php echo e(route('admin.envatoapitoken.storeupdate')); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>

                                                <input type="hidden" name="enavto_id" value="<?php echo e($apidata != null ? $apidata->id : ''); ?>">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label  class="form-label"><?php echo e(lang('Envato Personal Api Token')); ?></label>
                                                        <input type="text"  class="form-control" name="envatoapi" value="<?php echo e($apidata != null ? $apidata->envatoapitoken : ''); ?>">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="form-group float-end">
                                                        <input type="submit" class="btn btn-secondary" value="<?php echo e(lang('Save')); ?>">
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\Modules/Uhelpupdate\Resources/views/envatoapitoken/index.blade.php ENDPATH**/ ?>