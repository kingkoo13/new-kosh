<!-- 
Banner Section
================================= -->
<section class="home-slider">
    <div id="home_slider_001" class="col-lg-12 m-auto carousel slide p-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home_slider_001" data-slide-to="0" class="active"></li>
            <li data-target="#home_slider_001" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= FRONT_END_ASSETS ?>images/banner/kosh_banner_001.jpg" class="d-lg-block d-md-block d-none img-fluid" alt="...">
              <img src="<?= FRONT_END_ASSETS ?>images/banner/kosh_banner_mobile_001.jpg" class="d-lg-none d-md-none d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= FRONT_END_ASSETS ?>images/banner/kosh_banner_002.jpg" class="d-lg-block d-md-block d-none img-fluid" alt="..." />
              <img src="<?= FRONT_END_ASSETS ?>images/banner/kosh_banner_mobile_002.jpg" class="d-lg-none d-md-none d-block img-fluid" alt="..." />
            </div>
        </div>

        <!-- controls -->
        <a class="carousel-control-prev" href="#home_slider_001" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home_slider_001" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- controls -->

    </div>
</section>        
<!-- // Banner Section
================================= -->

<section class="bg-white">

<!-- Home Body Section
================================= -->
<div class="d-flex justify-content-center">
    <div class="col-12 mt-5 mb-3">
        <p class="hp_txt_01 h1 text-center">Nurturing the parent - child bond one family at a time</p>
        <p class="hp_txt_02 h6 text-center mt-4 text-dark">Be a part of the Conscious Parenting Ecosystem ~ Get a free session for 15 mins with world renowned parenting coaches</p>
    </div>    
</div>


<div class="d-flex justify-content-center vertical-middle visible-block-sm-xs text-center animatedParent animateOnce">
    <a href="http://localhost/new-kosh/appointment/" class="btn btn-type1-reverse pulse animated go"> Book a Free Session</a>
</div>

<hr class="mt-5 border-0">

<!-- mid page 3 image slider -->
<?php
        $programs = array(  "academics-&-performance",
                            "behaviour",
                            "body-image",
                            "specific-concern-areas",
                            "conscious-parenting",
                            "teenagers",
                            "thrive-beyond-trauma",
                            "screens-&-addiction",
                            "wow-parenting",
                            "discipline",
                            "stress-anxiety-&-depression",
                            "nutrition-&-wellness"
                            
                        ); 
?>
<div class="d-flex justify-content-center vertical-middle visible-block-sm-xs text-center mt-5">
    <div class="">
        <p class="h4 color-light mb-3">Our Programmes</p>
    </div>   
</div> 

<div class="container">
    <div class="row">
    <div class="col-12 m-auto m-0 p-0">
        <?php foreach($programs as $key => $program){  ?>
            <div class="col-lg-2 col-6 p-0 m-0 float-left zoom">
                <div class="demo-content p-0 m-lg-1 ml-1 mr-1 mb-1 mt-1 rounded text-center position-static">
                    <img class="shadow-bg col-12 m-0 p-0" style="object-fit: cover;" width="auto" height="175px" src="<?= FRONT_END_ASSETS ?>/images/programs/<?php echo $program; ?>.png " />
                    <span class="p position-absolute fixed-bottom text-white mb-2 text-capitalize px-1">
                        <?php echo str_replace("-", " ", $program); ?></span>
                </div>
            </div>
        <?php } ?> 
    </div>  
    </div>
</div>

<!-- Know us -->

<div class="container">
<div class="row">    
    <div class="col-12 text-center mt-5">
        <p class="h4 color-light mb-3">Know Us</p>
    </div>

    <section class="col-lg-6 col-12 float-left d-flex mb-5">   
    <div class="col-12 text-center justify-content-center align-self-center">
        <img class="mx-auto d-block" alt="" src="<?= FRONT_END_ASSETS ?>images/Swati-Certification.jpg" />
        <div class="m-0 p-0">
            <p class="h6 text-dark m-0">Conscious Parenting Method Certification Program (CPMCP)</p></br>
            <p class="text-dark" style="font-size: 12px;">CPMCP is a highly tailored and formatted coaching program replete with specific strategies and techniques to train coaches to specifically help parents to help their children to unfold into their fullest potential</p>
        </div>    
    </div>
    </section>

<!-- right know us --> 

    <section class="col-lg-6 col-12 float-left">
    <div class="col-12 d-flex justify-content-center">
        <div class="col-6">
            <div class="text-center">
                <img class="img-responsive zoom" alt="" src="<?= FRONT_END_ASSETS ?>images/home/know_us_001.jpg" style="height: 100px;width: 100px;object-fit: cover;" />
            </div>
            <div class="text-center">
                <h4 class="know_us_t1">250+</h4>
                <p class="h6 know_us_t2 text-dark text-capitalize">Satisfied Parents</p>
            </div>
        </div>
        <div class="col-6">
            <div class="text-center">
                <img class="img-responsive zoom" alt="" src="<?= FRONT_END_ASSETS ?>images/home/know_us_002.jpg" style="height: 100px;width: 100px;object-fit: cover;" />
            </div>
        <div class="text-center">
            <h4 class="know_us_t1">10+</h4>
                <p class="h6 know_us_t2 text-dark text-capitalize">Corporate parenting Workshops</p>
        </div>
        </div>
    </div>    
    <div class="col-12 d-flex justify-content-center bg-white">
        <div class="col-6">
            <div class="text-center">
                <img class="img-responsive zoom" alt="" src="<?= FRONT_END_ASSETS ?>images/home/know_us_003.jpg" style="height: 100px;width: 100px;object-fit: cover;" />
            </div>
            <div class="text-center">
                <h4 class="know_us_t1">4000+</h4>
                <p class="h6 know_us_t2 text-dark text-capitalize">Content Employees</p>
            </div>
        </div>
        <div class="col-6">
            <div class="text-center">
                <img class="img-responsive zoom" alt="" src="<?= FRONT_END_ASSETS ?>images/home/know_us_004.jpg" style="height: 100px;width: 100px;object-fit: cover;" />
            </div>
            <div class="text-center">
                <h4 class="know_us_t1">500+</h4>
                    <p class="h6 know_us_t2 text-dark text-capitalize">Coaches</p>
            </div>
        </div>
    </div>    
    </section>    
</div>
</div>

<div class="container bg-white">
    <div class="row">
        <div class="col-lg-6">    
        <div class="d-flex justify-content-center vertical-middle visible-block-sm-xs text-center mt-5 bg-white mb-2">
            <div class="h4 color-light mb-3">
                The Kosh Diary
                <span class="ml-2 text-danger">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </span>    
            </div>
        </div> 
        <div class="card-group">
          <div class="col-lg-12 col-sm-12 card m-auto px-0">
            <iframe width:100% height="370px" src="https://www.youtube.com/embed/higpx_lG728?rel=0&enablejsapi=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen;"></iframe>
          </div>       
        </div>
        <div class="col-12 p-0 mt-1">
            <div class="p-lg-2 p-1 d-flex justify-content-center">
                <!--span class="py-3 text-dark">Subscribe to get free parenting tips</span-->    
                <button type="button" class="btn-type1-reverse">
                    <a href="#" class="button text-white text-capitalize">Subscribe for free Parenting tips</a>
                </button>    
            </div>
        </div>
        </div>

        <div class="col-lg-6">    
        <div class="d-flex justify-content-center vertical-middle visible-block-sm-xs text-center mt-5 bg-white mb-2">
            <div class="h4 color-light mb-3">Blog</div>
        </div> 
        <div class="card-group shadow-bg">
          <div class="col-lg-12 col-sm-12 card m-auto px-0">
            <img class="card-img-top" min-height="200px" src="<?= FRONT_END_ASSETS ?>/images/blog-image.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
                  <h5 class="card-title">Sibling Relationships</h5>
                  <p class="card-text text-dark">A well-placed couple, wished to start a family after two years of marriage. Lucky they were, when things went just as planned and, soon made a very...</p>
                  <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
            </div>
        </div>
        <p class="col-12 text-center mb-0 mt-3">
            <a class="btn btn-type1-reverse pulse animated go" href="<?= site_url('blogs') ?>">See More</a>
        </p>    
        </div>
    </div>
</div> 

       
<!-- Testimonials -->

<div class="container bg-white py-3">
    <div class="row mb-5">
    <!-- SLIDER DATA  -->
    <?php

            $testimonials = array(
                                    array('image' => 'Prafulla','name' => 'Prafulla','short-description' => 'Mom of 5-year-old daughter and Restaurant owner in Mumbai','description' => 'I came to know about Swati and Kosh parenting initiative through one of my common friends when I had difficulty in settling down my 5-year-old on to her day today schedules during pandemic. It was such a transforming experience meeting her and talking to her. She made me comfortable in the first session itself and helped me to navigate the path by my own self so that it can be sustained for lifetime'),
                                    array('image' => 'Prafulla','name' => 'Prafulla','short-description' => 'Mom of 5-year-old daughter and Restaurant owner in Mumbai','description' => 'I came to know about Swati and Kosh parenting initiative through one of my common friends when I had difficulty in settling down my 5-year-old on to her day today schedules during pandemic. It was such a transforming experience meeting her and talking to her. She made me comfortable in the first session itself and helped me to navigate the path by my own self so that it can be sustained for lifetime'),
                                    array('image' => 'Prafulla','name' => 'Prafulla','short-description' => 'Mom of 5-year-old daughter and Restaurant owner in Mumbai','description' => 'I came to know about Swati and Kosh parenting initiative through one of my common friends when I had difficulty in settling down my 5-year-old on to her day today schedules during pandemic. It was such a transforming experience meeting her and talking to her. She made me comfortable in the first session itself and helped me to navigate the path by my own self so that it can be sustained for lifetime')
                                ); 

        ?>    
        <!-- SLIDER DATA  -->

      

        <div class="col-12 text-center mt-5 mb-lg-0 mb-3 bg-white">
            <div class="h4 color-light mb-3">Testimonials</div>
        </div>
        <div class="col-lg-9 m-auto shadow-bg py-3"> 
            
            <div id="testimonials" class="col-lg-12 carousel slide p-0 col-lg-6 m-auto" data-ride="carousel">
                
                <ol class="carousel-indicators">
                <?php foreach ($testimonials as $key => $testimonial) { ?>
                    <li data-target="#testimonials" data-slide-to="<?php echo $key; ?>" class="<?php if($key == '0'){echo 'active';}?>"></li>
                <?php } ?>
                </ol>

                <div class="card carousel-inner">
                <?php foreach ($testimonials as $key => $testimonial) { ?>
                <div class="carousel-item <?php if($key == '0'){echo 'active';}?>">
                  <div class="d-flex">
                  <div class="col-lg-3 col-6 pt-2">
                      <img src="<?= FRONT_END_ASSETS ?>images/home/testimonial-1-150x150.png" class="img-responsive rounded-circle text-center col-lg-12 col-12 mx-4 m-0 p-0 pink_circle" alt="Testimonials">
                  </div> 
                  <div class="col-lg-9 col-6 pt-lg-5 pt-4 mx-4">
                      <p class="h3 text-left text-dark">
                        <?php echo $testimonial['name'];  ?>
                    </p>
                    <p class="h6 text-left text-dark pb-2">
                        <?php echo $testimonial['short-description'];  ?>
                    </p>
                  </div> 
                  </div> 
                  <div class="card-body py-0">
                    <p class="text-justify pt-3 text-dark">
                        <?php echo $testimonial['description'];  ?>
                    </p>
                  </div>
                </div>
                <?php } ?>
                </div>

                <!-- controls NEXT PREV -->
                <!--a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a-->
                <!-- controls -->
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->       




<hr class="mt-5 border-0" />


<!--div class="container">
    <div class="row">
        <div class="col-12 text-center m-0 p-0">
            <img class="m-auto" alt="" src="<?= FRONT_END_ASSETS ?>images/home/subscribe.png" />
        </div>
    </div>
</div-->



<div class="container p-0 bg-white">
<div class="row m-0">    
    <div class="col-12 d-lg-flex justify-content-center m-auto">
    <div class="col-lg-6 col-12 rounded my-4 position-relative shadow-bg float-left">
        <div class="col-lg-12 col-12 py-3 float-left">
            <div class="col-lg-4 col-5 float-left position-absolute fixed-bottom mb-2">
                <img class="img-responsive rounded-circle w-100 h-100 border border-primary" alt="" src="<?= FRONT_END_ASSETS ?>images/home/know_us_001.jpg" style="height: 150px;width: 150px;object-fit: cover;" />
            </div>
            <div class="col-lg-8 col-7 float-right mt-3 mb-3 text-left px-2">
                <span class="h5 text-dark text-uppercase">Stay In The Know</span>
            </div>
        </div>
        <div class="col-lg-12 col-12 m-auto mt-2 py-3 float-lg-none float-left">
            <form>
                <input class="col-7 rounded-right border-dark p-2" type="text" id="subscriber_email" name="subscribe" placeholder="Email Address" />
                <input class="col-4 rounded-left bg_purple p-2" type="button" id="subcsribe" name="subscribe" value="Subscribe" />
            </form>
        </div>
    </div> 
    </div>
</div> 
</div>

</section> 











<!-- Home Body Section
=================================