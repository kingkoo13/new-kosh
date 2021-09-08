<?php 


$blog = array( 'name' => 'They are Doing The Best They Can',
    'date' => 'Aug 24,2021',
    'short_description' => 'Peaceful parenting, Peaceful Parenting Mantras',
    'blog' => 'We almost always assume that a child’s natural state is to be uncooperative and difficult and to get away with as much mischief and trouble as possible.<br/>

    Guess what? They’re doing the best they can. These 6 six words will change everything.<br/>

    Children want to be good. We are hard-wired to seek out connection with a caregiver. That is how we kept ourselves safe from the tigers! Harmony and connection with each other is our natural state.<br/><br/>

    If children aren’t being good, it’s because they can’t manage to be good in that moment.
    If we can remember in those difficult moments, “They’re doing the best they can,” everything
    changes. We can respond with the patience and compassion we need to solve whatever problem is at hand.<br/>

    When we tell ourselves “They’re doing the best they can.”<br/>

    (for a free download of the They’re Doing the Best They Can colouring page above, click here)<br/><br/>

    <b>We will be able to stay calm.</b> We lose our tempers because we get caught up in the space between the “shoulds” (they should be able to get dressed!) and what is actually happening (they are not getting dressed.) If we believe that they are doing this on purpose to make our lives difficult- another example of how they just won’t listen!- we will have zero patience with our child and we will lose it! Yelling erodes our relationship with our child and makes us feel terrible.<br/><br/>

    <b>We will be better at problem solving.</b> If we assume that they would do better if they could, we can be more empathetic. When we are empathetic and can see things from our child’s point of view, we can get curious about a child who is struggling. Why can’t they get dressed? Perhaps getting dressed is one more step toward the door, school and away from you. A hug, a snuggle, some attention (dress them like a baby!) could be the solution. Perhaps they had a bad night sleep and are having trouble staying focused. A visit from the silly Mrs. Drill Sergeant could get them back on track. Your compassion helps you give them the support they need to do the right thing.<br/><br/>

    <b>We will increase good-will in our families.</b> When we get in the habit of assuming our child is doing the best they can, we see everything in a more positive light. Positivity grows. We will look for the message behind the bad behaviour. If we assume our child wants to be good,
    and they aren’t managing, we see use it as a message to us. A parent I know told me she reminds
    herself, “Misbehaviour is a mystery.” What support does our child need to meet our expectations?
    What is our child’s behaviour telling us if they want to be good but can’t manage? How can we
    support them? The behaviour is a message, not a problem.<br/><br/>

    And the added bonus? This shift in attitude grows to affect everything in our lives.

    I feel better every day when I see those around me as doing the best they can. The positivity is reflected back. What seems like a selfless idea is in fact the best thing you can do to make yourself happier and make your life easier.<br/><br/>

    (for a free download of the They’re Doing the Best They Can colouring page above click here)<br/><br/>

    This post is one of the lessons from my Peaceful Parenting Mantras colouring book. Colour your own reminder to They’re Doing the Best They Can. You can learn more about it here.<br/>',
    'image' => 'http://localhost/new-kosh/assets/front_end/images/blogs/Theyre-Doing-The-Best-They-Can-3-980x812.jpg',
    'recent_posts' => array('Teach Your Child To Apologize (Peacefully)','The Train Wreck That Might Be Your Kids Right Now','They are Doing The Best They Can')
);
?>

<div class="container text-dark ">
    <div class="row">
        <div class="col-lg-9 col-12 float-left border-top">    
            <div class="col-12 mt-5 mb-3">
                <h1 class="h3 text-left text-dark text-capitalize">
                    <?php echo str_replace("-", " ", basename($_SERVER['QUERY_STRING']));; ?>
                </h1>
                <p class="m-0"><?php echo $blog['short_description']; ?></p>   
            </div>

            <div class="col-12">
                <img width="100%" style="object-fit: cover;" class="img-responsive" src="<?php echo $blog['image'];?>" alt="" />
            </div>
            <div class="col-12">
                <div class="p-0">

                </div>
            </div>    
        </div>

        <div class="d-lg-block d-none col-3 float-left float-left border-left border-top p-4">
            <div class="h5 mt-5">Search</div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="search">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Search</span>
            </div>
        </div>
        <div class="col-12 p-0 m-0 my-3">
            <p class="b">Recent Posts</p>
            <?php foreach($blog['recent_posts'] as $key => $recent_posts){ ?>
                <a  class="h6 py-1 d-block text-dark" 
                href="<?php echo base_url()."blog?".str_replace(' ', '-', strtolower($recent_posts)); ?>">
                <?php echo $recent_posts; ?>
            </a></br>
        <?php } ?>
    </div>    
</div>    
</div>
<div class="row">
    <div class="col-lg-9 col-12">
        <div class="p p-3">
            <?php echo $blog['blog']; ?>
        </div>
    </div>
</div>
</div>