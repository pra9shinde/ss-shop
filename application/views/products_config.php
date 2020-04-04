 <!-- BEGIN: Content-->
 <div class="app-content content" style="overflow-y:hidden;">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body" id="add-product-body">
          <div class="img-card-top">
            <img src="<?=base_url()?>assets/theme/images/market.svg" alt="">
          </div>
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="card" id="add-product">
                       
                        <div class="card-header">
                            <h4 class="card-title">Products Configuration</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                          <div class="card-body">
                            <div class="add-product-content">
                              <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="activeIcon1-tab1" data-toggle="tab" href="#activeIcon1" aria-controls="activeIcon1" aria-expanded="true"><i class="ft-heart"></i>Add Product Category</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="linkIcon1-tab1" data-toggle="tab" href="#linkIcon1" aria-controls="linkIcon1" aria-expanded="false"><i class="ft-link"></i>Add Product</a>
                                  </li>
                              </ul>
                              <div class="tab-content px-1 pt-1">
                                  <!--Add category-->
                                  <div role="tabpanel" class="tab-pane active" id="activeIcon1" aria-labelledby="activeIcon1-tab1" aria-expanded="true">
                                      <?php $this->load->view('add_category',$categories); ?>
                                  </div>

                                  <!-- Add Product-->
                                  <div class="tab-pane" id="linkIcon1" role="tabpanel" aria-labelledby="linkIcon1-tab1" aria-expanded="false">
                                    <?php $this->load->view('add_products',$categories); ?>
                                  </div>                                  
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Revenue, Hit Rate & Deals -->

        </div>
    </div>
</div>
<!-- END: Content-->
<script>
$("document").ready(function() {
  
  $("#btn-add-category").click(function(e) {
    $.ajax({
      type: "POST",
      dataType : 'json',
      url: $('#add-category-form').attr("action"),
      data: $('#add-category-form').serialize(),
      success: function(data) {
        if(data.type === "success") {
          toastr.success(data.message,'Product Category Addition', { "timeOut": 0 });
          document.getElementById("add-category-form").reset(); 
          $('#add-category-form')[0].reset();
        } else {
					toastr.error(data.message,'Product Category Addition', { "timeOut": 0 });
        }
      },
      error: function(xhr, status, error) {
				toastr.error(error,'Product Category Addition', { "timeOut": 0 });
        console.log('An error occurred.' + error);
      }, 
      beforeSend:function(){
          $("#ajax-loader").fadeIn(500);
      },
      complete:function(){
          setTimeout(function(){
              $("#ajax-loader").fadeOut(500);
          }, 2000);
      }
    });
  });

  $("#btn-add-product").click(function(e) {
    // var formData = new FormData($('#add-product-form')[0]);

    // formData.append('prod_image', $('input[type=file]')[0].files[0]);
    var form = $('#add-product-form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);  

    $.ajax({
      type: "POST",
      dataType : 'json',
      processData: false,
      contentType: false,
      url: $('#add-product-form').attr("action"),
      data: formData,
      success: function(data) {
        if(data.type === "success") {
          toastr.success(data.message,'Product Addition', { "timeOut": 0 });
          document.getElementById("add-product-form").reset(); 
					$('#tb-products').DataTable().draw();
          $('.custom-file input').next('.custom-file-label').html('Product Image');
          $( "#prod_category" ).val('').trigger('change');
        } else {
					toastr.error(data.message,'Product Addition', { "timeOut": 0 });
        }
      },
      error: function(xhr, status, error) {
				toastr.error(error,'Product Addition', { "timeOut": 0 });
        console.log('An error occurred.' + error);
      },
      beforeSend:function(){
          $("#ajax-loader").fadeIn(500);
      },
      complete:function(){
          setTimeout(function(){
              $("#ajax-loader").fadeOut(500);
          }, 2000);
      }
    });
  });
});
</script>
  