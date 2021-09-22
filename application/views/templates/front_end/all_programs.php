<?php
        $programs = array(  
                            array(
                                    "name" => "conscious-parenting", 
                                    "display_name" => "conscious-parenting", 
                                    "description" => "Parenting and Relationship connection begins by being your own authentic self. Conscious Parenting will teach you how to uncover the masks we have been wearing and breaking the patterns to evolve a great bonding with our children",
                                    "coach_name" => "Swati Sinha", 
                                    "fees" => "1500"
                            ),
                            array(
                                    "name" => "wow-parenting", 
                                    "display_name" => "wow-parenting", 
                                    "description" => "Wow Parenting is about creating a step by step manual to developing a child who is empowered to create his own path for future. A child who is capable to deal with challanging situation. As parents we all are our children's wellwishers but unknowingly we damage them in many ways. Learn with us in various Masterclases the secrets of parenting which will give you many wow moments.",
                                    "coach_name" => "Jayanthi Bakshi", 
                                    "fees" => "3999"
                                ),
                            array(
                                    "name" => "screens-and-addiction", 
                                    "display_name" => "screens-&-addiction", 
                                    "description" => "Screens and social media are incredibly addictive...but why? You don’t need to inject something in your body to be addicted. The idea is to find the right balance, and always be in control of the what, when, where and how much. Kosh shares practical steps for managing the rise of social media and screen addiction in our kids’ lives. ",
                                    "coach_name" => "Jayanthi Bakshi", 
                                    "fees" => "1500"
                            ),
                            array(
                                    "name" => "discipline", 
                                    "display_name" => "discipline", 
                                    "description" => "Say goodbye to all the punishment methods, enter into the realm of learning how to consciously discipline your child. Discover the process of helping your child learn self-regulation & self-control.",
                                    "coach_name" => "Priya Dharod", 
                                    "fees" => "2999"
                                ),
                            array(
                                    "name" => "teenagers", 
                                    "display_name" => "teenagers", 
                                    "description" => "Teenagers have their own way and its hard to parent them Young children and teenagers have very different needs. Understanding these needs and putting yourself in the shoes of being their coach is the Key. But what does it take to step down from the role of primary decision maker to a friend guide and coach who this teenager can trust? We at Kosh take you through a whole new step by step approach in handling your teenager and supporting them in getting a direction in their life.",
                                    "coach_name" => "Jayanthi Bakshi", 
                                    "fees" => "3999"
                                ),
                            array(
                                    "name" => "academics-and-performance", 
                                    "display_name" => "academics-&-performance", 
                                    "description" => "A child’s academic performance is a key deciding parameter in our society for our child’s success. While we at Kosh believe every child is unique and we don’t believe in benchmarking, but we guide you how to be involved and support your children to boost their academic performance.",
                                    "coach_name" => "Swati Sinha", 
                                    "fees" => "1500"
                             ),
                            array(
                                    "name" => "behaviour",
                                    "display_name" => "behaviour",
                                    "description" => "Learn the underlying reasons why children behave in a particular way. Explore various parenting approaches to deep dive into your children’s specific behaviours and help them navigate smoothly through it.",
                                    "coach_name" => "Priya Dharod",
                                    "fees" => "3999"
                             ),
                            array(
                                    "name" => "body-image", 
                                    "display_name" => "body-image", 
                                    "description" => "Body image is the way you feel about your body. Body image is a big part of your child's self-esteem. Say adios to body image issues and make your growing up child a confident one.",
                                    "coach_name" => "Jayanthi Bakshi", 
                                    "fees" => "2999"
                                ),
                            array(
                                    "name" => "specific-concern-areas", 
                                    "display_name" => "specific-concern-areas", 
                                    "description" => "Looking for support which doesn’t appear in any of these classifications, be it sibling relationship, gender diversity, sexual abuse faced by children, safety for your girls, or very specific concern like bed wetting. We can help you navigate your path in co-parenting/single parenting challenges too. We at Kosh understand addressing these concerns in an appropriate manner will surely help you bond better with your children.",
                                    "coach_name" => "Jayanthi Bakshi", 
                                    "fees" => "0"
                            ),                         
                            array(
                                    "name" => "thrive-beyond-trauma", 
                                    "display_name" => "thrive-beyond-trauma", 
                                    "description" => "Trauma during childhood not only affects children's behavior, but also their ability to learn, cope with stress, and form healthy, positive relationships with others. If traumatic experiences are ignored and left unaddressed or when trauma-sensitive care is lacking, children retain poor coping strategies that can negatively impact their long-term mental, physical, and emotional health. We at Kosh support, educate, and help parents and care givers to communicate with kids who have experienced childhood trauma by forming strong relationships and helping them build the skills they need to navigate life.",
                                    "coach_name" => "Swati Sinha", 
                                    "fees" => "1500"
                            ),
                            array(
                                    "name" => "stress-anxiety-and-depression", 
                                    "display_name" => "stress-anxiety-&-depression", 
                                    "description" => "Being sad or worried occasionally is normal in children. But if they don’t outgrow their fears, it translates to anxiety and constant hopeless or helpless thoughts might result in depression. Let’s learn how being connected to your child can help them to handle their toughest situation in most positive way.",
                                    "coach_name" => "Swati Sinha",
                                    "fees" => "1500"
                                ),
                            array(
                                    "name" => "nutrition-and-wellness", 
                                    "display_name" => "nutrition-&-wellness", 
                                    "description" => "Feeding our children has been an integral part of nurturing in parenting. Even sometimes in traditional parenting this has been a cause of conflict between parents and kids. Here we guide you how to help you kids to choose what’s best for their body and being conscious in their choices when it comes to mental & physical wellness. ",
                                    "coach_name" => "Swati Sinha", 
                                    "fees" => "1500"
                                )   

                        ); 
?>

<div class="container text-dark">
    <div class="row align-items-start">
    <div class="col-12 my-3">
        <h1 class="text-center text-dark text-capitalize"><?php echo str_replace("-", " ", basename($_SERVER['REQUEST_URI'])); ?></h1>   
    </div>
    </div>
    
    <div class="row">
        <div class="container">
            <div class="row">
            <div class="col-12 m-auto m-0 p-0">
                <?php foreach($programs as $key => $program){  ?>
                    <div class="col-lg-4 col-md-6 col-12 float-left p-3">
                        <div class="col-12 p-0 float-left shadow-bg m-0 pb-4 rounded text-center">
                            <a href="<?= site_url('program'); ?>?name=<?php echo str_replace(' ', '-', $program['name']); ?>">
                                <img class="shadow-bg col-12 m-0 p-0" style="object-fit: cover;" width="auto" height="175px" src="<?= FRONT_END_ASSETS ?>/images/programs/<?php echo str_replace(' ', '-', $program['name']); ?>.png " />
                            </a>
                            <div class="my-3 text-capitalize px-1">
                                <a class="h5" href="<?= site_url('program'); ?>?name=<?php echo str_replace(' ', '-', $program['name']); ?>">
                                    <?php echo str_replace("-", " ", $program['display_name']); ?>
                                </a>    
                            </div>
                            <div class="p my-3 text-capitalize px-1" style="min-height: 90px;">
                                <?php echo str_replace("-", " ", substr($program['description'],0,100))."..."; ?>
                            </div>
                            <div class="col-12 p-0 m-0">
                                <div class="col-6 pull-left text-left">
                                    <a href="<?= site_url('f/coachesprofile'); ?>?name=<?php echo str_replace(' ', '_', $program['coach_name']); ?>">
                                        <?php echo str_replace("-", " ", $program['coach_name']); ?>
                                    </a>
                                </div>
                                <div class="col-6 pull-left text-right">
                                    <?php echo "INR ", number_format($program['fees'], 0, ".", ","); ?>
                                </div>
                            </div>    
                        </div>
                    </div>
                <?php } ?> 
            </div>  
            </div>
        </div>    
    </div>
</div>