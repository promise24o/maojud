  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
      <div class="container-fluid">
          <div class="page-titles d-flex justify-content-between align-items-center">
              <h2>Product Orders</h2>
          </div>
             
          <div class="row ">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="example" class="display min-w850">
                                  <thead>
                                      <tr>
                                          <th>S/N</th>
                                          <th>Customer</th>
                                          <th>Email</th>
                                          <th>Phone</th>
                                          <th>Product</th>
                                          <th>Quantity</th>
                                          <th>Amount</th>
                                          <th>Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $count = 1;
                                        foreach ($orders as $order) :
                                        ?>
                                          <tr>
                                              <td><?= $count++; ?></td>
                                              <td><?= $order['fullname'] ?></td>
                                              <td><?= $order['email'] ?></td>
                                              <td><?= $order['phone'] ?></td>
                                              <td><?= $this->crud_model->getProductName($order['product']) ?></td>
                                              <td><?= $order['qty'] ?></td>
                                              <td>$<?= number_format($order['amount'],2) ?></td>
                                              <td><?= $order['date'] ?></td>
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