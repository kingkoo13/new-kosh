<div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <h1 class="text-center text-dark text-capitalize"><?php echo basename($_SERVER['REQUEST_URI']); ?></h1>   
        </div>

    </div>
</div>
<div class="mx-auto">
    <img src="<?= FRONT_END_ASSETS ?>images/blogs-banner.jpg" class="d-lg-block d-md-block d-none img-fluid" alt="..."/>
    <img src="<?= FRONT_END_ASSETS ?>images/blogs-banner.jpg" class="d-lg-none d-md-none d-block img-fluid" alt="...">
</div>

<section class="bg-white"> 
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 mx-0 mt-5">

                <hr class="mt-5 border-0">
                <?php


                // echo "<pre>";var_dump($wp_users);   
                //echo "<pre>";print_r(expression)$blog_data[4];   
                //$post_status = $blog_data[0]->post_status;

                 //echo $wp_users[0]->ID;
                /*global $wp_user;
                function getUser($userId){

                 foreach($wp_users as $key02 => $wp_user){
                    $User_data[$wp_user->ID] = $wp_user->display_name;
                    return $User_data;
                 }   
                }*/
                 
                /*wp blog filtering only image from content*/

                function catch_that_image($post_content) {
                  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
                  $first_img = $matches [1] [0];

                  if(empty($first_img)){ //Defines a default image
                    $first_img = "/images/default.jpg";
                  }
                  return $first_img;
                }

                /*wp blog filtering first paragraph*/
                function wp_first_paragraph($content) {
                    $first_paragraph_str = $content;
                    $first_paragraph_str = substr($first_paragraph_str, 0, strpos($first_paragraph_str, '</p>') + 4);
                    $first_paragraph_str = strip_tags($first_paragraph_str, '<a><strong><em>');
                    return '<p>' . $first_paragraph_str . '</p>';
                }



                  
                
                foreach($blog_data as $key1 => $blog){
                    if($blog->post_status == 'publish' && $blog->post_type == 'post')
                    {
                        
                        $blogs[] = array('name' => $blog->post_title ,
                            'date' => date("Y-m-d", strtotime($blog->post_date)),
                            'blog' => wp_first_paragraph($blog->post_content),
                            'post_author' => $blog->post_author,
                            'image' => catch_that_image($blog->post_content)
                        );    
                    }
                    
                }

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
                                <div class="d-flex justify-content-between">
                                    <div class="p-2"><?php echo $blog['date']; ?></div>
                                    <div class="p-2"><?php // echo $blog['post_author']; ?></div>
                                </div>
                                
                                <div class="bg-light text-dark px-2" style="min-height: 150px;">
                                    <style>
                                        figure.wp-block-image {display: none;}
                                    </style>
                                    <p class="p m-0 text-left"><?php  echo substr($blog['blog'],0 ,150)." ..."; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php   }  ?>
                </div>

            </div>
        </div>
    </div>
</section>   