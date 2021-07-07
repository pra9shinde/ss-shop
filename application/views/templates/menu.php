<?php
$base_url_data = base_url();
$base_url_data = substr($base_url_data, 0, -1); //remove last / from base url

//Create a category and sub category array
$result = $this->db->get('sss_category');
$categories = $result->result_array();
$result = $this->db->get('sss_sub_category');
$sub_categories = $result->result_array();

foreach ($categories as $key => $value) {
  $categories[$key]['sub_categories'] = array();
  foreach ($sub_categories as $sub_category) {
    if ($sub_category['category_id'] === $categories[$key]['id']) {
      array_push($categories[$key]['sub_categories'], $sub_category);
    }
  }
}
?>


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <?php if ($this->uri->segment(2) === 'products_config' || $this->uri->segment(2) === 'my_orders') : ?>
        <li class="nav-item active"><a href="#"><i class="mbri-desktop"></i><span class="menu-title" data-i18n="Dashboard">App</span></a>
          <ul class="menu-content">
            <li class=""><a class="menu-item" href="<?= base_url() ?>Shop/products_config"><i class="la la-wrench"></i><span>Products Config</span></a>

            <li class=""><a class="menu-item" href="<?= base_url() ?>Shop/my_orders"><i class="la la-cart-arrow-down"></i><span>My Orders</span></a>
            </li>
          </ul>
        </li>
      <?php endif; ?>

      <li class="nav-item <?php if ($this->uri->segment(2) == '') : ?> active<?php endif; ?>">
        <a href="<?= base_url() ?>"><i class="mbri-sites"></i><span class="menu-title" data-i18n="Templates">Shop</span></a>
      </li>

      <!-- Shop by Category -->
      <li class=" nav-item <?php if ($this->uri->segment(2) == 'products') : ?> active<?php endif; ?>"><a href="#"><i class="mbri-shopping-basket"></i><span class="menu-title" data-i18n="Templates">Shop by <br> Category</span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="<?= base_url() ?>Shop/products?cat=all&sub_cat=all"><i class="la la-list"></i><span data-i18n="Vertical">All Products</span></a>
          </li>
          <?php if (count($categories) > 0) : ?>
            <?php foreach ($categories as $category) : ?>
              <li>
                <a class="menu-item" href="<?= base_url() ?>Shop/products?cat=<?= $category['id'] ?>&sub_cat=all">
                  <i class="la la-list"></i><span data-i18n="Vertical"><?= $category['name'] ?></span>
                </a>
                <?php if (count($category['sub_categories']) > 0) : ?>
                  <ul class="menu-content">
                    <?php foreach ($category['sub_categories'] as $sub_category) : ?>
                      <li>
                        <a class="menu-item" href="<?= base_url() ?>Shop/products?cat=<?= $category['id'] ?>&sub_cat=<?= $sub_category['id'] ?>">
                          <i></i><span data-i18n="Classic Menu"><?= $sub_category['name'] ?></span>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </li>



      <?php if ($this->uri->segment(2) !== 'products_config' && $this->uri->segment(2) !== 'my_orders') : ?>
        <li class="nav-item <?php if ($this->uri->segment(2) == 'cart') : ?> active<?php endif; ?>">
          <a href="<?= base_url() ?>Shop/cart" id="buyer_my_orders"><i class="mbri-shopping-bag"></i><span class="menu-title" data-i18n="Templates">My Order <br> History</span></a>
        </li>
      <?php endif; ?>


      <li class=" nav-item"><a href="<?= base_url() ?>Shop/seller"><i class="mbri-login"></i><span class="menu-title" data-i18n="Document">Seller Login</span></a>
      </li>
    </ul>
  </div>
</div>
<!-- END: Main Menu-->