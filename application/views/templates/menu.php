<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <?php if($this->uri->segment(2) === 'products_config' || $this->uri->segment(2) === 'my_orders' ):?>
            <li class="nav-item active"><a href="#"><i class="mbri-desktop"></i><span class="menu-title" data-i18n="Dashboard">App</span></a>
              <ul class="menu-content">
                <li class=""><a class="menu-item" href="<?=base_url()?>Shop/products_config"><i class="la la-wrench"></i><span>Products Config</span></a>

                <li class=""><a class="menu-item" href="<?=base_url()?>Shop/my_orders"><i class="la la-cart-arrow-down"></i><span>My Orders</span></a>
                </li>
              </ul>
            </li>
          <?php endif; ?>   
          
          <li class="nav-item <?php if($this->uri->segment(2) == ''):?> active<?php endif;?>">
            <a href="<?=base_url()?>"><i class="mbri-sites"></i><span class="menu-title" data-i18n="Templates">Shop</span></a>
          </li>

          <?php if($this->uri->segment(2) !== 'products_config' && $this->uri->segment(2) !== 'my_orders' ):?>
            <li class="nav-item <?php if($this->uri->segment(2) == 'cart' ):?> active<?php endif;?>">
            <a href="<?=base_url()?>Shop/cart" id="buyer_my_orders"><i class="mbri-shopping-bag"></i><span class="menu-title" data-i18n="Templates">My Order <br> History</span></a>
          </li>
          <?php endif; ?>   


          <li class=" nav-item"><a href="<?=base_url()?>Shop/seller"><i class="mbri-login"></i><span class="menu-title" data-i18n="Document">Seller Login</span></a>
          </li>
      </ul>
  </div>
</div>
<!-- END: Main Menu-->