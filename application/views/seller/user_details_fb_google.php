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
                                      <h1 style="font-weight:600; margin-top:10px;">K2C - User Detials</h1>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                      <form id="complete-user_details-form" action="<?= base_url() ?>Shop/complete_seller_details">
                                          <input type="hidden" name="oauth" id="oauth" value="<?= $user_data['oauth'] ?>">
                                          <input type="hidden" name="oauth_source" id="oauth_source" value="<?= $user_data['source'] ?>">
                                          <input type="hidden" name="profile_picture" id="profile_picture" value="<?= $user_data['profile_picture'] ?>">

                                          <fieldset class="form-group position-relative has-icon-left">
                                              <input type="text" class="form-control" id="shop_name" name="shop_name" placeholder="Shop Name*">
                                              <div class="form-control-position">
                                                  <i class="la la-building"></i>
                                              </div>
                                          </fieldset>

                                          <fieldset class="form-group position-relative has-icon-left">
                                              <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name*" value="<?= $user_data['name'] ?>">
                                              <div class="form-control-position">
                                                  <i class="la la-user"></i>
                                              </div>
                                          </fieldset>
                                          <fieldset class="form-group position-relative has-icon-left">
                                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Surname*" value="<?= $user_data['last_name'] ?>">
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
                                              <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email Address*" value="<?= $user_data['email'] ?>">
                                              <div class="form-control-position">
                                                  <i class="la la-envelope"></i>
                                              </div>
                                          </fieldset>
                                          <fieldset class="form-group position-relative has-icon-left">
                                              <input type="text" class="form-control" id="user_address_1" name="user_address_1" placeholder="Shop Address Line 1*">
                                              <div class="form-control-position">
                                                  <i class="la la-home"></i>
                                              </div>
                                          </fieldset>
                                          <fieldset class="form-group position-relative has-icon-left">
                                              <input type="text" class="form-control" id="user_address_2" name="user_address_2" placeholder="Shop Address Line 2*">
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
                                          <div class="form-group row">
                                              <div class="col-sm-6 col-12 text-center text-sm-left pr-0">

                                              </div>
                                          </div>
                                          <button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Update Details</button>
                                      </form>
                                  </div>
                                  <hr>
                                  <div class="card-body">
                                      <a href="<?= base_url() ?>Shop/user_login" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
                                          Login</a>
                                      <a href="#" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
                                          Logout</a>
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
      //Create or update google/fb user extra details
      $("#complete-user_details-form").submit(function(e) {
          e.preventDefault();
          $.ajax({
              type: "POST",
              dataType: 'json',
              url: $(this).attr("action"),
              data: $(this).serialize(),
              success: function(data) {
                  if (data.type === "success") {
                      toastr.success(data.message, 'New User Creation', {
                          "timeOut": 1000
                      });
                      document.getElementById("complete-user_details-form").reset();

                      window.location = '<?= base_url() ?>Shop/products_config';
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