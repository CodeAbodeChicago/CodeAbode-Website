      <?php
      echo <<<EOD
            <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->           
              <!-- IMG BASED LOGO  -->
               <a class="navbar-brand navbar-logo" href="/"><img src="/img/logos/CA_logo.png" alt="CodeAbode"></a>             
                     
            </div>

                     <!-- ===================MENU TABS================== -->

                            
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">

                              <!-- HOME -->
                <li><a href="/">Home</a></li>






                            <!-- COURSES -->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Courses<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/courses/index.php">Our Courses</a></li>
                    <li><a href="/schedule.php">Upcoming Classes</a></li>
                    <li><a href="/whatINeed.php">What do I need?</a></li>

                  </ul>
                </li



                         <!-- ABOUT US -->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/index.php#aboutUs">About CodeAbode</a></li>
                    <li><a href="/family.php">Our Family</a></li>
                    <li><a href="/index.php#studentsTestimonial">Our Students</a></li>
                  </ul>
                </li>     


                              <!-- APPLY -->
                <li><a href="./apply.php">Apply</a></li>



              </ul><!-- id top-menu -->     
            </div> <!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
EOD;
?>
      