<header class="bg-white">
<!-- Menu Sections -->
<div class="container bg-white">
<div class="row">    
<nav class="col-12 navbar navbar-expand-lg navbar-light px-lg-5 p-0 py-2">
    <div class="col-lg-2 col-6 navbar-header logo">
        <a class="navbar-brand d-block p-0" href="<?= site_url('home') ?>">
            <img src="<?= FRONT_END_ASSETS ?>images/kosh-logo.png" alt=" " class="img-responsive center-block desktop">
            <img src="<?= FRONT_END_ASSETS ?>images/kosh-logo-mobile.png" alt=" " class="img-responsive center-block mobile">
        </a>                
    </div>
    <div class="col-lg-auto col-6 user d-flex flex-row-end d-lg-none m-0 p-0">
        <div class="col-6 d-lg-none"></div>
        <a class="d-lg-none mt-2 h5" href="<?= site_url('user-login') ?>"><span class="fa fa-user px-2 pt-1"></span></a>
        
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
    </div>
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav px-4 p-lg-0 pt-2">
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?= site_url('about-us') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Kosh
        </a>
        <div class="mt-0 pt-0 dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="px-4 py-3 dropdown-item" href="<?= site_url('about-us') ?>">About Us</a>
          <a class="px-4 py-3 dropdown-item" href="<?= site_url('founders') ?>">Founders</a>
          <a class="px-4 py-3 dropdown-item" href="<?= site_url('journey') ?>">Journey</a>
          <a class="px-4 py-3 dropdown-item" href="<?= site_url('mentors') ?>">Mentors</a>
        </div>
        </li>
        <li class="nav-item list-inline-item">
        <a class="nav-link" href="<?= site_url('coaches') ?>">Coaches</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="<?= site_url('contact-us') ?>">Partner with us</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="<?= site_url('all-programs') ?>">Programs</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="<?= site_url('contact-us') ?>">Contact Us</a>
        </li>
    </ul>
    <div class="d-none d-lg-block col-lg-4 vertical-middle visible-block-sm-xs text-right animatedParent animateOnce">
        <a href="<?= site_url('user-login') ?>" class="btn btn-type1-reverse pulse animated">Login</a>
    </div>
    </div>
</nav>
</div>
</div>

<!-- Menu Sections -->
</header>

<!-- Header 
================================= -->