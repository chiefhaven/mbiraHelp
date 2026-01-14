<?php $__env->startSection('styles'); ?>

<!-- INTERNAL Sweet-Alert css -->
<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

<!-- INTERNAl Tag css -->
<link href="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(lang('Profile', 'menu')); ?></span></h4>
    </div>
</div>
<!--End Page header-->

<!-- Profile Page-->
<div class="row">
    <div class="col-xl-3 col-lg-4 col-md-12">
        <div class="card user-pro-list overflow-hidden">
            <div class="card-body">
                <div class="user-pic text-center">
                    <?php if(Auth::user()->image == null): ?>

                    <span class="avatar avatar-xxl brround" style="background-image: url(../uploads/profile/user-profile.png)">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        <?php else: ?>

                    <span class="avatar avatar-xxl brround" style="background-image: url(../uploads/profile/<?php echo e(Auth::user()->image); ?>)">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        <?php endif; ?>
                    <div class="pro-user mt-3">
                        <h5 class="pro-user-username text-dark mb-1 fs-16"><?php echo e(Auth::user()->name); ?></h5>
                        <h6 class="pro-user-desc text-muted fs-12"><?php echo e(Auth::user()->email); ?></h6>
                        <?php if(!empty(Auth::user()->getRoleNames()[0])): ?>
                        <h6 class="pro-user-desc text-muted fs-12"><?php echo e(Auth::user()->getRoleNames()[0]); ?></h6>
                        <?php endif; ?>
                        <div class="profilerating" data-rating="<?php echo e($avg); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title"> <?php echo e(lang('Personal Details')); ?></h4>
            </div>
            <div class="card-body px-0 pb-0">

                <div class="table-responsive tr-lastchild">
                    <table class="table mb-0 table-information">
                        <tbody>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Employee ID')); ?></span>
                                </td>
                                <td class="py-2 ps-4"><?php echo e(Auth::user()->empid); ?></td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Name')); ?> </span>
                                </td>
                                <td class="py-2 ps-4"><?php echo e(Auth::user()->name); ?></td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Role')); ?> </span>
                                </td>
                                <td class="py-2 ps-4">
                                    <?php if(!empty(Auth::user()->getRoleNames()[0])): ?>

                                        <?php echo e(Auth::user()->getRoleNames()[0]); ?>

                                        <?php endif; ?>

                                </td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Email')); ?> </span>
                                </td>
                                <td class="py-2 ps-4"><?php echo e(Auth::user()->email); ?></td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Phone')); ?> </span>
                                </td>
                                <td class="py-2 ps-4"><?php echo e(Auth::user()->phone); ?></td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Languages')); ?> </span>
                                </td>
                                <td class="py-2 ps-4">
                                    <?php
                                    $values = explode(",", Auth::user()->languagues);

                                    ?>

                                    <ul class="custom-ul">
                                        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li class="tag mb-1"><?php echo e(ucfirst($value)); ?></li>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"><?php echo e(lang('Skills')); ?> </span>
                                </td>
                                <td class="py-2 ps-4">
                                    <?php
                                    $values = explode(",", Auth::user()->skills);
                                    ?>

                                    <ul class="custom-ul">
                                        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li class="tag mb-1"><?php echo e(ucfirst($value)); ?></li>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2">
                                    <span class="font-weight-semibold w-50"> <?php echo e(lang('Location')); ?> </span>
                                </td>
                                <td class="py-2 ps-4"><?php echo e(Auth::user()->country); ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php if(setting('SPRUKOADMIN_P') == 'on'): ?>

        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title"> <?php echo e(lang('Personal Setting')); ?></h4>
            </div>
            <div class="card-body">
                <div class="switch_section">
                    <div class="switch-toggle d-flex mt-4">
                        <a class="onoffswitch2">
                            <input type="checkbox" data-id="<?php echo e(Auth::id()); ?>" name="checkbox" id="myonoffswitch181" class=" toggle-class onoffswitch2-checkbox sprukoswitch"  <?php if(Auth::check() && Auth::user()->darkmode == 1): ?> checked="" <?php endif; ?>>
                            <label for="myonoffswitch181" class="toggle-class onoffswitch2-label" data-id="<?php echo e(Auth::id()); ?>"></label>
                        </a>
                        <label class="form-label ps-3"> <?php echo e(lang('Switch to Dark-Mode')); ?> </label>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Setting -->
        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title"> <?php echo e(lang('Setting')); ?></h4>
            </div>
            <div class="card-body">
                <div class="switch_section">
                    <div class="switch-toggle d-flex mt-4">
                        <a class="onoffswitch2">
                            <input type="checkbox" data-id="<?php echo e(Auth::id()); ?>" name="emailnotificationon" id="emailnotificationon" class=" toggle-class onoffswitch2-checkbox"  <?php if(Auth::check() && Auth::user()->usetting != null): ?> <?php if(Auth::check() && Auth::user()->usetting->emailnotifyon == 1): ?> checked="" <?php endif; ?> <?php endif; ?>>
                            <label for="emailnotificationon" class="toggle-class onoffswitch2-label" data-id="<?php echo e(Auth::id()); ?>"></label>
                        </a>
                        <label class="form-label ps-3"> <?php echo e(lang('Email Notification On/Off')); ?> </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Setting --->

    </div>
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="card ">
            <div class="card-header border-0">
                <h4 class="card-title"> <?php echo e(lang('Profile Details')); ?></h4>
            </div>
            <div class="card-body">
                <?php if(Auth::user()->can('Profile Edit')): ?>
                    <form method="POST" action="<?php echo e(url('/admin/profile')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo view('honeypot::honeypotFormFields'); ?>

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('First Name')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="firstname" value="<?php echo e(Auth::user()->firstname); ?>">
                                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Last Name')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastname" value="<?php echo e(Auth::user()->lastname); ?>">
                                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Email')); ?></label>
                                    <input type="email" class="form-control" Value="<?php echo e(Auth::user()->email); ?>" disabled>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> <?php echo e(lang('Employee ID')); ?></label>
                                    <input type="email" class="form-control" Value="<?php echo e(Auth::user()->empid); ?>" disabled>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Mobile Number')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone"  value="<?php echo e(old('phone',Auth::user()->phone)); ?>" >
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Languages')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['languages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> sprukotags" value="<?php echo e(old('languages', Auth::user()->languagues)); ?>" name="languages[]" data-role="tagsinput" />
                                    <?php $__errorArgs = ['languages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Skills')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> sprukotags" value="<?php echo e(old('skills', Auth::user()->skills)); ?>" name="skills[]" data-role="tagsinput" />
                                    <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Country')); ?></label>
                                    <select name="country" class="form-control select2 select2-show-search">
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->name); ?>" <?php echo e($country->name == Auth::user()->country ? 'selected' : ''); ?>><?php echo e(lang($country->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>


                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Timezone')); ?></label>
                                    <select name="timezone" class="form-control select2 select2-show-search">
                                        <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $timezoness): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($timezoness->timezone); ?>" <?php echo e($timezoness->timezone == Auth::user()->timezone ? 'selected' : ''); ?>><?php echo e(lang($timezoness->timezone)); ?> <?php echo e(lang($timezoness->utc)); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e(lang('Upload Image')); ?></label>
                                    <div class="input-group file-browser">
                                        <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" type="file" accept="image/png, image/jpeg,image/jpg" >

                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e(lang($message)); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>
                                    <small class="text-muted"><i><?php echo e(lang('The file size should not be more than 5MB', 'filesetting')); ?></i></small>
                                </div>
                                <?php if(Auth::user()->image != null): ?>
                                    <div class="file-image-1 removesprukoi<?php echo e(Auth::user()->id); ?>">
                                        <div class="product-image custom-ul">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/uploads/profile/' .Auth::user()->image)); ?>" class="br-5" alt="<?php echo e(Auth::user()->image); ?>">
                                            </a>
                                            <ul class="icons">
                                                <li><a href="javascript:(0);" class="bg-danger delete-image" data-id="<?php echo e(Auth::user()->id); ?>"><i class="fe fe-trash"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 card-footer">
                                <div class="form-group float-end mb-0">
                                    <input type="submit" class="btn btn-secondary" value="<?php echo e(lang('Save Changes')); ?>" onclick="this.disabled=true;this.form.submit();">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php else: ?>
                    <?php echo csrf_field(); ?>
                    <?php echo view('honeypot::honeypotFormFields'); ?>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('First Name')); ?></label>
                                <input type="text" class="form-control"
                                    name="firstname" value="<?php echo e(Auth::user()->firstname); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Last Name')); ?></label>
                                <input type="text" class="form-control"
                                    name="lastname" value="<?php echo e(Auth::user()->lastname); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Email')); ?></label>
                                <input type="email" class="form-control" Value="<?php echo e(Auth::user()->email); ?>" disabled>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Employee ID')); ?></label>
                                <input type="email" class="form-control" Value="<?php echo e(Auth::user()->empid); ?>" disabled>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Mobile Number')); ?></label>
                                <input type="text" class="form-control " name="phone"
                                    value="<?php echo e(old('phone',Auth::user()->phone)); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Languages')); ?></label>
                                <input type="text" class="form-control"
                                    value="<?php echo e(Auth::user()->languagues); ?>" name="languages" data-role="tagsinput" disabled />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Skills')); ?></label>
                                <input type="text" class="form-control"
                                    value="<?php echo e(Auth::user()->skills); ?>" name="skills" data-role="tagsinput" disabled />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Country')); ?></label>
                                <input type="text" class="form-control" value="<?php echo e(Auth::user()->country); ?>" disabled>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"> <?php echo e(lang('Timezone')); ?></label>
                                <input type="text" class="form-control" value="<?php echo e(Auth::user()->timezone); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo e(lang('Upload Image')); ?></label>
                                <div class="input-group file-browser">
                                    <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" type="file" accept="image/png, image/jpeg,image/jpg" disabled>

                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e(lang($message)); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                                <small class="text-muted"><i><?php echo e(lang('The file size should not be more than 5MB', 'filesetting')); ?></i></small>
                            </div>
                            <?php if(Auth::user()->image != null): ?>
                                <div class="file-image-1 removesprukoi<?php echo e(Auth::user()->id); ?>">
                                    <div class="product-image custom-ul">
                                        <a href="#">
                                            <img src="<?php echo e(asset('public/uploads/profile/' .Auth::user()->image)); ?>" class="br-5" alt="<?php echo e(Auth::user()->image); ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php echo $__env->make('admin.auth.passwords.changepassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<!--End Profile Page-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<!-- INTERNAL Vertical-scroll js-->
<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Index js-->
<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Sweet-Alert js-->
<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>

<!-- INTERNAL TAG js-->
<script src="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.js')); ?>?v=<?php echo time(); ?>"></script>

<script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>

<script type="text/javascript">

    "use strict";

    (function($)  {

        // Variables
        var SITEURL = '<?php echo e(url('')); ?>';

        // Csrf Field
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Profile Rating
        $(".profilerating").starRating({
            readOnly: true,
            // totalStars: 5,
            starSize: 20,
            emptyColor  :  '#ffffff',
            activeColor :  '#F2B827',
            strokeColor :  '#F2B827',
            strokeWidth :  15,
            useGradient : false

        });

        // DarkMode switch js
        $('.sprukoswitch').on('change', function() {
            var dark = $('#myonoffswitch181').prop('checked') == true ? '1' : '';
            var user_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(url('/admin/usersettings')); ?>',
                data: {
                    'dark': dark,
                    'user_id': user_id
                },
                success: function(data){
                    location.reload();
                    toastr.success('<?php echo e(lang('Updated Successfully!', 'alerts')); ?>');
                }
            });
        });

        <?php if(Auth::user()->image != null): ?>

        //Delete Image
        $('body').on('click', '.delete-image', function () {
            var _id = $(this).data("id");

            swal({
                title: `<?php echo e(lang('Are you sure you want to remove the profile image?', 'alerts')); ?>`,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    $.ajax({
                        type: "post",
                        url: SITEURL + "/admin/image/remove/"+_id,
                        success: function (data) {
                        toastr.success(data.success);
                        location.reload();
                        },
                        error: function (data) {
                        console.log('Error:', data);
                        }
                    });
                }
            });
        });
        <?php endif; ?>

        $('body').on('change', '#emailnotificationon', function(e){
            e.preventDefault();

            let emailvalue = $(this).prop('checked') == true ? '1' : '0' ,
                userid = $(this).data('id');

                $.ajax({
                type: "POST",
                dataType: "json",
                url: '<?php echo e(url('/admin/emailonoff')); ?>',
                data: {
                    'emailvalue': emailvalue,
                    'userid' : userid,
                },
                success: function(data){
                    toastr.success('<?php echo e(lang('Updated Successfully!', 'alerts')); ?>')
                    // window.location.reload();
                }
            });

        })

    })(jQuery);

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\helpdesk\resources\views/admin/profile/adminprofile.blade.php ENDPATH**/ ?>