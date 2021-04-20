<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Profile</h4>
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
                        <a href="#">Edit Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Profile</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Admin/editProfil'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name<span class="text-danger">*</span></label>
                                            <input name="nama" type="text" class="form-control" placeholder="fill name" value="<?= $user['nama_user']; ?>" required>
                                            <input name="id" type="text" class="form-control" placeholder="fill name" value="<?= $user['id_user']; ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <input name="email" type="email" class="form-control" placeholder="fill email" value="<?= $user['email_user']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Username<span class="text-danger">*</span></label>
                                            <input name="username" type="text" class="form-control" placeholder="fill username" value="<?= $user['username']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <a href="<?= base_url('Admin') ?>" type="button" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 