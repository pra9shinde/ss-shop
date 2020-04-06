<html lang="en">
  <head>
    <base href="<?=base_url()?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="author" content="EI India">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- <link href="img/favicon.png" rel="shortcut icon"> -->

    <title>Smart Society Services | Login</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

		<link rel="stylesheet" href="<?=base_url()?>assets/login/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/login/login.css">
  </head>

  <body data-baseurl="<?= base_url(); ?>">

		<div class="comp-logo clearfix" style="margin-top:20px;">
			<img src="<?=base_url()?>assets/login/LogoBig.png" alt="" srcset="">
		</div>
		<div class="container" id="container" style="margin-top:10px;">
			<div class="form-container sign-up-container">
				<form id="formRegister" action="<?=base_url()?>Shop/register">
					<h1>Create Account</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your mobile no. for registration</span>
					<div id="register-message"></div>
					<input type="text" placeholder="Shop Name*" name="shop" id="shop">
					<div class="mobile-field" style="width:100%"> 
						<img src="<?=base_url()?>assets/login/india.svg" alt="">
						<input type="text" placeholder="Mobile no.*" name="mobile" id="mobile" maxlength="10">
					</div>
					<input type="text" placeholder="Shop Pincode*" name="pin" id="pin" maxlength="6">
					<input type="password" placeholder="Password*" name="password" id="password">
					<input type="password" placeholder="Confirm Password*" name="confirm_password" id="confirm_password">

					<button>Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form id="login_form" action="<?=base_url()?>Shop/login">
					<h1>Sign in</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your account</span>
					<div id="alert-message"></div>
					<div class="mobile-field" style="width:100%"> 
						<img src="<?=base_url()?>assets/login/india.svg" alt="">
						<input type="text" placeholder="Mobile no.*" name="mobile_login" id="mobile_login"  maxlength="10">
					</div>
					
					<input type="password" placeholder="Password*" name="password_login" id="password_login">

					<a href="#">Forgot your password?</a>
					<button>Sign In</button>
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
			Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="<?= base_url() ?>"> Smart Society Services</a><i class="fa fa-heart"></i> </a>
			</p>
		</footer>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/login/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/login/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/login/bootstrap.min.js"></script>
    
		<script type="text/javascript">
			$("document").ready(function() {
				$("#login_form").submit(function(e) {
					e.preventDefault();
					$.ajax({
						type: "POST",
						dataType : 'json',
						url: $(this).attr("action"),
						data: $(this).serialize(),
						beforeSend: function() {
							$($(this).find("input[type='submit']")).attr("disabled", "disabled");
						},
						success: function(data) {
							if(data.type === "success") {
								$("#alert-message").html('<div class="alert alert-success alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>'+data.message+'</div>');
								window.location = data.redirect;
								document.getElementById("login_form").reset(); 
								$('#login_form')[0].reset();
							} else {
								$("#alert-message").html('<div class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>'+data.message+'</div>');
							}
						},
						error: function(xhr, status, error) {
							console.log('An error occurred.' + error);
						},
						complete: function() {
							document.getElementById("login_form").reset(); 
						}
					});
				});


				$('#formRegister').validate({
					rules: {
						shop : {
							required: true
						},
						mobile: {
							required: true
						},
						pin : {
							required:true
						},
						password : {
							required:true
						},
						confirm_password : {
							equalTo: "#password",
							required:true
						}
					},
					messages: {
						shop : {required:'Shop Name is required'},
						mobile: { required: 'Mobile No is required' },
						pin: { required:"Shop Pincode is required" },
						password: { required:"Password is required" },
						confirm_password: { required:"Confirm Password is required", equalTo:"Password Mismatch" }
					},
					submitHandler: function(form) {
					$("#register-message").html("");
					$.ajax({
						type: "POST",
						dataType : 'json',
						url: $(form).attr("action"),
						data: $(form).serialize(),
						beforeSend: function() {
							$($(form).find("input[type='submit']")).attr("disabled", "disabled");
						},
						success: function(data) {
							if(data.type === "success") {
								$("#register-message").html('<div class="alert alert-success alert-dismissible fade in"><button type="button" id="register-close-noti" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>'+data.message+'</div>');
								document.getElementById("formRegister").reset(); 
								document.getElementById('register-close-noti').addEventListener('click', () => {
									document.getElementById('container').classList.remove("right-panel-active");
								});
								setTimeout(function(){
									document.getElementById('container').classList.remove("right-panel-active");
								}, 1500);
							} else {
								$("#register-message").html('<div class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>'+data.message+'</div>');
							}
						},
						error: function(xhr, status, error) {
							console.log('An error occurred.' + error);
						},
						complete: function() {
							document.getElementById("formRegister").reset(); 
						}
					});
					}
				});
			});
		</script>


  	<script src="<?=base_url()?>assets/login/login.js"></script>

  </body>
</html>
