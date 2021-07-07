<html lang="en">

<head>
	<base href="<?= base_url() ?>" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">
	<meta name="author" content="EI India">

	<title>Kisan 2 Consumer - K2C | Login</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= base_url() ?>assets/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?= base_url() ?>assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/toastr.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/login/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/login/login.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/theme/css/loaders/loaders.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/theme/css/palette-loader.css">

	<!-- Google Login JS -->
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="<?= GOOGLE_CLIENT_ID_LOCAL ?>">
	<!-- Google Login JS -->
</head>

<body data-baseurl="<?= base_url(); ?>">

	<div class="comp-logo clearfix" style="margin-top:40px;">
		<img src="<?= base_url() ?>assets/login/people.svg" alt="" srcset="">
	</div>
	<div class="container" id="container" style="margin-top:10px;">
		<div class="form-container sign-up-container">
			<form id="formRegister" action="<?= base_url() ?>Shop/register">
				<h1>Create Account</h1>
				<span>Use your mobile no. for registration</span>
				<div id="register-message"></div>
				<input type="text" placeholder="Your Name*" name="name" id="name">
				<input type="text" placeholder="Shop Name*" name="shop" id="shop">
				<input type="text" placeholder="Shop Address*" name="shop_address" id="shop_address">
				<div class="mobile-field" style="width:100%">
					<img src="<?= base_url() ?>assets/login/india.svg" alt="">
					<input type="text" placeholder="Mobile no.*" name="mobile" id="mobile" maxlength="10">
				</div>
				<input type="text" placeholder="Email*" name="email" id="email">
				<input type="text" placeholder="Shop Pincode*" name="pin" id="pin" maxlength="6">
				<input type="password" placeholder="Password*" name="password" id="password">
				<input type="password" placeholder="Confirm Password*" name="confirm_password" id="confirm_password">

				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form id="login_form" action="<?= base_url() ?>Shop/login">
				<h1>Sign in</h1>
				<div class="social-login" style="display: flex; flex-direction:column">
					<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin: 10px;"></div>

				</div>
				<span>or use your account</span>
				<div id="alert-message"></div>
				<div class="mobile-field" style="width:100%">
					<img src="<?= base_url() ?>assets/login/india.svg" alt="">
					<input type="text" placeholder="Mobile no.*" name="mobile_login" id="mobile_login" maxlength="10">
				</div>

				<input type="password" placeholder="Password*" name="password_login" id="password_login">

				<a onclick="forgotPassword()">Forgot your password?</a>
				<button>Sign In</button>
			</form>

			<form id="forget-password-form" style="display: none;" action="<?= base_url() ?>Shop/reset_seller_password">
				<h1>Recover Password</h1>
				<span>We've sent verification code to a@a.com email</span>
				<input type="hidden" id="seller_id_forget" name="seller_id_forget">
				<input type="text" placeholder="6 Digit Code*" name="code" id="code" maxlength="6">
				<input type="password" placeholder="New Password*" name="password_forget" id="password_forget">
				<input type="password" placeholder="Confirm Password*" name="password2_forget" id="password2_forget">
				<button>Update Password</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<p>
			Copyright &copy; <script>
				document.write(new Date().getFullYear());
			</script> All rights reserved |<a href="<?= base_url() ?>"> Kisaan 2 Consumer</a><i class="fa fa-heart"></i> </a>
		</p>
	</footer>

	<div class="loader-wrapper" id="ajax-loader">
		<div class="loader-container">
			<div class="ball-scale-ripple loader-deep-orange">
				<div></div>
			</div>
		</div>
	</div>


	<!-- js placed at the end of the document so the pages load faster -->
	<script src="<?= base_url() ?>assets/login/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/login/jquery.validate.min.js"></script>
	<script src="<?= base_url() ?>assets/login/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/theme/js/vendors/toastr.min.js"></script>

	<script type="text/javascript">
		$("document").ready(function() {
			$("#login_form").submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: $(this).attr("action"),
					data: $(this).serialize(),
					beforeSend: function() {
						$($(this).find("input[type='submit']")).attr("disabled", "disabled");
					},
					success: function(data) {
						if (data.type === "success") {
							toastr.success(data.message, 'User Login', {
								"timeOut": 3000
							});
							window.location = data.redirect;
							document.getElementById("login_form").reset();
							$('#login_form')[0].reset();
						} else {
							toastr.error(data.message, 'User Login', {
								"timeOut": 3000
							});
						}
					},
					error: function(xhr, status, error) {
						toastr.error(error, 'User Login', {
							"timeOut": 3000
						});
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


			$('#formRegister').validate({
				rules: {
					shop: {
						required: true
					},
					mobile: {
						required: true
					},
					pin: {
						required: true
					},
					password: {
						required: true
					},
					confirm_password: {
						equalTo: "#password",
						required: true
					}
				},
				messages: {
					shop: {
						required: 'Shop Name is required'
					},
					mobile: {
						required: 'Mobile No is required'
					},
					pin: {
						required: "Shop Pincode is required"
					},
					password: {
						required: "Password is required"
					},
					confirm_password: {
						required: "Confirm Password is required",
						equalTo: "Password Mismatch"
					}
				},
				submitHandler: function(form) {
					$("#register-message").html("");
					$.ajax({
						type: "POST",
						dataType: 'json',
						url: $(form).attr("action"),
						data: $(form).serialize(),
						beforeSend: function() {
							$($(form).find("input[type='submit']")).attr("disabled", "disabled");
						},
						success: function(data) {
							if (data.type === "success") {
								toastr.success(data.message, 'User Registration', {
									"timeOut": 3000
								});
								document.getElementById("formRegister").reset();
								document.getElementById('register-close-noti').addEventListener('click', () => {
									document.getElementById('container').classList.remove("right-panel-active");
								});
								setTimeout(function() {
									document.getElementById('container').classList.remove("right-panel-active");
								}, 1500);
							} else {
								toastr.error(data.message, 'User Registration', {
									"timeOut": 3000
								});
							}
						},
						error: function(xhr, status, error) {
							toastr.error(error, 'User Logout', {
								"timeOut": 3000
							});
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
			});
		});


		//Forgot Password
		function forgotPassword() {
			if ($('#mobile_login').val().length === 10) {
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: '<?= base_url() ?>Shop/seller_forget_password',
					data: $('#login_form').serialize(),
					success: function(data) {
						if (data.type === "success") {
							toastr.success(data.message, 'K2C Login', {
								"timeOut": 1000
							});
							document.getElementById("login_form").reset();
							$("#login_form").fadeOut(1000);
							$("#forget-password-form").fadeIn(1000);

							//Set the seller id for update password form
							if (data.seller_id) {
								$("#seller_id_forget").attr('value', data.seller_id);
							}
						} else {
							toastr.error(data.message, 'K2C Login', {
								"timeOut": 3000
							});
						}
					},
					error: function(xhr, status, error) {
						toastr.error(error, 'K2C Login', {
							"timeOut": 3000
						});
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
			} else {
				toastr.error('Enter your Mobile Number', 'K2C Forget Password', {
					"timeOut": 3000
				});
			}


		}

		//Verify Code and Reset Password
		$("#forget-password-form").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				dataType: 'json',
				url: $(this).attr("action"),
				data: $(this).serialize(),
				success: function(data) {
					if (data.type === "success") {
						toastr.success(data.message, 'K2C Login', {
							"timeOut": 2000
						});
						document.getElementById("forget-password-form").reset();
						setTimeout(function() {
							$("#forget-password-form").fadeOut(1000);
							$("#login_form").fadeIn(1000);
						}, 1000);
					} else {
						toastr.error(data.message, 'K2C Login', {
							"timeOut": 2000
						});
					}
				},
				error: function(xhr, status, error) {
					toastr.error(error, 'K2C Login', {
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


		$(window).on('load', function() {
			setTimeout(function() {
				$("#ajax-loader").fadeOut(500);
			}, 500);
		});
	</script>


	<script>
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


			// Check if user has entered all details
			var successRedirect = $('#success_redirect').val();
			$.ajax({
				type: "POST",
				dataType: 'json',
				url: '<?= base_url() ?>Shop/check_seller_details',
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


							//Redirect to success redirect link
							window.location = '<?= base_url() ?>Shop/products_config';

						} else if (data.status === "incomplete") {
							//User Already exists but incomplete data

							//Javascript redirect with post method
							postAndRedirect('<?= base_url() ?>Shop/seller_details', userData);
						} else {
							//New User
							toastr.warning("Unfortunately, We don't have your details, Please Enter your details!", 'Mobile Check', {
								"timeOut": 1000
							});

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

		//Google Login - Initialize auth when script is loaded
		function onLoad() {
			gapi.load('auth2', function() {
				gapi.auth2.init();
			});
		}

		//Use redirection with post http method
		function postAndRedirect(url, postData) {
			var postFormStr = "<form method='POST' action='" + url + "'>\n";

			for (var key in postData) {
				if (postData.hasOwnProperty(key)) {
					postFormStr += "<input type='hidden' name='" + key + "' value='" + postData[key] + "'></input>";
				}
			}

			postFormStr += "</form>";

			var formElement = $(postFormStr);

			$('body').append(formElement);
			$(formElement).submit();
		}
	</script>

	<script src="<?= base_url() ?>assets/login/login.js"></script>
	<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>

</body>

</html>