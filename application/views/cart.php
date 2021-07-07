<?php if (isset($_SESSION['buyer'])) : ?>
    <input type="hidden" id="buyer_session" name="buyer_session" value='<?= json_encode($_SESSION['buyer'], true) ?>'>
<?php endif; ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Shopping Cart</h3>
            </div>
        </div>
        <div class="content-body">
            <div class="shopping-cart">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" id="shopping-cart" data-toggle="tab" aria-controls="shop-cart-tab" href="#shop-cart-tab" aria-expanded="true">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="checkout" data-toggle="tab" aria-controls="checkout-tab" href="#checkout-tab" aria-expanded="false">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="complete-order" data-toggle="tab" aria-controls="comp-order-tab" href="#comp-order-tab" aria-expanded="false">My Orders</a>
                    </li>
                </ul>
                <div class="tab-content pt-1">
                    <!-- Cart -->
                    <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true" aria-labelledby="shopping-cart">

                        <div class="card" id="cart-desktop">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Details</th>
                                                    <th>No. Of Products</th>
                                                    <th>Price(Excl. Tax)</th>
                                                    <th>Tax(%)</th>
                                                    <th>Total Tax(₹)</th>
                                                    <th>Total</th>
                                                    <th>Saved</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($cart_items)) : ?>
                                                    <?php $order_save = 0; ?>
                                                    <?php foreach ($cart_items as $cart_item) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="product-img d-flex align-items-center">
                                                                    <img class="img-fluid" src="<?= base_url() . $cart_item['image_url'] ?>" alt="No Image">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="product-title"><?= $cart_item['product_name'] ?></div>
                                                                <div class="product-size"><strong>Category : </strong> <?= $cart_item['category_name'] ?></div>
                                                                <div class="product-color"><strong>Pieces per order : </strong> <?= $cart_item['pieces'] ?></div>

                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="text-center count touchspin" value="<?= $cart_item['item_quantity'] ?>" onchange="quantityUpdate(<?= $cart_item['item_id'] ?>, this,' desktop')" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="total-price">₹<?= $cart_item['price'] ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="total-price"><?= $cart_item['percentage'] ?>%</div>
                                                            </td>
                                                            <td>
                                                                <div class="total-price">₹

                                                                    <?php
                                                                    $qty_price = doubleval($cart_item['price']) * doubleval($cart_item['item_quantity']);

                                                                    $line_tax = ($qty_price * doubleval($cart_item['percentage'])) / 100;
                                                                    echo $line_tax;
                                                                    ?>

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="total-price">₹<?= $qty_price + $line_tax ?></div>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $temp = (doubleval($cart_item['mrp']) * doubleval($cart_item['item_quantity']));

                                                                $line_save = $temp - ($qty_price + $line_tax);

                                                                $order_save += $line_save;
                                                                ?>
                                                                <div class="total-savings" style="font-size:1rem; margin-top:0;">₹
                                                                    <span class="line_saved"><?= $line_save ?></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="product-action">
                                                                    <a onclick="removeFromCart(<?= $cart_item['item_id'] ?>)"><i class="ft-trash-2"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="8">
                                                            No Items
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="cart-mobile">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Items</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($cart_items)) : ?>
                                                    <?php $order_save = 0; ?>
                                                    <?php foreach ($cart_items as $cart_item) { ?>
                                                        <tr>
                                                            <td style="padding-right:0;padding-left:0;">
                                                                <div class="cart-prod-details clearfix">
                                                                    <div class="product-img-cart">
                                                                        <img class="img-fluid" src="<?= base_url() .  $cart_item['image_url'] ?>" alt="No Image">
                                                                    </div>

                                                                    <div class="cart-prod-content">
                                                                        <div class="mb-prod-2"><strong>Product : </strong><?= $cart_item['product_name'] ?></div>

                                                                        <div class="mb-prod-2"><strong>Category : </strong><?= $cart_item['category_name'] ?></div>

                                                                        <div class="mb-prod-2"><strong>Pieces per order : </strong><?= $cart_item['pieces'] ?></div>

                                                                        <div class="mb-prod-2"><strong>UOM : </strong><?= $cart_item['uom_unit'] . ' ' . $cart_item['uom_name'] ?></div>

                                                                        <div class="mb-prod-2"><strong>MRP : </strong>₹<?= $cart_item['mrp'] ?></div>

                                                                        <div class="mb-prod-2"><strong>Price(Excl. Tax) : </strong>₹<?= $cart_item['price'] ?></div>

                                                                        <div class="mb-prod-2"><strong>Tax(%) : </strong><?= $cart_item['percentage'] ?>%</div>

                                                                        <div class="mb-prod-2"><strong>Total Tax : </strong><span>₹
                                                                                <?php
                                                                                $qty_price = doubleval($cart_item['price']) * doubleval($cart_item['item_quantity']);

                                                                                $line_tax = ($qty_price * doubleval($cart_item['percentage'])) / 100;
                                                                                echo $line_tax;
                                                                                ?>
                                                                            </span>
                                                                        </div>

                                                                        <div class="mb-prod-2"><strong>Total : </strong><span>₹<?= $qty_price + $line_tax ?></span></div>


                                                                        <?php
                                                                        $temp = (doubleval($cart_item['mrp']) * doubleval($cart_item['item_quantity']));

                                                                        $line_save = $temp - ($qty_price + $line_tax);

                                                                        $order_save += $line_save;
                                                                        ?>
                                                                        <div class="mb-prod-2"><strong>You saved : </strong>₹<span class="line_saved"><?= $line_save ?></span></div>

                                                                        <div class="input-group mb-prod" id="cart-counter-txtbx">
                                                                            <input type="text" class="text-center count touchspin" value="<?= $cart_item['item_quantity'] ?>" onchange="quantityUpdate(<?= $cart_item['item_id'] ?>, this,'mobile')" />
                                                                        </div>

                                                                        <button type="button" class="btn btn-outline-blue-grey" onclick="removeFromCart(<?= $cart_item['item_id'] ?>)">Remove <i class="ft-trash-2"></i></button>
                                                                    </div>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                    <?php } ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="3">
                                                            No Items
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Apply Coupon </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <label class="text-muted">Enter your coupon code if you have one!</label>
                                            <form action="#">
                                                <div class="form-body">
                                                    <input type="text" class="form-control" placeholder="Enter Coupon Code Here">
                                                </div>
                                                <div class="form-actions border-0 pb-0 text-right">
                                                    <button type="button" class="btn btn-info">Apply Code</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Price Details</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="price-detail">Price (<span id="total_items"><?= count($cart_items); ?></span> items) <span class="float-right" id="total_amount">₹<?= $total_excl_tax ?></span></div>
                                            <div class="price-detail">Delivery Charges <span class="float-right">₹0</span></div>
                                            <div class="price-detail">TAX / VAT <span class="float-right" id="tax_total">₹<?= $tax_total ?></span></div>
                                            <hr>
                                            <div class="price-detail">Payable Amount <span class="float-right" id="payable_amount">₹<?= $cart_total ?></span></div>
                                            <div class="total-savings">Your Total Savings on this order is ₹<span id="total_saved">

                                                    <?php if (isset($order_save)) : echo $order_save; ?>
                                                    <?php endif; ?>
                                                </span></div> <br>
                                            <div class="text-right">
                                                <a href="<?= base_url() ?>" class="btn btn-info mb-2 ">Continue Shopping</a>
                                                <a class="btn btn-secondary mb-2 <?php if (empty($cart_items)) : ?> disabled <?php endif; ?>
                                                            " onclick="activeTab('checkout-tab')">Place Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Checkout -->
                    <div class="tab-pane" id="checkout-tab" aria-labelledby="checkout">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <div class="card">
                                    <div class="card-header mb-3">
                                        <h4 class="card-title">Your cart (<span id="checkout_items"><?= count($cart_items); ?></span>)</h4>
                                    </div>
                                    <div class="card-content">
                                        <ul class="list-group mb-3">
                                            <div id="checkout-items-list">

                                            </div>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name"><strong>Cart Subtotal</strong></span>
                                                <span class="product-price" id="checkout_cart_total"><strong>₹<?= $total_excl_tax ?></strong></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name">Shipping &amp; Handling</span>
                                                <span class="product-price">₹0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name">TAX / VAT</span>
                                                <span class="product-price" id="checkout_tax_total"></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name success">Order Total</span>
                                                <span class="product-price" id="checkout_payable_amount">₹<?= $cart_total ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout -->
                            <div class="col-md-8 order-md-1">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Billing Details</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <?php if (isset($_SESSION['buyer'])) : ?>
                                                <?php $buyer_details = $_SESSION['buyer']; ?>
                                                <!-- User Already Logged in -->
                                                <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                                    <h3>You are already logged in by using </h3>

                                                    <div class="card-header border-0 text-center">
                                                        <img src="<?= $buyer_details['profile_picture'] ?>" alt="No Profile Photo" class="rounded-circle img-fluid center-block">
                                                        <h5 class="card-title mt-1"><?= $buyer_details['name'] ?> <?= $buyer_details['last_name'] ?></h5>
                                                    </div>

                                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2"><span>Confirm your details</span>
                                                    </p>

                                                    <p><b>E-mail:</b> <?= $buyer_details['email'] ?></p>
                                                    <p><b>Phone:</b> <?= $buyer_details['phone'] ?></p>
                                                    <p><b>Address:</b> <?= $buyer_details['address'] ?></p>
                                                    <p><b>Pin/Zip Code:</b> <?= $buyer_details['pin'] ?></p>
                                                    <p><b>Logged-in using:</b>
                                                        <?php if ($buyer_details['source'] === 'google') : ?>
                                                            <i class="la la-google"></i> Google Login
                                                        <?php elseif ($buyer_details['source'] === 'mobile') : ?>
                                                            <i class="la la-mobile"></i> Mobile Number
                                                        <?php else : ?>
                                                            <i class="la la-facebook"></i> Facebook Login
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                                <div class="text-left">
                                                    <a href="#" class="btn btn-info mb-2 "><i class="ft-unlock"></i> Switch Account</a>
                                                    <a class="btn btn-secondary mb-2" href="#"><i class="la la-user"></i> Edit Details</a>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <a onclick="createOrder()" class="btn btn-danger btn-lg btn-block" style="color: #fff;"><i class="la la-cart-arrow-down"></i>
                                                        Place Order</a>
                                                </div></a>
                                            <?php else : ?>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <a href="<?= base_url() ?>Shop/user_login?redirect=cart" class="btn btn-info mb-2 "><i class="la la-user"></i> Login/Register</a>
                                                </div></a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- My Orders -->
                    <div class="tab-pane" id="comp-order-tab" aria-labelledby="complete-order">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Thank you for ordering with us. Pay the seller only when he delivers your order. Cash or UPI Payments will be accepted by the sellers.</h4>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['buyer'])) : ?>
                            <!-- Session created -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0"><strong>My Orders</strong></h4>
                                </div>
                            </div>
                            <div id="all-orders">
                                <?php $this->load->view('orders_view', $user_orders); ?>
                            </div>
                        <?php else : ?>
                            <!-- Tell user to Login -->
                            <div class="card" id="my_orders_mobile_check">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You need to login to view your orders</p>
                                        <div class="mobile-check">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a class="btn btn-secondary" href="<?= base_url() ?>Shop/user_login?redirect=cart">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


<script>
    $(document).ready(function() {
        var hash = window.location.hash.slice(1);

        if (hash === 'orders') {
            //Show Orders tab
            $('.nav-tabs a[href="#' + 'comp-order-tab' + '"]').tab('show');
            //Remove the orders hash
            history.replaceState(null, null, ' ');
        }

    });


    //open checkout tab and populate checkout data
    function activeTab(tab) {

        //For testing only
        document.getElementById('payable_amount').innerHTML = '₹50001';

        var payableAmount = document.getElementById('payable_amount').innerHTML;
        var index = payableAmount.indexOf('₹');
        var amount = Number(payableAmount.substr(index + 1));


        if (amount !== undefined && amount !== null && amount >= 5000) {
            ip_address = $('#cart-link').data('ip_address');
            $.ajax({
                method: 'POST',
                async: false,
                url: $('#base_url').val() + 'Shop/cart/' + ip_address + '/checkout_page',
                data: {},
                dataType: 'JSON',
                context: this,
                success: function(data) {
                    let cart_total = 0;
                    let tax_total = 0
                    // console.log(data['cart_items'][0]);
                    //Create li elements and add linetotals then add these data to checkout page
                    let list_html = '';
                    data['cart_items'].forEach(element => {
                        cart_total += Number(element['car_line_total']);
                        tax_total += Number(element['line_tax']);

                        list_html += `<li class="list-group-item d-flex justify-content-between lh-condensed">
                     <div>
                          <h6 class="my-0">
                              <span id="checkout_prod_name">${element['product_name']}
                              </span> x
                              <span id="checkout_quantity">${element['item_quantity']}</span>
                          </h6>
                          <small class="text-muted">Pieces per item - <span id="checkout_pieces">${element['pieces']}</span></small>
                      </div>
                      <span class="text-muted" id="checkout_cart_item_price">₹${element['car_line_total']}</span>
                  </li>
                  `;

                    });

                    $('#checkout_cart_total').text('₹' + (Number(cart_total) - Number(tax_total).toFixed(2)));
                    let pay_amt = Number(tax_total) + Number(cart_total);
                    $('#checkout_payable_amount').text('₹' + parseFloat(cart_total).toFixed(2));
                    $('#checkout_tax_total').text('₹' + tax_total);
                    $('#checkout_items').text(data['cart_items'].length);
                    $('#checkout-items-list').html(list_html);


                    //Show Checkout tab
                    var split = tab.split('-');
                    var tab_name = ".nav-item #" + split[0];
                    $(tab_name).removeClass('disabled');
                    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
                    $(tab_name).addClass('disabled');


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
                    }, 500);
                }
            });
        } else {
            toastr.warning("Your order total must be greater than ₹5000", 'Minimum Order Amount', {
                "timeOut": 0
            });
        }
    };

    //Remove diabled class of get orders button - My orders page
    $('#contact_my_orders').on('change', function() {
        if ($('#btn-check-phone-orders').hasClass('disabled')) {
            $('#btn-check-phone-orders').removeClass('disabled');
        }
    });

    //create new order
    function createOrder(ip_address = $('#cart-link').data('ip_address')) {
        let userDetails = JSON.parse($('#buyer_session').val());

        if (ip_address) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: '<?= base_url() ?>Shop/create_new_order',
                data: {
                    'ip_address': ip_address,
                    'user_details': userDetails
                },
                success: function(data) {
                    if (data.type === "success") {
                        toastr.success(data.message, 'Order Creation', {
                            "timeOut": 1000
                        });

                        $('#cart-count').text('0');
                        //Show My Orders
                        window.location.href += '#orders';
                        location.reload();
                        // my_orders_success(); //load my orders without entering mobile no
                    } else {
                        toastr.error(data.message, 'Order Creation', {
                            "timeOut": 1000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error(error, 'Order Creation', {
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
    }

    //function order success redirection
    function my_orders_success(mobileNo) {
        $('.nav-tabs a[href="#comp-order-tab"]').tab('show');
        $('#my_orders_mobile_check').css('display', 'none');
        getUserOrders(mobileNo);
    }


    //get user orders
    function getUserOrders(mobileNo) {
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: '<?= base_url() ?>Shop/get_orders_view/' + mobileNo,
            data: {},
            success: function(data) {
                // console.log(data);
                $('#all-orders').append(data);
            },
            error: function(xhr, status, error) {
                toastr.error(error, 'Loading Orders', {
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