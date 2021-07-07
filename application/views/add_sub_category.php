<input type="hidden" name="current_category" id="current_category" value="all">



<div class="row">
    <div class="col-xl-12 col-12">
        <div class="card card-shadow" style="height: 423.117px;">
            <div class="card-header card-header-transparent py-20">
                <h4 class="card-title">Add New Sub-Category</h4>
                <div class="card-body" style="padding:1.5rem 0">
                    <form class="form form-horizontal" id="add-sub-category-form" action="<?= base_url() ?>Product/add_sub_category">
                        <div class="form-body">
                            <div class="form-group row">

                                <label class="col-md-2 label-control" for="category_in_subcat">Category*</label>
                                <div class="col-md-4" style="margin-bottom: 15px;">
                                    <select class="select2 form-control" data-placeholder="Category*" id="category_in_subcat" name="category_in_subcat">
                                        <?php if (isset($categories)) : ?>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                            <?php    } ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <label class="col-md-2 label-control" for="sub_cat_name">Sub-Category Name*</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Sub Category Name*" name="sub_cat_name" id="sub_cat_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="sub_cat_desc">Sub-Category Description</label>
                                <div class="col-md-4">
                                    <textarea rows="6" class="form-control " name="sub_cat_desc" id="sub_cat_desc" placeholder="e.g. Premium package products"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-secondary btn-min-width box-shadow-3 mr-1 mb-1" style="width:100%" id="btn-add-sub-category">Add</button>
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
                <h4 class="card-title">Existing Sub-Categories</h4>

            </div>
            <div class="card-content">
                <div id="new-orders" class="media-list ps">
                    <div class="table-responsive">
                        <table id="tb-sub-category" class="table table-hover table-xl mb-0 dataex-fixh-reorder " style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Sub Category List</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade text-left" id="edit-sub-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h4 class="modal-title white" id="myModalLabel10">Edit Sub Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="update-sub-category-form">

                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="flat-area-name">Sub Category Name</label>
                            <div class="col-md-9 mx-auto">
                                <input type="hidden" class="form-control" name="sub_category_id" id="sub_category_id">
                                <input type="text" class="form-control" name="sub_category_name_edit" id="sub_category_name_edit">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="flat-area-name">Sub Category Description</label>
                            <div class="col-md-9 mx-auto">
                                <textarea rows="6" class="form-control " name="sub_category_desc_edit" id="sub_category_desc_edit"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="footer-btns">
                        <button type="button" class="btn btn-outline-danger" onclick="updateSubCategory()">Save changes</button>
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>