
<div class="row">
    <div class="col-xl-12 col-12" id="ecommerceChartView">
        <div class="card card-shadow">
            <div class="card-header card-header-transparent py-20">
                <h4 class="card-title">Add New Product</h4>
                    <div class="card-body" style="padding:1.5rem 0">
                        <form class="form form-horizontal" id="add-product-form" action="<?=base_url()?>Shop/add_product" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" placeholder="Product Name*" name="prod_name" id="prod_name">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <select class="select2 form-control" data-placeholder="Product Category*" id="prod_category" name="prod_category">
                                            <option></option>
                                            <?php if(isset($categories)): ?>
                                            <?php    foreach ($categories as $category) { ?>       
                                                        <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                            <?php    } ?>
                                            <?php endif; ?>
                                         </select>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="prod_image" name="prod_image">
                                                <label class="custom-file-label" for="prod_image" aria-describedby="prod_image">Product Image</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" placeholder="Product Pieces*" name="prod_pieces" id="prod_pieces">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" placeholder="Product Quantity*" name="prod_quantity" id="prod_quantity">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" placeholder="Product Price*" name="prod_price" id="prod_price">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4 form-group">
                                        <textarea rows="2" class="form-control " name="prod_desc" id="prod_desc" placeholder="Product Description"></textarea>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <button type="button" class="btn btn-secondary btn-min-width box-shadow-3 mr-1 mb-1" style="width:100%;margin-top:1%;" id="btn-add-product">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    
</div>

<div class="row">
<div class="col-xl-12 col-lg-12">
        <div class="card" style="height: 423.117px;overflow-y:scroll;">
            <div class="card-header">
                <h4 class="card-title">Existing Categories</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="new-orders" class="media-list position-relative ps">
                    <div class="table-responsive">
                        <table id="new-orders-table" class="table table-hover table-xl mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Description</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-y: visible;">
                                <?php
                                    foreach($categories as $value){
                                ?>    
                                    <tr>
                                        <td class="text-truncate"><?=$value['name']?></td>
                                        <td class="text-truncate"><?=$value['description']?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
        </div>
    </div>
</div>