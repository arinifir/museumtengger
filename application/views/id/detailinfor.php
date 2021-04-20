<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/images/home.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Detail Informasi</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('Beranda'); ?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?= base_url('Beranda/informasi'); ?>">Informasi</h1> <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p>
                    <img src="<?= base_url('assets/images/artikel/' . $info['gambar_artikel']); ?>" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3"><?= $info['judul_artikel']; ?></h2>
                <i>
                    <p class="time-collection">Diperbarui pada <?= date("d", $info['waktu_artikel']) . ' ' . convertTimestampToBulan($info['waktu_artikel']) . ' ' . date("Y", $info['waktu_artikel']) . ' Pukul ' . date("H:i", $info['waktu_artikel']) ?></p>
                </i>
                <div class="ckeditorimg">
                    <?= $info['isi_artikel']; ?>
                </div>

                <div class="mt-5">
                    <div class="comment-form-wrap ">
                        <h3 class="mb-4">Tinggalkan Komentar</h3>
                        <form action="<?= base_url('Beranda/addcomment/' . $info['id_artikel']) ?>" class="p-5 bg-light" id="comment-form" method="post">
                            <div class="form-group">
                                <label for="name">Nama *</label>
                                <input type="text" class="form-control comment_name" name="comment_name" id="comment_name" required>
                            </div>
                            <div class="form-group comment_todiv" id="comment_todiv">
                                <label for="name">Untuk *</label>
                                <input type="text" value="" class="form-control comment_to" name="comment_to" id="comment_to" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="comment_email" id="comment_email" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea name="comment_content" id="comment_content" cols="30" rows="5" class="form-control comment_content" required></textarea>
                            </div>
                            <div class="form-group">
                                <input value="0" type="hidden" class="comment_id" name="comment_id" id="comment_id">
                                <input type="submit" value="" id="comment_submit" class="btn py-3 px-4 btn-primary comment_submit">
                                <a href="javacript:void(0)" value="Cancel" id="comment_cancel" onclick="cancel()" class="btn py-3 px-4 btn-danger text-white comment_cancel">Batal</a>
                            </div>
                        </form>
                    </div>
                    <br>
                    <h3 class="mb-5"><?= $jmlkomen; ?> Komentar</h3>
                    <ul class="comment-list">
                        <?php foreach ($comment as $com) : ?>
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="<?= base_url('assets/images/komen.png'); ?>" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3 data-id="<?= $com['nama_komentar']; ?>" id="user_name" class="user_name<?= $com['id_komentar'] ?>" data-kode="<?= $com['id_komentar'] ?>"><?= $com['nama_komentar']; ?></h3>
                                    <div class="meta"><?= time_elapsed_en_string($com['waktu_komentar']); ?></div>
                                    <p><?= $com['isi_komentar']; ?></p>
                                    <p><a href="javacript:void(0)" data-id="<?= $com['nama_komentar']; ?>" class="reply" id="<?= $com['id_komentar']; ?>">Reply</a></p>
                                </div>
                            </li>

                            <ul class="children">
                                <?php
                                $kode_id = $com['kode_id'];
                                $id_komentar = $com['id_komentar'];
                                $query = $this->db->get_where('tb_komentar', ['kode_id' => $kode_id, 'level_komentar' => $id_komentar])->result_array();
                                foreach ($query as $re) :
                                ?>
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="<?= base_url('assets/images/komen.png'); ?>" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3><?= $re['nama_komentar']; ?></h3>
                                            <div class="meta"><?= time_elapsed_en_string($re['waktu_komentar']); ?></div>
                                            <p><?= $re['isi_komentar']; ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        <?php endforeach; ?>
                    </ul>
                    <!-- END comment-list -->


                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <!-- <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div> -->

                <div class="sidebar-box ftco-animate">
                    <h3>Informasi Terbaru</h3>
                    <?php foreach ($reinfo as $in) { ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url('<?= base_url() ?>assets/images/artikel/<?= $in['gambar_artikel'] ?>');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="<?= base_url('Beranda/detail_informasi/' . $in['link_artikel']) ?>"><?= $in['judul_artikel'] ?></a></h3>
                                <div class="meta">
                                    <div><a href="<?= base_url('Beranda/detail_informasi/' . $in['link_artikel']) ?>"><span class="icon-calendar"></span> <?= date("d", $in['waktu_artikel']) . ' ' . convertTimestampToBulan($in['waktu_artikel']) . ' ' . date("Y", $in['waktu_artikel']) ?></a></div>
                                    <div><a href="<?= base_url('Beranda/detail_informasi/' . $in['link_artikel']) ?>"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="<?= base_url('Beranda/detail_informasi/' . $in['link_artikel']) ?>"><span class="icon-chat"></span>
                                            <?php
                                            $total = $this->db->get_where('tb_komentar', ['kode_id' => $in['id_artikel']])->num_rows();
                                            echo $total;
                                            ?>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->