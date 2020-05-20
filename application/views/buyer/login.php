 <input type="text" id="success_redirect" name="success_redirect" value="<?= base_url() ?>">
 <!-- BEGIN: Content-->
 <div class="app-content content">
     <div class="content-overlay"></div>
     <div class="content-wrapper">
         <div class="content-header row">
         </div>
         <div class="content-body">
             <section class="row flexbox-container">
                 <div class="col-12 d-flex align-items-center justify-content-center">
                     <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
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
                                         <div class="social-login">
                                             <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
                                         Details</span></p>
                                 <div class="card-body">
                                     <form class="form-horizontal" action="" novalidate>
                                         <fieldset class="form-group position-relative has-icon-left">
                                             <input type="text" class="form-control" id="mobile" placeholder="Mobile No.*" required>
                                             <div class="form-control-position">
                                                 <i class="la la-user"></i>
                                             </div>
                                         </fieldset>
                                         <fieldset class="form-group position-relative has-icon-left">
                                             <input type="password" class="form-control" id="user-password" placeholder="Enter Password" required>
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
                                             <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
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

         //create user session
         $.ajax({
             type: "POST",
             dataType: 'json',
             url: '<?= base_url() ?>Shop/create_user_session',
             data: {
                 'user_data': userData
             },
             success: function(data) {
                 if (data.type === "success") {
                     if (data.status === "complete") {
                         //User Already exists
                         toastr.success("You are already logged in", 'User Login', {
                             "timeOut": 1000
                         });
                         checkUserDetails(userData);
                     }
                 } else {
                     toastr.error(data.message, 'User Login', {
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

         /*
             $.ajax({
                 type: "POST",
                 dataType: 'json',
                 url: '<?= base_url() ?>Shop/check_google_account',
                 data: {
                     'google_data': userData
                 },
                 success: function(data) {
                     if (data.type === "success") {
                         if (data.status === "complete") {
                             //User Already exists
                             toastr.success("Congratulations, We have your details!", 'User Login', {
                                 "timeOut": 1000
                             });

                             //Create Order
                             createOrder(data.mobileNo);
                         } else if (data.status === "incomplete") {
                             //User Already exists but incomplete data
                             // console.log(data.user_data);
                         } else {
                             //New User
                             toastr.warning("Unfortunately, We don't have your details, Please Enter your details!", 'Mobile Check', {
                                 "timeOut": 1000
                             });

                             $('.mobile-check').fadeOut(1000);
                             $('.new-user').fadeIn(1000);
                         }
                     } else {
                         toastr.error(data.message, 'Mobile Check', {
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
         */
     }

     //Check if user has filled all details
     function checkUserDetails(userData) {
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
                         toastr.success("You are already logged in", 'User Login', {
                             "timeOut": 1000
                         });
                     }
                 } else {
                     toastr.error(data.message, 'User Login', {
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
 </script>