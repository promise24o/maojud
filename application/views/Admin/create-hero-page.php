  <!--**********************************
            Content body start
        ***********************************-->
  <div class="content-body">
      <div class="container-fluid">
          <div class="page-titles d-flex justify-content-between align-items-center">
              <h2>Create New Hero Page</h2>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="p-4">
                          <?php if(validation_errors()): ?>
                          <div class="alert alert-danger alert-dismissible fade show">
                              <p class="d-inline"><?php echo validation_errors(); ?></p>
                          </div>
                          <?php endif; ?>
                      </div>
                      <div class="card-body">
                          <form method="POST" action="<?= base_url('admin/confirm_create_hero_page') ?>"
                              enctype="multipart/form-data">
                              <div class="title">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-12">
                                          <label class="text-black font-w500">Hero Page Title</label>
                                          <input required id="hero_title" name="hero_title" type="text"
                                              class="form-control">
                                      </div>
                                      <div class="row">
                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 1</label>
                                              <input required type="radio" value="1" name="hero_theme" id="hero-page-1"
                                                  class="input-hidden" />
                                              <label for="hero-page-1">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-1.jpg"
                                                      alt="Dark Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 2</label>
                                              <input required type="radio" value="2" name="hero_theme" id="hero-page-2"
                                                  class="input-hidden" />
                                              <label for="hero-page-2">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-2.jpg"
                                                      alt="Generic Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 3</label>
                                              <input required type="radio" value="3" name="hero_theme" id="hero-page-3"
                                                  class="input-hidden" />
                                              <label for="hero-page-3">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-3.jpg"
                                                      alt="Glow Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 4</label>
                                              <input required type="radio" value="4" name="hero_theme" id="hero-page-4"
                                                  class="input-hidden" />
                                              <label for="hero-page-4">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-4.jpg"
                                                      alt="Glow Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 5</label>
                                              <input required type="radio" value="5" name="hero_theme" id="hero-page-5"
                                                  class="input-hidden" />
                                              <label for="hero-page-5">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-5.jpg"
                                                      alt="Glow Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 6</label>
                                              <input required type="radio" value="6" name="hero_theme" id="hero-page-6"
                                                  class="input-hidden" />
                                              <label for="hero-page-6">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-6.jpg"
                                                      alt="Glow Theme" />
                                              </label>
                                          </div>

                                          <div class="form-group col-md-3">
                                              <label class="text-black font-w500 d-block">Hero Theme 7</label>
                                              <input required type="radio" value="7" name="hero_theme" id="hero-page-7"
                                                  class="input-hidden" />
                                              <label for="hero-page-7">
                                                  <img style="object-fit: fill; width: 200px; height: 150px;"
                                                      src="<?= base_url() ?>assets/images/themes/hero-page-7.jpg"
                                                      alt="Glow Theme" />
                                              </label>
                                          </div>

                                      </div>

                                      <div class="form-group col-md-12">
                                          <label class="text-black font-w500">Select Category</label>
                                          <select class="form-control" name="hero_category" required>
                                              <option value="">Select Category</option>
                                              <?php
                                                $categories = $this->crud_model->getAllCategories();
                                                foreach ($categories as $category) :
                                                ?>
                                              <option value="<?= $category['encrypted_id'] ?>"><?= $category['name'] ?>
                                              </option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-12">
                                          <label class="text-black font-w500">Hero Page Slug</label>
                                          <input required readonly type="text" id="slug" value="" class="form-control">
                                      </div>
                                  </div>
                              </div>

                              <div class="products shadow p-3 mb-5 bg-white rounded">
                                    <button class="btn btn-primary mb-4 add-product-img">
                                        <i class="fa fa-plus-circle"></i> Add Product Image 
                                    </button>
                                  <div class="row product-details">
                                     <div class="form-group col-md-6">
                                         <label class="text-black font-w500">Product Image</label>
                                         <div class="custom-file">
                                             <input required type="file" accept="image/png" name="userfile[]"
                                                 class="custom-file-input">
                                             <label class="custom-file-label">Choose Product Image</label>
                                         </div>
                                         <span class="fs-12 font-w600">Minimum Product Image Size should be 661px ×
                                             661px</span>
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name" value="<?= set_value('name'); ?>" type="text"
                                              class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc"
                                              value="<?= set_value('desc'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Brief Product Description should not be more
                                              than 400 Characters</span>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Code</label>
                                          <input required name="code" value="<?= set_value('code'); ?>" type="text"
                                              class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Price (USD)</label>
                                          <input required step="0.1" type="number" name="price" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Sold Out</label>
                                          <input required type="number" name="sold_out" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Has Color</label>
                                          <select id="has_color" class="form-control" name="color" required>
                                            <option value="">Select Option</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                          </select>
                                          <input required placeholder="Enter Colors Seperated by Comma(,)" type="text"  id="colors" name="colors" class="d-none form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Has Size</label>
                                          <select id="has_size" class="form-control" name="size" required>
                                            <option value="">Select Option</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                          </select>
                                            <input required placeholder="Enter Sizes Seperated by Comma(,)" type="text" id="sizes" name="sizes" class="d-none form-control">
                                      </div>
                                     
                                  </div>
                              </div>

                              <div class="form-group m-auto">
                                  <button id="save_btn" type="submit" class="btn btn-primary btn-lg btn-block">+ Create
                                      Hero Page</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row ">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">All Landing Pages</h4>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="example" class="display min-w850">
                                  <thead>
                                      <tr>
                                          <th>S/N</th>
                                          <th>Title</th>
                                          <th>Created By</th>
                                          <th>Last Updated</th>
                                          <th>Theme</th>
                                          <th>Link</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $count = 1;
                                        $pages = $this->crud_model->getAllHeroPages();
                                        foreach ($pages as $page) :
                                        ?>
                                      <tr>
                                          <td><?= $count++; ?></td>
                                          <td><?= $page['title'] ?></td>
                                          <td><?= $page['created_by'] ?></td>
                                          <td><?= $page['last_updated'] ?></td>
                                          <td><?= $this->crud_model->getHeroThemeName($page['theme']) ?></td>
                                          <td><a href="<?= base_url('/' . $page['slug']) ?>">Click Here</a></td>
                                          <td><a
                                                  href="<?= base_url('admin/hero_page_details/' . $page['encrypted_id']) ?>"><i
                                                      class="flaticon-381-view-2"></i> Edit Page</a></td>
                                      </tr>
                                      <?php endforeach; ?>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--**********************************
            Content body end
        ***********************************-->