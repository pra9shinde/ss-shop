 <!-- DOM - jQuery events table -->
<div class="app-content content">
  <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-body">
        <section id="dom">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">My Orders</h4>
                          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                          </div>
                      </div>

                      <div class="card-content collapse show">
                          <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                              <div class="table-responsive">
                                  <table id="tb-seller-orders" class="table table-hover table-xl mb-0 dataex-fixh-reorder dataex-select-selectitems">
                                      <thead>
                                          <tr>
                                          <th class="border-top-0">Order No.</th>
                                          <!--Hidden Column which stores order items array-->
                                          <th class="border-top-0">Order Details</th>
                                          <th class="border-top-0">Confirm Order</th>
                                          <th class="border-top-0">Status</th>
                                          <th class="border-top-0">Buyer</th>
                                          <th class="border-top-0">Total Items</th>
                                          <th class="border-top-0">Total Price(₹)</th>
                                          <th class="border-top-0">Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
  </div>
</div>
<!-- DOM - jQuery events table -->  

 <!-- Modal -->
 <div class="modal fade text-left" id="cancel-order-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h4 class="modal-title white" id="myModalLabel10">Cancel Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="cancel-order-seller-form">
                
                <div class="form-body">
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Cancellation Reason</label>
                        <div class="col-md-9 mx-auto">
                            <input type="hidden" class="form-control" name="order_id" id="order_id">
                            <textarea rows="6" class="form-control " name="reason" id="reason"></textarea>
                        </div>
                    </div>
                </div>
                <div class="footer-btns">
                    <button type="button" class="btn btn-outline-danger" onclick="validateCancel($('#order_id').val(), 3)">Save changes</button>
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
//Format Table inside datatable - (Order details inside order dt)
function format(d){   
  // `d` is the original data object for the row
  var html = `<table cellpadding="" cellspacing="0" border="0" style="padding-left:50px;">
      <th>Product Name</th>
      <th>Description</th>
      <th>Category</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <body>`;
        d[1].forEach(function(item, index){
          html += `<tr>
              <td>${item.name}</td>
              <td>${item.description}</td>
              <td>${item.category_name}</td>
              <td>${item.price}</td>
              <td>${item.line_quantity}</td>
              <td>${item.line_total}</td>
            </tr>`;
        });
  html +=`</body>
    </table>`;  

  return html;
}

function validateCancel(order_id, status_id){
    if($('#order_id').val().length <= 0 || $('#reason').val().length <= 0){
		toastr.error('Cancel Order','Reason for Cancellation is required', { "timeOut": 1500 });
    }
    else{
        ChangeOrderStatus(order_id, status_id, $('#reason').val());
    }
}

//Confirm Order
function ChangeOrderStatus(order_id, status_id, reason=''){
   
    $.ajax({
        type: "POST",
        dataType : 'json',
        url: '<?=base_url()?>/Product/change_order_status/',
        data: {
            'order_id' : order_id,
            'status_id': status_id,
            'reason' : reason
        },
        success: function(data) {
            if(data.type === "success") {
                toastr.success(data.message,'Order Confirmation', { "timeOut": 1000 });
                $('#tb-seller-orders').DataTable().draw();
                document.getElementById('cancel-order-seller-form').reset();
                $('#cancel-order-modal').modal('hide');

            } else {
                toastr.error(data.message,'Order Confirmation', { "timeOut": 1000 });
            }
        },
        error: function(xhr, status, error) {
            toastr.error(error,'Order Confirmation', { "timeOut": 1000 });
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

function cancelOrder(order_id){
    $('#cancel-order-modal').modal('show');
    $('#order_id').attr("value",order_id);
}
</script>