<!-- Menu Sections -->
    <nav class="navbar navbar-default dropdown-white">
        <div class="container">
            <div class="menu clearfix">
                <div class="navbar-header logo">
                    <a class="navbar-brand" href="<?= site_url('f/home') ?>">
                        <img src="<?= FRONT_END_ASSETS ?>images/kosh-logo.png" alt=" " class="img-responsive center-block desktop">
                        <img src="<?= FRONT_END_ASSETS ?>images/kosh-logo-mobile.png" alt=" " class="img-responsive center-block mobile">
                    </a>                
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse text-center">
                    <ul id="sub-nav" class="nav navbar-nav navbar-menu">

                        <li>
                            <a href="<?= site_url('f/home') ?>" role="button">Home </a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="<?= site_url('f/about') ?>" role="button">About us </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= site_url('f/about') ?>" role="button">Vision & Misson </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('f/about') ?>" role="button">Founders </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('f/about') ?>" role="button">Journey </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('f/about') ?>" role="button">Mentors </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?= site_url('f/doctor') ?>" role="button">Coaches </a>
                        </li>

                        <li>
                            <a href="<?= site_url('f/appointment') ?>">Partner with us </a>
                        </li>

                        <li>
                            <a href="<?= site_url('f/appointment') ?>">Contact Us </a>
                        </li>
                    </ul>
                    <div class="navbar-right nav-right-center">
                        <a href="<?= site_url('f/appointment') ?>" class="btn btn-type1 btn-sm">Login</a>
                    </div>
                    <!--div class="navbar-right nav-right-center">
                        <a href="<?= site_url('f/appointment') ?>" class="btn btn-type1 btn-sm">Schedule Appointment</a>
                    </div-->
                </div><!-- /.nav-collapse -->
            </div>
        </div>
        <!-- //Search Option -->
    </nav>
    <!-- Menu Sections -->
</header>

<!-- Header 
================================= -->