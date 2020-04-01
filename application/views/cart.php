
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
                        <a class="nav-link active" id="shopping-cart" data-toggle="tab" aria-controls="shop-cart-tab" href="#shop-cart-tab" aria-expanded="true">Shopping Cart</a>
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
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Details</th>
                                                    <th>No. Of Products</th>
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
                                                              <input type="text" class="text-center count touchspin" value="<?=$cart_item['item_quantity']?>" onchange="quantityUpdate(<?=$cart_item['item_id']?>, this)" />
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="total-price">₹<?=$cart_item['cart_item_price']?></div>
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
                                                  <td colspan="5">
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
                                            <div class="price-detail">TAX / VAT <span class="float-right">₹0</span></div>
                                            <hr>
                                            <div class="price-detail">Payable Amount <span class="float-right" id="payable_amount">₹<?=$cart_total?></span></div>
                                            <!-- <div class="total-savings">Your Total Savings on this order $550</div> -->
                                            <div class="text-right">
                                                    <a href="ecommerce-checkout.html" class="btn btn-info mr-2">Continue Shopping</a>
                                                    <a class="btn btn-secondary" onclick="activeTab('checkout-tab')">Place Order</a>
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
                                                <span class="product-price">₹0</span>
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
                                                            <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="10 Digits Number" value="">
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
                                                            <input type="text" class="form-control" id="user_pincode" name="user_pincode" placeholder="e.g. 421202">
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
                                <h4 class="card-title text-center">Thank you. Your order has been processed.</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around lh-condensed">
                                        <div class="order-details text-center">
                                            <div class="order-title">Order Number</div>
                                            <div class="order-info">#CV45632</div>
                                        </div>
                                        <div class="order-details text-center">
                                            <div class="order-title">Date</div>
                                            <div class="order-info">10<sup>th</sup> Oct, 2018</div>
                                        </div>
                                        <div class="order-details text-center">
                                            <div class="order-title">Amount Paid</div>
                                            <div class="order-info">$2550</div>
                                        </div>
                                        <div class="order-details text-center">
                                            <div class="order-title">Payment Method</div>
                                            <div class="order-info">Credit Card</div>
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
                        <div class="card pull-up">
                            <div class="card-header">
                                <div class="float-left">
                                    <a href="#" class="btn btn-info">#CV45632</a>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
                                    <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body py-0">
                                    <div class="d-flex justify-content-between lh-condensed">
                                        <div class="order-details text-center">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid" src="../../../app-assets/images/elements/fitbit-watch.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Fitbit Alta HR Special Edition x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <div class="order-details">
                                            <div class="order-info">$250</div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Delivered on Sun, Oct 15th 2018</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">
                                    <span class="text-muted">Ordered On</span>
                                    <strong>Wed, Oct 3rd 2018</strong>
                                </span>
                                <span class="float-right">
                                    <span class="text-muted">Ordered Amount</span>
                                    <strong>$250</strong>
                                </span>
                            </div>
                        </div>
                        <div class="card pull-up">
                            <div class="card-header">
                                <div class="float-left">
                                    <a href="#" class="btn btn-info">#CV65472</a>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
                                    <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body py-0">
                                    <div class="d-flex justify-content-between lh-condensed">
                                        <div class="order-details text-center">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid" src="../../../app-assets/images/elements/13.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Mackbook pro 19'' x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <div class="order-details">
                                            <div class="order-info">$1150</div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Delivered on Mon, Oct 16th 2018</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">
                                    <span class="text-muted">Ordered On</span>
                                    <strong>Wed, Oct 3rd 2018</strong>
                                </span>
                                <span class="float-right">
                                    <span class="text-muted">Ordered Amount</span>
                                    <strong>$1150</strong>
                                </span>
                            </div>
                        </div>
                        <div class="card pull-up">
                            <div class="card-header">
                                <div class="float-left">
                                    <a href="#" class="btn btn-info">#CV78645</a>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
                                    <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body py-0">
                                    <div class="d-flex justify-content-between lh-condensed">
                                        <div class="order-details text-center">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid" src="../../../app-assets/images/elements/vr.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">VR Headset x 2</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <div class="order-details">
                                            <div class="order-info">$700</div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Delivered on Tue, Oct 17th 2018</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">
                                    <span class="text-muted">Ordered On</span>
                                    <strong>Wed, Oct 3rd 2018</strong>
                                </span>
                                <span class="float-right">
                                    <span class="text-muted">Ordered Amount</span>
                                    <strong>$700</strong>
                                </span>
                            </div>
                        </div>
                        <div class="card pull-up">
                            <div class="card-header">
                                <div class="float-left">
                                    <a href="#" class="btn btn-info">#CV84123</a>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
                                    <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body py-0">
                                    <div class="d-flex justify-content-between lh-condensed">
                                        <div class="order-details text-center">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid" src="../../../app-assets/images/carousel/25.jpg" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Smart Watch with LED x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <div class="order-details">
                                            <div class="order-info">$700</div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="my-0">Delivered on Wed, Oct 18th 2018</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">
                                    <span class="text-muted">Ordered On</span>
                                    <strong>Wed, Oct 3rd 2018</strong>
                                </span>
                                <span class="float-right">
                                    <span class="text-muted">Ordered Amount</span>
                                    <strong>$700</strong>
                                </span>
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
            
            // console.log(data['cart_items'][0]);
            //Create li elements and add linetotals then add these data to checkout page
            let list_html = '';
            data['cart_items'].forEach(element => {
                cart_total += Number(element['cart_item_price']);

                list_html +=`<li class="list-group-item d-flex justify-content-between lh-condensed">
                   <div>
                        <h6 class="my-0">
                            <span id="checkout_prod_name">${element['product_name']}
                            </span> x 
                            <span id="checkout_quantity">${element['item_quantity']}</span>
                        </h6>
                        <small class="text-muted">Pieces per item - <span id="checkout_pieces">${element['pieces']}</span></small> 
                    </div>
                    <span class="text-muted" id="checkout_cart_item_price">₹${element['cart_item_price']}</span>
                </li>
                `;

            });
            
            $('#checkout_cart_total').text('₹'+cart_total);
            $('#checkout_payable_amount').text('₹'+cart_total);
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
        },
        complete:function(){

        }
    });
};

$('#btn-check-phone').on('click', function(){
    let mobileNo = $('#contact').val();

    $.ajax({
        type: "POST",
        dataType : 'json',
        url: '<?=base_url()?>Shop/check_mobile_no',
        data: {'contact' : mobileNo},
        beforeSend: function() {
        },
        success: function(data) {
            if(data.type === "success") {
                if(data.status === "true")
                {
                    toastr.success("Congratulations, We have your details!",'Mobile Check', { "timeOut": 0 });
                    //User Already exists

                    //Create Order
                    createOrder(mobileNo);
                }
                else{
                    //New User
                    toastr.warning("Unfortunately, We don't have your details, Please Enter your details!",'Mobile Check', { "timeOut": 0 });
                    $('#user_contact').attr('value',mobileNo);

                    $('.mobile-check').fadeOut(1000);
                    $('.new-user').fadeIn(1000);
                }
            }
            else {
                toastr.error(data.message,'Mobile Check', { "timeOut": 0 }); 
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Mobile Check', { "timeOut": 0 });
            console.log('An error occurred.' + error);
        },
        complete: function() {
        }
    });
});

$("#new-user-form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        dataType : 'json',
        url: $(this).attr("action"),
        data: $(this).serialize(),
        beforeSend: function() {
        },
        success: function(data) {
            if(data.type === "success") {
                toastr.success(data.message,'New User Creation', { "timeOut": 0 });
                document.getElementById("new-user-form").reset(); 

                //Create Order
                createOrder($('#contact').val());
            } else {
                toastr.error(data.message,'New User Creation', { "timeOut": 0 });
                
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'New User Creation', { "timeOut": 0 });
            console.log('An error occurred.' + error);
        },
        complete: function() {
             
        }
    });
});

function createOrder(mobile_no, ip_address = $('#cart-link').data('ip_address')){
    if(ip_address){
        $.ajax({
            type: "POST",
            dataType : 'json',
            url: '<?=base_url()?>Shop/create_new_order',
            data: {'ip_address' : ip_address, 'phone' : mobile_no},
            beforeSend: function() {
            },
            success: function(data) {
                if(data.type === "success") {
                    toastr.success(data.message,'Order Creation', { "timeOut": 0 });
                    document.getElementById('form-mobile-no').reset();
                    window.location.reload();
                } else {
                    toastr.error(data.message,'Order Creation', { "timeOut": 0 }); 
                }
            },
            error: function(xhr, status, error) {
                toastr.error(error,'Order Creation', { "timeOut": 0 });
                console.log('An error occurred.' + error);
            },
            complete: function() {
                
            }
        }); 
    }

}

</script>

