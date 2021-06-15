<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/images/home.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Information</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('Home'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Information <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3" align="center">
                    <div class="col-md-12 heading-section ftco-animate">
                        <p>Here you can see information about tourist attraction and lodge nearby Museum Tengger.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <div class="container">
        <div class="row d-flex">
            <?php foreach ($artikel as $art) { ?>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="<?= base_url('Home/detail_information/'.$art['linkartikel']); ?>" class="block-20" style="background-image: url('<?= base_url() ?>assets/images/artikel/<?= $art['gambar_artikel']?>');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <h3 class="heading mt-2"><a href="<?= base_url('Home/detail_information/'.$art['linkartikel']); ?>"><?= $art['title_artikel']?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>