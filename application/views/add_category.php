
<div class="row match-height">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
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
                        <table id="tb-category" class="table table-hover table-xl mb-0 dataex-fixh-reorder ">
                            <thead>
                                <tr>
                                    <th class="border-top-0">List</th>
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

    <div class="col-xl-6 col-12" id="ecommerceChartView">
        <div class="card card-shadow" style="height: 423.117px;">
            <div class="card-header card-header-transparent py-20">
                <h4 class="card-title">Add New Category</h4>
                    <div class="card-body" style="padding:1.5rem 0">
                        <form class="form form-horizontal" id="add-category-form" action="<?=base_url()?>Product/add_category">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Category Name*</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="e.g. Food" name="category_name" id="category_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput2">Category Description</label>
                                    <div class="col-md-6">
                                        <textarea rows="6" class="form-control " name="category_desc" id="category_desc" placeholder="e.g. Company Packaged with 2 months expiry"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-secondary btn-min-width box-shadow-3 mr-1 mb-1" style="width:100%" id="btn-add-category">Add</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    
</div>

 <!-- Modal -->
 <div class="modal fade text-left" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h4 class="modal-title white" id="myModalLabel10">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="update-category-form">
                
                <div class="form-body">
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Category Name</label>
                        <div class="col-md-9 mx-auto">
                            <input type="hidden" class="form-control" name="category_id" id="category_id">
                            <input type="text" class="form-control" name="category_name_edit" id="category_name_edit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="flat-area-name">Category Description</label>
                        <div class="col-md-9 mx-auto">
                            <textarea rows="6" class="form-control " name="category_desc_edit" id="category_desc_edit"></textarea>
                        </div>
                    </div>
                </div>
                <div class="footer-btns">
                    <button type="button" class="btn btn-outline-danger" onclick="updateCategory()">Save changes</button>
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>