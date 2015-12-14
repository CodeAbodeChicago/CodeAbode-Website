<?php /** CodeAbode.com, all rights reserved **/?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>CodeAbode : Apply Today</title>

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
    <!-- Form Validation CSS -->
    <link type="text/css" rel="stylesheet" href="css/parsley.css" /> 


    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>   

     <!-- Other Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> 

<!-- ========================Google Ad Tracking================== -->
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
      <h2>Enroll Today</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="title_area">
              <h1 class="title_two">Contact us to enroll <br>or request more information</h1>

            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="contact_form wow fadeInLeft">
              <form src="data-parsely-validate" class="submitphoto_form" action="./mail/contact.php" method="post">
                <div>
                  <label for="name">Name*</label>
                  <input type="text" name="name" class="wp-form-control wpcf7-text" placeholder="Your name" id="name" required data-validation-required-message="Please enter your name.">
                </div>

                <div>
                  <label for="email">Email*</label>
                  <input type="email" name="email"class="wp-form-control wpcf7-email" placeholder="Email address" name="email" required data-validation-required-message="Please enter your email address.">
                </div>

                <div>
                  <label for="phone">Phone Number*</label>
                  <input type="tel" class="wp-form-control wpcf7-text" placeholder="Phone Number" name="phone">
                </div>

                <div class="form-group">
                  <label>Are you Interestesd in Bootcamp or Night Classes?
                  </label>
                  <br>
                  <select name="classes">
                    <option value="october">October Fullstack Bootcamp</option>
                    <option value="night">October Night Classes</option>
                    <!-- <option value="january">January  Moraine Valley Community College Bootcamp</option> -->
                    </select>
                </div>
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Do you have any questions?" name="questions"></textarea>

                <div>
                  <label for="How did you hear about us?">Could you please let us know how you heard about us?</label>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="How you heard about us" name="marketing" >
                </div>

                <input type="submit" value="Submit" class="wpcf7-submit">

                
              </form>
           </div>
        </div>
         <!-- <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Address</h3>
             <div class="address_group">
               <p>175 W Washington ST</p>
               <p>Chicago, IL 60602, USA</p>
               <p>312.854.8327</p>
               <p>info@codeabode.com</p>
             </div> -->
<!--              <div class="address_group">
              <ul class="footer_social">
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>
             </div> -->
         <!--   </div>
         </div> -->
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

<!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="map">
      <div class="container" >
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div id="googleMap" >

        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=CodeAbode&key=AIzaSyAvtw-C36scFOU77ibvA2cWEXxezhU_kt8" allowfullscreen></iframe>
      </div>
    </div>
    </div>
  </div>
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    
<!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">

                  <!-- FIRST COLUMN -->
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <img src="img/logos/CA_horizontal_small.png">
                <h5>Decoding Your Future</h5><br>
  
                  <!-- <ul class="footer_widget_nav">
                      COMMENTING OUT DONATE BUTTON FOR NOW
                  <li><a href="./index.html">Donate</a></li>
                </ul> -->

                </div>  <!-- class single_footer_widget -->
            </div> <!-- class col-ld-3  col-md-3 col-sm-3 -->


                <!-- <ul class="footer_social"> -->
<!--                   <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/CodeAbode?fref=ts"><i class="fa fa-facebook"></i></a></li> -->
<!--                   <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/codeabode_chi"><i class="fa fa-twitter"></i></a></li> -->
<!--                   <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!--                   <li ><a data-toggle="tooptip" data-placement="top" title="Vimeo" class="soc_tooltip icon" href="https://vimeo.com/user40609946"><img src="./img/logos/vimeo-square-icon.png"><i class="fa fa-vimeo"></i></a></li> -->
<!--                   <li ><a data-toggle="tooltip" data-placement="top" title="NMNHC" class="soc_tooltip icon" href="http://nmhmchicago.org/index.php/home-sm"><img src="./img/logos/nmhm_logo.png"><i class="fa fa-nmhmc"></i></a></li> -->
                <!-- </ul> -->
              


                    <!-- SECOND COLUMN -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="single_footer_widget">
                <h4 class="footer_center">Contact Us:</h4>
                <p class="footer_center">175 W Washington St - Chicago, IL 60602, USA<br>312.854.8327 - info@codeabode.com</p>
              </div>  <!-- class single_footer_widget_contact -->
            </div>   <!-- class col-ld-3  col-md-3 col-sm-3 -->




                    <!-- THIRD COLUMN -->

            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget_museum">
                  <h4>A division of:</h4>
                  <p><a id="nmhm" href="http://nmhmchicago.org/"><img src="./img/logos/nmhm_logo.png">The National Museum of Health and Medicine Chicago (NMHM Chicago)</a></p>            
              </div>  <!--  class single_footer_widget -->
            </div>   <!--  class col-ld-3  col-md-3 col-sm-3 -->
          



          </div> <!-- class row -->
        </div>   <!-- class container -->
      </div> <!-- class footer_top -->
      <!-- End footer top area -->
<!-- *==================* -->
<!-- *==================* -->
      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Site being designed by <a href="http://facebook.com/aileen.rangel" rel="nofollow">Aileen Rangel</a> and <a href="http://facebook.com/landon.blackburn">Landon Blackburn</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================-->
  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
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
    <!-- Parsley Form Validation -->
    <script src="js/parsley.min.js"></script>

    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>