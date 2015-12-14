<?php /** CodeAbode.com, all rights reserved **/?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>CodeAbode : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/logos/CA_icon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 

    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/green-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>   

     <!-- Other Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> 

<!-- ========================Google Ad Tracking================== -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63298538-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- ==================End Google Ad Tracking==================== -->
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
        <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/menu.php");
?>
      
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
    
    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="slider_area">
           
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="img/slider/1.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2><img src="./img/logos/CA_horizontal_719px.png" class="slider_caption_logo"> </h2>
                    <p>CodeAbode is the first non-profit code school focused on teaching the skills necessary to build innovative websites and applications for the healthcare industry. 

                    </p>
                    <p> Donate now to our crowdfunding campaign for scholarships! 
                    </br>Support a student today!</p>
                    <a class="slider_btn" href="http://codeabodescholarships.mydagsite.com/" target="blank">Donate</a>
                  </div>
                  </li>

<!-- Start single slider-->
                <li>
                  <img src="img/slider/2.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Announcing February Night Classes</h2>
                    <h3>
                      STARTING FEBRUARY 1st
                    </h3>
                    <p>
                      HTML
                      <br>Javascript
                      <br>Advanced Javascript
                


                    </p>
                    <a class="slider_btn" href="./apply.php">Request More Info</a>
                  </div>
                </li>

<!-- Start single slider-->
                <li>
                  <img src="img/slider/3.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Moraine Valley Community College Classes</h2>
                    <p>Starting January 25, 2016
                      <br>
                      <br>
                      MVCC and CodeAbode are collaborating to offer a revolutionary approach to learning to programming.
                    </p>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <div class="title_area">
              <h2 class="title_two">About Us</h2>
              <span></span> 
            </div>
            <p>
              CodeAbode is the first non-profit code academy designed with the ever evolving needs of the health industry in mind. We provide students with the skills they need to become successful web and mobile app developers both inside and outside the healthcare industry.</p>

 

<p>CodeAbode is a division of <p><a id="nmhm" href="http://nmhmchicago.org/">The National Museum of Health and Medicine Chicago (NMHM Chicago)</a>. Together, the NMHM Chicago and CodeAbode uniquely bridge physical and virtual communities interested in health, medicine, technology and interdisciplinary education.</p>

 

<p>The healthcare industry is facing new challenges as it becomes more digitized and data-driven. This creates an increasing demand for information management and digital literacy. With this in mind, our instructors have developed course curriculum to meet the needs of the current, and future, technical job market. While we specialize in health and medicine, the acquired skills are transferable to all areas of the programming world, and we welcome students with diverse interests.
</p>
 

<p>We offer both full-time Bootcamp style classes and part-time evening classes to fit our student’s needs.</p>


          </div>
        </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_whyus_top wow fadeInRight">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>1 ON 1 INSTRUCTION</h3>
                    <p>We make it our priority to provide you with the assistance YOU need while learning. For many of our classes our instructors have a TA that works alongside them, and you, to help you better understand and get the most out of your experience.</p><br>
                  </div> <!-- class="single_whyus_top wow fadeInUp -->
                  
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="about_tutors_thumbs">
<!--Instructor image --><img src="img/team/Michael_CA.jpg" />
                    </div>
                    
                    <div class="family_button"><a href="./family.php">Meet Our Family</a>
              </div>
                  </div>
                </div> <!-- class="col-lg-6 col-md-6 col-sm-6 -->
            </div>
          </div>
        </div> 
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 



     <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container-fluid">

       <!-- Our courses titile -->
<!--         <div class="row"> -->
          <div> 
            <div class="title_area">
              <h2 class="title_two">Our Courses</h2>
              <span></span> 
            </div>
          </div> <!-- <div class="col-lg-12 col-sm-12"> -->
     <!--    </div> -->
        <!-- End Our courses title -->
<!-- ================================================================================================================================= -->


        <!-- Start Our courses content -->
<!--         <div class="row"> -->
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="ourCourse_content">

<!-- =======================Course 1============================= -->

                <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 1 image --><img src="img/course_logo/html_small.jpg"class="img-responsive" />
                      <div class="mask">                         
                        <a href="./courses/html.php" class="course_more">View Course</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/html.php">HTML & CSS</a></br><span></span></h3>
                  </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/html_description.php");
?></p>
                    </div>
                  </div>
                  </div>
                </div>

<!-- ========================Course 2=========================== -->
                
                <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 2 image --><img src="img/course_logo/js_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/javascript.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/javascript.php">Javascript</a></br><span></span></h3>
                    </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/javascript_description.php");
?></p>
                    </div>
                  </div>
                </div>
              </div>

<!-- ========================Course 3============================ -->

                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 3 image --><img src="img/course_logo/advanced_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/advanced.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/advanced.php">Advanced Javascript</a></br><span></span></h3>
                    </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/advanced_description.php");
?></p>
                    </div>
                    </div>
                  </div>
                  </div>

<!-- =========================Course 4=========================== -->

                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 4 image --><img src="img/course_logo/server_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/server.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                      <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/server.php">Server Side</a></br><span></span></h3>
                    </div>
                      <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/server_description.php");
?></p>
                    </div>
                    </div>
                  </div>
                  </div>

<!-- =========================Course 5=========================== -->

                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 5 image --><img src="img/course_logo/java_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/java.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/java.php">Java</a></br><span></span></h3>
                    </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/java_description.php");
?></p>
                    </div>
                    </div>
                  </div>
                  </div>

<!-- =========================Course 6=========================== -->

                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 6 image --><img src="img/course_logo/android_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/android.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/android.php">Android</a></br><span></span></h3>
                    </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/android_description.php");
?></p>
                    </div>
                    </div>
                  </div>
                  </div>

<!-- =========================Course 7=========================== -->

                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                  <div class="single_course">
                    <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_imgarea">
<!--Course 6 image --><img src="img/course_logo/capstone_small.jpg" />
                      <div class="mask">                         
                        <a href="./courses/capstone.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6"> 
                    <div class="singCourse_content">
                    <div class="singleCourse_content title_area">
                    <h3 class="title_two title_area"><a href="./courses/capstone.php">Capstone</a></br><span></span></h3>
                    </div>
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] . "/courses/course_slider/capstone_description.php");
?></p>
                    </div>
                  </div>
                  </div>
                  </div>
                


                
<!-- ======================End of Course List =================== -->
              
            </div>
          
        <!-- End Our courses content -->
      </div>

      </div>
      <div class="schedule_button"><a href="./structure.php">View Our Schedule</a>
              </div>
        </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  


    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div> 
            <div class="title_area">
              <h2 class="title_two">What our Students say</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div>
            <div class="studentsTestimonial_content">              
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>"It's been a good experience. I've learned a lot here so far... I've been in a couple of code programs before, so I didn't expect much, and I got a lot more than I thought I would."</p>
                    </div>
                    <img class="stsTesti_img" src="/img/students/jill.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Jill Tessler</h3>                      
                      <span>Former Student</span>

                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>"CodeAbode has been a great resource for me to expand my potential to an area I've always been interested in. It has given me a great platform to continue furthering my knowledge." </p>
                    </div>
                    <img class="stsTesti_img" src="/img/students/landon.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Landon Blackburn</h3>                      
                      <span>Former Student</span>

                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>“This program gave me a set of fundamental skills in multiple coding languages. I didn’t just learn code, or how to code, I learned how to teach myself. It’s a great resource for my future.”</p>
                    </div>
                    <img class="stsTesti_img" src="/img/students/aileen.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Aileen Rangel</h3>                      
                      <span>Former Student</span>

                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
    
<!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/footer.php");
?>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap js -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  


    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>