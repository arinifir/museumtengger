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
                        <a href="#">Edit Password</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Password</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Admin/editPassword'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <input pattern=".{8,}" name="pass1" type="password" class="form-control" placeholder="fill name" required title="8 characters minimum">
                                            <input name="id" type="text" class="form-control" placeholder="fill password" value="<?= $this->session->userdata("id_user"); ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Confirm Password<span class="text-danger">*</span></label>
                                            <input name="pass2" type="password" class="form-control" placeholder="fill confirm password" required>
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