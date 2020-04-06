
 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper" id="invoice-template">
        <div id="invoice-footer">
            <div class="row">
                <div class="col-sm-7 col-12 text-center text-sm-left">
                    
                </div>
                <div class="col-sm-5 col-12 text-center">
                    <button type="button" class="btn btn-info btn-print btn-lg my-1" onclick="printDiv()"><i class="la la-paper-plane-o mr-50" ></i>
                        Print
                        Invoice</button>
                </div>
            </div>
        </div>
    <?php $invoice_count = 1;?>
    <?php foreach($order as $item):?>
      <div class="content-body" id="invoice-template-<?=$invoice_count?>">
          <section class="card">
              <div  class="card-body p-4">
                  <!-- Invoice Company Details -->
                  <div id="invoice-company-details" class="row">
                      <div class="col-sm-6 col-12 text-center text-sm-left">
                          <div class="media row">
                              <div class="col-12 col-sm-3 col-xl-2">
                                  <img src="<?=base_url()?>assets/login/Smart Society Logo.png" alt="Smart Society Services" class="mb-1 mb-sm-0" />
                              </div>
                              <div class="col-12 col-sm-9 col-xl-10">
                                  <div class="media-body">
                                      <ul class="ml-2 px-0 list-unstyled">
                                          <li class="text-bold-800" style="font-size: 2rem;color: #a73737;">Smart Society Services</li>
                                          
                                          <li>Seller : <?=$item[0]['shop_name']?>,</li>
                                          <?php if(!empty($item[0]['seller_name'])):?>
                                            <li><?=$item[0]['shop_name']?>,</li>
                                          <?php endif;?>
                                          <li>Mobile No : +91-<?=$item[0]['phone']?>,</li>
                                          <li>Pincode : <?=$item[0]['pin']?> </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6 col-12 text-center text-sm-right">
                          <h2>INVOICE</h2>
                          <p class="pb-sm-3"># INV-000<?=$order_id?></p>
                      </div>
                  </div>
                  <!-- Invoice Company Details -->

                  <!-- Invoice Customer Details -->
                  <div id="invoice-customer-details" class="row pt-2">
                      <div class="col-12 text-center text-sm-left">
                          <p class="text-muted">Bill To</p>
                      </div>
                      <div class="col-sm-6 col-12 text-center text-sm-left">
                          <ul class="px-0 list-unstyled">
                              <li class="text-bold-800">Mr/Mrs. <?=$buyer_details['name']?></li>
                              <li><?=$buyer_details['address']?>,</li>
                              <li>Pin : <?=$buyer_details['pin']?>,</li>
                              <li>+91 - <?=$buyer_details['phone']?>.</li>
                          </ul>
                      </div>
                      <div class="col-sm-6 col-12 text-center text-sm-right">
                          <p><span class="text-muted">Invoice Date :</span> <?=date_format(date_create($order_totals['create_date']),"d M Y, D H:i:s");?></p>
                          <p><span class="text-muted">Payment :</span> Cash/UPI payment on Delivery</p>
                      </div>
                  </div>
                  <!-- Invoice Customer Details -->

                  <!-- Invoice Items Details -->
                  <div id="invoice-items-details" class="pt-2">
                      <div class="row">
                          <div class="table-responsive col-12">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Item & Description</th>
                                          <th class="text-right">Quantity</th>
                                          <th class="text-right">Price</th>
                                          <th class="text-right">Amount</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $seller_total = 0;?>
                                    <?php for($i=0; $i< count($item); $i++): ?>
                                      <tr>
                                          <td scope="row"><?=$i+1?></td>
                                          <td>
                                              <p><?=$item[$i]['name']?></p>
                                              <p class="text-muted"><?=$item[$i]['description']?>.
                                              </p>
                                          </td>
                                          <td class="text-right"><?=$item[$i]['quantity']?></td>
                                          <td class="text-right">₹<?=number_format($item[$i]['price'])?></td>
                                          <td class="text-right">₹<?=number_format($item[$i]['line_item_price'])?></td>
                                      </tr>
                                      <?php $seller_total += doubleval($item[$i]['line_item_price']);?>
                                    <?php endfor; ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <br><br>
                      <div class="row">
                          <div class="col-sm-7 col-12 text-center text-sm-left">
                            <h6>Terms & Condition</h6>
                            <p style="padding-right: 10rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aliquid nesciunt ratione esse repudiandae tempora laudantium iste blanditiis quasi, officia incidunt ab error. Accusantium, doloribus ducimus mollitia voluptate dicta magni!</p>
                          </div>
                          <div class="col-sm-5 col-12">
                              <p class="lead">Total due</p>
                              <div class="table-responsive">
                                  <table class="table">
                                      <tbody>
                                          <tr>
                                              <td>Sub Total</td>
                                              <td class="text-right">₹<?=number_format($seller_total)?></td>
                                          </tr>
                                          <tr>
                                              <td>TAX</td>
                                              <td class="text-right">₹0</td>
                                          </tr>
                                          <tr>
                                              <td class="text-bold-800">Total</td>
                                              <td class="text-bold-800 text-right">₹<?=number_format($seller_total)?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              
                          </div>
                      </div>
                  </div>

                  <!-- Invoice Footer -->
                  
                  <!-- Invoice Footer -->

              </div>
          </section>

      </div>
    <?php $invoice_count += 1;?>
    <?php endforeach; ?>
  </div>
</div>
<!-- END: Content-->

<script>

function printDiv() {
  var divName = 'invoice-template';
  $('#invoice-footer').css('display','none');

  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;

  window.print();

  document.body.innerHTML = originalContents;
  $('#invoice-footer-'+id).css('display','block');

}
</script>