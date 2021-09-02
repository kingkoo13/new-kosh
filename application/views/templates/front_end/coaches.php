<section class="bg-white"> 
<div class="container bg-white">
    <div class="row">
    <div class="col-12 mx-0 mt-5">
        
        <p class="h1 text-dark text-capitalize">Meet Our Coaches</p>
        <p class="text-justify text-dark text-capitalize">
            Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting. 
        </p>
    
    <hr class="mt-5 border-0">
    <?php 
            $coaches = array(
                                array(  'name' => 'Swati Sinha' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'experience' => '18+ Years' ,
                                        'specialization' => array('Executice Coach','Leadersship','Marketing','Start up'),
                                        'fees' => 'Rs. 7500 / 30 mins'),

                                array(  'name' => 'Priya Dharod' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',    
                                        'experience' => '15 Years' ,
                                        'specialization' => array('Executice Coach','Leadersship','Marketing'),
                                        'fees' => 'Rs. 6500 / 30 mins'),
                               
                                array(  'name' => 'Jayanthi Bakshi' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '15 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins')/*,
                               
                                array(  'name' => 'Karen Wagnon' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '17 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Smruti Gopal' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '12 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Jumana Lokhandwala' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '21 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Andrea Markusich' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '21 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Neha Karia Mody' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '21 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Nidhie Navander' ,
                                        'description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                                        'specialization' => array('Executice Coach','Leadersship','Start up'),    
                                        'experience' => '15 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins')*/

                            );
    ?>
    <div class="d-flex align-content-start flex-wrap">
    <?php

        foreach ($coaches as $key => $coache) {
    ?>      

    <div class="order-<?php echo $key; ?> card m-1 col-lg p-0 float-left shadow-bg mb-4">
            <a class="text-center m-auto pt-2" href="<?= site_url('f/coachesprofile'); ?>?name=<?php echo str_replace(' ', '_', $coache['name']); ?>">
                <img src="<?= FRONT_END_ASSETS ?>images/profile/<?php echo str_replace(' ', '-', $coache['name']); ?>.jpg" class="img-responsive rounded-circle text-center m-auto pt-0 pink_circle" alt="Testimonials" style="background: #000;width: 150px;height: 150px;">
            </a>    
            <p class="h4 p-3 text-center">
                <a class="text-dark text-capitalize" href="<?= site_url('f/coachesprofile'); ?>?name=<?php echo str_replace(' ', '_', $coache['name']); ?>">
                    <?php echo $coache['name']; ?>
                </a>
            </p>
            <div class="bg-light text-dark">
                <p class="h6 p-3 text-justify"><?php echo $coache['description']; ?></p>
            </div>
            <table class="table table-borderless table-sm">
              <tbody>
                <tr>
                  <td scope="col">Experience</td>
                  <td scope="col"><?php echo $coache['experience']; ?></td>
                </tr>
                <tr>
                  <td>Specialization</td>
                  <td height="120px">
                    <?php 
                        foreach($coache['specialization'] as $specialization){
                    ?>
                        <span class="btn btn-light px-1 py-0 m-1">
                            <?php echo $specialization; ?>
                        </span>             
                    <?php } ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex d-flex justify-content-center  social-icons p-0 mx-3 mb-2">
                <a class="mx-2 px-2 h3 text-dark" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a class="mx-2 px-2 h3 text-dark" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="mx-2 px-2 h3 text-dark" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="mx-2 px-2 h3 text-dark" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-envelope"></i>
                </a>
            </div>

    </div>
    <?php   }  ?>
    </div>
    
            

    </div>
    </div>
</div>
</section>