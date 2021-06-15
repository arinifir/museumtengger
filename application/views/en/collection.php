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

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3" align="center">
                    <div class="col-md-12 heading-section ftco-animate">
                        <p>Here you can see collections of Museum Tengger.<br>There are 20 collections being displayed at the museum. Those collections are in the form of traditional clothes, statue, music instrumental, etc. You can click each pictures below and it will show you description about the collection.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
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