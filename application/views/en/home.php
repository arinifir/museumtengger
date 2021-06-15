<div class="hero-wrap js-fullheight" style="background-image: url('<?= base_url() ?>assets/images/home.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h1 class="mt-10">Museum Tengger Probolinggo</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3" align="center">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Hello!</span>
                        <p>Welcome to Museum Tengger website! <br> Here you can see collections of Museum Tengger. This website provides information about tourist attraction and lodge nearby the museum. You don't need to worry if you want to visit Museum Tengger, because there is a <a href="<?= base_url('Home/contact#mapmuseumtengger'); ?>">map</a> to guide you to the museum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading">Our Collections</span>
                <h2 class="mb-4">Recent Collections</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($collect as $co) { ?>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image: url('<?= base_url() ?>/assets/images/koleksi/<?= $co['gambar_koleksi'] ?>')">
                        <div class="text text-center">
                            <h3><a href="<?= base_url('Home/detail_collection/'.$co['linkoleksi']); ?>"><?= $co['name_koleksi']; ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Information</span>
                <h2>Information</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach ($artikel as $art) { ?>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="<?= base_url('Home/detail_information/' . $art['linkartikel']); ?>" class="block-20" style="background-image: url('<?= base_url() ?>assets/images/artikel/<?= $art['gambar_artikel'] ?>');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <h3 class="heading mt-2"><a href="<?= base_url('Home/detail_information/' . $art['linkartikel']); ?>"><?= $art['title_artikel'] ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>