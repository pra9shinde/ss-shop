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
          toastr.success(data.message,'Product Category Addition', { "timeOut": 1000 });
          document.getElementById("add-category-form").reset(); 
          $('#add-category-form')[0].reset();
          $('#tb-category').DataTable().draw();
        } else {
					toastr.error(data.message,'Product Category Addition', { "timeOut": 1000 });
        }
      },
      error: function(xhr, status, error) {
				toastr.error(error,'Product Category Addition', { "timeOut": 1000 });
        console.log('An error occurred.' + error);
      }, 
      beforeSend:function(){
          $("#ajax-loader").fadeIn(500);
      },
      complete:function(){
          setTimeout(function(){
              $("#ajax-loader").fadeOut(500);
          }, 500);
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
          toastr.success(data.message,'Product Addition', { "timeOut": 1000 });
          document.getElementById("add-product-form").reset(); 
					$('#tb-products').DataTable().draw();
          $('.custom-file input').next('.custom-file-label').html('Product Image');
          $( "#prod_category" ).val('').trigger('change');
        } else {
					toastr.error(data.message,'Product Addition', { "timeOut": 1000 });
        }
      },
      error: function(xhr, status, error) {
				toastr.error(error,'Product Addition', { "timeOut": 1000 });
        console.log('An error occurred.' + error);
      },
      beforeSend:function(){
          $("#ajax-loader").fadeIn(500);
      },
      complete:function(){
          setTimeout(function(){
              $("#ajax-loader").fadeOut(500);
          }, 500);
      }
    });
  });

});

function deleteProduct(id){
  $.ajax({
      type: "POST",
      dataType : 'json',
      url: '<?=base_url()?>Product/delete_product',
      data: {'id' : id},
      success: function(data) {
        if(data.type === "success") {
          toastr.success(data.message,'Product Deletion', { "timeOut": 1000 });
					$('#tb-products').DataTable().draw();
        } else {
					toastr.error(data.message,'Product Deletion', { "timeOut": 1000 });
        }
      },
      error: function(xhr, status, error) {
				toastr.error(error,'Product Deletion', { "timeOut": 1000 });
        console.log('An error occurred.' + error);
      },
      beforeSend:function(){
          $("#ajax-loader").fadeIn(500);
      },
      complete:function(){
          setTimeout(function(){
              $("#ajax-loader").fadeOut(500);
          }, 500);
      }
    });
}


function editProduct(obj){
  $('#edit-product-modal').modal('show'); 
    $('#product_id').attr("value",obj.id);

    $('#prod_name_edit').attr("value",obj.product_name);

    $('#prod_category_edit').val(obj.category_id);
    $('#prod_category_edit').trigger('change');

    $('#existing_image').attr("src", obj.image_url);
    $('#old_img_path').attr("value", obj.image_url);

    $('#prod_pieces_edit').attr("value",obj.pieces);
    $('#prod_quantity_edit').attr("value",obj.rem_quantity);
    $('#prod_price_edit').attr("value",obj.price);
    $('#prod_desc_edit').val(obj.description);

}

function updateProduct()
{
  var form = $('#update-product-form')[0]; // You need to use standard javascript object here
  var formData = new FormData(form);  
  var base_url = '<?=base_url()?>';
  
  $.ajax({
    type: "POST",
    dataType : 'json',
    processData: false,
    contentType: false,
    url: base_url + 'Product/update_product',
    data: formData,
    success: function(data) {
      if(data.type === "success") {
        toastr.success(data.message,'Product Updation', { "timeOut": 1000 });
        document.getElementById("update-product-form").reset(); 
        $('#tb-products').DataTable().draw();
        $('#edit-product-modal').modal('hide'); 

        $('.custom-file input').next('.custom-file-label').html('Product Image');
        $( "#prod_category_edit" ).val('').trigger('change');
      } else {
        toastr.error(data.message,'Product Updation', { "timeOut": 1000 });
      }
    },
    error: function(xhr, status, error) {
      toastr.error(error,'Product Updation', { "timeOut": 1000 });
      console.log('An error occurred.' + error);
    },
    beforeSend:function(){
        $("#ajax-loader").fadeIn(500);
    },
    complete:function(){
        setTimeout(function(){
            $("#ajax-loader").fadeOut(500);
        }, 500);
    }
  });
}

function deleteCategory(id){
  $.ajax({
    type: "POST",
    dataType : 'json',
    url: '<?=base_url()?>Product/delete_category',
    data: {'id' : id},
    success: function(data) {
      if(data.type === "success") {
        toastr.success(data.message,'Product Deletion', { "timeOut": 1000 });
        $('#tb-category').DataTable().draw();
      } else {
        toastr.error(data.message,'Product Deletion', { "timeOut": 1000 });
      }
    },
    error: function(xhr, status, error) {
      toastr.error(error,'Product Deletion', { "timeOut": 1000 });
      console.log('An error occurred.' + error);
    },
    beforeSend:function(){
        $("#ajax-loader").fadeIn(500);
    },
    complete:function(){
        setTimeout(function(){
            $("#ajax-loader").fadeOut(500);
        }, 500);
    }
  });
}

function editCategory(obj){
  $('#edit-category-modal').modal('show'); 
  $('#category_id').attr("value",obj.id);
  $('#category_name_edit').attr("value",obj.name);
  $('#category_desc_edit').val(obj.description);
}

function updateCategory()
{
   
  var base_url = '<?=base_url()?>';
  
  $.ajax({
    type: "POST",
    dataType : 'json',
    url: base_url + 'Product/update_category',
    data: $('#update-category-form').serialize(),
    success: function(data) {
      if(data.type === "success") {
        toastr.success(data.message,'Category Updation', { "timeOut": 1000 });
        document.getElementById("update-category-form").reset(); 
        $('#tb-category').DataTable().draw();
        $('#edit-category-modal').modal('hide'); 
      } else {
        toastr.error(data.message,'Category Updation', { "timeOut": 1000 });
      }
    },
    error: function(xhr, status, error) {
      toastr.error(error,'Category Updation', { "timeOut": 1000 });
      console.log('An error occurred.' + error);
    },
    beforeSend:function(){
        $("#ajax-loader").fadeIn(500);
    },
    complete:function(){
        setTimeout(function(){
            $("#ajax-loader").fadeOut(500);
        }, 500);
    }
  });
}


</script>
  