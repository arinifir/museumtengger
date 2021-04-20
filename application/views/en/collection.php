<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url()?>assets/images/home.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Collection</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('Home'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Collection <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php foreach ($collect as $co) { ?>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image: url('<?= base_url()?>assets/images/koleksi/<?= $co['gambar_koleksi']?>')">
                        <div class="text text-center">
                            <h3><a href="<?= base_url('Home/detail_collection/'.$co['linkoleksi']); ?>"><?= $co['name_koleksi']; ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section> 