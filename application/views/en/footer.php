<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
  <div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-7 ftco-animate d-flex align-items-center">
        <h2 class="mb-0" style="color:white; font-size: 28px;">Subcribe to our Website</h2>
      </div>
      <div class="col-md-5 d-flex align-items-center">
        <form action="<?= base_url('Home/addSubs'); ?>" method="post" class="subscribe-form">
          <div class="form-group d-flex">
            <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
            <input type="submit" value="Subscribe" class="submit px-3">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Website</h2>
          <p>Website developed by: <a href="https://instagram.com/arinifir_?igshid=6wmkpj9ukyp" style="color: #177dff">Arini Firdausiyah</a><br>
Content created by: <a href="https://instagram.com/dheasiiw99?igshid=m8msxf73izu0" style="color: #177dff">Dhea Siwy Wardhani</a><br>Museum Tengger was built in 2017 by Department of Youth, Sport, Tourism and Culture Probolinggo<br><br>Opening hours: Every day 08.00 AM-04.00 PM</p>

        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Contact</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><a href="https://maps.app.goo.gl/PMfQpd4kpuDzQyh49"><span class="text">Jln. Raya Bromo, Wanasari, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</span></a></li>
              <li><span class="icon icon-phone"></span><a href="tel://+6282140101707"><span class="text">+62 8214 0101 707</span></a></li>
              <li><span class="icon icon-envelope"></span><a href="mailto:museumtengger@gmail.com"><span class="text">museumtengger@gmail.com</span></a></li>
              <li><span class="icon icon-link"></span><a href="https://museumtengger.xyz/"><span class="text">museumtengger.xyz</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="<?= base_url('assets/main/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/main/'); ?>js/google-map.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $(document).ready(function() {
    $('.comment_submit').val("Post Comment");
    $('.comment_cancel').hide();
    $('.comment_todiv').hide();
    $(document).on('click', '.reply', function() {
      var comment_id = $(this).attr("id");
      var nama = $(this).attr("data-id");
      console.log(nama);
      $('.comment_id').val(comment_id);
      $('.comment_to').val("@" + nama);
      $('.comment_submit').val("Reply");
      $('.comment_name').focus();
      $('.comment_cancel').show();
      $('.comment_todiv').show();
    }); 
  });

  function cancel() {
    document.getElementById("comment_name").blur();
    document.getElementById("comment_cancel").style.display = "none"
    document.getElementById("comment_todiv").style.display = "none"
    document.getElementById("comment_id").value = "0"
    document.getElementById("comment_to").value = ""
    document.getElementById("comment_submit").value = "Post Comment"
  }
</script>
<?php
if ($this->session->flashdata('gagal')) :
?>
<script>
Swal.fire({
  icon: 'warning',
  title: 'Oops...',
  text: '<?= $this->session->flashdata('gagal'); ?>'
})
</script>

<?php endif ?>
<?php
if ($this->session->flashdata('berhasil')) :
?>
<script>
Swal.fire({
  icon: 'success',
  title: 'Yey..',
  text: '<?= $this->session->flashdata('berhasil'); ?>'
})
</script>
<?php endif ?>
</body>

</html>