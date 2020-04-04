<style>

  /*******Select2 *********/
  .select2-results{
    background-color: #f4f5fa;
  }
  .select2-search.select2-search--dropdown{
    background-color: #f4f5fa;
  }
  .border-pink.border-darken-2 {
    border: 1px solid rgba(0, 0, 0, 0.15) !important;
  }
  .bg-pink.bg-lighten-3 {
    background-color: #9f3434 !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
    line-height: 28px;
  }
  .select2-results__option.select2-results__option{
    color: #6b6f82 !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #fff;
  }
  .select2-container--classic .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #9F3434 !important;
    color: #fff !important;
  }
</style>

<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
      <div class="content-body">
          <!-- Shopping cards section start -->
          <section id="shopping-cards">
              <div class="row">
                  <div class="col-12 mt-3 mb-1">
                      <h4 class="text-uppercase">Shopping Products</h4>
                      <input type="hidden" name="current_category" id="current_category" value="all">

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



              <!-- DOM - jQuery events table -->
              <section id="dom">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">All Products</h4>
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
                                          <table id="tb-all-products" class="table table-hover table-xl mb-0 dataex-fixh-reorder">
                                              <thead>
                                                  <tr>
                                                  <!-- <th class="border-top-0">
                                                    <div class="skin skin-flat">
                                                      <fieldset>
                                                          <input type="checkbox" id="select-all-products-main">
                                                      </fieldset>
                                                    </div>	
                                                  </th> -->
                                                  <th class="border-top-0">Add to Cart</th>
                                                  <th class="border-top-0">Image</th>
                                                  <th class="border-top-0">Name</th>
                                                  <th class="border-top-0">Description</th>
                                                  <th class="border-top-0">Category</th>
                                                  <th class="border-top-0">Price(₹)</th>
                                                  <th class="border-top-0">Pieces</th>
                                                  <th class="border-top-0">Remaining Stock</th>
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
              <!-- DOM - jQuery events table -->  
          </section>
          <!-- // Shopping cards section end -->
      </div>
  </div>
</div>

<script>

function addFilters()
{
    $html = `<select class="select2-full-bg form-control" id="select_category_dw" data-bgcolor="pink" data-bgcolor-variation="lighten-3" data-text-color="white" data-placeholder="Filter by Category">
            <option></option>
            <option value="all">All</option>
            <?php foreach($categories as $category): ?>
              <option value="<?=$category['name']?>"><?=$category['name']?></option>
            <?php endforeach;?>
    </select>`;
    $('#category_filter').append($html);

    //Initialize Select2
    $('.select2-full-bg').each(function(i, obj) {
      var variation = "",
      textVariation = "",
      textColor = "";
      var color = $(this).data('bgcolor');
      variation = $(this).data('bgcolor-variation');
      textVariation = $(this).data('text-variation');
      textColor = $(this).data('text-color');
      if(variation !== ""){
        variation = " bg-"+variation;
      }
      if(textVariation !== ""){
        textVariation = " "+textVariation;
      }
      var className = "bg-"+color + variation + " " + textColor + textVariation + " border-"+color + ' border-darken-2 ';

      $(this).select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: className,
        dropdownCssClass: className
      });
    });
}

</script>

