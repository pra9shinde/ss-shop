
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php if(!empty($cart_items)):?>
                                                  <?php foreach($cart_items as $cart_item) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="product-img d-flex align-items-center">
                                                                <img class="img-fluid" src="<?=$cart_item['image_url']?>" alt="No Image">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="product-title"><?=$cart_item['product_name']?></div>
                                                            <div class="product-size"><strong>Category : </strong> <?=$cart_item['category_name']?></div>
                                                            <div class="product-color"><strong>Pieces per order : </strong> <?=$cart_item['pieces']?></div>
                                                            
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text" class="text-center count touchspin" value="<?=$cart_item['item_quantity']?>" onchange="quantityUpdate(<?=$cart_item['item_id']?>, this,'desktop')" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="total-price">₹<?=$cart_item['price']?>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="total-price"><?=$cart_item['percentage']?>%</div>
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
                                                            <div class="total-price">₹<?=$qty_price + $line_tax?></div>
                                                        </td>
                                                        <td>
                                                            <div class="product-action">
                                                                <a onclick="removeFromCart(<?=$cart_item['item_id']?>)"><i class="ft-trash-2"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                  <?php } ?>  
                                              <?php else:?>
                                                <tr>
                                                  <td colspan="8">
                                                    No Items
                                                  </td>
                                                </tr>    
                                              <?php endif;?>
                                            
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
                                            <?php if(!empty($cart_items)):?>
                                                <?php foreach($cart_items as $cart_item) { ?>
                                                <tr>
                                                    <td style="padding-right:0;padding-left:0;"> 
                                                        <div class="cart-prod-details clearfix">
                                                            <div class="product-img-cart">
                                                                <img class="img-fluid"  src="<?=$cart_item['image_url']?>" alt="No Image">
                                                            </div>

                                                            <div class="cart-prod-content">
                                                                <div class="mb-prod-2"><strong>Product : </strong><?=$cart_item['product_name']?></div>

                                                                <div class="mb-prod-2"><strong>Category : </strong><?=$cart_item['category_name']?></div>

                                                                <div class="mb-prod-2"><strong>Pieces per order : </strong><?=$cart_item['pieces']?></div>

                                                                <div class="mb-prod-2"><strong>UOM : </strong><?=$cart_item['uom_unit'].' '.$cart_item['uom_name']?></div>

                                                                <div class="mb-prod-2"><strong>MRP : </strong>₹<?=$cart_item['mrp']?></div>

                                                                <div class="mb-prod-2"><strong>Price(Excl. Tax) : </strong>₹<?=$cart_item['price']?></div>

                                                                <div class="mb-prod-2"><strong>Tax(%) : </strong><?=$cart_item['percentage']?>%</div>

                                                                <div class="mb-prod-2"><strong>Total Tax : </strong><span>₹
                                                                    <?php
                                                                        $qty_price = doubleval($cart_item['price']) * doubleval($cart_item['item_quantity']);
                                                            
                                                                        $line_tax = ($qty_price * doubleval($cart_item['percentage'])) / 100;
                                                                        echo $line_tax;
                                                                    ?>
                                                                    </span>
                                                                </div>

                                                                <div class="mb-prod-2"><strong>Total : </strong><span>₹<?=$qty_price + $line_tax?></span></div>

                                                                <div class="input-group mb-prod" id="cart-counter-txtbx">
                                                                    <input type="text" class="text-center count touchspin" value="<?=$cart_item['item_quantity']?>" onchange="quantityUpdate(<?=$cart_item['item_id']?>, this,'mobile')" />
                                                                </div>

                                                                <button type="button" class="btn btn-outline-blue-grey" onclick="removeFromCart(<?=$cart_item['item_id']?>)">Remove <i class="ft-trash-2"></i></button>
                                                            </div>
                                                        </div>
                                                        
                                                    </td>

                                                </tr>  
                                            <?php } ?>  
                                            <?php else:?>
                                                    <tr>
                                                        <td colspan="3">
                                                            No Items
                                                        </td>
                                                    </tr>    
                                            <?php endif;?>                                          
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
                                        <h4 class="card-title">Apply Coupon</h4>
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
                                            <div class="price-detail">Price (<span id="total_items"><?=count($cart_items);?></span> items) <span class="float-right" id="total_amount">₹<?=$cart_total?></span></div>
                                            <div class="price-detail">Delivery Charges <span class="float-right">₹0</span></div>
                                            <div class="price-detail">TAX / VAT <span class="float-right" id="tax_total">₹<?=$tax_total?></span></div>
                                            <hr>
                                            <div class="price-detail">Payable Amount <span class="float-right" id="payable_amount">₹<?=$cart_total + $tax_total?></span></div>
                                            <!-- <div class="total-savings">Your Total Savings on this order $550</div> -->
                                            <div class="text-right">
                                                    <a href="<?=base_url()?>" class="btn btn-info mb-2 ">Continue Shopping</a>
                                                    <a class="btn btn-secondary mb-2 <?php if(empty($cart_items)): ?> disabled <?php endif; ?>
                                                            " onclick="activeTab('checkout-tab')">Place Order</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="checkout-tab" aria-labelledby="checkout">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <div class="card">
                                    <div class="card-header mb-3">
                                        <h4 class="card-title">Your cart (<span id="checkout_items"><?=count($cart_items);?></span>)</h4>
                                    </div>
                                    <div class="card-content">
                                        <ul class="list-group mb-3">
                                            <div id="checkout-items-list"> 
                                                
                                            </div>
                                           
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name"><strong>Cart Subtotal</strong></span>
                                                <span class="product-price" id="checkout_cart_total"><strong>₹<?=$cart_total?></strong></span>
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
                                                <span class="product-price" id="checkout_payable_amount">₹<?=$cart_total?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 order-md-1">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Billing Details</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="mobile-check">
                                                <div class="row">
                                                    <form id="form-mobile-no"></form>
                                                        <div class="col-md-8 mb-3">
                                                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile Number*" value="" maxlength="10">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <a class="btn btn-secondary" id="btn-check-phone">Check Details</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="new-user" style="display:none;">
                                                <form id="new-user-form" action="<?=base_url()?>Shop/register_buyer">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="firstName">Your name</label>
                                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="eg: John">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="lastName">Your Contact</label>
                                                            <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="10 Digits Number" value="" maxlength="10">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder="e.g. john@gmail.com">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="address">Address Line 1*</label>
                                                        <input type="text" class="form-control" id="user_address_1" name="user_address_1" placeholder="1234 Main St" >
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="address2">Address Line 2 <span class="text-muted">(Optional)</span></label>
                                                        <input type="text" class="form-control" id="user_address_2"  name="user_address_2" placeholder="Near Magnum Heights">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="zip">Pincode*</label>
                                                            <input type="text" class="form-control" id="user_pincode" name="user_pincode" placeholder="e.g. 421202" maxlength="6">
                                                        </div>

                                                    </div>
                                                    <hr class="mb-2">
                                                    <button class="btn btn-info btn-lg" type="submit">Continue to checkout</button>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="comp-order-tab" aria-labelledby="complete-order">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Thank you for ordering with us. Pay the seller only when he delivers tour order. Cash and UPI Payments will be accepted by the sellers.</h4>
                            </div>
                        </div>
                        <div class="card" id="my_orders_mobile_check">
                            <div class="card-content">
                                <div class="card-body">
                                    <p>No need to signup, Enter your Mobile No. to view your orders</p>
                                    <div class="mobile-check">
                                        <div class="row">
                                            <form id="form-mobile-no-orders"></form>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="contact_my_orders" name="contact_my_orders" placeholder="Mobile Number*" value="" maxlength="10" style="margin-bottom:10px">
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="btn btn-secondary" id="btn-check-phone-orders">Check Details</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0"><strong>My Orders</strong></h4>
                            </div>
                        </div>
                        <div id="all-orders">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


<script>
$(document).ready(function(){
    var hash = window.location.hash.slice(1);
    
    if(hash === 'orders'){
        //Show Orders tab
        $('.nav-tabs a[href="#' + 'comp-order-tab' + '"]').tab('show');
        //Remove the orders hash
        history.replaceState(null, null, ' ');
    }

});


//open checkout tab and populate checkout data
function activeTab(tab){
    ip_address = $('#cart-link').data('ip_address');
    $.ajax({
        method:'POST',
        async:false,
        url: $('#base_url').val() +'Shop/cart/'+ip_address +'/checkout_page',
        data: {},
        dataType:'JSON',
        context:this,
        success:function(data){
            let cart_total = 0;
            let tax_total = 0
            // console.log(data['cart_items'][0]);
            //Create li elements and add linetotals then add these data to checkout page
            let list_html = '';
            data['cart_items'].forEach(element => {
                cart_total += Number(element['car_line_total']);
                tax_total += Number(element['line_tax']);

                list_html +=`<li class="list-group-item d-flex justify-content-between lh-condensed">
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
            
            $('#checkout_cart_total').text('₹'+cart_total);
            let pay_amt = Number(tax_total) + Number(cart_total);
            $('#checkout_payable_amount').text('₹'+ pay_amt);
            $('#checkout_tax_total').text('₹'+ tax_total);
            $('#checkout_items').text(data['cart_items'].length);
            $('#checkout-items-list').append(list_html);


            //Show Checkout tab
            var split = tab.split('-');
            var tab_name = ".nav-item #" + split[0];
            $(tab_name).removeClass('disabled');
            $('.nav-tabs a[href="#' + tab + '"]').tab('show');
            $(tab_name).addClass('disabled');


        },
        error:function(res){
            console.log(res);
        },
        beforeSend:function(){
            $("#ajax-loader").fadeIn(500);
        },
        complete:function(){
            setTimeout(function(){
                $("#ajax-loader").fadeOut(500);
            }, 500);
        }
    });
};

//check phone no. checkout page
$('#btn-check-phone').on('click', function(){
    let mobileNo = $('#contact').val();

    $.ajax({
        type: "POST",
        dataType : 'json',
        url: '<?=base_url()?>Shop/check_mobile_no',
        data: {'contact' : mobileNo},
        success: function(data) {
            if(data.type === "success") {
                if(data.status === "true")
                {
                    toastr.success("Congratulations, We have your details!",'Mobile Check', { "timeOut": 1000 });
                    //User Already exists

                    //Create Order
                    createOrder(mobileNo);
                }
                else{
                    //New User
                    toastr.warning("Unfortunately, We don't have your details, Please Enter your details!",'Mobile Check', { "timeOut": 1000 });
                    $('#user_contact').attr('value',mobileNo);

                    $('.mobile-check').fadeOut(1000);
                    $('.new-user').fadeIn(1000);
                }
            }
            else {
                toastr.error(data.message,'Mobile Check', { "timeOut": 1000 }); 
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Mobile Check', { "timeOut": 1000 });
            console.log('An error occurred.' + error);
        },
        beforeSend:function(){
            $("#ajax-loader").fadeIn(500);
        },
        complete:function(){
            setTimeout(function(){
                $("#ajax-loader").fadeOut(500);
            }, 500);
        }
    });
});

//Create new user
$("#new-user-form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        dataType : 'json',
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(data) {
            if(data.type === "success") {
                toastr.success(data.message,'New User Creation', { "timeOut": 1000 });
                document.getElementById("new-user-form").reset(); 

                //Create Order
                createOrder($('#contact').val());
            } else {
                toastr.error(data.message,'New User Creation', { "timeOut": 1000 });
                
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'New User Creation', { "timeOut": 1000 });
            console.log('An error occurred.' + error);
        },
        beforeSend:function(){
            $("#ajax-loader").fadeIn(500);
        },
        complete:function(){
            setTimeout(function(){
                $("#ajax-loader").fadeOut(500);
            }, 500);
        }
    });
});

//check phone no. my orders page
$('#btn-check-phone-orders').on('click', function(){
    let mobileNo = $('#contact_my_orders').val();

    //check user exists
    $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: '<?=base_url()?>Shop/check_mobile_no/orders_page',
        data: {'contact_my_orders' : mobileNo},
        success: function(data) {
            if(data.status === 'true'){
                toastr.success('You are a registered user, following are your orders','Get Orders', { "timeOut": 1000 });

               getUserOrders(mobileNo);
               $('#btn-check-phone-orders').addClass('disabled');
                
            }
            else{
                toastr.warning('You are not a registered user, Please explore our shop','Get Orders', { "timeOut": 1000 });

                setTimeout(function(){ 
                    window.location = "<?=base_url()?>";
                }, 3000);

                
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Loading Orders', { "timeOut": 1000 });
            console.log('An error occurred.' + error);
        },
        beforeSend:function(){
            $("#ajax-loader").fadeIn(500);
        },
        complete:function(){
            setTimeout(function(){
                $("#ajax-loader").fadeOut(500);
            }, 500);
        }
    });

});

//Remove diabled class of get orders button - My orders page
$('#contact_my_orders').on('change', function(){
    if($('#btn-check-phone-orders').hasClass('disabled')){
        $('#btn-check-phone-orders').removeClass('disabled');
    }
});

//create new order
function createOrder(mobile_no, ip_address = $('#cart-link').data('ip_address')){
    $("#ajax-loader").fadeIn(500);
    if(ip_address){
        $.ajax({
            type: "POST",
            dataType : 'json',
            url: '<?=base_url()?>Shop/create_new_order',
            data: {'ip_address' : ip_address, 'phone' : mobile_no},
            success: function(data) {
                if(data.type === "success") {
                    toastr.success(data.message,'Order Creation', { "timeOut": 1000 });
                    document.getElementById('form-mobile-no').reset();

                    $('#cart-count').text('0');
                   
                    my_orders_success(mobile_no);//load my orders without entering mobile no
                } else {
                    toastr.error(data.message,'Order Creation', { "timeOut": 1000 }); 
                }
            },
            error: function(xhr, status, error) {
                toastr.error(error,'Order Creation', { "timeOut": 1000 });
                console.log('An error occurred.' + error);
            },
            beforeSend:function(){
                $("#ajax-loader").fadeIn(500);
            },
            complete:function(){
                setTimeout(function(){
                    $("#ajax-loader").fadeOut(500);
                }, 500);
            }
        }); 
    }

}

//function order success redirection
function my_orders_success(mobileNo){
    $('.nav-tabs a[href="#comp-order-tab"]').tab('show');
    $('#my_orders_mobile_check').css('display', 'none');
    getUserOrders(mobileNo);
}


//get user orders
function getUserOrders(mobileNo){
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: '<?=base_url()?>Shop/get_orders_view/' + mobileNo,
        data: {},
        success: function(data) {
            // console.log(data);
            $('#all-orders').append(data);
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Loading Orders', { "timeOut": 1000 });
            console.log('An error occurred.' + error);
        },
        beforeSend:function(){
            $("#ajax-loader").fadeIn(500);
        },
        complete:function(){
            setTimeout(function(){
                $("#ajax-loader").fadeOut(500);
            }, 500);
        }
    });
}

</script>

