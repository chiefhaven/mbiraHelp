<?php $__env->startSection('styles'); ?>

<!-- INTERNAL Data table css -->
<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

<!-- INTERNAL Sweet-Alert css -->
<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

					<?php $__env->startSection('content'); ?>

					<!--Page header-->
					<div class="page-header d-xl-flex d-block">
						<div class="page-leftheader">
							<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(lang('Feature Box', 'menu')); ?></span></h4>
						</div>
					</div>
					<!--End Page header-->

					<!-- Feature Box Section -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card ">
							<form method="POST" action="<?php echo e(url('/admin/feature-box/feature')); ?>" enctype="multipart/form-data">
								<?php echo csrf_field(); ?>

								<?php echo view('honeypot::honeypotFormFields'); ?>

								<div class="card-header border-0 d-sm-max-flex">
									<h4 class="card-title"><?php echo e(lang('Feature Box Section')); ?></h4>
								</div>
								<div class="card-body" >
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<input type="hidden" class="form-control " name="id" value="<?php echo e($basic->id); ?>">
											<div class="form-group">
												<label class="form-label"><?php echo e(lang('Title')); ?> <span class="">*</span></label>
												<input type="text" class="form-control <?php $__errorArgs = ['featuretitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="featuretitle" value="<?php echo e($basic->featuretitle); ?>">
												<?php $__errorArgs = ['featuretitle'];
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
										<div class="col-sm-12 col-md-12">
											<div class="form-group">
												<label class="form-label"><?php echo e(lang('Subtitle')); ?></label>
												<input type="text" class="form-control <?php $__errorArgs = ['featuresub'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="featuresub" value="<?php echo e($basic->featuresub); ?>">
												<?php $__errorArgs = ['featuresub'];
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
									</div>
								</div>
								<div class="col-md-12 card-footer ">
									<div class="form-group float-end">
										<input type="submit" class="btn btn-secondary" value="<?php echo e(lang('Save Changes')); ?>" onclick="this.disabled=true;this.form.submit();">
									</div>
								</div>
						</form>
						</div>
					</div>
					<!-- End Feature Box Section -->

					<!-- Feature Box List -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header border-0 d-sm-max-flex">
								<h4 class="card-title "><?php echo e(lang('Feature Box List')); ?></h4>
								<div class="card-options  mt-sm-max-2">
									<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Feature Box Create')): ?>

									<a href="javascript:void(0)" class="btn btn-secondary me-3" id="create-new-featurebox"><?php echo e(lang('Add Feature')); ?></a>
									<?php endif; ?>

								</div>
							</div>
							<div class="card-body" >
								<div class="table-responsive spruko-delete">
									<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Feature Box Delete')): ?>

									<button id="massdeletenotify" class="btn btn-outline-light btn-sm mb-4 data-table-btn"><i class="fe fe-trash"></i> <?php echo e(lang('Delete')); ?></button>
									<?php endif; ?>

									<table class="table table-bordered border-bottom text-nowrap ticketdeleterow w-100" id="featurebox">
										<thead>
											<tr>
												<th width="10" ><?php echo e(lang('Sl.No')); ?></th>
												<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Feature Box Delete')): ?>

												<th width="10" >
													<input type="checkbox"  id="customCheckAll">
													<label  for="customCheckAll"></label>
												</th>
												<?php endif; ?>
												<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('Feature Box Delete')): ?>

												<th width="10" >
													<input type="checkbox"  id="customCheckAll" disabled>
													<label  for="customCheckAll"></label>
												</th>
												<?php endif; ?>

												<th ><?php echo e(lang('Title')); ?></th>
												<th ><?php echo e(lang('Subtitle')); ?></th>
												<th ><?php echo e(lang('Actions')); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php $__currentLoopData = $featureboxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featurebox): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($i++); ?></td>
													<td>
														<?php if(Auth::user()->can('Feature Box Delete')): ?>
															<input type="checkbox" name="spruko_checkbox[]" class="checkall" value="<?php echo e($featurebox->id); ?>" />
														<?php else: ?>
															<input type="checkbox" name="spruko_checkbox[]" class="checkall" value="<?php echo e($featurebox->id); ?>" disabled />
														<?php endif; ?>
													</td>
													<td>
														<?php echo e($featurebox->title ? str_limit($featurebox->title, 40, '...') : ''); ?>

														<?php echo e($featurebox->id); ?>

													</td>
													<td>
														<?php echo e($featurebox->subtitle ? str_limit($featurebox->subtitle, 40, '...') : ''); ?>


													</td>
													<td>
														<div class = "d-flex">
														<?php if(Auth::user()->can('Feature Box Edit')): ?>

															<a href="javascript:void(0)" data-id="<?php echo e($featurebox->id); ?>" class="action-btns1 edit-testimonial">
																<i class="feather feather-edit text-primary" data-id="<?php echo e($featurebox->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(lang('Edit')); ?>"></i>
															</a>
														<?php else: ?>

															~
														<?php endif; ?>
														<?php if(Auth::user()->can('Feature Box Delete')): ?>

															<a href="javascript:void(0)" data-id="<?php echo e($featurebox->id); ?>" class="action-btns1" id="delete-testimonial" >
																<i class="feather feather-trash-2 text-danger" data-id="<?php echo e($featurebox->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(lang('Delete')); ?>"></i>
															</a>
														<?php else: ?>

															~
														<?php endif; ?>

														</div>
													</td>
												</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- End Feature Box List -->
					<?php $__env->stopSection(); ?>

		<?php $__env->startSection('modal'); ?>

		   <?php echo $__env->make('admin.featurebox.model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<!-- INTERNAL Vertical-scroll js-->
<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>


<!-- INTERNAL Index js-->
<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Data tables -->
<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>?v=<?php echo time(); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>?v=<?php echo time(); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>?v=<?php echo time(); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>?v=<?php echo time(); ?>"></script>

<!-- INTERNAL Sweet-Alert js-->
<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>

<script type="text/javascript">

	"use strict";

	(function($)  {

		// Variables
		var SITEURL = '<?php echo e(url('')); ?>';

		// Csrf field
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		// Datatable
		// $('#featurebox').DataTable({
		// 	responsive: true,
		// 	language: {
		// 		searchPlaceholder: search,
		// 		scrollX: "100%",
		// 		sSearch: '',
		// 	},
		// 	order:[],
		// 	columnDefs: [
		// 		{ "orderable": false, "targets":[ 0,1,4] }
		// 	],
		// });

        let prev = <?php echo json_encode(lang("Previous")); ?>;
        let next = <?php echo json_encode(lang("Next")); ?>;
        let nodata = <?php echo json_encode(lang("No data available in table")); ?>;
        let noentries = <?php echo json_encode(lang("No entries to show")); ?>;
        let showing = <?php echo json_encode(lang("showing page")); ?>;
        let ofval = <?php echo json_encode(lang("of")); ?>;
        let maxRecordfilter = <?php echo json_encode(lang("- filtered from ")); ?>;
        let maxRecords = <?php echo json_encode(lang("records")); ?>;
        let entries = <?php echo json_encode(lang("entries")); ?>;
        let show = <?php echo json_encode(lang("Show")); ?>;
        let search = <?php echo json_encode(lang("Search...")); ?>;
        // Datatable
        $('#featurebox').dataTable({
            language: {
                searchPlaceholder: search,
                scrollX: "100%",
                sSearch: '',
                paginate: {
                previous: prev,
                next: next
                },
                emptyTable : nodata,
                infoFiltered: `${maxRecordfilter} _MAX_ ${maxRecords}`,
                info: `${showing} _PAGE_ ${ofval} _PAGES_`,
                infoEmpty: noentries,
                lengthMenu: `${show} _MENU_ ${entries} `,
            },
            order:[],
            columnDefs: [
                { "orderable": false, "targets":[ 0,1,4] }
            ],
        });

		/*  When user click add featurebox button */
		$('#create-new-featurebox').on('click', function () {
			$('#nameError').html('');
			$('#descriptionError').html('');
			$('#ImageError').html('');
			$('#btnsave').val("create-feature");
			$('#featurebox_id').val('');
			$('#featurebox_form').trigger("reset");
			$('.modal-title').html("<?php echo e(lang('Add New Feature Box')); ?>");
			$('#addfeature').modal('show');
		});

		/* When click edit featurebox */
		$('body').on('click', '.edit-testimonial', function () {
			var testimonial_id = $(this).data('id');
			$.get('feature-box/' + testimonial_id , function (data) {
				$('#nameError').html('');
				$('#descriptionError').html('');
				$('#ImageError').html('');
				$('.modal-title').html("<?php echo e(lang('Edit Feature Box')); ?>");
				$('#btnsave').val("edit-testimonial");
				$('#addfeature').modal('show');
				$('#featurebox_id').val(data.id);
				$('#name').val(data.title);
				$('#description').val(data.subtitle);
				$('#featureboxurl').val(data.featureboxurl);
				if (data.url_checkbox == "on")
				{
					$('#url_checkbox').prop('checked', true);
				}else{
				    $('#url_checkbox').prop('checked', false);
				}

			})
		});

		// Delete Featurebox function
		$('body').on('click', '#delete-testimonial', function () {
			var _id = $(this).data("id");
			swal({
				title: `<?php echo e(lang('Are you sure you want to continue?', 'alerts')); ?>`,
				text: "<?php echo e(lang('This might erase your records permanently', 'alerts')); ?>",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: "get",
						url: SITEURL + "/admin/feature-box/delete/"+_id,
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

		// Feature Box Submit button
		$('body').on('submit', '#featurebox_form', function (e) {
			e.preventDefault();
			var actionType = $('#btnsave').val();
			var fewSeconds = 2;
			$('#btnsave').html('Sending..');
			$('#btnsave').prop('disabled', true);
			setTimeout(function(){
				$('#btnsave').prop('disabled', false);
			}, fewSeconds*1000);
			var formData = new FormData(this);
			$.ajax({
				type:'POST',
				url: SITEURL + "/admin/feature-box/create",
				data: formData,
				cache:false,
				contentType: false,
				processData: false,
				success: (data) => {
					if(data.errors){
						$('#nameError').html('');
						$('#descriptionError').html('');
						$('#ImageError').html('');
						$('#nameError').html(data.errors.title);
						$('#descriptionError').html(data.errors.subtitle);
						$('#ImageError').html(data.errors.image);
						$('#btnsave').html('<?php echo e(lang('Save Changes')); ?>');
					}
					if(data.success){
						$('#nameError').html('');
						$('#descriptionError').html('');
						$('#ImageError').html('');
						$('#featurebox_form').trigger("reset");
						$('#addfeature').modal('hide');
						$('#btnsave').html('<?php echo e(lang('Save Changes')); ?>');
						toastr.success(data.success);
						location.reload();
					}
				},
				error: function(data){
					$('#nameError').html('');
					$('#descriptionError').html('');
					$('#ImageError').html('');
					console.log('Error:', data);
					$('#btnsave').html('<?php echo e(lang('Save Changes')); ?>');
				}
			});
		});
		// Mass Delete
		$('body').on('click', '#massdeletenotify', function () {
			var id = [];
			$('.checkall:checked').each(function(){
				id.push($(this).val());
			});
			if(id.length > 0){
				swal({
					title: `<?php echo e(lang('Are you sure you want to continue?', 'alerts')); ?>`,
					text: "<?php echo e(lang('This might erase your records permanently', 'alerts')); ?>",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url:"<?php echo e(route('featurebox.deleteall')); ?>",
							method:"post",
							data:{id:id},
							success:function(data)
							{
								toastr.success(data.success);
								location.reload();

							},
							error:function(data){
							}
						});
					}
				});
			}else{
				toastr.error('<?php echo e(lang('Please select at least one check box.', 'alerts')); ?>');
			}
		});

		//checkbox checkall
		$('#customCheckAll').on('click', function() {
			$('.checkall').prop('checked', this.checked);
		});

		$('.form-select').select2({
			minimumResultsForSearch: Infinity,
			width: '100%'
		});
		$('#customCheckAll').prop('checked', false);
		$('.checkall').on('click', function(){
			if($('.checkall:checked').length == $('.checkall').length){
				$('#customCheckAll').prop('checked', true);
			}else{
				$('#customCheckAll').prop('checked', false);
			}
		});

	})(jQuery);

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mbiraHelp\resources\views/admin/featurebox/index.blade.php ENDPATH**/ ?>