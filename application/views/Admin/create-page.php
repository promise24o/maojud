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
                      <div class="p-4">
                        <?php if(validation_errors()): ?>
                          <div class="alert alert-danger alert-dismissible fade show">
                                 <p class="d-inline"><?php echo validation_errors(); ?></p>
                          </div>
                         <?php endif; ?>
                      </div>
                      <div class="card-body">
                          <form method="POST" action="<?= base_url('admin/confirm_create') ?>" enctype="multipart/form-data">
                              <div class="title">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-12">
                                          <label class="text-black font-w500">Landing Page Title</label>
                                          <input required id="landing_title" name="landing_title" type="text" class="form-control">
                                      </div>

                                      <div class="form-group col-md-2">
                                          <label class="text-black font-w500 d-block">Dark Theme</label>
                                          <input type="radio" value="3" name="theme" id="dark" class="input-hidden" />
                                          <label for="dark">
                                              <img style="object-fit: cover; width: 150px; height: 150px;" src="<?= base_url() ?>assets/images/themes/dark.jpg" alt="Dark Theme" />
                                          </label>
                                      </div>

                                      <div class="form-group col-md-2">
                                          <label class="text-black font-w500 d-block">Generic Theme</label>
                                          <input type="radio" value="1" name="theme" id="generic" class="input-hidden" />
                                          <label for="generic">
                                              <img style="object-fit: cover; width: 150px; height: 150px;" src="<?= base_url() ?>assets/images/themes/generic.jpg" alt="Generic Theme" />
                                          </label>
                                      </div>

                                      <div class="form-group col-md-2">
                                          <label class="text-black font-w500 d-block">Glow Theme</label>
                                          <input type="radio" value="4" name="theme" id="glow" class="input-hidden" />
                                          <label for="glow">
                                              <img style="object-fit: cover; width: 150px; height: 150px;" src="<?= base_url() ?>assets/images/themes/glow.jpg" alt="Glow Theme" />
                                          </label>
                                      </div>

                                      <div class="form-group col-md-2">
                                          <label class="text-black font-w500 d-block">Neutral Theme</label>
                                          <input type="radio" value="5" name="theme" id="neutral" class="input-hidden" />
                                          <label for="neutral">
                                              <img style="object-fit: cover; width: 150px; height: 150px;" src="<?= base_url() ?>assets/images/themes/neutral.jpg" alt="Neutral Theme" />
                                          </label>
                                      </div>

                                      <div class="form-group col-md-2">
                                          <label class="text-black font-w500 d-block">Light Theme</label>
                                          <input type="radio" value="2" name="theme" id="light" class="input-hidden" />
                                          <label for="light">
                                              <img style="object-fit: cover; width: 150px; height: 150px;" src="<?= base_url() ?>assets/images/themes/light.jpg" alt="Light Theme" />
                                          </label>
                                      </div>

                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Select Category</label>
                                          <select class="form-control" name="category" required>
                                              <option value="">Select Category</option>
                                              <?php
                                                $categories = $this->crud_model->getAllCategories();
                                                foreach ($categories as $category) :
                                                ?>
                                                  <option value="<?= $category['encrypted_id'] ?>"><?= $category['name'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Landing Page Slug</label>
                                          <input required readonly type="text" id="slug" value="" class="form-control">
                                      </div>
                                  </div>
                              </div>

                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 174px X 129px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 175px X 129px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group  col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 175px X 129px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group  col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 175px X 129px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group  col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 500px X 563px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group  col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 734px X 700px</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="products">
                                  <div class="row shadow p-3 mb-5 bg-white rounded ">
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Product Name</label>
                                          <input required name="name[]" value="<?= set_value('name[]'); ?>" type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="text-black font-w500">Description</label>
                                          <textarea id="desc1" required type="text" name="desc[]" value="<?= set_value('desc[]'); ?>" class="form-control desc"></textarea>
                                          <span class="fs-12 font-w600">Product Description should not be more than 400 Characters</span>
                                          <!-- <p class="mt-1"><span id="char1" class="characters" style="color:#999;">400</span> <span style="color:#999;">Characters left</span></p> -->
                                      </div>
                                      <div class="form-group  col-md-12">
                                          <div class="custom-file">
                                              <input required type="file" accept="image/png" name="userfile[]" class="custom-file-input">
                                              <label class="custom-file-label">Choose Product Image</label>
                                          </div>
                                          <span class="fs-12 font-w600">Product Image Size should be exactly 819px X 460px</span>
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
                                        $pages = $this->crud_model->getAllLandingPages();
                                        foreach ($pages as $page) :
                                        ?>
                                          <tr>
                                              <td><?= $count++; ?></td>
                                              <td><?= $page['title'] ?></td>
                                              <td><?= $page['created_by'] ?></td>
                                              <td><?= $page['last_updated'] ?></td>
                                              <td><?= $this->crud_model->getThemeName($page['theme']) ?></td>
                                              <td><a href="<?= base_url('/' . $page['slug']) ?>">Click Here</a></td>
                                              <td><a href="<?= base_url('admin/page_details/' . $page['encrypted_id']) ?>"><i class="flaticon-381-view-2"></i> View Page</a></td>
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