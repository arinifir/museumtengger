<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Comments</h4>
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
                        <a href="#">Comments</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th style="width: 10%">Collection / Information</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th style="width: 10%">Collection / Information</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($comment as $com) { ?>
                                            <tr>
                                                <td><?= $com['nama_komentar']; ?></td>
                                                <td><?= time_elapsed_en_string($com['waktu_komentar']); ?></td>
                                                <td><?= $com['email_komentar']; ?></td>
                                                <td><?= $com['isi_komentar']; ?></td>
                                                <td>
                                                    <?php
                                                    $koleksi = $this->db->get_where('tb_koleksi', ['kd_koleksi' => $com['kode_id']])->row_array();
                                                    $artikel = $this->db->get_where('tb_artikel', ['id_artikel' => $com['kode_id']])->row_array();
                                                    if ($koleksi != null) { ?>
                                                        <?= $koleksi['nama_koleksi']; ?>

                                                    <?php } elseif ($artikel != null) { ?>
                                                        <?= $artikel['judul_artikel']; ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="<?= base_url('Admin/delComment/' . $com['id_komentar']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" onclick="return confirm('Are you sure you want to delete this?')" data-original-title="Remove">
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