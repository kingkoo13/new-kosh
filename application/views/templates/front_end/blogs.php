<div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <h1 class="text-center text-dark text-capitalize"><?php echo basename($_SERVER['REQUEST_URI']); ?></h1>   
        </div>

    </div>
</div>
<div class="mx-auto">
    <img width="100%" height="400px" style="object-fit: cover;" class="img-responsive" src="<?= FRONT_END_ASSETS ?>images/blogs/blog_head.jpg" alt="" />
</div>

<section class="bg-white"> 
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 mx-0 mt-5">

                <p class="h2 text-dark text-capitalize">Meet Our Coaches</p>
                <p class="text-justify text-dark">
                    Our Coaches understand and empathize with Parents and their decades of experience of Parental Coaching helps them to serve better to join and guide the Parents in their journeys of Parenting. 
                </p>

                <hr class="mt-5 border-0">
                <?php 
                $blogs = array(
                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'We almost always assume that a child’s natural state is to be uncooperative and difficult and to get away with as much mischief and trouble as...',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'Teach Your Child To Apologize (Peacefully)',
                        'date' => 'Aug 24,2021',
                        'blog' => 'When we try to make our child apologize, we have to ask ourselves why and what they learn from that.  Of course we want the wronged person to feel...',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/07/Copy-of-Untitled-Design-1-400x250.png'),

                    array(  'name' => 'The Train Wreck That Might Be Your Kids Right Now',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Are you struggling with the kids more than usual lately?  Maybe when you go to wake your kiddo up for school they announce, “It’s not very sunny...',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/05/Picture2-400x250.jpg'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Conscious Parenting Coach',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Are you struggling with the kids more than usual lately?  Maybe when you go to wake your kiddo up for school they announce, “It’s not very sunny...',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Conscious Parenting Coach',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Conscious Parenting Coach',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Conscious Parenting Coach',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png'),

                    array(  'name' => 'They are Doing The Best They Can',
                        'date' => 'Aug 24,2021',
                        'blog' => 'Conscious Parenting Coach',
                        'experience' => '18+ Years' ,
                        'image' => 'https://www.sarahrosensweet.com/wp-content/uploads/2021/08/Theyre-Doing-The-Best-They-Can-3-400x250.png')

                );
                ?>
                <div class="col-12 float-left m-0 p-0">
                    <?php
                    foreach ($blogs as $key => $blog) {

                        ?>      
                        <div class="col-lg-4 col-12 m-0 p-0  float-left">
                            <div class="card m-4 p-0 float-left shadow-bg mb-2 rounded">
                                <a class="text-center m-0 p-0" href="<?php echo base_url()."blog?".str_replace(' ', '-', strtolower($blog['name'])); ?>">
                                    <img src="<?php echo $blog['image']; ?>" class="img-responsive text-center m-auto pt-0" alt="Testimonials" style="background: #000; width: 100%;height: 200px;">
                                </a>    
                                <p class="h6 pt-3 mb-2 px-3 text-left" style="min-height: 60px;">
                                    <a class="text-dark text-capitalize" href="<?php echo base_url()."blog?".str_replace(' ', '-', strtolower($blog['name'])); ?>">
                                        <?php echo $blog['name']; ?>
                                    </a>

                                </p>
                                <p class="p m-0 px-3 text-left text-dark mb-2">
                                    <?php echo $blog['date']; ?>
                                </p>

                                <div class="bg-light text-dark" style="min-height: 160px;">
                                    <p class="p m-0 p-3 text-left"><?php echo $blog['blog']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php   }  ?>
                </div>

            </div>
        </div>
    </div>
</section>   