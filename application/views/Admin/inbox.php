<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card  vh-100">
                            <div class="card-body">
                                <?php  $this->load->view('Admin/email_nav') ?>
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                        <div class="email-list mt-3">
                                            <?php foreach($messages as $message): ?>
                                            <div class="message">
                                                <div>
                                                    <div class="d-flex message-single">
                                                        <div class="pl-1 align-self-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkbox2">
                                                                <label class="custom-control-label" for="checkbox2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="ml-2">
                                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                    <a href="<?= base_url('admin/view_message/'.$message['encrypted_id']) ?>" class="col-mail col-mail-2">
                                                        <div class="subject <?php if($message['status'] ==0){echo "font-weight-bold"; } ?>"><?= $message['subject'] ?></div>
                                                        <div class="date"><?= $message['date'] ?></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                    </div>
                                    <!-- panel -->
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