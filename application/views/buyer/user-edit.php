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
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
									<!-- users edit media object start -->
									<form id="update-buyer-details" action="<?= base_url() ?>Shop/update_buyer_details" enctype="multipart/form-data">
										<div class="media mb-2">
											<a class="mr-2" href="#">
												<img src="<?= base_url() . $buyer_details['profile_picture'] ?>" alt="users avatar" class="users-avatar-shadow rounded-circle" height="80" width="80">
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
														<input type="text" class="form-control" placeholder="Name" name="name" id="name" value="<?= $buyer_details['name'] ?>">
														<input type="hidden" name="source" id="source" value="<?= $buyer_profile_det['source'] ?>">
														<input type="hidden" name="id" id="id" value="<?= $buyer_profile_det['id'] ?>">
													</div>
												</div>
												<div class="form-group">
													<div class="controls">
														<label>Last Name</label>
														<input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname" value="<?= $buyer_details['lastname'] ?>">
													</div>
												</div>
												<div class="form-group">
													<div class="controls">
														<label>E-mail</label>
														<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?= $buyer_details['email'] ?>">
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<div class="controls">
														<label>Mobile No</label>
														<input type="text" class="form-control" placeholder="Mobile No" name="phone" id="phone" value="<?= $buyer_details['phone'] ?>" maxlength="10">
													</div>
												</div>

												<div class="form-group">
													<div class="controls">
														<label>Address</label>
														<textarea class="form-control" id="address" rows="6" placeholder="Address" name="address" id="address"><?= $buyer_details['address'] ?></textarea>
													</div>
												</div>

											</div>
											<div class="col-12 col-sm-6">

												<div class="form-group">
													<div class="controls">
														<label>Pin/Zip Code</label>
														<input type="text" class="form-control" placeholder="Pin/Zip Code" name="pin" id="pin" value="<?= $buyer_details['pin'] ?>">
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

	//Create new user
	$("#update-buyer-details").submit(function(e) {
		e.preventDefault();
		var form = $('#update-buyer-details')[0]; // You need to use standard javascript object here
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
						"timeOut": 1000
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
</script>