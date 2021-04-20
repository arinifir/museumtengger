<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Information</h4>
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
                        <a href="#">Information</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Row</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Row</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Admin/editInfo'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Image<span class="text-danger">*</span></label>
                                            <input name="gambar_artikel" type="file" class="form-control">
                                            <input name="kode" type="text" class="form-control" value="<?= $in['id_artikel']; ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Title (Ind)<span class="text-danger">*</span></label>
                                            <input name="nama" type="text" class="form-control" placeholder="fill title" value="<?= $in['judul_artikel']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Title (Eng)<span class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control" placeholder="fill title" value="<?= $in['title_artikel']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label>Content<span class="text-danger"> (Indonesian)</span></label>
                                            <textarea id="editor1" name="isi" rows="10" cols="80"><?= $in['isi_artikel']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Content<span class="text-danger"> (English)</span></label>
                                            <textarea id="editor2" name="content" rows="10" cols="80"><?= $in['content_artikel']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <a href="<?= base_url('Admin/pageInfo') ?>" type="button" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>