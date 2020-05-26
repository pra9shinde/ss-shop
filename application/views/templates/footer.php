<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
  <p class="clearfix blue-white lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; <script>
        document.write(new Date().getFullYear());
      </script> All rights reserved | <a class="text-bold-800 grey darken-2 footer-link" href="http://smartsocietyservices.in" target="_blank">Kisaan 2 Consumer</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart footer-link"></i><span id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->

<!--datatable -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
<!-- BEGIN Vendor JS-->


<!-- BEGIN: Vendor JS-->
<!-- <script src="<?= base_url() ?>assets/theme/js/vendors/jquery.cookie.js"></script> -->
<script src="<?= base_url() ?>assets/theme/js/vendors/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/jquery.bootstrap-touchspin.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/icheck.min.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/toastr.min.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/tags/form-field.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/transition.js"></script>
<script src="<?= base_url() ?>assets/theme/js/vendors/zoom.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url() ?>assets/theme/js/app-menu.js"></script>
<script src="<?= base_url() ?>assets/theme/js/app.js"></script>
<script src="<?= base_url() ?>assets/theme/js/form-select2.js"></script>

<!-- BEGIN: Page JS-->
<script src="<?= base_url() ?>assets/theme/js/custom-file-input.js"></script>
<script src="<?= base_url() ?>assets/theme/js/checkbox-radio.js"></script>
<script src="<?= base_url() ?>assets/theme/js/datatable/dt-setup.js"></script>
<script src="<?= base_url() ?>assets/theme/js/ecommerce-cart.js"></script>
<!-- END: Page JS-->


<!-- Product Details JS -->
<?php if ($this->uri->segment(2) === 'product_details') : ?>
  <script src="<?= base_url() ?>assets/theme/js/vendors/prism.min.js"></script>
  <script src="<?= base_url() ?>assets/theme/js/vendors/jquery.raty.js"></script>
  <script src="<?= base_url() ?>assets/theme/js/vendors/jquery.treeview.js"></script>
  <script src="<?= base_url() ?>assets/theme/js/ecommerce-product-details.js"></script>
<?php endif; ?>
<!------>

<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>


<script>
  function addToCart(id, obj, ip_address = $('#cart-link').data('ip_address')) {
    if (ip_address) {
      let qty = obj.parentElement.parentElement.children[0];
      let itemQty = parseInt(qty.value);

      if (isNormalInteger(itemQty)) {
        $.ajax({
          method: 'POST',
          async: false,
          url: $('#base_url').val() + 'Shop/add_to_cart/' + id,
          data: {
            'ip_address': ip_address,
            'item_qty': itemQty,
          },
          dataType: 'JSON',
          context: this,
          success: function(data) {
            if (data.status == 'success') {
              qty.value = 1;
              $('#cart-count').text(data.cart.toString());
              toastr.success('Product Added to Cart Successfully', 'Cart Addition', {
                "timeOut": 1000
              });
            } else {
              toastr.error(data.message, 'Cart Addition', {
                "timeOut": 1000
              });
            }
          },
          error: function(res) {
            toastr.error('Error', 'Cart Addition', {
              "timeOut": 1000
            });
          },
          beforeSend: function() {
            $("#ajax-loader").fadeIn(500);
          },
          complete: function() {
            setTimeout(function() {
              $("#ajax-loader").fadeOut(500);
            }, 500);
          }
        });
      } else {
        toastr.error('Item Quantity must be positive number', 'Item Quantity', {
          "timeOut": 2000
        });
      }

    } else {
      toastr.error('Internal Server Error', 'Error', {
        "timeOut": 2000
      });
    }
  }

  function createCookie() {
    let cart = [{
      "ids": []
    }];
    $.cookie('client_ip', JSON.stringify(cart), {
      expires: 1
    });
  }

  function removeFromCart(id, ip_address = $('#cart-link').data('ip_address')) {
    if (ip_address) {
      $.ajax({
        method: 'POST',
        async: false,
        url: $('#base_url').val() + 'Shop/remove_from_cart/' + id,
        data: {
          'ip_address': ip_address
        },
        dataType: 'JSON',
        context: this,
        success: function(data) {
          if (data.status == 'success') {
            $('#cart-count').text(data.cart.toString());
            toastr.success('Product Removed from Cart Successfully', 'Cart Deletion', {
              "timeOut": 1000
            });

            window.location.reload();
            updateCartTotal();
          } else {
            alert('Something Went Wrong!');
          }
        },
        error: function(res) {
          console.log(res);
        },
        beforeSend: function() {
          $("#ajax-loader").fadeIn(500);
        },
        complete: function() {
          setTimeout(function() {
            $("#ajax-loader").fadeOut(500);
          }, 500);
        }
      });
    } else {
      alert('something went wrong');
    }
  }

  function quantityUpdate(id, obj, device, ip_address = $('#cart-link').data('ip_address')) {
    let line_total;
    let line_tax;
    let line_saved;

    if (device === 'desktop') {

      line_total = obj.parentElement.parentElement.parentElement.children[6].firstElementChild;

      line_tax = obj.parentElement.parentElement.parentElement.children[5].firstElementChild;

      line_saved = obj.parentElement.parentElement.parentElement.children[7].firstElementChild.children[0];

    } else {
      line_total = obj.parentElement.parentElement.children[8].children[1];
      line_tax = obj.parentElement.parentElement.children[7].children[1];
      line_saved = obj.parentElement.parentElement.children[9].children[1];

    }


    if (ip_address) {
      $.ajax({
        method: 'POST',
        async: false,
        url: $('#base_url').val() + 'Shop/update_cart_quantity/' + id,
        data: {
          'ip_address': ip_address,
          'new_quantity': obj.value
        },
        dataType: 'JSON',
        context: this,
        success: function(data) {
          if (data.status == 'success') {
            line_total.innerText = '₹' + data.line_total;
            line_tax.innerText = '₹' + data.line_tax;
            line_saved.innerText = data.line_save;
            updateCartTotal(device);
          } else {
            alert('Something Went Wrong!');
          }
        },
        error: function(res) {
          console.log(res);
        },
        beforeSend: function() {
          $("#ajax-loader").fadeIn(500);
        },
        complete: function() {
          setTimeout(function() {
            $("#ajax-loader").fadeOut(500);
          }, 500);
        }
      });
    } else {
      alert('something went wrong');
    }
  }

  function updateCartTotal(device, ip_address = $('#cart-link').data('ip_address')) {
    var line_saved = document.querySelectorAll('.line_saved');
    let total_saved = 0;

    for (let i = 0; i < line_saved.length; i++) {
      total_saved += Number(line_saved[i].textContent);
    }

    if (ip_address) {
      $.ajax({
        method: 'POST',
        async: false,
        url: $('#base_url').val() + 'Shop/get_cart_total',
        data: {
          'ip_address': ip_address
        },
        dataType: 'JSON',
        context: this,
        success: function(data) {
          if (data.status == 'success') {
            // line_total.innerText = '₹' + data.line_total;
            $('#tax_total').text(data.tax_total);
            $('#total_items').text(data.cart_items);
            $('#total_amount').text('₹' + data.cart_total);
            let pay_amt = Number(data.tax_total) + Number(data.cart_total);
            $('#payable_amount').text('₹' + pay_amt.toFixed(2));
            $('#total_saved').text(total_saved.toFixed(2));

          } else {
            alert('Something Went Wrong!');
          }
        },
        error: function(res) {
          console.log(res);
        },
        beforeSend: function() {
          $("#ajax-loader").fadeIn(500);
        },
        complete: function() {
          setTimeout(function() {
            $("#ajax-loader").fadeOut(500);
          }, 500);
        }
      });
    } else {
      alert('something went wrong');
    }
  }

  function exportSellerOrders() {
    $.ajax({
      method: 'POST',
      async: false,
      url: $('#base_url').val() + 'Product/export_seller_orders',
      data: {},
      dataType: 'JSON',
      context: this,
      success: function(data) {
        //Download File in client's Browser
        var $a = $("<a>");
        $a.attr("href", data.file);
        $("body").append($a);
        $a.attr("download", "file.xlsx");
        $a[0].click();
        $a.remove();

      },
      error: function(res) {
        console.log(res);
      },
      beforeSend: function() {
        $("#ajax-loader").fadeIn(500);
      },
      complete: function() {
        setTimeout(function() {
          $("#ajax-loader").fadeOut(500);
        }, 500);
      }
    });
  }
</script>

<!-- Social Logout -->
<script>
  //Google Login - Initialize auth when script is loaded
  function onLoad() {
    gapi.load('auth2', function() {
      gapi.auth2.init();
    });
  }

  function logout(userType) {
    $.ajax({
      method: 'POST',
      url: $('#base_url').val() + 'Shop/logout',
      data: {
        'user_type': userType
      },
      dataType: 'json',
      success: function(data) {
        if (data.type === 'success') {

          toastr.success(data.message, 'User Logout', {
            "timeOut": 1000
          });

          if (data.loginType === 'google') {
            //Google JS signout
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {});
          }
          window.location = data.redirect;
        } else {
          toastr.error('Error while Logging Out', 'User Logout', {
            "timeOut": 1000
          });
        }
      },
      error: function(res, error) {
        toastr.error('Ajax request failed', 'User Logout', {
          "timeOut": 1000
        });
        console.log(error)
      },
      beforeSend: function() {
        $("#ajax-loader").fadeIn(500);
      },
      complete: function() {
        setTimeout(function() {
          $("#ajax-loader").fadeOut(500);
        }, 500);
      }
    });
  }
</script>
<!-- Social Logout -->


<script>
  $(window).on('load', function() {
    setTimeout(function() {
      $("#ajax-loader").fadeOut(500);
    }, 500);
  });

  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  }); //Bootstrap tooltip ini

  Array.prototype.remove = function() {
    var what, a = arguments,
      L = a.length,
      ax;
    while (L && this.length) {
      what = a[--L];
      while ((ax = this.indexOf(what)) !== -1) {
        this.splice(ax, 1);
      }
    }
    return this;
  };

  //Check if the number is postive integer
  function isNormalInteger(str) {
    return /^\+?(0|[1-9]\d*)$/.test(str);
  }

  //get url key values
  function getUrlKey(name, url) {
    if (!url) url = location.href;
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(url);
    return results == null ? null : results[1];
  }

  //Use redirection with post http method
  function postAndRedirect(url, postData) {
    var postFormStr = "<form method='POST' action='" + url + "'>\n";

    for (var key in postData) {
      if (postData.hasOwnProperty(key)) {
        postFormStr += "<input type='hidden' name='" + key + "' value='" + postData[key] + "'></input>";
      }
    }

    postFormStr += "</form>";

    var formElement = $(postFormStr);

    $('body').append(formElement);
    $(formElement).submit();
  }

  function getUriSegment(url, segment) {
    let arr = url.split('/');
    return arr[segment];
  }
</script>
</body>
<!-- END: Body-->

</html>