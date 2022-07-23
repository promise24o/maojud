<div class="content-body">
            <div class="container-fluid">

                <div class="modal fade" id="createCategory">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create New Category</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/create_category') ?>" method="post">
                                    <div class="form-group">
                                        <label class="text-black font-w500">Category Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus-circle"></i> Confirm Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-titles d-flex align-content-between justify-content-between">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create New Category</a></li>
                    </ol>
                    <button data-toggle="modal" data-target="#createCategory" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Category</button>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Product Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Landing Pages</strong></th>
                                                <th><strong>Hero Pages</strong></th>
                                                <th><strong>Created By</strong></th>
                                                <th><strong>Date Created</strong></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $count = 1;
                                                $categories = $this->crud_model->getAllCategories();
                                                foreach($categories as $category):
                                            ?>
                                            <tr>
                                                <td><strong><?= $count++; ?>.</strong></td>
                                                <td><?= $category['name'] ?></td>
                                                <td class="text-center"><?= $this->crud_model->getNoLandingPages($category['encrypted_id']) ?></td>
                                                <td class="text-center"><?= $this->crud_model->getNoHeroPages($category['encrypted_id']) ?></td>
                                                <td><span class="badge light badge-info"><?= $category['created_by'] ?></span></td>
                                                <td><?= $category['date_created'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp"
                                                            data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                           <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
