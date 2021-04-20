<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Messages</h4>
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
                        <a href="#">Messages</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Messages</h4>
                                <a href="<?= base_url('Admin/sendMessage'); ?>" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Send Message
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Reply</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Reply</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($pesan as $pe) { ?>
                                            <tr>
                                                <td>
                                                    <?php if ($pe['status_pesan'] == 0) { ?>
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-danger">
                                                                Unreplied
                                                            </button>
                                                        </div>

                                                    <?php } else { ?>
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-success">
                                                                Replied
                                                            </button>
                                                        </div>
                                                    <?php } ?>

                                                </td>
                                                <td><?= $pe['nama_pesan']; ?></td>
                                                <td><?= $pe['email_pesan']; ?></td>
                                                <td><?= $pe['subyek_pesan']; ?></td>
                                                <td><?= $pe['isi_pesan']; ?></td>
                                                <td><?= date("F d, Y", $pe['waktu_pesan']) . ' at ' . date("H:i", $pe['waktu_pesan']) ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="<?= base_url('Admin/replyMessage/' . $pe['id_pesan']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-primary" data-original-title="Reply">
                                                            Reply
                                                        </a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="<?= base_url('Admin/delMessage/' . $pe['id_pesan']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" onclick="return confirm('Are you sure you want to delete this?')" data-original-title="Remove">
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