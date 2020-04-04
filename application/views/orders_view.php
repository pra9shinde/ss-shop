
<?php if(count($user_orders) > 0): ?>
  <?php foreach($user_orders['orders'] as $order){ ?>

    <div class="card pull-up">
      <div class="card-header">
          <div class="float-left">
              <a href="#" class="btn btn-info">#ORD<?=$order['id']?></a>
          </div>
          <div class="float-right">
              <a href='<?=base_url()?>Shop/load_invoice/<?=$order['id']?>' class="btn btn-outline-info mr-1"><i class="la la-print"></i> Print Invoice </a>
              <a href="#" class="btn btn-outline-info"><i class="la la-question"></i>Need Help</a>
          </div>
      </div>
      <div class="card-content">
          <div class="card-body py-0">
              <div class="d-flex justify-content-between lh-condensed">
                  <div class="order-details text-center">
                      <div class="product-img d-flex align-items-center">
                          <img class="img-fluid" src="<?=base_url()?>assets/theme/images/market.svg" alt="Product Image">
                      </div>
                  </div>
                  <?php foreach($order['order_items'] as $order_item) {?>
                      <div class="order-details">
                          <h6 class="my-0"><?=$order_item['name']?> x <?=$order_item['quantity']?></h6>
                          <small class="text-muted">Pieces per order: <?=$order_item['pieces']?></small>
                      </div>
                      <div class="order-details">
                          <div class="order-info">₹<?=$order_item['line_item_price']?></div>
                      </div>
                  <?php } ?>
              </div>
          </div>
      </div>
      <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
          <span class="float-left">
              <span class="text-muted">Ordered On</span>
              <!-- <strong>Wed, Oct 3rd 2018</strong> -->
              <strong><?=$order['create_date']?></strong>
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