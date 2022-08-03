<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles d-flex align-item-between justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Hero Page Details</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $page['title'] ?></a></li>
            </ol>
            <a href="<?= base_url('admin/create_hero_page') ?>"><i class="fa fa-arrow-left"></i> Go Back</a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">

                                <div class="tab-content">
                                    <?php
                                        $count = 0;
                                        $products = $this->crud_model->getProducts($page['encrypted_id']);
                                        foreach ($products as $product) :
                                        $count++;
                                    ?>
                                  <div role="tabpanel" class="tab-pane fade <?php if ($count == 1) { echo "active show"; } ?>" id="product<?= $product['id'] ?>">
                                        <img class="img-fluid" src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>" alt="">
                                     
                                        <h4 class="mt-2"><?= $product['name'] ?></h4>
                                        <p class="text-content mt-4"><?=  $product['description'] ?></p>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>

                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">

                                    <div class="new-arrival-content pr">
                                        <h4><?= $page['title'] ?></h4>

                                        <p>Selected Theme: <span class="item">
                                                <?= $this->crud_model->getHeroThemeName($page['theme']) ?></span>
                                        </p>
                                        <p>Created By: <span class="item"> <?= $page['created_by'] ?></span>
                                        </p>
                                        <p>Last Updated: <span class="item"> <?= $page['last_updated'] ?></span>
                                        </p>
                                        <div class="tab-slide-content new-arrival-product mt-4 mb-4 mb-xl-0">

                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                                <?php
                                                $count = 0;
                                                $products = $this->crud_model->getProducts($page['encrypted_id']);
                                                foreach ($products as $product) :
                                                    $count++;
                                                ?>
                                                <li role="presentation" class="<?php if ($count == 1) {
                                                                                        echo "show";
                                                                                    } ?>">
                                                    <a href="#product<?= $product['id'] ?>" role="tab"
                                                        data-toggle="tab">
                                                        <img style="object-fit: cover; width: 100px; height: 100px;"  src="<?= $this->crud_model->get_image_url('product', $product['id']) ?>" alt="" width="50">
                                                    </a>
                                                </li>

                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div class="shopping-cart mt-5">
                                            <a class="btn btn-primary btn-lg" data-toggle="modal"
                                                data-target="#editHeroPage" href="javascript:void(0)"><i
                                                    class="fa fa-pencil mr-2"></i>Edit Hero Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editHeroPage">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Hero Page <?= $page['title'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST"
                                action="<?= base_url('admin/update_hero_page/'.$page['encrypted_id']) ?>"
                                enctype="multipart/form-data">
                                <div class="title">
                                    <div class="row shadow p-3 mb-5 bg-white rounded ">
                                        <div class="form-group col-md-6">
                                            <label class="text-black font-w500">Hero Page Title</label>
                                            <input required id="hero_title" value="<?= $page['title'] ?>" name="hero_title"
                                                type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-black font-w500">Select Theme</label>
                                            <select class="form-control" name="hero_theme" required>
                                                <option value="">Select Theme</option>
                                                <option <?php if($page['theme'] == 1){echo "selected"; } ?> value="1">
                                                Hero Theme 1</option>
                                                <option <?php if($page['theme'] == 2){echo "selected"; } ?> value="2">
                                                Hero Theme 2</option>
                                                <option <?php if($page['theme'] == 3){echo "selected"; } ?> value="3">
                                                Hero Theme 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Select Category</label>
                                          <select class="form-control" name="category" required>
                                              <option value="">Select Category</option>
                                              <?php
                                                $categories = $this->crud_model->getAllCategories();
                                                foreach ($categories as $category) :
                                                ?>
                                                  <option <?php if($page['category'] == $category['encrypted_id']){echo "selected"; } ?> value="<?= $category['encrypted_id'] ?>"><?= $category['name'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Landing Page Slug</label>
                                          <input required readonly type="text" id="slug" value="" class="form-control">
                                      </div>
                                    </div>
                                </div>
                                <?php 
                                    $count = 0;
                                    $products = $this->crud_model->getProducts($page['encrypted_id']);
                                    foreach ($products as $product) :
                                        $count++;
                                ?>
                                <div class="products">
                                    <div class="row shadow p-3 mb-5 bg-white rounded ">
                                        <div class="form-group col-md-6">
                                            <label class="text-black font-w500">Product Name <?= $count ?></label>
                                            <input required value="<?= $product['name'] ?>" name="name" type="text"
                                                class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-black font-w500">Description</label>
                                            <textarea required type="text" name="desc"
                                                class="form-control"><?= $product['description'] ?></textarea>
                                        </div>
                                        <div class="form-group input-group col-md-12">
                                            <div class="custom-file">
                                                <input type="file" accept="image/png,  image/jpeg" name="userfile"
                                                    class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <input value="<?= $product['id'] ?>" name="id" type="hidden"
                                            class="form-control">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="form-group m-auto">
                                    <button id="save_btn" type="submit" class="btn btn-primary btn-lg btn-block">+
                                        Update Hero Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>