<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Smart Society Services">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>K2C - Kisan to Consumer</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url() ?>assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/login-register.css">



    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/theme/css/loaders/loaders.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/theme/css/palette-loader.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/fonts/mobiriseicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/ecommerce-cart.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/checkboxes-radios.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/invoice.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/zoom.css">
    <!-- END: Page CSS-->

    <!--Product Details Page CSS-->
    <?php if ($this->uri->segment(2) === 'product_details') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/nouislider.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/prism.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/palette-noui.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/ecommerce-shop.css">
    <?php endif; ?>
    <!--Product Details Page CSS-->

    <!-- Google Login JS -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="<?= GOOGLE_CLIENT_ID_LOCAL ?>">
    <!-- Google Login JS -->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/theme/css/theme-custom.css">
    <!-- END: Custom CSS-->


    <script src="<?= base_url() ?>assets/theme/js/vendors/vendors.min.js"></script>
    <script src="<?= base_url() ?>assets/theme/js/vendors/jquery.cookie.js"></script>
    <script>
        //get client ip address and his cart
        var client_ip;
        $.getJSON("https://api.ipify.org?format=json", function(data) {
            client_ip = data.ip.toString();
            $('#cart-link').attr('data-ip_address', client_ip);
            $('#cart-link').attr('href', '<?= base_url() ?>Shop/cart/' + client_ip);
            $('#buyer_my_orders').attr('href', '<?= base_url() ?>Shop/cart/' + client_ip + '#orders');
            //Create a cookie
            if (!!$.cookie('client_ip')) {
                // have cookie
                console.log('cookie not present' + $.cookie('client_ip'));
            } else {
                // no cookie
                $.cookie('client_ip', data.ip, {
                    expires: 1
                });
                console.log('cookie not present');
            }

            $.ajax({
                method: 'POST',
                async: false,
                url: $('#base_url').val() + 'Shop/get_cart/' + data.ip,
                data: {},
                dataType: 'JSON',
                context: this,
                success: function(data) {
                    if (data.status == 'success') {
                        $('#cart-count').text(data.cart.toString());

                    } else {
                        alert('Something Went Wrong!');
                    }
                },
                error: function(res) {
                    console.log(res);
                },
                beforeSend: function() {
                    $("#ajax-loader").fadeIn(500);
                },
                complete: function() {
                    setTimeout(function() {
                        $("#ajax-loader").fadeOut(500);
                    }, 2000);
                }
            });
        });
    </script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
    <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">


    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item"><a class="navbar-brand" href="<?= base_url() ?>"><img class="brand-logo" alt="modern admin logo" src="<?= base_url() ?>assets/login/people.svg" style="width:70px;">
                            <h3 class="brand-text" style="vertical-align: middle;">K2C</h3>
                        </a>
                    </li>


                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>

                </ul>
            </div>

            <?php if ($this->uri->segment(2) != 'products_config' && $this->uri->segment(2) != 'my_orders') : ?>

                <div class="cart-btn">
                    <a class="nav-link nav-link-label" id="cart-link" href="<?= base_url() ?>Shop/cart"><i class="ficon ft-shopping-cart" id="cart-icon"></i><span class="badge badge-pill badge-danger badge-up badge-glow" id="cart-count">0</span></a>
                </div>
            <?php endif; ?>

            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <?php if ($this->uri->segment(2) === 'products_config') : ?>
                            <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="<?= base_url() ?>Shop/seller" data-toggle="dropdown">Seller</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Smart Society Services..." tabindex="0" data-search="template-list">
                                <div class="search-input-close"><i class="ft-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">

                        <?php if ($this->uri->segment(2) === 'products_config' || $this->uri->segment(2) === 'my_orders') : ?>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">0</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="<?= base_url() ?>Shop/my_orders">View all Orders</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?= $seller_name ?></span><span class="avatar avatar-online"><img src="<?= base_url(); ?>assets/theme/images/avatar-s-17.png" alt="avatar"><i></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-divider"></div><a class="dropdown-item" onclick="logout('seller')"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>
                        <?php else : ?>
                            <?php if (isset($buyer_profile_det)) : ?>

                                <!-- Buyer logged in -->
                                <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="<?= base_url() . $buyer_profile_det['profile_picture'] ?>" alt="Avatar"><i></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item user-name text-bold-700 user-name" href="#" style="background-color: #9f3434; color: #fff !important;"><i class="ft-star"></i> <?= $buyer_profile_det['name'] ?> <?= $buyer_profile_det['last_name'] ?></a>

                                        <a class="dropdown-item" href="<?= base_url() ?>Shop/profile_edit/<?= $buyer_profile_det['id'] ?>/<?= $buyer_profile_det['source'] ?>"><i class="ft-user"></i> Edit Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" onclick="logout('buyer')"><i class="ft-power"></i> Logout</a>
                                    </div>
                                </li>
                            <?php else : ?>
                                <!-- Buyer Not Logged In -->
                                <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="<?= base_url() ?>Shop/user_login"><span class="avatar avatar-online"><img src="<?= base_url(); ?>assets/theme/images/user.png" alt="avatar"><i></i></span></a>
                                </li>
                            <?php endif; ?>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- END: Header-->


    <div class="loader-wrapper" id="ajax-loader">
        <div class="loader-container">
            <div class="ball-scale-ripple loader-deep-orange">
                <div></div>
            </div>
        </div>
    </div>