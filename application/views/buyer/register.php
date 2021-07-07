  <!-- BEGIN: Content-->
  <div class="app-content content">
  	<div class="content-overlay"></div>
  	<div class="content-wrapper">
  		<div class="content-header row">
  		</div>
  		<div class="content-body">
  			<section class="row flexbox-container">
  				<div class="col-12 d-flex align-items-center justify-content-center">
  					<div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0" style="margin-bottom: 40px;">
  						<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
  							<div class="card-header border-0 pb-0">
  								<div class="card-title text-center">
  									<img src="<?= base_url() ?>assets/login/people.svg" alt="K2C Logo" style="height: 100px; ">
  									<h1 style="font-weight:600; margin-top:10px;">K2C Register</h1>

  								</div>
  							</div>
  							<div class="card-content">
  								<div class="card-body">
  									<form id="new-user-form" action="<?= base_url() ?>Shop/register_buyer" enctype="multipart/form-data">
  										<fieldset class="form-group position-relative">
  											<div class="custom-file">
  												<input type="file" class="custom-file-input" id="user_image" name="user_image">
  												<label class="custom-file-label" for="user_image" aria-describedby="user_image">Profile Picture (Optional)</label>
  											</div>
  										</fieldset>

  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name*">
  											<div class="form-control-position">
  												<i class="la la-user"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Surname*">
  											<div class="form-control-position">
  												<i class="la la-user"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="Mobile No*" maxlength="10">
  											<div class="form-control-position">
  												<i class="la la-mobile"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password*">
  											<div class="form-control-position">
  												<i class="la la-key"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re Enter Password*">
  											<div class="form-control-position">
  												<i class="la la-key"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email Address*">
  											<div class="form-control-position">
  												<i class="la la-envelope"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_address_1" name="user_address_1" placeholder="Address Line 1*">
  											<div class="form-control-position">
  												<i class="la la-home"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_address_2" name="user_address_2" placeholder="Address Line 2*">
  											<div class="form-control-position">
  												<i class="la la-home"></i>
  											</div>
  										</fieldset>
  										<fieldset class="form-group position-relative has-icon-left">
  											<input type="text" class="form-control" id="user_pincode" name="user_pincode" placeholder="Pin/Zip Code*" maxlength="6">
  											<div class="form-control-position">
  												<i class="la la-map-pin"></i>
  											</div>
  										</fieldset>

  										<button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Register</button>
  									</form>
  								</div>
  								<div class="card-body">
  									<a href="<?= base_url() ?>Shop/user_login" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
  										Login</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</section>

  		</div>
  	</div>
  </div>
  <!-- END: Content-->

  <script>
  	//Create new user
  	$("#new-user-form").submit(function(e) {
  		e.preventDefault();
  		var form = $('#new-user-form')[0]; // You need to use standard javascript object here
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
  					toastr.success(data.message, 'New User Creation', {
  						"timeOut": 1000
  					});
  					document.getElementById("new-user-form").reset();
  					$('.custom-file input').next('.custom-file-label').html('Profile Picture (Optional)');

  					if (data.redirect !== '') {
  						setTimeout(function() {
  							window.location.href = data.redirect;
  						}, 2000);
  					}

  				} else {
  					toastr.error(data.message, 'New User Creation', {
  						"timeOut": 1000
  					});


  				}
  			},
  			error: function(xhr, status, error) {
  				toastr.error(error, 'New User Creation', {
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