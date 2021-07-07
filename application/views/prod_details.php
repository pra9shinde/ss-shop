<style>
    .product-detail .price-reviews .price-box .price {
        font-weight: 500;
        color: #a73737;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link {
        color: #a73737;
    }

    .nav.nav-tabs li.nav-item .nav-link.active {
        color: #fff;
    }

    .nav.nav-tabs.nav-underline {
        border-bottom: 1px solid #a73737;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link:before {
        background: #a73737;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:focus,
    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:hover {
        color: #fff;
        background-color: transparent;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link:hover,
    .nav.nav-tabs.nav-underline .nav-item a.nav-link:focus {
        color: #7a2828;
    }

    .prod-details-title {
        font-size: 1rem;
        font-weight: 600;
    }
</style>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Product Detail</h3>

            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <a class="mr-1 mb-1 btn btn-secondary btn-min-width" onclick="window.history.go(-1); return false;"><i class="la la-arrow-circle-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="product-detail">
                <div class="card">
                    <div class="card-body">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-4 col-12">
                                    <div class="product-img d-flex align-items-center">
                                        <?php
                                        $discount = 0;
                                        if ($prod_details->price < $prod_details->mrp) :
                                            $price_diff = $prod_details->mrp - $prod_details->price;
                                            $discount = ($price_diff / $prod_details->mrp) * 100;
                                            $discount =  number_format((float) $discount, 2, '.', '');
                                        ?>
                                            <div class="badge badge-success round">
                                                -<?= $discount ?>%
                                            </div>
                                        <?php endif; ?>

                                        <img alt="Card image cap" class="img-fluid mb-1" src="<?= $prod_details->image_url ?>" style="max-height: 420px;">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-12">
                                    <div class="title-area clearfix">
                                        <h2 class="product-title float-left">
                                            <?= $prod_details->product_name ?>
                                        </h2>
                                        <span class="ratings float-right">
                                        </span>
                                    </div>
                                    <div class="price-reviews clearfix">
                                        <span class="price-box">
                                            <span class="price h4">
                                                ₹<?= $prod_details->price ?>
                                            </span>
                                            <span class="old-price h4">
                                                ₹<?= $prod_details->mrp ?>
                                            </span>
                                        </span>
                                        <span class="float-right">
                                            (201 ratings)
                                        </span>
                                    </div>
                                    <!-- Product Information -->
                                    <div class="product-info">
                                        <p>
                                            <?= $prod_details->description ?>
                                        </p>
                                        <p>
                                            <span class="prod-details-title">
                                                Category :
                                            </span>
                                            <button type="button" class="btn btn-sm btn-outline-info round"><?= $prod_details->category_name ?></button>
                                        </p>


                                        <span class="prod-details-title">
                                            Pieces included per order :
                                        </span>
                                        <p class="badge badge-warning" style="font-weight: 600;font-size: 1rem; display:inline-block">Pieces - <?= $prod_details->pieces ?></p>

                                        <p>
                                            <span class="prod-details-title">
                                                Stock :
                                            </span>
                                            <span class="badge badge badge-success badge-glow badge-pill"><?= $prod_details->rem_quantity ?> <?= $prod_details->uom_name ?></span>
                                        </p>

                                        <p>
                                            <div class="badge border-left-danger  badge-striped" style="font-size: 1rem;font-weight: 600;"><?= $prod_details->uom_unit ?> <?= $prod_details->uom_name ?> - ₹<?= $prod_details->price ?></div>

                                        </p>

                                        <p>
                                            <span class="prod-details-title">
                                                Seller :
                                            </span>
                                            <?= $prod_details->shop_name ?>
                                        </p>

                                    </div>
                                    <!-- Product Information Ends-->

                                    <!-- Color Options Ends-->
                                    <!-- Size Options Ends-->
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-6 mb-1">
                                            <div class="product-count pr-1">
                                                <div class="input-group">
                                                    <input class="text-center count touchspin" type="text" value="1" id="prod-details-qty" name="prod-details-qty" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-12">
                                            <div class="product-buttons">
                                                <a class="btn btn-danger btn-sm" onclick="addToCartProd(<?= $prod_details->id ?>)">
                                                    <i class="la la-shopping-cart">
                                                    </i>
                                                    Add
                                                    to Cart
                                                </a>
                                                <a class="btn btn-info btn-sm" onclick="addToCartProd(<?= $prod_details->id ?>, true)">
                                                    <i class="la la-flash">
                                                    </i>
                                                    Buy Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">

                                <ul class="product-tabs nav nav-tabs nav-underline no-hover-bg">
                                    <li class="nav-item">
                                        <a aria-controls="desc" aria-expanded="true" class="nav-link active" data-toggle="tab" href="#desc" id="description">
                                            Description
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-controls="ratings" aria-expanded="false" class="nav-link" data-toggle="tab" href="#ratings" id="review">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-content tab-content px-1 pt-1">
                                    <div aria-expanded="true" aria-labelledby="description" class="tab-pane active" id="desc" role="tabpanel">
                                        <h2 class="my-1">
                                            Fitbit Alta HR Special Edition
                                        </h2>
                                        <p>
                                            Tootsie roll gingerbread dragée gummies candy tart. Danish dessert sweet roll icing dessert bonbon.
                                            Brownie
                                            sesame snaps pastry chocolate biscuit wafer tart. Candy canes gummies wafer donut chupa chups pudding
                                            sweet
                                            donut. Lollipop halvah dessert chocolate cake danish cake. Oat cake topping sweet chocolate muffin cake
                                            pie
                                            halvah. Topping danish fruitcake apple pie carrot cake. Pudding cupcake cupcake cotton candy croissant.
                                            Pastry
                                            pastry jelly beans powder dragée toffee wafer cupcake pastry. Sweet lemon drops lollipop croissant
                                            bonbon.
                                            Soufflé biscuit dessert biscuit gummi bears sugar plum cake. Tootsie roll sugar plum bear claw chocolate
                                            bar
                                            gummies pudding powder danish caramels. Bear claw biscuit lemon drops croissant gummi bears. Lollipop
                                            chupa
                                            chups soufflé sweet roll soufflé biscuit bear claw wafer.
                                        </p>
                                        <p>
                                            Liquorice candy cotton candy tootsie roll chupa chups jelly-o pastry croissant marshmallow. Gingerbread
                                            tiramisu jelly. Cheesecake pudding marshmallow marshmallow candy donut donut chocolate cake gummies.
                                            Macaroon
                                            tootsie roll wafer ice cream. Icing cupcake pudding. Caramels topping cake caramels toffee sesame snaps
                                            pie
                                            halvah halvah. Sesame snaps toffee pudding macaroon soufflé sesame snaps. Topping lemon drops sweet roll
                                            lollipop chocolate bar soufflé cotton candy carrot cake. Lollipop dragée cheesecake toffee donut
                                            macaroon tart
                                            marshmallow. Croissant jelly-o chocolate jujubes soufflé. Halvah sweet pastry apple pie cake. Powder
                                            icing
                                            bonbon candy canes. Cake toffee marshmallow chocolate cake candy canes.
                                        </p>
                                        <p>
                                            Caramels macaroon lemon drops topping topping. Jelly muffin muffin sweet roll dragée gummi bears cake
                                            wafer
                                            apple pie. Pudding gingerbread oat cake. Jelly chocolate bar candy. Cotton candy macaroon jelly beans
                                            caramels
                                            sesame snaps chocolate caramels cheesecake icing. Oat cake chocolate cake halvah gingerbread. Icing
                                            candy
                                            marzipan. Powder dessert marzipan powder. Candy canes cake croissant jelly beans chupa chups chocolate
                                            cake.
                                            Jelly-o candy toffee caramels jelly-o marshmallow. Lollipop wafer caramels pudding. Icing gingerbread
                                            halvah
                                            chocolate bar caramels.
                                        </p>
                                        <p>
                                            Pudding tootsie roll lollipop tiramisu chocolate oat cake carrot cake sweet roll powder. Powder
                                            gingerbread
                                            pie biscuit candy pie cookie toffee icing. Muffin muffin chocolate. Tiramisu ice cream jelly beans
                                            jelly-o
                                            tootsie roll. Cotton candy jujubes cupcake dragée bear claw muffin candy cake marshmallow. Tart halvah
                                            marshmallow. Donut cake pie. Dragée dessert liquorice gummi bears. Jelly chupa chups sesame snaps bonbon
                                            chocolate bar biscuit tootsie roll candy chocolate bar. Lemon drops halvah pastry. Tart donut halvah
                                            pudding.
                                            Caramels gummies caramels candy.
                                        </p>
                                        <br>
                                        <h4>
                                            Special Features :
                                        </h4>
                                        <ul>
                                            <li>
                                                Jelly-o candy toffee caramels jelly-o marshmallow.
                                            </li>
                                            <li>
                                                Cotton candy jujubes cupcake.
                                            </li>
                                            <li>
                                                Donut cake pie.
                                            </li>
                                            <li>
                                                Dessert liquorice gummi bears.
                                            </li>
                                            <li>
                                                Lemon drops halvah pastry.
                                            </li>
                                        </ul>
                                    </div>
                                    <div aria-labelledby="review" class="tab-pane" id="ratings">
                                        <h2 class="my-1">
                                            Customer Rating & Review
                                        </h2>
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <span class="media-left">
                                                    <img alt="Generic placeholder image" class="media-object" src="../../../app-assets/images/portrait/small/avatar-s-1.png" width="64" height="64" />
                                                </span>
                                                <div class="media-body">
                                                    <span class="ratings float-right">
                                                    </span>
                                                    <h5 class="media-heading mb-0 text-bold-600">
                                                        Cookie candy
                                                    </h5>
                                                    <div class="media-notation mb-1">
                                                        2 Oct, 2018 at 8:39am
                                                    </div>
                                                    Tootsie roll chocolate cake oat cake. Cake topping sweet jelly beans gummies. Oat cake sugar plum
                                                    cheesecake
                                                    dragée bear claw chocolate cake dessert gummies chupa chups. Jujubes cake cotton candy danish
                                                    gingerbread
                                                    pastry tart danish tart. Gummies croissant icing tart. Sweet muffin marzipan danish. Lemon drops
                                                    carrot cake
                                                    carrot cake gummies. Oat cake wafer dessert. Chocolate jujubes jelly biscuit. Soufflé sweet
                                                    cheesecake.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <span class="media-left">
                                                    <img alt="Generic placeholder image" class="media-object" src="../../../app-assets/images/portrait/small/avatar-s-8.png" width="64" height="64" />
                                                </span>
                                                <div class="media-body">
                                                    <span class="ratings float-right">
                                                    </span>
                                                    <h5 class="media-heading mb-0 text-bold-600">
                                                        Tootsie roll dessert
                                                    </h5>
                                                    <div class="media-notation mb-1">
                                                        27 Sep, 2018 at 2:30pm
                                                    </div>
                                                    Pastry gummi bears jelly sweet. Pie gummi bears pastry chocolate danish powder oat cake bear claw.
                                                    Marshmallow
                                                    cake croissant. Cake lemon drops jelly beans marzipan pie carrot cake. Carrot cake ice cream donut.
                                                    Chocolate
                                                    jelly carrot cake tootsie roll chocolate chocolate cake. Soufflé donut sweet tootsie roll.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <span class="media-left">
                                                    <img alt="Generic placeholder image" class="media-object" src="../../../app-assets/images/portrait/small/avatar-s-6.png" width="64" height="64" />
                                                </span>
                                                <div class="media-body">
                                                    <span class="ratings float-right">
                                                    </span>
                                                    <h5 class="media-heading mb-0 text-bold-600">
                                                        Lemon drops ice cream
                                                    </h5>
                                                    <div class="media-notation mb-1">
                                                        27 Jul, 2018 at 11:10am
                                                    </div>
                                                    Cookie lollipop caramels. Liquorice jelly beans icing chupa chups. Wafer brownie fruitcake sugar
                                                    plum
                                                    tiramisu. Jelly bear claw biscuit pie wafer. Croissant chupa chups cake. Tart dessert gingerbread
                                                    cupcake.
                                                    Ice
                                                    cream jelly-o bonbon pudding chupa chups danish topping topping. Candy canes pastry wafer cheesecake
                                                    brownie.
                                                    Croissant donut bonbon candy sesame snaps candy canes sesame snaps wafer. Muffin candy croissant
                                                    biscuit
                                                    dragée.
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="my-1">
                                            Leave Your Review
                                        </h2>
                                        <form class="form">
                                            <div class="form-body">
                                                <label>
                                                    Ratings
                                                </label>
                                                <div class="mb-1" id="customer-review">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">
                                                                Your Name
                                                            </label>
                                                            <input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="subject">
                                                                Subject
                                                            </label>
                                                            <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review-desc">
                                                        Your Review
                                                    </label>
                                                    <textarea class="form-control" id="review-desc" name="comment" placeholder="Your Review" rows="5"></textarea>
                                                </div>
                                                <button class="btn btn-info" type="submit">
                                                    <i class="la la-check-square-o">
                                                    </i>
                                                    Submit Review
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

<script>
    function addToCartProd(id, buyNow = false) {
        ip_address = $('#cart-link').data('ip_address')
        let qty = document.getElementById('prod-details-qty').value;

        $.ajax({
            method: 'POST',
            async: false,
            url: $('#base_url').val() + 'Shop/add_to_cart/' + id,
            data: {
                'ip_address': ip_address,
                'item_qty': qty,
            },
            dataType: 'JSON',
            context: this,
            success: function(data) {
                if (data.status == 'success') {
                    qty.value = 1;
                    $('#cart-count').text(data.cart.toString());
                    toastr.success('Product Added to Cart Successfully', 'Cart Addition', {
                        "timeOut": 1000
                    });
                    if (buyNow) {
                        window.location = '<?= base_url() ?>Shop/cart/' + ip_address;
                    }
                } else {
                    toastr.error(data.message, 'Cart Addition', {
                        "timeOut": 1000
                    });
                }
            },
            error: function(res) {
                toastr.error('Error', 'Cart Addition', {
                    "timeOut": 1000
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
</script>