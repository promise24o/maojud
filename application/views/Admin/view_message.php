<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Read</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-auto vh-100">
                            <div class="card-body">
                            <?php  $this->load->view('Admin/email_nav') ?>
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right-box-padding">
                                                <div class="read-content">
                                                    <div class="media pt-3 d-sm-flex d-block justify-content-between">
                                                        <div class="clearfix mb-3 d-flex">
                                                            <div class="media-body mr-2">
                                                                <h5 class="text-primary mb-0 mt-1"><?= $message['name'] ?>
                                                                </h5>
                                                                <p class="mb-0"><?= $message['date'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="media mb-2 mt-3">
                                                        <div class="media-body">
                                                            <h5 class="my-1 text-primary">Subject: <?= $message['subject'] ?>
                                                            </h5>
                                                            <p class="read-content-email mb-0">
                                                                From: <?= $message['email'] ?></p>
                                                            <p class="read-content-email">Tel:
                                                                <?= $message['phone'] ?><span>
                                                        </div>
                                                    </div>
                                                    <div class="read-content-body">
                                                        
                                                        <p class="mb-2"><?= $message['message'] ?>
                                                        </p>
                                                        
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
