 <!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
     <div class="container-fluid">
         <div class="page-titles">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                 <li class="breadcrumb-item active"><a href="javascript:void(0)">Compose</a></li>
             </ol>
         </div>
         <!-- row -->
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                        <?php  $this->load->view('Admin/email_nav') ?>
                         <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                             <div class="compose-content">
                                 <form action="#">
                                     <div class="form-group">
                                         <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                     </div>
                                     <div class="form-group">
                                         <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                     </div>
                                     <div class="form-group">
                                         <textarea id="email-compose-editor"
                                             class="textarea_editor form-control bg-transparent" rows="15"
                                             placeholder="Enter text ..."></textarea>
                                     </div>
                                 </form>
                             </div>
                             <div class="text-left mt-4">
                                 <button class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"><i
                                             class="fa fa-paper-plane"></i></span>Send</button>
                                 <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-danger light btn-sl-sm" type="button"><span class="mr-2"><i
                                             class="fa fa-times" aria-hidden="true"></i></span>Discard</a>
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