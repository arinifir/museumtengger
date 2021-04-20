<body>
    
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid px-md-5">
        <a class="navbar-brand" href="<?= base_url('Home'); ?>">Museum Tengger <span>Probolinggo</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?=($this->uri->segment(2)==='Home')?'active':''?>"><a href="<?= base_url('Home'); ?>" class="nav-link">Home</a></li>
            <li class="nav-item <?=($this->uri->segment(2)==='Home/collection')?'active':''?>"><a href="<?= base_url('Home/collection'); ?>" class="nav-link">Collection</a></li>
            <li class="nav-item"><a href="<?= base_url('Home/information'); ?>" class="nav-link">Information</a></li>
            <li class="nav-item"><a href="<?= base_url('Home/virtualtour'); ?>" class="nav-link">Virtual Tour</a></li>
            <li class="nav-item"><a href="<?= base_url('Home/contact'); ?>" class="nav-link">Contact</a></li>
          </ul>
        </div>

        <a class="navbar-brand border-nav" href="<?= base_url('Beranda'); ?>">Eng</a>
      </div>
    </nav>
  <!-- END nav --> 