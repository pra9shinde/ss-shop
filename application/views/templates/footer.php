
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-white lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | <a class="text-bold-800 grey darken-2 footer-link" href="http://smartsocietyservices.in" target="_blank">Smart Society Services</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart footer-link"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    <!--datatable -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=base_url()?>assets/theme/js/vendors/jquery.cookie.js"></script>
    <script src="<?=base_url()?>assets/theme/js/vendors/select2.full.min.js"></script>
    <script src="<?=base_url()?>assets/theme/js/vendors/jquery.bootstrap-touchspin.js"></script>
    <script src="<?=base_url()?>assets/theme/js/vendors/icheck.min.js"></script>
    <script src="<?=base_url()?>assets/theme/js/vendors/toastr.min.js"></script>
    <script src="<?=base_url()?>assets/theme/js/vendors/tags/form-field.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url()?>assets/theme/js/app-menu.js"></script>
    <script src="<?=base_url()?>assets/theme/js/app.js"></script>
    <script src="<?=base_url()?>assets/theme/js/form-select2.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url()?>assets/theme/js/custom-file-input.js"></script>
    <script src="<?=base_url()?>assets/theme/js/checkbox-radio.js"></script>
    <script src="<?=base_url()?>assets/theme/js/datatable/dt-setup.js"></script>
    <script src="<?=base_url()?>assets/theme/js/ecommerce-cart.js"></script>
    <!-- END: Page JS-->
    <script>
      var client_ip;

      $(document).ready(function(){
        
        $.getJSON("https://api.ipify.org?format=json",function(data) { 
            client_ip = data.ip.toString();
            $('#cart-link').attr('data-ip_address', client_ip); 
            $('#cart-link').attr('href', '<?=base_url()?>Shop/cart/'+ client_ip); 
            //Create a cookie
            if (!!$.cookie('client_ip')) {
              // have cookie
              console.log('cookie not present' + $.cookie('client_ip'));
            } 
            else {
              // no cookie
              $.cookie('client_ip', data.ip, {
                  expires: 1
              });
              console.log('cookie not present');
            }
            
            $.ajax({
              method:'POST',
              async:false,
              url: $('#base_url').val() +'Shop/get_cart/'+ data.ip,
              data: {},
              dataType:'JSON',
              context:this,
              success:function(data){
                if(data.status == 'success'){
                  $('#cart-count').text(data.cart.toString());
                }
                else{
                  alert('Something Went Wrong!');
                }
              },
              error:function(res){
                console.log(res);
              },
              beforeSend:function(){
              },
              complete:function(){

              }
            });
        }); 
      });

      function addToCart(id, ip_address = $('#cart-link').data('ip_address')){
        if(ip_address){
          $.ajax({
            method:'POST',
            async:false,
            url: $('#base_url').val() +'Shop/add_to_cart/'+ id,
            data: {'ip_address': ip_address},
            dataType:'JSON',
            context:this,
            success:function(data){
              if(data.status == 'success'){
                $('#cart-count').text(data.cart.toString());
              }
              else{
                alert('Something Went Wrong!');
              }
            },
            error:function(res){
              console.log(res);
            },
            beforeSend:function(){
            },
            complete:function(){

            }
          });
        }
        else{
          alert('something went wrong');
        }  
      }

      function createCookie()
      {
          let cart = [{"ids" : []}];
          $.cookie('client_ip',  JSON.stringify(cart), {
              expires: 1
          });
      }

       

      function removeFromCart(id, ip_address = $('#cart-link').data('ip_address')){
        if(ip_address){
          $.ajax({
            method:'POST',
            async:false,
            url: $('#base_url').val() +'Shop/remove_from_cart/'+ id,
            data: {'ip_address': ip_address},
            dataType:'JSON',
            context:this,
            success:function(data){
              if(data.status == 'success'){
                $('#cart-count').text(data.cart.toString());
                window.location.reload();
              }
              else{
                alert('Something Went Wrong!');
              }
            },
            error:function(res){
              console.log(res);
            },
            beforeSend:function(){
            },
            complete:function(){

            }
          });
        }
        else{
          alert('something went wrong');
        } 
      }

      function quantityUpdate(id,obj, ip_address = $('#cart-link').data('ip_address')){
        console.log(obj.parentElement.parentElement.nextSibling.innerHTML);
        // if(ip_address){
        //   $.ajax({
        //     method:'POST',
        //     async:false,
        //     url: $('#base_url').val() +'Shop/update_cart_quantity/'+ id,
        //     data: {'ip_address': ip_address, 'new_quantity': obj.value},
        //     dataType:'JSON',
        //     context:this,
        //     success:function(data){
        //       if(data.status == 'success'){
        //         alert(data.line_total);
        //       }
        //       else{
        //         alert('Something Went Wrong!');
        //       }
        //     },
        //     error:function(res){
        //       console.log(res);
        //     },
        //     beforeSend:function(){
        //     },
        //     complete:function(){

        //     }
        //   });
        // }
        // else{
        //   alert('something went wrong');
        // }
      }



      Array.prototype.remove = function() {
          var what, a = arguments, L = a.length, ax;
          while (L && this.length) {
              what = a[--L];
              while ((ax = this.indexOf(what)) !== -1) {
                  this.splice(ax, 1);
              }
          }
          return this;
      };

    </script>

</body>
<!-- END: Body-->

</html>