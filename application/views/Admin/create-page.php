  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles d-flex justify-content-between align-items-center">
                    <h2>Create New Landing Page</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('admin/confirm_create') ?>" enctype="multipart/form-data">
                                    <div class="title">
                                        <div class="row shadow p-3 mb-5 bg-white rounded ">
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Landing Page Title</label>
                                                <input required name="landing_title" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Select Theme</label>
                                                <select class="form-control" name="theme" required>
                                                    <option value="">Select Theme</option>
                                                    <option value="1">Generic</option>
                                                    <option value="3">Light</option>
                                                    <option value="3">Dark</option>
                                                    <option value="4">Neutral</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products">
                                        <div class="row shadow p-3 mb-5 bg-white rounded ">
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Product Name</label>
                                                <input required name="addMoreInputFields[0][name]" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Description</label>
                                                <textarea required type="text" name="addMoreInputFields[0][desc]" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group input-group col-md-12">
                                                <div class="custom-file">
                                                    <input required type="file" name="addMoreInputFields[0][product_img]" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products">
                                        <div class="row shadow p-3 mb-5 bg-white rounded ">
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Product Name</label>
                                                <input required name="addMoreInputFields[0][name]" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Description</label>
                                                <textarea required type="text" name="addMoreInputFields[0][desc]" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group input-group col-md-12">
                                                <div class="custom-file">
                                                    <input required type="file" name="addMoreInputFields[0][product_img]" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products">
                                        <div class="row shadow p-3 mb-5 bg-white rounded ">
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Product Name</label>
                                                <input required name="addMoreInputFields[0][name]" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Description</label>
                                                <textarea required type="text" name="addMoreInputFields[0][desc]" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group input-group col-md-12">
                                                <div class="custom-file">
                                                    <input required type="file" name="addMoreInputFields[0][product_img]" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products">
                                        <div class="row shadow p-3 mb-5 bg-white rounded ">
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Product Name</label>
                                                <input required name="addMoreInputFields[0][name]" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-black font-w500">Description</label>
                                                <textarea required type="text" name="addMoreInputFields[0][desc]" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group input-group col-md-12">
                                                <div class="custom-file">
                                                    <input required type="file" name="addMoreInputFields[0][product_img]" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-auto">
                                        <button id="save_btn" type="submit" class="btn btn-primary btn-lg btn-block">+ Save All
                                            Products</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-titles d-flex justify-content-between align-items-center">
                    <h2>Landing Pages</h2>
                    <div class="input-group search-area d-lg-inline-flex d-none">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                        </div>
                        <input id="search" name="keyword" type="text" class="form-control" placeholder="Search here..">
                    </div>
                </div>
                <div class="row ">
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->