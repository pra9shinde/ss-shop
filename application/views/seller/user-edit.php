<style>
	.users-view .users-avatar-shadow,
	.users-edit .users-avatar-shadow {
		box-shadow: 2px 4px 14px 0 rgba(0, 0, 0, 0.4);
	}
</style>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<!-- users edit start -->
			<section class="users-edit">
				<div class="card">
					<div class="card-content">
						<div class="card-body">
							<ul class="nav nav-tabs mb-2" role="tablist">
								<li class="nav-item">
									<a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
										<i class="ft-user mr-25"></i><span class="d-none d-sm-block">Account</span>
									</a>
								</li>

								<?php if ($seller_profile_det['source'] === 'mobile') : ?>
									<li class="nav-item">
										<a class="nav-link d-flex align-items-center" id="password-tab" data-toggle="tab" href="#password-change" aria-controls="password" role="tab" aria-selected="true">
											<i class="la la-key mr-25"></i><span class="d-none d-sm-block">Change Password</span>
										</a>
									</li>
								<?php endif; ?>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
									<!-- users edit media object start -->
									<form id="update-seller-details" action="<?= base_url() ?>Shop/update_seller_details" enctype="multipart/form-data">
										<div class="media mb-2">
											<a class="mr-2" href="#">
												<img src="<?= base_url() . $seller_details['profile_picture'] ?>" alt="users avatar" class="users-avatar-shadow rounded-circle" height="80" width="80">
												<input type="file" id="profile_image" name="profile_image" style="display:none" />
											</a>
											<div class="media-body">
												<h4 class="media-heading">Avatar</h4>
												<div class="col-12 px-0 d-flex">
													<a href="#" class="btn btn-sm btn-primary mr-25" id="OpenImgUpload">Change</a>
													<a href="#" class="btn btn-sm btn-secondary">Reset</a>
												</div>
											</div>
										</div>
										<!-- users edit media object ends -->
										<!-- users edit account form start -->
										<div class="row">
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<div class="controls">
														<label>Name</label>
														<input type="text" class="form-control" placeholder="Name" name="name" id="name" value="<?= $seller_details['name'] ?>">
														<input type="hidden" name="source" id="source" value="<?= $seller_profile_det['source'] ?>">
														<input type="hidden" name="id" id="id" value="<?= $seller_profile_det['id'] ?>">
													</div>
												</div>
												<div class="form-group">
													<div class="controls">
														<label>Shop Name</label>
														<input type="text" class="form-control" placeholder="Shop Name" name="shop_name" id="shop_name" value="<?= $seller_details['shop_name'] ?>">
													</div>
												</div>
												<div class="form-group">
													<div class="controls">
														<label>E-mail</label>
														<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?= $seller_details['email'] ?>">
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<div class="controls">
														<label>Mobile No</label>
														<input type="text" class="form-control" placeholder="Mobile No" name="phone" id="phone" value="<?= $seller_details['phone'] ?>" maxlength="10">
													</div>
												</div>

												<div class="form-group">
													<div class="controls">
														<label>Shop Address</label>
														<textarea class="form-control" id="address" rows="6" placeholder="Address" name="address" id="address"><?= $seller_details['shop_address'] ?></textarea>
													</div>
												</div>

											</div>
											<div class="col-12 col-sm-6">

												<div class="form-group">
													<div class="controls">
														<label>Pin/Zip Code</label>
														<input type="text" class="form-control" placeholder="Pin/Zip Code" name="pin" id="pin" value="<?= $seller_details['pin'] ?>">
													</div>
												</div>
											</div>
											<div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
												<button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
													changes</button>
												<button type="reset" class="btn btn-light">Cancel</button>
											</div>
										</div>
									</form>
									<!-- users edit account form ends -->
								</div>

								<?php if ($seller_profile_det['source'] === 'mobile') : ?>
									<div class="tab-pane" id="password-change" aria-labelledby="password-tab" role="tabpanel">
										<!-- users edit media object start -->
										<form id="update-seller-password" action="<?= base_url() ?>Shop/change_password_seller">
											<div class="media mb-2">
												<a class="mr-2" href="#">
													<img src="<?= base_url() . $seller_details['profile_picture'] ?>" alt="users avatar" class="users-avatar-shadow rounded-circle" height="80" width="80">
												</a>
												<div class="media-body">
													<h4 class="media-heading"><?= $seller_details['shop_name'] ?> : <?= $seller_details['name'] ?></h4>
												</div>
											</div>
											<!-- users edit media object ends -->
											<!-- users edit account form start -->
											<div class="row">
												<div class="col-12 col-sm-6">
													<div class="form-group">
														<div class="controls">
															<label>Old Password</label>
															<input type="password" class="form-control" placeholder="Existing Password*" name="old_pass" id="old_pass">
															<input type="hidden" name="source" id="source" value="<?= $seller_profile_det['source'] ?>">
															<input type="hidden" name="id" id="id" value="<?= $seller_profile_det['id'] ?>">
														</div>
													</div>
													<div class="form-group">
														<div class="controls">
															<label>New Password</label>
															<input type="password" class="form-control" placeholder="Password*" name="password" id="password">
														</div>
													</div>
													<div class="form-group">
														<div class="controls">
															<label>Confirm Password</label>
															<input type="password" class="form-control" placeholder="Retype New Password*" name="password2" id="password2">
														</div>
													</div>
												</div>

												<div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
													<button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
														Changes</button>
													<button type="reset" class="btn btn-light">Cancel</button>
												</div>
											</div>
										</form>
										<!-- users edit account form ends -->
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- users edit ends -->
		</div>
	</div>
</div>
<!-- END: Content-->

<script>
	$('#OpenImgUpload').click(function() {
		$('#profile_image').trigger('click');
	});

	//Update Buyer Details
	$("#update-seller-details").submit(function(e) {
		e.preventDefault();
		var form = $('#update-seller-details')[0]; // You need to use standard javascript object here
		var formData = new FormData(form);

		$.ajax({
			type: "POST",
			dataType: 'json',
			processData: false,
			contentType: false,
			url: $(this).attr("action"),
			data: formData,
			success: function(data) {
				if (data.type === "success") {
					toastr.success(data.message, 'User Details Update', {
						"timeOut": 3000
					});
					window.location.reload();
				} else {
					toastr.error(data.message, 'User Details Update', {
						"timeOut": 1000
					});
				}
			},
			error: function(xhr, status, error) {
				toastr.error(error, 'User Details Update', {
					"timeOut": 1000
				});
				console.log('An error occurred.' + error);
			},
			beforeSend: function() {
				$("#ajax-loader").fadeIn(500);
			},
			complete: function() {
				setTimeout(function() {
					$("#ajax-loader").fadeOut(500);
				}, 500);
			}
		});
	});

	//Change Password
	$("#update-seller-password").submit(function(e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function(data) {
				if (data.type === "success") {
					toastr.success(data.message, 'Password Update', {
						"timeOut": 3000
					});
					document.getElementById('update-seller-password').reset();
				} else {
					toastr.error(data.message, 'Password Update', {
						"timeOut": 3000
					});
				}
			},
			error: function(xhr, status, error) {
				toastr.error(error, 'Password Update', {
					"timeOut": 3000
				});
				console.log('An error occurred.' + error);
			},
			beforeSend: function() {
				$("#ajax-loader").fadeIn(500);
			},
			complete: function() {
				setTimeout(function() {
					$("#ajax-loader").fadeOut(500);
				}, 500);
			}
		});
	});
</script>