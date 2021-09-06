<?php 

$queries = array();
if($_SERVER['QUERY_STRING']){
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $coach_name = str_replace("_"," ",$queries['name']);
}
else{
    echo "No Coach Selected";
}


$coache_profiles = array(
                        'Swati Sinha' => array(   
                                                'name' => 'Swati Sinha' ,
                                                'short-description' => 'Co-Founder',
                                                'experience' => '18+ Years' ,
                                                'specialization' => array('Certified Parenting Coach'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Swati\'s journey of raising a 12 year-old has given her innumerable challenging yet pleasurable experiences & Insights which is a cornerstone of her embarking on this journey of being a conscious parenting Coach.',
                                                'education' => '• The Conscious Parenting Institute, Cohort 4, CPMCP program, created by Dr. Shefali Tsabary, acclaimed author, international speaker, doctorate in clinical psychologist and wisdom teacher.<br/>
                                                    • Master’s in business administration, PSG Institute of Management with specialization in International Business',
                                                'detailed_experience' => '• Her personal experience of parenting her 12 YO coupled with certification in CPMCP Program, Cohort 4, The Conscious Parenting Institute by Dr. Shefali Tsabary, has been her guiding force, which has helped her bring out meaningful impacts on Families and Children alike, which are testimonials to her being a guiding force in this domain.<br/>
                                                    • Swati, is also an MBA in International Business, and has had a distinguished professional career of 18+ years, heading Supply Chain and Logistics across Global Organizations in Leadership Roles.'
                                             ),
                        'Priya Dharod' => array(   
                                                'name' => 'Swati Sinha' ,
                                                'short-description' => 'Co-Founder',
                                                'experience' => '18+ Years' ,
                                                'specialization' => array('Executice Coach','Leadersship',
                                                                        'Marketing','Start up'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Swati\'s journey of raising a 12 year-old has given her innumerable challenging yet pleasurable experiences & Insights which is a cornerstone of her embarking on this journey of being a conscious parenting Coach.',
                                                'education' => '• The Conscious Parenting Institute, Cohort 4, CPMCP program, created by Dr. Shefali Tsabary, acclaimed author, international speaker, doctorate in clinical psychologist and wisdom teacher.<br/>
                                                    • Master’s in business administration, PSG Institute of Management with specialization in International Business',
                                                'detailed_experience' => 'Her personal experience of parenting her 12 YO coupled with certification in CPMCP Program, Cohort 4, The Conscious Parenting Institute by Dr. Shefali Tsabary, has been her guiding force, which has helped her bring out meaningful impacts on Families and Children alike, which are testimonials to her being a guiding force in this domain.<br/>Swati, is also an MBA in International Business, and has had a distinguished professional career of 18+ years, heading Supply Chain and Logistics across Global Organizations in Leadership Roles.'
                                             ),
                        'Jayanthi Bakshi' => array(   
                                                'name' => 'Swati Sinha' ,
                                                'short-description' => 'Coach',
                                                'experience' => '18+ Years' ,
                                                'specialization' => array('Executice Coach','Leadersship',
                                                                        'Marketing','Start up'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Swati\'s journey of raising a 12 year-old has given her innumerable challenging yet pleasurable experiences & Insights which is a cornerstone of her embarking on this journey of being a conscious parenting Coach.',
                                                'education' => '• The Conscious Parenting Institute, Cohort 4, CPMCP program, created by Dr. Shefali Tsabary, acclaimed author, international speaker, doctorate in clinical psychologist and wisdom teacher.<br/>
                                                    • Master’s in business administration, PSG Institute of Management with specialization in International Business',
                                                'detailed_experience' => 'Her personal experience of parenting her 12 YO coupled with certification in CPMCP Program, Cohort 4, The Conscious Parenting Institute by Dr. Shefali Tsabary, has been her guiding force, which has helped her bring out meaningful impacts on Families and Children alike, which are testimonials to her being a guiding force in this domain.<br/>Swati, is also an MBA in International Business, and has had a distinguished professional career of 18+ years, heading Supply Chain and Logistics across Global Organizations in Leadership Roles.'
                                             )

                    );

    $coache_profile = $coache_profiles[$coach_name];
    
?>

<section class="bg-white"> 
<div class="container bg-white">
    <div class="row">
    <div class="col-12 m-0 pb-5 d-lg-flex pt-3">
        <div class="col-lg-6 col-12 p-0">
            <div class="col-12 img-responsive p-0">
                <img class="img-thumbnail" src="<?= FRONT_END_ASSETS ?>images/profile/<?php echo str_replace("_","-",$queries['name']); ?>.jpg" / >
            </div>
        </div>

        <div class="col-lg-6 col-12 bg-light p-4 float-left">
            <div class="p-0 mb-lg-5 pb-lg-5 mb-3 m-3">
                <p class="h2"><?php echo $coach_name; ?></p>
                <p class="p font-weight-bold"><?php echo $coache_profile['short-description']; ?></p>

                <div class="row m-0 p-0 my-3 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Experience</div>
                    <div class="col-8 p text-left p-0"><?php echo $coache_profile['experience']; ?></div>
                </div>

                <div class="row m-0 p-0 my-3 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Specialization</div>
                    <div class="col-8 p text-left">
                        <?php 
                            foreach($coache_profile['specialization'] as $specialization){
                        ?>
                            <a href="#" class="bg-light pr-1 mr-1 py-0 text-dark">
                                <?php echo $specialization; ?>
                            </a>              
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-0 p-0 my-3 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Fee</div>
                    <div class="col-8 p text-left"><?php echo $coache_profile['fees']; ?></div>
                </div>

                <div class="row m-0 p-0 my-3 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Language</div>
                    <div class="col-8 p text-left"><?php echo $coache_profile['language']; ?></div>
                </div>
            </div>

            <div class="col-12 p-0 m-0 float-left">

                <div class="col-lg-12 col-12 p-0 mt-4 mb-4 py-2 text-center">
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-video-camera"></i>
                    </a>
                </div>
                
                <div class="col-lg-10 col-md-12 col-12 m-auto d-flex p-0 py-2">
                    <div class="btn-group d-flex flex-lg-row flex-md-row flex-column m-auto" role="group">
                    <button type="button" class="btn btn-type1-reverse pulse animated go" 
                    style="min-width: 200px;">Check Availibility</button>
                    <button type="button" class="btn btn-type1-reverse pulse animated go" 
                    style="min-width: 200px;">Book Now</button>
                </div>
                </div>
            </div>
        </div>
        
    </div> 
    </div> 

    <hr class="mt-5 border-0">
    <div class="row">
        <div class="col-12 text-dark">
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Description</div>
                <div class="p"><?php echo $coache_profile['description']; ?></div>
            </div>
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Education</div>
                <div class="p"><?php echo $coache_profile['education']; ?></div>
            </div>
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Experience</div>
                <div class="p"><?php echo $coache_profile['detailed_experience']; ?></div>
            </div>
        </div>
    </div>

</div>
</section>