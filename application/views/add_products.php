
<div class="row">
    <div class="col-xl-12 col-12" id="ecommerceChartView" style="height: 400px;">
        <div class="card card-shadow">
            <div class="card-header card-header-transparent py-20">
                <h4 class="card-title">Add New Product</h4>
                    <div class="card-body" style="padding:1.5rem 0">
                        <form class="form form-horizontal" id="add-product-form" action="<?=base_url()?>Product/add_product" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" placeholder="Product Price(Excl. TAX)*" name="prod_price" id="prod_price">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4 form-group">
                                        <textarea rows="2" class="form-control " name="prod_desc" id="prod_desc" placeholder="Product Description"></textarea>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <select class="select2 form-control" data-placeholder="Tax Percentage(%)*" id="tax" name="tax">
                                            <option></option>
                                            <?php if(isset($taxes)): ?>
                                            <?php    foreach ($taxes as $tax) { ?>       
                                                        <option value="<?=$tax['id']?>"><?=$tax['percentage']?></option>
                                            <?php    } ?>
                                            <?php endif; ?>
                                         </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" placeholder="MRP*" name="mrp" id="mrp">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Your Products</h4>
                </div>
                <div class="card-content">
                    <div id="" class="media-list position-relative ps">
                    <div class="table-responsive">
                        <table id="tb-products" class="table table-hover table-xl mb-0 dataex-fixh-reorder " style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="border-top-0">
                                        <div class="skin skin-flat">
                                            <fieldset>
                                                    <input type="checkbox" id="select-all-products">
                                            </fieldset>
                                        </div>	
                                    </th>
                                    <th class="border-top-0">Action</th>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Description</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">In Stock</th>
                                    <th class="border-top-0">Price(Excl. TAX)</th>
                                    <th class="border-top-0">MRP</th>
                                    <th class="border-top-0">Tax</th>
                                    <th class="border-top-0">Pieces</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Modal -->
 <div class="modal fade text-left" id="edit-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h4 class="modal-title white" id="myModalLabel10">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="update-product-form" enctype="multipart/form-data">
                
                <div class="form-body">
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Name</label>
                        <div class="col-md-9 mx-auto">
                            <input type="hidden" class="form-control" name="product_id" id="product_id">
                            <input type="text" class="form-control" name="prod_name_edit" id="prod_name_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Category</label>
                        <div class="col-md-9 mx-auto">
                            <select class="select2 form-control" id="prod_category_edit" name="prod_category_edit">
                                <?php if(isset($categories)): ?>
                                <?php    foreach ($categories as $category) { ?>       
                                            <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                <?php    } ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Image</label>
                        <div class="col-md-2">
                            <img id="existing_image" src="" alt="Product Image" style="height:50px;margin-left: 20px;">
                        </div>
                        <div class="col-md-7 mx-auto">
                            <fieldset class="form-group">
                                <div class="custom-file">
                                    <input type="hidden" class="form-control" name="old_img_path" id="old_img_path">   
                                    <input type="file" class="custom-file-input" id="prod_image_edit" name="prod_image_edit">
                                    <label class="custom-file-label" for="prod_image_edit" aria-describedby="prod_image_edit">Change Image</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Pieces</label>
                        <div class="col-md-9 mx-auto">
                            <input type="text" class="form-control" name="prod_pieces_edit" id="prod_pieces_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Quantity</label>
                        <div class="col-md-9 mx-auto">
                            <input type="text" class="form-control" placeholder="Product Quantity*" name="prod_quantity_edit" id="prod_quantity_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product price</label>
                        <div class="col-md-9 mx-auto">
                            <input type="text" class="form-control" placeholder="Product Price*" name="prod_price_edit" id="prod_price_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product MRP</label>
                        <div class="col-md-9 mx-auto">
                            <input type="text" class="form-control" placeholder="MRP*" name="mrp_edit" id="mrp_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Tax Percentage(%)</label>
                        <div class="col-md-9 mx-auto">
                            <select class="select2 form-control" data-placeholder="Tax Percentage(%)*" id="tax_edit" name="tax_edit">
                                <option></option>
                                <?php if(isset($taxes)): ?>
                                <?php    foreach ($taxes as $tax) { ?>       
                                            <option value="<?=$tax['id']?>"><?=$tax['percentage']?></option>
                                <?php    } ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Product Description</label>
                        <div class="col-md-9 mx-auto">
                            <textarea rows="2" class="form-control " name="prod_desc_edit" id="prod_desc_edit" placeholder="Product Description"></textarea>
                        </div>
                    </div>

                </div>
                <div class="footer-btns">
                    <button type="button" class="btn btn-outline-danger" onclick="updateProduct()">Save changes</button>
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
