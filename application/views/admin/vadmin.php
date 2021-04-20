<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Admin</h4>
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
                        <a href="#">Admin</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Data</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    New</span>
                                                <span class="fw-light">
                                                    Row
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Create a new row using this form, make sure you fill them all</p>
                                            <form action="<?= base_url('Admin/addAdmin'); ?>" method="post">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name<span class="text-danger">*</span></label>
                                                            <input name="name" type="text" class="form-control" placeholder="fill name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Email<span class="text-danger">*</span></label>
                                                            <input name="email" type="email" class="form-control" placeholder="fill email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-0">
                                                        <div class="form-group form-group-default">
                                                            <label>Username<span class="text-danger">*</span></label>
                                                            <input name="username" type="text" class="form-control" placeholder="fill username" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Password<span class="text-danger"> (>8 characters)</span></label>
                                                            <input pattern=".{8,}" name="password" type="text" class="form-control" placeholder="fill password" required title="8 characters minimum">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($admin as $ad) { ?>
                                <div class="modal fade" id="editRowModal<?= $ad['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Edit</span>
                                                    <span class="fw-light">
                                                        Row
                                                    </span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('Admin/editAdmin'); ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Name<span class="text-danger">*</span></label>
                                                                <input name="name" type="text" class="form-control" placeholder="fill name" value="<?= $ad['nama_user']; ?>" required>
                                                                <input name="id" type="text" class="form-control" value="<?= $ad['id_user']; ?>" hidden>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Email<span class="text-danger">*</span></label>
                                                                <input name="email" type="email" class="form-control" placeholder="fill email" value="<?= $ad['email_user']; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pr-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Username<span class="text-danger">*</span></label>
                                                                <input name="username" type="text" class="form-control" placeholder="fill username" value="<?= $ad['username']; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Password<span class="text-danger"> (>8 characters)</span></label>
                                                                <input pattern=".{8,}" name="password" type="text" class="form-control" placeholder="fill password" required title="8 characters minimum">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer no-bd">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date Create</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Account</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date Create</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Account</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin as $ad) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $ad['nama_user']; ?></td>
                                                <td><?= $ad['tanggal_user']; ?></td>
                                                <td><?= $ad['email_user']; ?></td>
                                                <td><?= $ad['username']; ?></td>
                                                <td>
                                                    <?php if ($ad['status_user'] == 0) { ?>
                                                        <div class="form-button-action">
                                                            <a href="<?= base_url('Admin/active/' . $ad['id_user']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-danger" data-original-title="Change Active">
                                                                Not Active
                                                            </a>
                                                        </div>

                                                    <?php } else { ?>
                                                        <div class="form-button-action">
                                                            <a href="<?= base_url('Admin/nactive/' . $ad['id_user']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-success" data-original-title="Change Not active">
                                                            Active
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit" data-toggle="modal" data-target="#editRowModal<?= $ad['id_user'] ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <a href="<?= base_url('Admin/delAdmin/' . $ad['id_user']); ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" onclick="return confirm('Are you sure you want to delete this?')" data-original-title="Remove">
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