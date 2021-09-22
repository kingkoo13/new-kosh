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
                        'Priya Dharod' => array(   
                                                'name' => 'Priya Dharod' ,
                                                'short-description' => 'Founder',
                                                'experience' => '15 Years' ,
                                                'specialization' => array('Organization Development','Leadership Development'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Priya is a people\'s person, an ardent nature-lover and a spiritual enthusiast, who strongly believes in the inward journey of self. Honesty, passion and an indefeasible spirit are some of the attributes that define her. Priya is a mom to 2 lovely boys, a 14-year-old teenager and a 10-year-old. Her journey of raising kids juggling between work & home was challenging yet full of learnings! Everyday parenting experiences are full of fun, surprises, ups & downs, cries & laughter, togetherness and the journey continues!',
                                                'education' => 'Certification in Counseling & Psychology.<br/>
                                                    Post-graduation Diploma in Business Administration (PGDBA) specialization in Human Resource Management, Mumbai.<br/>
                                                    Masters in Commerce (M Com), Mumbai University.',
                                                'detailed_experience' => 'Priya is a Human Resource professional, has had a distinguished professional career of 15 years, in various multinational companies in Organization Development & Leadership Development roles; creating a happy workplace for the employees. Love for people and helping them discover their passion & enabling them in reaching their highest potential has always been her innermost driving force.<br/>Priya has authored the book \'Mind Your Emotions\', released in August 2020. She has uniquely presented the wide-spread concept on HAPPINESS in a simple yet impactful manner! It talks about life\'s journey towards self-improvement and an everlasting happiness.'
                                             ),
                        'Swati Sinha' => array(   
                                                'name' => 'Swati Sinha' ,
                                                'short-description' => 'Advisor & Certified Coach',
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
                        'Jayanthi Bakshi' => array(   
                                                'name' => 'Jayanthi Bakshi' ,
                                                'short-description' => 'Coach',
                                                'experience' => '15 Years' ,
                                                'specialization' => array('Parenting Skills','Sexual Abuse',
                                                                        'Marital Discord','Stress & Depression'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Jayanthi is a full-of-life person, who pursues her earnest passions of trekking, travelling, reading & above all learning. Daughter of a Defence Officer, has extensively travelled across the globe and possess deep understanding of human nature, cross cultural competencies and excellent communication skills. While bringing up her two diametrically opposite daughters, she realised parenting as a subject must be learned by all parents.',
                                                'education' => 'Jayanthi is a Qualified Psychology graduate with Diploma in Counselling Psychology, Diploma in integrated approach to counseling, Sex educator.<br/>
                                                    Her intense interest in human behaviour got her into being a parenting coach as a passion.',
                                                'detailed_experience' => 'She has been associated with corporates and schools and conducts workshop that aim to enrich a parent-child bond.<br/>Jayanthi has been doing personal counselling with parents across India for the past 15 years, using Talk Therapy on issues like Parenting Skills, Sexual Abuse, Marital Discord, Stress, Depression etc. She has been associated with corporates on her passion topics especially for women leaders; Work-Life balance, Empowering Women, Relationship Management. She conducts workshops at schools for both parents & children with an aim to enrich parent-child bond.'
                                             ),
                         'Karen Wagnon' => array(   
                                                'name' => 'Karen Wagnon' ,
                                                'short-description' => 'Coach',
                                                'experience' => '17 Years' ,
                                                'specialization' => array('Certified Human Behavior Specialist','Author and Parent Coach'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Founder Teaching Our Youth. Karen\'s first book, "My Three and Me, A Journey in Parenting by Design", clearly defines and explains the four personality types in the DISC Model of Human Behavior. This useful guide for parents and educators that will provide anyone who works with children the necessary tools to identify common traits and apply skills to achieve positive results when working with youth. Karen\'s parenting program, The Parenting Blueprint, A Plan to Parent by Design, takes parents on a journey to transform their parenting from chaos to confidence. Using the understanding of personalities as the foundation of The Parenting Blueprint, this self paced 6 week course includes 3 months coaching to ensure the successful transformation of your parenting style!',
                                                'education' => '',
                                                'detailed_experience' => 'As a Certified Human Behavior Consultant and Master Trainer through the Insights Institute in Atlanta, GA, Karen Wagnon founded Teaching Our Youth, a staff and professional  development group, in 2004. Her motivation and drive is to empower and equip educators and parents with the tools to improve communication, increase productivity, and reduce stress and conflict in our relationships.'
                                             ),
                          'Smruti Gopal' => array(   
                                                'name' => 'Smruti Gopal' ,
                                                'short-description' => 'Coach',
                                                'experience' => '12 Years' ,
                                                'specialization' => array('Conscious Parenting Coach'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Smruti Gopal is a Conscious Parenting Coach and is the founder of Equanimous Coaching. She is also the Founder and Director of Formative age (A Montessori Teacher Training Center). Smruti has a Formative age YouTube channel where you can find videos on Conscious Parenting, Montessori Parenting, yoga for children and more.',
                                                'education' => '',
                                                'detailed_experience' => 'She has worked with children in the US and in India. Her passion for children led her to start a teacher training center in India 12 years ago which is now online. Smruti has written a book, which talks about effective ways to communicate with children. It is  called’ Weigh Thy Words before you Speaketh'
                                             ),
                           'Jumana Lokhandwala' => array(   
                                                'name' => 'Jumana Lokhandwala' ,
                                                'short-description' => 'Coach',
                                                'experience' => '21 Years' ,
                                                'specialization' => array('Conscious Parenting Coach'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'I endeavour to guide parents similarly, with compassion to bring back the joy in parenting. As a conscious coach, I help families grown connect and evolve to uncover their most authentic selves. I believe we all have the answers within and we just need the right environment to awaken.',
                                                'education' => 'A Psychology graduate from the University of Luton (England) and a mother of two, I struggled to understand my teenagers until I stumbled upon conscious parenting. Making small shifts, I transformed my relationships.',
                                                'detailed_experience' => 'A conscious parenting coach, graduated from Dr.Shefali Tsabary\'s conscious parenting institute.'
                                             ),
                            'Andrea Markusich' => array(   
                                                'name' => 'Andrea Markusich' ,
                                                'short-description' => 'Coach',
                                                'experience' => '21 Years' ,
                                                'specialization' => array('Conscious Parenting Coach'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Andrea lives just west of Toronto, Canada. She is a  mother, wife, entrepreneur, and conscious parenting coach. Her children are 22, 19, 16 and 13. <br/>She used to be very focused on achievement and results, which has benefitted the business she runs with her husband. <br/>Once she began the inward journey into self discovery, she found most of her goals motivated by a deep sense of proving worthiness. <br/>Now that she sees freedom in life that comes when we feel whole, her inspiration for projects comes from new power and authenticity.',
                                                'education' => 'Degree from the University of Toronto: Psychology, sociology and philosophy.<br/>
                                                    Certification: Dr. Shefali Tsabary coaching Institute certification 2019',
                                                'detailed_experience' => 'She writes for multiple Canadian magazines around the subjects of parenting and relationships.<br/> She helps parents revisit their agendas of success to reveal their wholeness and reignite their playfulness with life. From this place, whether we achieve is secondary. What is primary is the practice of living in the present moment. Living in the present allows parents to connect more with their children and to build a family culture of their choosing. This foundation can help to create children who stand for themselves and know who they are.'
                                             ),
                             'Neha Karia Mody' => array(   
                                                'name' => 'Neha Karia Mody' ,
                                                'short-description' => 'Coach',
                                                'experience' => '14 Years' ,
                                                'specialization' => array('Mental Health Counselor'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Description - Neha Karia Mody is a Mental Health counselor practicing since 14 years in the field of Mental Health and in Training and Development. A personal coach / counselor with Moving Minds company of professionals with strong ethics<br/>• Counseling and empowering people of all age group,<br/>• An active member of All Ladies League (ALL) – Mumbai Chapter of Mental Health.<br/>• An active support member of Associate Of Trainers (AOT) – helping trainers across India to grow.<br/>• An expert counselor on an online mental health portal – Café Counsel.<br/>• One of the eminent Director of Nurture Your Future (NYF) group active on Facebook – A platform created for women to share her life, express her talents and show herself to the world.',
                                                'education' => '',
                                                'detailed_experience' => '- Trained over 40000 persons from ICICI Foundation, Oil & Gas, Automobile, Confectionery Industries Toyota, Castrol, Godrej and Boyce, Domino’s and Cadburys; Konkan Railways, Educational Institutes and NGO,<br/>- Interviewed and posted about her work in a local newspaper of Chhattisgarh.<br/>- She also coaches people on:<br/>Work Life Balance, Stress Management, Emotional Intelligence, Parenting, Pre and Post Marriage Counseling, Anxiety, Difficulties in decision making skills, Overthinking and Relationship concerns.'
                                             ),
                              'Nidhie Navander' => array(   
                                                'name' => 'Nidhie Navander' ,
                                                'short-description' => 'Coach',
                                                'experience' => '15 Years' ,
                                                'specialization' => array('Child Development','Rehabilitation','Psychologist'
                                                                    ),
                                                'fees' => 'Rs. 7500 / 30 mins',
                                                'language' => 'English, Hindi',
                                                'description' => 'Dr Nidhie Navander is a Child, adolescent & Rehabilitation Psychologist.She has been practicing as psychologist since 2006.  A hardcore believer in psychology she has inculcates whatever she learns in her life and has a fantastic hands on experience with her two amazing daughters.',
                                                'education' => 'Nidhie has done her PhD in Parenting Rehabilitation psychology From Delhi<br/>
                                                    NET/SET Qualified<br/>MSc Human development (Nagpur)<br/>Her Designation – Child, Developmental and Rehabilitation Psychologist',
                                                'detailed_experience' => 'Having developed  her own course where  children are trained in developing life skills along with regular Parenting workshops she has made a big difference in more than 7000 lives.<br/>With more than 3000 cases and more than 120 seminars She has covered more than 10 cities like Delhi,  Nagpur, Akola, Pune, Jalna, and many more.<br/>She has also represented Aurangabad in more International Conferences on various topics – parenting, time management and leadership<br/>She has formed a company called Higher Quotients- to develop IQ, EQ and SQ in children. Of course I can – is a program for academic and behaviour development.'
                                             ),

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
            <div class="p-0 mb-lg-3 pb-lg-1 mb-3 m-3">
                <p class="h2"><?php echo $coach_name; ?></p>
                <p class="p font-weight-bold"><?php echo $coache_profile['short-description']; ?></p>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Experience</div>
                    <div class="col-8 p text-left"><?php echo $coache_profile['experience']; ?></div>
                </div>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Specialization</div>
                    <div class="col-8 p text-left">
                        <?php 
                            foreach($coache_profile['specialization'] as $specialization){
                        ?>
                            <a href="#" class="bg-light px-0 py-0 m-0 text-dark">
                                <?php echo $specialization; ?>
                            </a>              
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Fee</div>
                    <div class="col-8 p text-left"><?php echo $coache_profile['fees']; ?></div>
                </div>

                <div class="row m-0 p-0 my-2 text-dark">
                    <div class="col-4 mb-0 h6 p-0 text-left">Language</div>
                    <div class="col-8 p text-left"><?php echo $coache_profile['language']; ?></div>
                </div>
            </div>

            <div class="col-12 p-0 m-0 float-left">

                <div class="col-lg-12 col-12 p-0 mt-4 mb-5 py-2 text-center">
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a class="px-2 h5" style="background-color: #F8F9FA;" href="tel:8888888888" role="button">
                        <i class="fa fa-phone"></i>
                    </a>
                    <!--a class="px-2 h5" style="background-color: #F8F9FA;" href="#!" role="button">
                        <i class="fa fa-video-camera"></i>
                    </a-->
                </div>
                
                
                <div class="col-lg-10 col-md-12 col-12 m-auto d-flex p-0 py-2">
                    <div class="btn-group d-flex flex-lg-row flex-md-row flex-column m-auto" role="group">
                    <button type="button" class="btn btn-type1-reverse pulse animated go" 
                    style="min-width: 200px;" data-toggle="modal" data-target="#exampleModal">Check Availability</button>
                    <!--button type="button" class="btn btn-type1-reverse pulse animated go" 
                    style="min-width: 200px;">Book Now</button-->
                </div>
                </div>
            </div>
        </div>
        
    </div> 
    </div>

<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="d-flex justify-content-center modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <iframe class="col-12" height="450px" src="https://calendar.google.com/calendar/embed?src=iss0q6342kud2q7evik3iid95g%40group.calendar.google.com&ctz=Asia%2FKolkata" style="border: 0"  frameborder="0" scrolling="no"></iframe>
      </div>
</div>
</div>
</div> 
  
    <hr class="mt-5 border-0">
    <div class="row">
        <div class="col-12 text-dark">
            <?php if($coache_profile['description']): ?>
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Description</div>
                <div class="p"><?php echo $coache_profile['description']; ?></div>
            </div>
            <?php endif; ?>
            <?php if($coache_profile['education']): ?>
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Education</div>
                <div class="p"><?php echo $coache_profile['education']; ?></div>
            </div>
            <?php endif; ?>
            <?php if($coache_profile['detailed_experience']): ?>
            <div class="d-flex flex-column mb-5">
                <div class="h4 mb-2">Experience</div>
                <div class="p"><?php echo $coache_profile['detailed_experience']; ?></div>
            </div>
            <?php endif; ?>
        </div>
    </div>

</div>
</section>