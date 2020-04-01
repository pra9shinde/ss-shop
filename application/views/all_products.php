<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
      <div class="content-body">
          <!-- Shopping cards section start -->
          <section id="shopping-cards">
              <div class="row">
                  <div class="col-12 mt-3 mb-1">
                      <h4 class="text-uppercase">Shopping Products</h4>
                  </div>
              </div>
              <div class="row">
                <div class="col-xl-12 col-lg-12">
                  <style>
                    #banner-shop{
                      position:relative;
                    }

                    #banner-shop img{
                      position:absolute;
                      right: 0;
                      top: -50px;
                      width: 20%;
                      margin-right: -2%;
                    }
                  </style>
                      <div class="card text-white bg-gradient-y-pink text-center" >
                          <div class="card-content" id="banner-shop">
                              <img src="<?=base_url()?>assets/theme/images/supermarket.svg" alt="Relax" class="float-right img-fluid">
                              <div class="card-body pt-3">
                                  <h4 class="card-title text-white" style="font-size:3.12rem;">Your Digital Grocery Store!</h4>
                                  <p class="card-text ">Buy Groceries from your nearest shop in this lockdown.</p>
                                  <p class="card-text "> An initiative by Smart Society Services & Goregaon Welfare Association</p>
                                  <button class="btn bg-white bg-darken-3 pink">Enter your Pincode & Go</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            
              <div class="row">
               
                <?php foreach($products as $product) { ?>

                  <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body p-0">
                                <div class="bg-black pl-2 pr-2 pt-2 text-white">
                                    <!-- <img src="<?=base_url()?>assets/theme/images/dairy.svg" alt="image" width="40"> -->
                                    <p class="badge badge-success" style="font-weight: 600;font-size: 1rem;">Pieces - <?=$product['pieces']?></p>
                                    <h3 class="text-white text-uppercase pt-2"><?=$product['category_name']?></h3>
                                    <p class="m-0"><?=$product['category_description']?></p>
                                    <img src="<?=base_url()?>assets/theme/images/market.svg" alt="Relax" class="float-right img-fluid card-image-position-right-mid">
                                    <h1 class="card-font-style-white">SMART SOCIETY SERVICES</h1>
                                </div>
                                <div class="card-body p-2">
                                    <h5><b><?=$product['product_name']?></b></h5>
                                    <p class="m-0"><?=$product['description']?></p>
                                    <div class="rating mt-1">
                                        <p style="font-size:2rem;">₹ <?=$product['price']?></p>
                                    </div>
                                    <p class="mt-1">Remaining Stock :
                                    <span class="badge badge badge-danger badge-glow badge-pill"><?=$product['rem_quantity']?></span>
                                    <span class="float-right" style="color:#a73737;"><a onclick="addToCart(<?=$product['id']?>)">Add To Cart <i class="la la-cart-plus" ></i></a></span>
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>


                <?php } ?>

                <?php //print_r($pagination);?>
              </div>

              <div class="pagination-container ">
                <div class="pagination">
                  <div class="row">
                    <nav aria-label="Page navigation">
                      <ul class="pagination justify-content-center pagination-separate pagination-flat">

                          <li class="page-item">
                              <a class="page-link"
                                  <?php if($pagination['has_previous_page']): ?>
                                    href="<?=base_url()?>Shop?page=<?=$pagination['previous_page']?>"
                                  <?php else: ?>
                                    href="#"
                                  <?php endif; ?>
                                    aria-label="Previous">
                                  <span aria-hidden="true">« Prev</span>
                                  <span class="sr-only">Previous</span>
                              </a>
                          </li>

                          <?php if($pagination['has_previous_page']): ?>
                            <li class="page-item"><a class="page-link" href="<?=base_url()?>Shop?page=<?=$pagination['previous_page']?>"><?=$pagination['previous_page']?></a></li>
                          <?php endif; ?>

                          <li class="page-item active"><a class="page-link" href="<?=base_url()?>Shop?page=<?=$pagination['current_page']?>"><?=$pagination['current_page']?></a></li>

                          <?php if($pagination['has_next_page']): ?>
                            <li class="page-item"><a class="page-link" href="<?=base_url()?>Shop?page=<?=$pagination['next_page']?>"><?=$pagination['next_page']?></a></li>
                          <?php endif; ?>

                            <li class="page-item">
                                <a class="page-link"
                                   <?php if($pagination['has_next_page']): ?>
                                      href="<?=base_url()?>Shop?page=<?=$pagination['next_page']?>"
                                    <?php else: ?>
                                      href="#"
                                    <?php endif; ?>
                                      aria-label="Next">
                                    <span aria-hidden="true">Next »</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                          
                      </ul>
                    </nav>
                  </div>
                </div>
                
              </div>
              
          </section>
          <!-- // Shopping cards section end -->
      </div>
  </div>
</div>

