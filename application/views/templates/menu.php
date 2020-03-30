<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <?php if($this->uri->segment(2) === 'products_config'):?>
            <li class=" nav-item active"><a href="index.html"><i class="mbri-desktop"></i><span class="menu-title" data-i18n="Dashboard">App</span></a>
          <?php endif; ?>   
          </li>
          <li class="nav-item active"><a href="#"><i class="mbri-sites"></i><span class="menu-title" data-i18n="Templates">Shop</span></a>
          </li>
          <li class=" nav-item"><a href="<?=base_url()?>Shop/seller"><i class="mbri-file"></i><span class="menu-title" data-i18n="Document">Seller Login</span></a>
          </li>
      </ul>
  </div>
</div>
<!-- END: Main Menu-->