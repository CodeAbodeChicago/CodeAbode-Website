<?php /** CodeAbode.com, all rights reserved **/?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>CodeAbode : Android Course</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/img/logos/CA_icon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css/animate.css"> 

    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="../css/themes/green-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="../style.css" rel="stylesheet">
   
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


    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Android</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">              
             <div class="singlecourse_ferimg_area">
               <div class="singlecourse_ferimg">
                 <img src="/img/course_logo/android.jpg" alt="img">
               </div>  
                <div class="singlecourse_bottom">
                  <table class="table table-striped course_table">
                <thead>
                  <tr>          
                    <th>Course Title</th>
                    <th>Instructor</th>
                    <th>Days</th>
                    <th>Timing</th>
                    <th>Dates</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>          
                    <td>Bootcamp Class</td>
                    <td>Rex Twedt</td>
                    <td>Monday thru Friday</td>
                    <td>10:00am to 5:00pm</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
             <div class="single_course_content">
               <h2>About our Android Course</h2>
               <p>Students will learn to program on the Android platform by leveraging their 
knowledge gained in the introduction to Java course.  Students will participate 
in putting together sample components to build demo app projects in the Android 
Studio development environment tool.  Topics will include widgets and layout 
algorithms, event processing, touch handling and accessing platform services 
such as sound playing and the camera.  Device emulators on the development 
computer will be demonstrated to preview apps.  Apps will also be compiled, 
loaded onto and run on Android devices.  Students will be given the option to 
work on their own app ideas.</p>
               
             </div>
            </div>
                          <!-- start previous & next button -->
              <div class="single_blog_prevnext">
                <a href="./java.php" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a>
                <a href="./capstone.php" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a>
              </div>
          </div>
<!--===================== End course content -->



          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php
  include($_SERVER['DOCUMENT_ROOT'] ."/events/course_sidebar.php");
?>
          </div>
        </div>
      </div>
    </section>



<!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div> 
            <div class="title_area">
              <h2 class="title_two">Other Courses</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
<!-- =======================Course 1============================= -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 1 image --><img src="/img/course_logo/html_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/html.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/html.php">HTML & CSS</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/html_description.php");
?></p>
                    </div>
<!-- =======================Instructor=========================== -->
                   <!--  <div class="singCourse_author">
                      <img src="img/HTML.png" alt="HTML & CSS">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ====================End of Instructor====================== -->
                  </div>
                </li>
<!-- ========================Course 2=========================== -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 2 image --><img src="/img/course_logo/js_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/javascript.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/javascript.php">Introduction To Javascript</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span>  Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/javascript_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->

                  </div>
                </li> 
<!-- ========================Course 3============================ -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 3 image --><img src="/img/course_logo/advanced_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/advanced.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/advanced.php">Advanced Javascript</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/advanced_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->
                  </div>
                </li>
<!-- =========================Course 4=========================== -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 4 image --><img src="/img/course_logo/server_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/server.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/server.php">Server-Side Integration</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/server_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->
                  </div>
                </li>
<!-- =========================Course 5=========================== -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 5 image --><img src="/img/course_logo/java_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/java.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/java.php">Java</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/java_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->
                  </div>
                </li>
<!-- =========================Course 6=========================== -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 6 image --><img src="/img/course_logo/android_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/android.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/android.php">Android</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/android_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->
                  </div>
                </li>
<!-- =========================Course 7=========================== -->
                <li>
                  <div class="single_course_slide">
                    <div class="singCourse_imgarea">
<!--Course 6 image --><img src="/img/course_logo/capstone_small.jpg" />
                      <div class="mask">                         
                        <a href="/courses/capstone.php" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title title_area"><a href="/courses/capstone.php">Capstone Course</a><br><span></span></h3>
                    <!-- <p class="singCourse_price"><span>$1000</span> Per Course</p> -->
                    <p><?php
  include($_SERVER['DOCUMENT_ROOT'] ."/courses/course_slider/capstone_description.php");
?></p>
                    </div>
<!-- ==========================Instructor======================== -->
                    <!-- <div class="singCourse_author">
                      <img src="img/author.jpg" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div> -->
<!-- ==========================Instructor======================== -->
                  </div>
                </li>
<!-- ======================End of Course List =================== -->
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  





    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- For smooth animatin  -->
    <script src="../js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="../js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.animate-enhanced.min.js"></script>
    <script src="../js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="../js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="../js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>