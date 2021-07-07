 <input type="hidden" id="success_redirect" name="success_redirect" value="<?= base_url() ?>">
 <!-- BEGIN: Content-->
 <div class="app-content content">
 	<div class="content-overlay"></div>
 	<div class="content-wrapper">
 		<div class="content-header row">
 		</div>
 		<div class="content-body">
 			<section class="row flexbox-container">
 				<div class="col-12 d-flex align-items-center justify-content-center">
 					<div class="col-lg-4 col-md-8  box-shadow-2 p-0">
 						<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
 							<div class="card-header border-0" style="padding: 0">
 								<div class="card-title text-center">
 									<img src="<?= base_url() ?>assets/login/people.svg" alt="K2C Logo" style="height: 100px; ">
 									<h1 style="font-weight:600; margin-top:10px;">K2C Login</h1>

 								</div>
 								<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
 							</div>
 							<div class="card-content">
 								<div class="text-center">
 									<div class="row">
 										<div class="social-login" style="display: flex; flex-direction:column">
 											<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin: 10px;"></div>
 											<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                                             </fb:login-button> -->

 											<!-- <div id="fb-root"></div>
 											<div class="fb-login-button" data-size="medium" data-button-type="continue_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div> -->

 										</div>
 									</div>
 								</div>
 								<p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
 										Details</span></p>
 								<div class="card-body">
 									<form class="form-horizontal" action="<?= base_url() ?>Shop/k2clogin" id="k2c-login-form">
 										<fieldset class="form-group position-relative has-icon-left">
 											<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.*">
 											<div class="form-control-position">
 												<i class="la la-user"></i>
 											</div>
 										</fieldset>
 										<fieldset class="form-group position-relative has-icon-left">
 											<input type="password" class="form-control" id="k2c-password" name="k2c-password" placeholder="Enter Password*">
 											<div class="form-control-position">
 												<i class="la la-key"></i>
 											</div>
 										</fieldset>
 										<div class="form-group row">
 											<div class="col-sm-6 col-12 text-center text-sm-left pr-0">
 												<fieldset>
 													<input type="checkbox" id="remember-me" class="chk-remember">
 													<label for="remember-me"> Remember Me</label>
 												</fieldset>
 											</div>
 											<div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a onclick="forgotPassword()" class="card-link">Forgot Password?</a></div>
 										</div>
 										<button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
 									</form>
 								</div>
 								<p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to K2C
 										?</span></p>
 								<div class="card-body">
 									<a href="<?= base_url() ?>Shop/user_register" class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
 										Register</a>
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
 	$(document).ready(function() {
 		'use strict';

 		// Remember checkbox
 		if ($('.chk-remember').length) {
 			$('.chk-remember').iCheck({
 				checkboxClass: 'icheckbox_square-blue',
 				radioClass: 'iradio_square-blue',
 			});
 		}

 		// For change default year in copyright
 		var $year = new Date().getFullYear();
 		$(".year").text($year);

 		//Set the success redirect of the app

 		let successRedirect = getUrlKey('redirect', window.location.href);
 		if (successRedirect === 'cart') {
 			let ip_address = $('#cart-link').data('ip_address');
 			$('#success_redirect').attr('value', '<?= base_url() ?>Shop/cart/' + ip_address);
 		}



 	});

 	//on google sigin
 	function onSignIn(googleUser) {
 		// Useful data for your client-side scripts:
 		var profile = googleUser.getBasicProfile();


 		var userData = {
 			login_oauth_uid: profile.getId(),
 			name: profile.getGivenName(),
 			last_name: profile.getFamilyName(),
 			email: profile.getEmail(),
 			profile_picture: profile.getImageUrl(),
 			source: 'google'
 		}

 		//Check if user has entered all details
 		var successRedirect = $('#success_redirect').val();
 		$.ajax({
 			type: "POST",
 			dataType: 'json',
 			url: '<?= base_url() ?>Shop/check_buyer_details',
 			data: {
 				'user_data': userData
 			},
 			success: function(data) {
 				if (data.type === "success") {
 					if (data.status === "complete") {
 						//User Already exists
 						toastr.success("Congratulations, We have all of your details!", 'User Login', {
 							"timeOut": 1000
 						});

 						let successRedirect = getUrlKey('redirect', window.location.href);
 						if (successRedirect === 'cart') {
 							let ip_address = $.cookie('client_ip');
 							$('#success_redirect').attr('value', '<?= base_url() ?>Shop/cart/' + ip_address);
 						}

 						//Redirect to success redirect link
 						window.location.href = $('#success_redirect').val();

 					} else if (data.status === "incomplete") {
 						//User Already exists but incomplete data

 						//Javascript redirect with post method
 						postAndRedirect('<?= base_url() ?>Shop/user_details?redirect=cart', userData);
 					} else {
 						//New User
 						toastr.warning("Unfortunately, We don't have your details, Please Enter your details!", 'Mobile Check', {
 							"timeOut": 1000
 						});

 						$('.mobile-check').fadeOut(1000);
 						$('.new-user').fadeIn(1000);
 					}
 				} else {
 					toastr.error(data.message, 'Check User Details', {
 						"timeOut": 1000
 					});
 				}
 			},
 			error: function(xhr, status, error) {
 				toastr.error(error, 'Mobile Check', {
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

 	}

 	//Mobile Nu. Login
 	$("#k2c-login-form").submit(function(e) {
 		e.preventDefault();
 		$.ajax({
 			type: "POST",
 			dataType: 'json',
 			url: $(this).attr("action"),
 			data: $(this).serialize(),
 			success: function(data) {
 				if (data.type === "success") {
 					toastr.success(data.message, 'K2C Login', {
 						"timeOut": 1000
 					});
 					document.getElementById("k2c-login-form").reset();

 					let successRedirect = getUrlKey('redirect', window.location.href);
 					if (successRedirect === 'cart') {
 						let ip_address = $('#cart-link').data('ip_address');
 						redirect = '<?= base_url() ?>Shop/cart/' + ip_address;
 					} else {
 						redirect = '<?= base_url() ?>'
 					}
 					window.location.href = redirect;
 				} else {
 					toastr.error(data.message, 'K2C Login', {
 						"timeOut": 1000
 					});

 				}
 			},
 			error: function(xhr, status, error) {
 				toastr.error(error, 'K2C Login', {
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

 	//Forgot Password
 	function forgotPassword() {
 		$.ajax({
 			type: "POST",
 			dataType: 'json',
 			url: '<?= base_url() ?>Shop/buyer_forget_password',
 			data: $('#k2c-login-form').serialize(),
 			success: function(data) {
 				if (data.type === "success") {
 					toastr.success(data.message, 'K2C Login', {
 						"timeOut": 1000
 					});
 					document.getElementById("k2c-login-form").reset();
 					window.location = data.redirect;
 				} else {
 					toastr.error(data.message, 'K2C Login', {
 						"timeOut": 1000
 					});
 				}
 			},
 			error: function(xhr, status, error) {
 				toastr.error(error, 'K2C Login', {
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
 	}
 </script>

 <!-- FB Login Functions -->

 <!-- Custom Styled Button Remove this if custom is not needed -->
 <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script> -->
 <!-- Custom Styled Button  -->

 <!-- <script>
 	function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
 		console.log('statusChangeCallback');
 		console.log(response); // The current login status of the person.
 		if (response.status === 'connected') { // Logged into your webpage and Facebook.
 			testAPI();
 		} else { // Not logged into your webpage or we are unable to tell.
 			//  document.getElementById('status').innerHTML = 'Please log ' +
 			//      'into this webpage.';
 		}
 	}


 	function checkLoginState() { // Called when a person is finished with the Login Button.
 		FB.getLoginStatus(function(response) { // See the onlogin handler
 			statusChangeCallback(response);
 		});
 	}


 	window.fbAsyncInit = function() {
 		FB.init({
 			appId: '<?= FB_APP_ID ?>',
 			cookie: true, // Enable cookies to allow the server to access the session.
 			xfbml: true, // Parse social plugins on this webpage.
 			version: 'v7.0' // Use this Graph API version for this call.
 		});


 		FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
 			statusChangeCallback(response); // Returns the login status.
 		});
 	};


 	(function(d, s, id) { // Load the SDK asynchronously
 		var js, fjs = d.getElementsByTagName(s)[0];
 		if (d.getElementById(id)) return;
 		js = d.createElement(s);
 		js.id = id;
 		js.src = "https://connect.facebook.net/en_US/sdk.js";
 		fjs.parentNode.insertBefore(js, fjs);
 	}(document, 'script', 'facebook-jssdk'));


 	function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
 		console.log('Welcome!  Fetching your information.... ');
 		FB.api('/me', function(response) {
 			//  console.log('Successful login for: ' + response.name);
 			//  document.getElementById('status').innerHTML =
 			//      'Thanks for logging in, ' + response.name + '!';
 		});
 	}
 </script> -->
 <!-- FB Login Functions -->