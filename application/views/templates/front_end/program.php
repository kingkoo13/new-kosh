<?php 

$queries = array();

$page_name = $this->input->get('name');
if($page_name){
    $program_name = str_replace("-"," ",$page_name);
}
else{
    echo "No Coach Selected";
}

$pg_url = "http://localhost/new-kosh/razorpay/";
$program_details = array(
                        'academics and performance' => array(   
                                                'name' => 'academics and performance' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'behaviour' => array(   
                                                'name' => 'behaviour' ,
                                                'description' => 'An in-depth understanding of the underlying issues of children\'s habit of lying, ways of tackling them & when must parents look for alarm signs.',
                                                'duration' => 'Duration: 30 Minutes' ,
                                                'session' => '1' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: INR 3,999',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>What we will cover:</b><br/>

                                                            - Does your child actually lie?<br/>
                                                            - How do you identify the underlying reasons of your - child lying & resolve it from its roots?<br/>
                                                            - When should you worry about your child lying? <br/>
                                                            - Why toddlers lie?<br/>
                                                            - Why grown-up children lie?<br/>
                                                            - and so much more.<br/>',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'conscious parenting' => array(   
                                                'name' => 'conscious parenting' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '7500'

                                             ),
                        'wow parenting' => array(   
                                                'name' => 'wow parenting' ,
                                                'description' => 'In this masterclass parents will learn how to communicate with their children right from the beginning, so that they raise an emotionally thriving child.',
                                                'duration' => 'Duration: 30 Minutes' ,
                                                'session' => '1' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: INR 3,999',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>What we will cover:</b><br/>

                                                            - Importance of empowering your child to express themselves.<br/>
                                                            - Practical guidelines to communicate efficaciously with your child.<br/>
                                                            - Managing your child\'s emotional needs <br/>
                                                            - Essential rules you must follow while communicating with their child. <br/>
                                                            - Common mistakes you might commit while communicating with your child.<br/>
                                                            - and so much more.<br/>'
                                                                ,
                                                'coach_name' => 'Jayanthi Bakshi',
                                                'total_fees' => '3999'

                                             ),
                        'screens and addiction' => array(   
                                                'name' => 'screens and addiction' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'discipline' => array(   
                                                'name' => 'discipline' ,
                                                'description' => 'A methodical & holistic approach to the entire concept of disciplining children; short-term & long-term guidance to disciplining them. Likely challenges parents could face and how must parents parctice "Alternatives to Punishments". 
 ',
                                                'duration' => 'Duration: 60 Minutes' ,
                                                'session' => '3 x 20 Minutes' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: INR 2,999 / Per Module',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>1st Module:</b><br/> 
                                                                What we will cover:<br/> 

                                                                - Concepts & meaning of discipline<br/>
                                                                - How various parenting styles affect the way you discipline your child?<br/>
                                                                - An ideal parenting style you could adopt. <br/>
                                                                - Unique psychological needs of your child.<br/>
                                                                - and so much more.<br/> <br/>

                                                                <b>2nd Module:</b> <br/> 
                                                                What we will cover:<br/>

                                                                - long-term strategies you could adopt to foster the spirit of discipline in your child. <br/>
                                                                - Age-specific short-term approaches you could adopt in your everyday life to discipline your child.<br/>
                                                                - and so much more.<br/><br/>

                                                              <b>3rd Module:</b> <br/>
                                                                What we will cover:<br/>

                                                                - Probable challenges you could face while trying to discipline your child.<br/>
                                                                - Punishments!<br/>
                                                                - If you ever need to punish your child, what must you resort to? An introduction to ‘Alternatives to punishment’.<br/>
                                                                - and so much more.<br/>'
                                                                ,
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'teenagers' => array(   
                                                'name' => 'teenagers' ,
                                                'description' => 'This masterclass will empower parents to parent their teens in a calmer & enjoyable way, as parents will understand the nuances of teenage parenting.',
                                                'duration' => 'Duration: 30 Minutes' ,
                                                'session' => '1' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: INR 3,999',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>What we will cover:</b><br/>

                                                                - Understanding teenagers & their behavioral pattern.<br/>
                                                                - Guidelines to have a smooth conversation with your teenagers.<br/>
                                                                - Ways to bond with your teenagers.<br/>
                                                                - How do you discipline your teenage?<br/>
                                                                - Help your teen to manage peer pressue & influence. <br/>
                                                                - Red flags you must always look out for! <br/>
                                                                - and so much more.<br/>'
                                                                ,
                                               'coach_name' => 'Jayanthi Bakshi',
                                               'total_fees' => '25000'

                                             ),
                        'body image' => array(   
                                                'name' => 'body image' ,
                                                'description' => 'Here parents will learn how they can ensure that their child endures a positive body image, so that the child grows up to be a confident person with high self-esteem.',
                                                'duration' => 'Duration: 20 Minutes' ,
                                                'session' => '1' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: INR 2,999',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>What we will cover:</b><br/>

                                                            - What is Body Image?<br/>
                                                            - Parents role in nurturing a healthy body image of their child.<br/>
                                                            - Role of society in building a neagtive body image of your child. <br/>
                                                            - and so much more.<br/>'
                                                                ,
                                                'coach_name' => 'Jayanthi Bakshi',
                                                'total_fees' => '25000'

                                             ),
                        'specific concern areas' => array(   
                                                'name' => 'specific concern areas' ,
                                                'description' => 'In this short video, parents will get an understanding on Child Sexual Abuse and how they can educate & empower their children to protect themselves from it.',
                                                'duration' => 'Duration: 10 Minutes' ,
                                                'session' => '1' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Fees: Free',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => '<b>What we will cover:</b><br/>

                                                            - What is Child Sexual Abuse?<br/>
                                                            - Satistical facts on Child Sexual Abuse.<br/>
                                                            - Who the abusers could be?<br/>
                                                            - Types of children who can be victimized.<br/>
                                                            - How to protect your child from an abuse?<br/>
                                                            - and so much more.<br/>'
                                                                ,
                                                'coach_name' => 'Jayanthi Bakshi',
                                                'total_fees' => '25000'

                                             ),
                        'thrive beyond trauma' => array(   
                                                'name' => 'thrive beyond trauma' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'stress anxiety and depression' => array(   
                                                'name' => 'stress anxiety and depression' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             ),
                        'nutrition and wellness' => array(   
                                                'name' => 'nutrition and wellness' ,
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self.',
                                                'duration' => '1-2 weeks' ,
                                                'session' => '3 x 20' ,
                                                'modules' => array('Organization Development','Leadership Development'),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'teaser' => 'https://koshglobal.in/wp-content/uploads/2021/07/WhatsApp-Video-2021-07-08-at-5.53.43-PM.mp4',
                                                'takeaway' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'coach_name' => 'Priya Dharod',
                                                'total_fees' => '25000'

                                             )
                        
                        );

    $program_detail = $program_details[$program_name];
    
?>

<section class="bg-white text-dark"> 
<div class="container bg-light">
    <div class="col-12 pt-3">
            <h2 id="pg_name" class="text-uppercase text-center mb-lg-2 mb-0"><?php echo $program_name; ?></h2>
    </div>
    <div class="row">
    <div class="col-12 m-auto m-0 pb-3 d-lg-flex justify-content-center pt-3 bg-light">
        
        <div class="col-lg-8 col-12 p-4 float-left">
            <div class="p-0 mb-lg-3 pb-lg-1 mb-3 m-3">
                <p id="pg_desc" class="p"><?php echo $program_detail['description']; ?></p>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-12 p text-left p-0 bold"><?php echo $program_detail['duration']; ?></div>
                </div>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-12 p text-left p-0 bold">
                        <?php echo 'No of Modules:'; ?>
                        <?php echo $program_detail['session']; ?></div>
                </div>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-12 p text-left p-0 bold"><?php echo $program_detail['fees']; ?></div>
                </div>
                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-12 p text-left p-0 bold">
                        <?php // echo 'Total Fees :'; ?>
                        <span id="pg_fees"><?php // echo $program_detail['total_fees']; ?></span>
                    </div>
                </div>
                <!-- Enroll Now button -->
                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-12 p text-left pt-2 p-0 bold">
                        <button id="enrollButton" type="button" class="btn btn-type1-reverse pulse animated go text-white" data-toggle="modal" data-target="#exampleModal">
                          Enroll now
                        </button>
                    </div>
                </div>
                <!-- Enroll Now button -->
            </div>

        </div>

        <div class="col-lg-4 col-12 p-0 float-left">
            <div class="col-6 img-responsive p-0 m-auto">
                <img class="img-thumbnail" src="<?= FRONT_END_ASSETS ?>images/profile/<?php echo str_replace(" ","-",$program_detail['coach_name']); ?>.jpg" / >
                <div class="col-12 h5 text-center py-2"><?php echo $program_detail['coach_name']; ?></div>
            </div>
        </div>
        
    </div> 
    </div> 

    <hr class="mt-5 border-0">
    <div class="d-lg-flex justify-content-center">
        <div class="col-lg-6 col-12 text-dark">
            <?php if($program_detail['teaser']): ?>
            <iframe class="col-12 m-0 p-0 border-0" width:100% height="329px" src="<?php echo $program_detail['teaser']; ?>" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; fullscreen;"></iframe>
            <?php endif; ?>
        </div>
    
        <div class="col-lg-6 col-12 text-dark p-3 pt-lg-0 ">
            <?php if($program_detail['takeaway']): ?>
                <div class="col-12 h3 text-center pt-lg-0 pb-3">Program Takeaway</div>
                <div class="p text-justify"><?php echo $program_detail['takeaway']; ?></div>
            </div>
            <?php endif; ?>
    </div>

</div>
</section>


<!-- <script type="text/javascript">
    $( document ).ready(function() {
    

    $('#enrollButton').click(function(){
        console.log( "ready!" );
        
        var data ={ 'pg_name':'<?= $program_detail['name']; ?>',
                    'pg_fees':'<?= $program_detail['fees']; ?>'
                    };
        console.log(data);            
        
       /* $.ajax
        ({ 
            url: '<?php echo base_url()?>/razorpay/pay.php',
            data: data,
            type: 'post',
            success: function(result)
            {
                console.log(result);
            }
        });*/
    });


    });
    

</script> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Enroll Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-dark"> 
            <div class="col-12">
                <div class="col-8 m-auto">
                    <p class="text-capitalize"> Program : <b><?= $program_name; ?></b></p>
                    <p class="text-capitalize"> Amount *: <b><?= $program_detail['total_fees']; ?> INR</b></p>
                </div>    
            </div>    
            <div class="col-6 m-auto">
                <form action="<?= base_url() ?>f/page/pay" method="POST">
                <input type="hidden" name="amount" value="<?php echo $program_detail['total_fees']; ?>" />
                <input type="hidden" name="name" value="<?php echo $program_detail['name']; ?>" />
                <input type="text" name="email" value="kingkoo13@gmail.com" />
                <input type="text" name="mobile" value="8512030346" />
                <button type="submit" class="col-12 btn btn-type1-reverse pulse animated go text-white">Continue</button>
                </form>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
