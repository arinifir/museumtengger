<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Reply Message</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Notifications</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Message</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Reply Message</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Message</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Admin/reply'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>To<span class="text-danger">*</span></label>
                                            <input name="to" type="email" class="form-control" placeholder="fill to" value="<?= $pesan['email_pesan']; ?>" readonly>
                                            <input name="id" class="form-control" placeholder="fill to" value="<?= $pesan['id_pesan']; ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Subject<span class="text-danger">*</span></label>
                                            <input name="subject" type="text" class="form-control" placeholder="fill subject" value="Hello <?= $pesan['nama_pesan']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Message<span class="text-danger"></span></label>
                                            <textarea id="editor1" name="message" rows="10" cols="80"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-primary">Reply</button>
                                    <a href="<?= base_url('Admin/pageMessage') ?>" type="button" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 