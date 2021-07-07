<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="<?= base_url() ?>assets/login/people.svg" alt="K2C Logo" style="height: 100px; ">
                                    <h1 style="font-weight:600; margin-top:10px;">K2C</h1>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>We have sent you 6 digit verification code to <?= $user_details['email'] ?></span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" action="<?= base_url() ?>Shop/reset_buyer_password" id="verify-password-form">
                                        <fieldset class="form-group position-relative has-icon-left error">
                                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                            <input type="text" class="form-control" id="verification_code" name="verification_code" placeholder="6 Digit Verification Code*" maxlength="6">
                                            <div class="form-control-position">
                                                <i class="la la-envelope"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left error">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password*">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left error">
                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password*">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-outline-info btn-lg btn-block"><i class="ft-unlock"></i> Reset
                                            Password</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <p class="float-sm-left text-center"><a href="<?= base_url() ?>Shop/user_login" class="card-link">Login</a></p>
                                <p class="float-sm-right text-center">New to K2C ? <a href="<?= base_url() ?>Shop/user_register" class="card-link">Create
                                        Account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<script>
    $("#verify-password-form").submit(function(e) {
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
                    document.getElementById("verify-password-form").reset();

                    setTimeout(function() {
                        window.location = '<?= base_url() ?>Shop/user_login';
                    }, 2000);
                } else {
                    toastr.error(data.message, 'K2C Login', {
                        "timeOut": 2000
                    });
                    if (data.redirect !== '') {
                        setTimeout(function() {
                            window.location = data.redirect
                        }, 2000);
                    }
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
</script>