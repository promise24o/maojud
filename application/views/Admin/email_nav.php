<div class="email-left-box px-0 mb-3">
    <div class="p-0">
        <a href="<?= base_url('admin/compose') ?>" class="btn btn-primary btn-block">Compose</a>
    </div>
    <div class="mail-list mt-4">
        <a href="<?= base_url('admin/inbox') ?>" class="list-group-item active"><i class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span
                class="badge badge-primary badge-sm float-right"><?= $this->crud_model->countEmails() ?></span> </a>
        <a href="javascript:void()" class="list-group-item"><i
                class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a> <a href="javascript:void()"
            class="list-group-item"><i class="fa fa-star font-18 align-middle mr-2"></i>Unread <span
                class="badge badge-danger text-white badge-sm float-right"><?= $this->crud_model->countUndreadEmails() ?></span>
        </a>
    </div>
</div>