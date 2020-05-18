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
                                    <h4 class="card-title text-white" style="font-size:3.12rem;">Kisaan 2 Consumer</h4>
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

                <section id="" class="row">
                    <div class="col-md-12 mt-1">
                        <div class="group-area">
                            <h4>Fruits and Vegetables</h4>
                            <hr>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">min. <span class="offer-discount">20%</span> off</div>
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/herbs.png" alt="Card image cap" style="margin: 0 auto; height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Herbs & Seasoning</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">up to<span class="offer-discount">20%</span> off</div>
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/alphonso.jpg" alt="Card image cap" style="margin: 0 auto;height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Seasonal Fruits</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <!-- <div class="badge badge-success abs-badge">up to<span class="offer-discount">20%</span> off</div> -->
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/vegetables.png" alt="Card image cap" style="margin: 0 auto;height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Fresh Vegetables</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="" class="row">
                    <div class="col-md-12 mt-1">
                        <div class="group-area">
                            <h4>Daily Essentials</h4>
                            <hr>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">min. <span class="offer-discount">20%</span> off</div>
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/dairy.png" alt="Card image cap" style="margin: 0 auto; height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Dairy Products</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <!-- <div class="badge badge-success abs-badge">up to<span class="offer-discount">20%</span> off</div> -->
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/spices.png" alt="Card image cap" style="margin: 0 auto;height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Spices & Masala</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card pull-up" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="product-img d-flex align-items-center prod-cont">
                                            <div class="badge badge-success abs-badge">up to<span class="offer-discount">20%</span> off</div>
                                            <img class="img-fluid mb-1" src="<?= base_url() ?>assets/theme/images/products/atta.jpg" alt="Card image cap" style="margin: 0 auto;height: 290px;">
                                        </div>
                                        <h3 class="product-title text-center">Atta (Flour)</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>