
<?php if(count($user_orders) > 0): ?>
  <?php foreach($user_orders['orders'] as $order){ ?>

    <div class="card pull-up">
      <div class="card-header">
          <div class="float-left mb-1">
              <a href="#" class="btn btn-info">#ORD<?=$order['id']?></a>
              <span style="margin-left:10px;">Status : </span>
              
                <?php
                if($order['status'] == 1) : ?>
                    <p class="badge badge-info" style="font-weight: 600;font-size: 1rem;" data-toggle="tooltip" data-html="true" data-original-title="Placed - Seller not yet accepted order, <br> Confirmed - All sellers accepted order, <br>Cancelled - All sellers cancelled order, <br> Partial - One of the seller cancelled order ">Placed</p>
                <?php
                elseif($order['status'] == 2) : ?>
                    <p class="badge badge-success" style="font-weight: 600;font-size: 1rem;">Confirmed</p>
                <?php
                elseif($order['status'] == 3) : ?>
                    <p class="badge badge-danger" style="font-weight: 600;font-size: 1rem;">Cancelled</p>
                <?php
                else : ?>
                    <p class="badge badge-warning" style="font-weight: 600;font-size: 1rem;">Partial</p>
                <?php endif; ?>
           
          </div>
          <div class="float-right">
              <a href='<?=base_url()?>Shop/load_invoice/<?=$order['id']?>' class="btn btn-outline-info mb-1" style="margin-right:0.2rem;margin-left:-2px;"><i class="la la-print"></i> Print Invoice </a>
              <a class="btn btn-outline-danger mb-1" onclick="cancel_order(<?=$order['id']?>)"><i class="la la-trash-o"></i>Cancel Order</a>
          </div>
      </div>

        <div class="row" style="margin-left:0; margin-right:0;">
            <div class="col-md-2">
                <div class="order-details text-center">
                    <div class="product-img d-flex align-items-center">
                        <img class="img-fluid" src="<?=base_url()?>assets/theme/images/market.svg" alt="Product Image">
                    </div>
                </div>
            </div>  

            <div class="col-md-10">
                <div class="confirmed-container">
                    <div class="row">
                        <?php if($order['status'] != 1) : ?>
                            <div class="col-md-2">                        
                                <p class="badge badge-success" style="" data-toggle="tooltip" data-original-title="Hover Triggered">Seller Confirmed:</p>
                            </div>
                        <?php endif;?>
                        <?php foreach($order['order_items']['confirmed'] as $order_item) {?>
                            <div class="col-md-2">
                                <div class="item-details">
                                    <h6 class="my-0"><?=$order_item['name']?></h6>
                                    <small class="text-muted">Quantity: <?=$order_item['quantity']?></small>
                                    <p style="margin-bottom:10px;"><small class="text-muted">Pieces Included: <?=$order_item['pieces']?></small></p>
                                    <div class="order-info">₹<?=$order_item['line_item_price']?></div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php $cancelled_total = 0 ?>
                        <?php if(count($order['order_items']['cancelled']) > 0) :?>
                            <div class="col-md-2">                        
                                <p class="badge badge-danger" style="" data-toggle="tooltip" data-original-title="Hover Triggered">Seller Cancelled:</p>
                            </div>
                            <?php foreach($order['order_items']['cancelled'] as $order_item) {?>
                                <div class="col-md-2">
                                    <div class="item-details">
                                        <h6 class="my-0"><?=$order_item['name']?></h6>
                                        <small class="text-muted">Quantity: <?=$order_item['quantity']?></small>
                                        <p style="margin-bottom:10px;"><small class="text-muted">Pieces Included: <?=$order_item['pieces']?></small></p>
                                        <div class="order-info">₹<?=$order_item['line_item_price']?></div>
                                    </div>
                                </div>
                            
                            <?php } ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>


        
      <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
          <span class="float-left">
              <span class="text-muted">Ordered On</span>
              <!-- <strong>Wed, Oct 3rd 2018</strong> -->
            <strong>
                <?=date_format(date_create($order['create_date']),"d M Y, D H:i:s");?>
            </strong>
              
          </span>
          <span class="float-right">
              <span class="text-muted">Order Amount</span>
              <strong>₹<?=$order['total_price']?></strong>
          </span>
      </div>
    </div>

  <?php }?>
<?php else: ?>
  <div class="card">
      <div class="card-header">
          <h4 class="card-title text-center">You don't have any orders, Please explore our shop.</h4>
      </div>
  </div>
<?php endif; ?>

<script>
function cancel_order(order_id){
    
    $.ajax({
        type: "POST",
        dataType : 'json',
        url: '<?=base_url()?>/Shop/cancel_order_buyer/' + order_id,
        data: {
        },
        success: function(data) {
            if(data.type === "success") {
                toastr.success(data.message,'Order Deletion', { "timeOut": 1000 });

            } else {
                toastr.error(data.message,'Order Deletion', { "timeOut": 1000 });
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Order Deletion', { "timeOut": 1000 });
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


$(function () {
        $('[data-toggle="tooltip"]').tooltip()
      });//Bootstrap tooltip ini
</script>