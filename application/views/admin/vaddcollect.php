<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Add Collection</h4>
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
                        <a href="#">Management</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Collection</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Row</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Row</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Admin/addCollect'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Image<span class="text-danger">*</span></label>
                                            <input name="gambar_koleksi" type="file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name (Ind)<span class="text-danger">*</span></label>
                                            <input name="nama" type="text" class="form-control" placeholder="fill name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name (Eng)<span class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control" placeholder="fill name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label>Description<span class="text-danger"> (Indonesian)</span></label>
                                            <textarea id="editor1" name="isi" rows="10" cols="80"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Description<span class="text-danger"> (English)</span></label>
                                            <textarea id="editor2" name="content" rows="10" cols="80"></textarea>
                                        </div>
                                    </div> 
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <a href="<?= base_url('Admin/pageCollect') ?>" type="button" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 