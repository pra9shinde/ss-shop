<style>
    /*******Select2 *********/
    .select2-results {
        background-color: #f4f5fa;
    }

    .select2-search.select2-search--dropdown {
        background-color: #f4f5fa;
    }

    .border-pink.border-darken-2 {
        border: 1px solid rgba(0, 0, 0, 0.15) !important;
    }

    .bg-pink.bg-lighten-3 {
        background-color: #9f3434 !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #fff;
        line-height: 28px;
    }

    .select2-results__option.select2-results__option {
        color: #6b6f82 !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #fff;
    }

    .select2-container--classic .select2-results__option--highlighted[aria-selected],
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #9F3434 !important;
        color: #fff !important;
    }

    .prod-cont {
        position: relative;
    }

    .abs-badge {
        position: absolute;
        right: 0;
        top: 0;
        display: block;
    }

    .offer-discount {
        display: block;
        margin: 5px 0 0px 0;
        font-size: 200%;
    }
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Shopping cards section start -->
            <section id="shopping-cards" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <style>
                            #banner-shop {
                                position: relative;
                            }

                            #banner-shop img {
                                position: absolute;
                                right: 0;
                                top: -50px;
                                width: 12%;
                                margin-right: -2%;
                            }
                        </style>
                        <div class="card text-white bg-gradient-y-pink text-center">
                            <div class="card-content" id="banner-shop">
                                <img src="<?= base_url() ?>assets/theme/images/supermarket.svg" alt="Relax" class="float-right img-fluid">
                                <div class="card-body pt-3">
                                    <h4 class="card-title text-white" style="font-size:3.12rem;">Kisan 2 Consumer</h4>
                                    <p class="card-text ">Buy Groceries from your nearest shop in this lockdown.</p>
                                    <button class="btn bg-white bg-darken-3 pink">Enter your Product & Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12" style="padding:0;">
                    <div class="card text-center bg-white" style="height: 100%;">
                        <div class="card-content">
                            <div class="card-body pt-3">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="intro-images">
                                            <img src="<?= base_url() ?>assets/login/K2C LOGO.JPG" alt="Kisaan 2 Consumer Logo" class="">

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12" style="padding: 0 5%;">
                                        <h4 class="card-title mt-3" style="font-size:2.25rem;">We care for you</h4>
                                        <button class="btn btn-danger">Know More!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title mb-0">Shop by Category</h3>
                    </div>
                </div>


                <!-- products category  -->
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="group-area">
                                <h4><b>Fruits and Vegetables</b></h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/fresh-fruits.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Fresh Fruits</h5>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/vegetables.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Fresh Vegetables</h5>
                                    </a>
                                </div>
                                <div class="w-100 d-sm-none"></div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/herbs.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Herbs & Seasoning</h5>
                                    </a>

                                </div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/exotic-corner.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Exotic Corner</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- products category  -->

                <!-- products category  -->
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="group-area">
                                <h4><b>Summer Drinks</b></h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/juices.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Juices</h5>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/cold-drinks.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Cold Drinks</h5>
                                    </a>
                                </div>
                                <div class="w-100 d-sm-none"></div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/buttermilk.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Buttermilk,Lassi</h5>
                                    </a>

                                </div>
                                <div class="col">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">20% off</div>

                                            <img class="img-fluid" src="<?= base_url() ?>assets/theme/images/products/syrups.png" alt="Card image cap">
                                        </div>
                                        <h5 class="product-title text-center">Syrups</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- products category  -->


            </section>

            <!-- Coming Soon -->
            <section>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card text-white text-center" style="background: linear-gradient(to right, rgb(235, 87, 87), rgb(93, 35, 35));">
                            <div class="card-content">
                                <img src="<?= base_url() ?>assets/theme/images/nrd-D6Tu_L3chLE-unsplash.jpg" alt="Coming Soon" class="float-right img-fluid" style="border-radius: 5px; max-height: 400px;">
                                <div class="card-body coming-soon-text" id="">
                                    <br>
                                    <h4 class="card-title mt-3 text-white">Shop by Society</h4>
                                    <p class="card-text ">Buy bulk orders with maximum discounts</p>
                                    <button class="btn bg-white bg-darken-3 pink">Coming Soon!!!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card text-white text-center" style="background: linear-gradient(to left, rgb(235, 87, 87), rgb(93, 35, 35));">
                            <div class="card-content">
                                <img src="<?= base_url() ?>assets/theme/images/hoan-vo-iwP2UhGvnJI-unsplash.jpg" alt="Coming Soon" width="600" class="float-left img-fluid" style="border-radius: 5px">
                                <div class="card-body coming-soon-text" id="fish">
                                    <br>
                                    <h4 class="card-title mt-3 text-white">Fresh Fish</h4>
                                    <p class="card-text ">From sea to your doorstep, buy fresh seafood</p>
                                    <button class="btn bg-white bg-darken-3 pink">Coming Soon!!!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>