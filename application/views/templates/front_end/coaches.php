<section class="bg-white"> 
<div class="container bg-white">

    <div class="row d-block clearfix">
        <div class="col-12 mt-5 px-4">
            
            <h2 class="text-dark text-capitalize text-center">Meet Our Coaches</h2>
            <p class="text-justify text-dark">
                Our coaches understand and empathize with parents and their decades of experience of parental coaching helps them to serve better to join and guide the parents in their journeys of parenting. 
            </p>
        </div>
    </div>

    <hr class="mt-5 border-0"/>

    <?php 
            $coaches = array(
                                array(  'name' => 'Priya Dharod' ,
                                        'designation' => 'Founder',
                                        'description' => 'Human Resource Professional',    
                                        'experience' => '15 Years' ,
                                        'specialization' => array('Organization Development','Leadership Development'),
                                        'fees' => 'Rs. 6500 / 30 mins'),

                                array(  'name' => 'Swati Sinha' ,
                                        'designation' => 'Advisor',
                                        'description' => 'Conscious Parenting Coach',
                                        'experience' => '18+ Years' ,
                                        'specialization' => array('Certified Parenting Coach'),
                                        'fees' => 'Rs. 7500 / 30 mins'),
                               
                                array(  'name' => 'Jayanthi Bakshi' ,
                                        'designation' => 'Coach',
                                        'description' => 'Parenting Coach',
                                        'specialization' => array('Parenting Skills','Sexual Abuse','Marital Discord','Stress & Depression'),    
                                        'experience' => '15 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Karen Wagnon' ,
                                        'designation' => 'Coach',
                                        'description' => 'Human Behavior Consultant | Master Trainer',
                                        'specialization' => array('Certified Human Behavior Specialist','Author and Parent Coach'),    
                                        'experience' => '17 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Smruti Gopal' ,
                                        'designation' => 'Coach',
                                        'description' => 'Conscious Parenting Coach',
                                        'specialization' => array('Conscious Parenting Coach'),    
                                        'experience' => '12 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Jumana Lokhandwala' ,
                                        'designation' => 'Coach',
                                        'description' => 'Conscious Parenting Coach',
                                        'specialization' => array('Conscious Parenting Coach'),    
                                        'experience' => '21 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Andrea Markusich' ,
                                        'designation' => 'Coach',
                                        'description' => 'Conscious Parenting Coach',
                                        'specialization' => array('Conscious Parenting Coach'),    
                                        'experience' => '21 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Neha Karia Mody' ,
                                        'designation' => 'Coach',
                                        'description' => 'Counseling & Empowering People',
                                        'specialization' => array('Mental Health Counselor'),    
                                        'experience' => '14 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins'),
                               
                                array(  'name' => 'Nidhie Navander' ,
                                        'designation' => 'Coach',
                                        'description' => 'Rehabilitation Psychologist',
                                        'specialization' => array('Child Development','Rehabilitation Psychologist'),    
                                        'experience' => '15 Years' ,
                                        'fees' => 'Rs. 4500 / 30 mins')

                            );
    ?>
    <div class="row d-block clearfix">
        <div class="col-12 mx-0 mt-2">    
            <div class="float-left m-0 p-0">
            <!-- looping all coaches -->    
            <?php

                foreach ($coaches as $key => $coache) {
            ?>      
            <div class="col-lg-4 col-md-6 col-12 m-0 p-0 float-left">
            <div class="card m-2 p-0 shadow-bg mb-2">
                    <a class="text-center m-auto pt-2" href="<?= site_url('f/coachesprofile'); ?>?name=<?php echo str_replace(' ', '_', $coache['name']); ?>">
                        <img src="<?= FRONT_END_ASSETS ?>images/profile/<?php echo str_replace(' ', '-', $coache['name']); ?>.jpg" class="img-responsive rounded-circle text-center m-auto pt-0 pink_circle" alt="Testimonials" style="background: #000;width: 150px;height: 150px;">
                    </a>    
                    <p class="h4 pt-3 mb-0 pb-0 text-center">
                        <a class="text-dark text-capitalize" href="<?= site_url('f/coachesprofile'); ?>?name=<?php echo str_replace(' ', '_', $coache['name']); ?>">
                            <?php echo $coache['name']; ?>
                        </a>

                    </p>
                    <p class="p m-0 p-0 text-center text-dark mb-2 font-weight-bold">
                        <?php echo $coache['designation']; ?>
                    </p>
                    <div class="bg-light text-dark">
                        <p class="h6 m-0 p-3 text-center"><?php echo $coache['description']; ?></p>
                    </div>

                    <div class="row m-0 p-0 my-2 pl-3 text-dark">
                        <div class="col-4 mb-0 h6 p-0 text-left">Experience</div>
                        <div class="col-8 p text-left"><?php echo $coache['experience']; ?></div>
                    </div>

                    <div class="row m-0 p-0 my-2 pl-3 text-dark">
                        <div class="col-4 mb-0 h6 p-0 text-left">Specialization</div>
                        <div class="col-8 p text-left" style="min-height: 100px;">
                            <?php 
                                foreach($coache['specialization'] as $specialization){
                            ?>
                                <a href="#" class="bg-light px-1 py-0 m-1 text-dark">
                                    <?php echo $specialization; ?>
                                </a>             
                            <?php } ?>
                        </div>
                    </div>

                    <div class="d-flex d-flex justify-content-center  social-icons p-0 mx-3 mb-2 mt-2">
                        <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="mx-2 px-2 h5 text-dark" href="#!" role="button">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>

            </div>
            </div>
            <?php   }  ?>
            <!-- looping all coaches -->
            </div>
            
        </div>
    </div>
</div>
</section>