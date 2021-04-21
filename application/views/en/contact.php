<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/images/home.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('Home'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> Wanasari, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://+6282140101707">+62 8214 0101 707</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:museumtengger@gmail.com">museumtengger@gmail.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website:</span> <a href="<?= base_url('Home'); ?>">museumtengger.xyz</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-lg-6 order-md-last d-flex">
                <form action="<?= base_url('Home/addMessage'); ?>" method="post" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subyek" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group"> 
                        <textarea name="isi"  cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    </div> 
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-lg-6 d-flex">
                <iframe width="600" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJmYH_ZNA31i0R0Xn1ar76MzM&key=AIzaSyCTlDEbAba-k-6TzBAVqFQAI5NxVwo3YDM">
                </iframe>
                <!-- <div id="map" class="bg-white"></div> -->
            </div>
        </div>
    </div>
</section>