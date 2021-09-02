<?php 

$queries = array();
if($_SERVER['QUERY_STRING']){
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $coach_name = str_replace("_"," ",$queries['name']);
}
else{
    echo "No Coach Selected";
}


 
$coache_profile = array(   
                        'name' => 'Yateesh Srivastav' ,
                        'short-description' => 'Digital Evangelist | Brand Straigist | Problem Solver',
                        'experience' => '21 Yrs' ,
                        'specialization' => array('Executice Coach','Leadersship',
                                                'Marketing','Start up'
                                            ),
                        'fees' => 'Rs. 7500 / 30 mins',
                        'language' => 'English, Hindi',
                        'description' => 'Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting.',
                        'education' => 'Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting.',
                        'experience' => 'Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting.'
                     );
    
?>

<section class="bg-white"> 
<div class="container bg-white">
    <div class="row">
    <div class="col-12 mx-0 mt-5">
        
        <p class="h1">Profile</p>
        <p class="text-justify">
            Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting. 
        </p>
    
    <hr class="mt-5 border-0">

    <div class="co-12 m-0 pb-5 d-lg-flex">
        <div class="col-lg-6 col-12 p-0">
            <div class="col-12 img-responsive">
                <img class="img-thumbnail" src="<?= FRONT_END_ASSETS ?>images/profile/<?php echo str_replace("_","-",$queries['name']); ?>.jpg" / >
            </div>
            <!--div class="col-12 social-icons">
                <a class="px-2 h5" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a class="px-2 h5" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="px-2 h5" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="px-2 h5" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="px-2 h5" style="background-color: #eee;" href="#!" role="button">
                    <i class="fa fa-youtube"></i>
                </a>
            </div-->
        </div>
        <div class="col-lg-6 col-12 bg-light p-4">
            <div class="p-0">
            <p class="h2"><?php echo $coach_name; ?></p>
            <p class="p"><?php echo $coache_profile['short-description']; ?></p>
            <table class="table table-borderless table-sm">
              <tbody>
                <tr>
                  <td class="h6 text-dark border-0" scope="col">Experience</td>
                  <td class="border-0" scope="col"><?php echo $coache_profile['experience']; ?></td>
                </tr>
                <tr>
                  <td class="h6 text-dark border-0">Specialization</td>
                  <td class="border-0" min-height="120px">
                    <?php 
                        foreach($coache_profile['specialization'] as $specialization){
                    ?>
                        <span class="btn btn-secondary px-1 py-0 m-1">
                            <?php echo $specialization; ?>
                        </span>             
                    <?php } ?>
                  </td>
                    </tr>
                <tr>
                  <td class="h6 text-dark border-0">Fee</td>
                  <td class="border-0"><?php  echo $coache_profile['fees']; ?></td>
                </tr>
                <tr>
                  <td class="h6 text-dark border-0">Language</td>
                  <td class="border-0"><?php  echo $coache_profile['language']; ?></td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="col-12 p-0 m-0 mt-5">
                <div class="col-lg-6 col-12 p-0 float-left py-2">
                    <a class="px-2 h3" style="background-color: #eee;" href="#!" role="button">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a class="px-2 h3" style="background-color: #eee;" href="#!" role="button">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="px-2 h3" style="background-color: #eee;" href="#!" role="button">
                        <i class="fa fa-phone"></i>
                    </a>
                    <a class="px-2 h3" style="background-color: #eee;" href="#!" role="button">
                        <i class="fa fa-video-camera"></i>
                    </a>
                </div>
                <div class="col-lg-6 col-12 float-left d-flex p-0 py-2">
                    <button type="button" class="btn btn-success mx-1">Check Availibility</button>
                    <button type="button" class="btn btn-danger">Book Now</button>
                </div>
            </div>
        </div>
        
    </div> 

    <hr class="mt-5 border-0">

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
            <div class="p"><?php echo $coache_profile['experience']; ?></div>
        </div>
    </div>



    
    
            

    </div>
    </div>
</div>
</section>