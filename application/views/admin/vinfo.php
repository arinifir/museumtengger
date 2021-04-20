<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Informations</h4>
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
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Data</h4>
                                <a href="<?= base_url('Admin/pageAddInfo'); ?>" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($info as $in) { ?>
                                <div class="modal bd-example-modal-lg" id="gambar<?= $in['id_artikel']; ?>">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="<?= base_url('assets/'); ?>images/artikel/<?= $in['gambar_artikel']; ?>" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title (Ind)</th>
                                            <th>Title (Eng)</th>
                                            <th>Date Create</th>
                                            <th>Comments</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name (Ind)</th>
                                            <th>Name (Eng)</th>
                                            <th>Date Create</th>
                                            <th>Comments</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($info as $in) { ?>
                                            <tr>
                                                <td><button type="button" data-toggle="modal" class="btn" data-target="#gambar<?= $in['id_artikel']; ?>" data-toggle="tooltip"><img src="<?= base_url('assets/'); ?>images/artikel/<?= $in['gambar_artikel']; ?>" width="32" /></button></td>
                                                <td><?= $in['judul_artikel']; ?></td>
                                                <td><?= $in['title_artikel']; ?></td>
                                                <td><?= date("F d, Y",$in['waktu_artikel']) . ' at ' . date("H:i",$in['waktu_artikel']) ?></td>
                                                <td><?= $this->db->get_where('tb_komentar', ['kode_id' => $in['id_artikel']])->num_rows() ?> Comments</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="<?= base_url('Admin/pageEditInfo/' . $in['id_artikel']); ?>" title="" class="btn btn-link btn-primary btn-lg" type="button" data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('Admin/delInfo/' . $in['id_artikel']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" onclick="return confirm('Are you sure you want to delete this?')" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>