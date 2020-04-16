
 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper" id="invoice-template">
        
    <div class="content-body" id="invoice-template">
        <section class="card">
            <div  class="card-body p-4">
                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">
                    <div class="col-sm-6 col-12 text-center text-sm-left">
                        <div class="media row">
                            <div class="col-12 col-sm-4 col-xl-4">
                                <img src="<?=base_url()?>assets/login/LogoBig.png" alt="Smart Society Services" class="mb-1 mb-sm-0" width="100%"/>
                            </div>
                            <div class="col-12 col-sm-8 col-xl-8">
                                <div class="media-body">
                                    <ul class="ml-2 px-0 list-unstyled">
                                        <li class="text-bold-800" style="font-size: 1.5rem;color: #a73737;">Smart Society Services</li>
                                        
                                        <li>Seller : <?=$item['shop_name']?>,</li>
                                        <?php if(!empty($item['seller_name'])):?>
                                          <li><?=$item['shop_name']?>,</li>
                                        <?php endif;?>
                                        <li>Mobile No : +91-<?=$item['phone']?>,</li>
                                        <li>Pincode : <?=$item['pin']?> </li>
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
                                        <th>UOM</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Price(Excl. TAX)</th>
                                        <th>Discount</th>
                                        <th>Total(Inc. TAX)</th>
                                        <th>MRP</th>
                                        <th class="text-right">Tax(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $order_item_count = 0; ?>
                                  <?php $sub_total = 0; ?>
                                  <?php $tax_total = 0; ?>
                                  <?php $total = 0; ?>

                                  <?php foreach($item['items'] as $order_item):?>

                                      <tr class="group"><td colspan="9"><h6 class="mb-0">Category - <span class="text-bold-600"><?=$order_item[0]['category_name']?></span></h6></td></tr>
                                      <?php foreach($order_item as $data) : ?>
                                          <?php $order_item_count += 1;?>

                                          <tr>
                                              <td scope="row"><?=$order_item_count?></td>

                                              <td>
                                                  <p><?=$data['name']?></p>
                                                  <p class="text-muted"><?=$data['description']?>
                                                  </p>
                                              </td>

                                              <td class="text-center"><?=$data['pieces']?></td>

                                              <td class="text-center"><?=$data['quantity']?></td>

                                              <td class="text-center">₹<?=$data['price']?></td>
                                              <?php $sub_total += doubleval($data['price']);?>


                                              <td class="text-center">₹0</td>

                                              <td class="text-center">₹<?=$data['line_item_price']?></td>
                                              <?php $total += doubleval($data['line_item_price']);?>

                                              
                                              <td class="text-center">₹<?=$data['mrp']?></td>

                                              <td class="text-center"><?=$data['tax_percentage']?>%</td>
                                              <?php $tax_total += doubleval($data['line_tax']);?>


                                          </tr>
                                      <?php endforeach;?>
                                  <?php endforeach;?>
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
                                            <td class="text-right">₹<?=$sub_total?></td>
                                        </tr>
                                        <tr>
                                            <td>TAX</td>
                                            <td class="text-right">₹<?=$tax_total?></td>
                                        </tr>
                                        <tr>
                                            <td>Discount</td>
                                            <td class="text-right">₹0</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Charges</td>
                                            <td class="text-right">₹0</td>
                                        </tr>
                                        <tr class="group" style="color:#a73737;">
                                            <td class="text-bold-800"><b>Total</b></td>
                                            <td class="text-bold-800 text-right"><b>₹<?=$total?></b></td>
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
    
  </div>
</div>
<!-- END: Content-->

<script>

function printDiv() {
  // var divName = 'invoice-template';
  // $('#invoice-footer').css('display','none');

  // var printContents = document.getElementById(divName).innerHTML;
  // var originalContents = document.body.innerHTML;

  // document.body.innerHTML = printContents;

  // window.print();

  // document.body.innerHTML = originalContents;
  // $('#invoice-footer-'+id).css('display','block');
}
</script>