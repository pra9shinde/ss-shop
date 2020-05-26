<style>
    /*******Select2 *********/
    .select2-results {
        background-color: #f4f5fa;
    }

    .select2-search.select2-search--dropdown {
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

    .select2-results__option.select2-results__option {
        color: #6b6f82 !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #fff;
    }

    .select2-container--classic .select2-results__option--highlighted[aria-selected],
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #9F3434 !important;
        color: #fff !important;
    }
</style>

<?php
//Add Subcategory Filter if any subcategory present 
$this->db->where(array('category_id' => $_GET['cat']));
$res = $this->db->get('sss_sub_category');
$sub_categories = $res->result_array();
?>

<input type="hidden" name="current_category" id="current_category" value="all">
<input type="hidden" name="current_sub_category" id="current_sub_category" value="all">

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">

            <section>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card bg-white text-center">
                            <div class="card-content">
                                <div class="offer-image" style="padding: 10px; ">
                                    <img src="<?= base_url() ?>assets/theme/images/anton-darius-FCrgmqqvl-w-unsplash.jpg" alt="Offer Image" class="float-right img-fluid" style="max-width: 300px;width: 100%; border-radius:5px;">

                                </div>
                                <div class="card-body pt-2">
                                    <h4 class="card-title" style="font-size: 2.12rem; margin-top: 3.55rem;">Fresh Fruits, Fresh Offers</h4>
                                    <!-- <p class="card-text">Fresh offers only for you</p> -->
                                    <button class="btn bg-white bg-darken-3 pink" style="font-size: 1.75rem">Limited Offer, Hurry Up!!!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DOM - jQuery events table -->
            <section id="all_products_desktop">
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
                                                    <th class="border-top-0">Image</th>
                                                    <th class="border-top-0">Name</th>
                                                    <th class="border-top-0">Unit</th>
                                                    <th class="border-top-0">Discount</th>
                                                    <th class="border-top-0">MRP(₹)</th>
                                                    <th class="border-top-0">Offer Price</th>
                                                    <th class="border-top-0">Availabilty</th>
                                                    <th class="border-top-0">Add to Cart</th>
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

            <!-- DOM - jQuery events table -->
            <section id="all_products_mini">
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
                                        <table id="tb-all-products-mini" class="table table-hover table-xl mb-0 dataex-fixh-reorder" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0" style="width:900px">List</th>

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
            <!-- // Shopping cards section end -->
        </div>
    </div>
</div>

<script>
    function addFilters() {
        $html = `<select class="select2-full-bg form-control" id="select_sub_category_dw" data-bgcolor="pink" data-bgcolor-variation="lighten-3" data-text-color="white" data-placeholder="Filter by Sub-Category">
            <option></option>
            <option value="all">All</option>
            <?php foreach ($sub_categories as $category) : ?>
              <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
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
            if (variation !== "") {
                variation = " bg-" + variation;
            }
            if (textVariation !== "") {
                textVariation = " " + textVariation;
            }
            var className = "bg-" + color + variation + " " + textColor + textVariation + " border-" + color + ' border-darken-2 ';

            $(this).select2({
                dropdownAutoWidth: true,
                width: '100%',
                containerCssClass: className,
                dropdownCssClass: className
            });
        });
    }

    function addFiltersMini() {
        $html = `<select class="select2-full-bg form-control" id="select_sub_category_dw_mini" data-bgcolor="pink" data-bgcolor-variation="lighten-3" data-text-color="white" data-placeholder="Filter by Sub-Category">
            <option></option>
            <option value="all">All</option>
            <?php foreach ($sub_categories as $category) : ?>
              <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>`;
        $('#category_filter_mini').append($html);

        //Initialize Select2
        $('.select2-full-bg').each(function(i, obj) {
            var variation = "",
                textVariation = "",
                textColor = "";
            var color = $(this).data('bgcolor');
            variation = $(this).data('bgcolor-variation');
            textVariation = $(this).data('text-variation');
            textColor = $(this).data('text-color');
            if (variation !== "") {
                variation = " bg-" + variation;
            }
            if (textVariation !== "") {
                textVariation = " " + textVariation;
            }
            var className = "bg-" + color + variation + " " + textColor + textVariation + " border-" + color + ' border-darken-2 ';

            $(this).select2({
                dropdownAutoWidth: true,
                width: '100%',
                containerCssClass: className,
                dropdownCssClass: className
            });
        });
    }

    $(document).ready(function() {
        let category = getUrlKey('cat', window.location.href);
        let subCategory = getUrlKey('sub_cat', window.location.href);

        if (category === null) category = 'all';
        if (subCategory === null) subCategory = 'all';


        $('#current_category').attr('value', category);
        $('#current_sub_category').attr('value', subCategory);

    });
</script>