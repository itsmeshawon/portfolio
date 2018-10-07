<!DOCTYPE html>
<html >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <meta name="description" content="">
  <title>SBE - Swiss Biohygienic Equipment</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/sbe/css/sbe-style.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu sbe-menu" once="menu" id="menu2-h">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/logo2.png" alt="SBE" >
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="about.html">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="products.html">
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="services.html">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="quality.html">
                        Quality
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="events.html">
                        Events
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="clients.html">
                        Clients
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="career.html">
                        Career
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link text-black display-4" href="contact.html">
                        Contact
                    </a>
                </li>
            </ul>
            
        </div>
    </nav>
</section>

<section class="features11 sbe-two-col-content inner-first-section sbe-contact" id="features11-2">
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <div class="google-map">
                    <div id="map"></div>
                    </div>
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2 block-title-medium ">
                       Contact Us
                    </h2><br>
					
                   <?php
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $message = $_POST['message'];
                            $formcontent=" From: $name \n Email: $email \n Phone: $phone \n Message: $message";
                            $recipient = "info@sbe-systems.com,mmrizwan@sbe-systems.com,mmrizwan1@yahoo.com,itsmeshawon@gmail.com,artisticshawon@gmail.com";
                            $subject = "A query from sbhel.com contact form";
                            $mailheader = "From: $email \r\n";
                            mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                            echo "<span style='font-size: 14px; font-weight: 400;'> Thanks for your communication. We will get back to you soon.<br/><br/>" . "<a href='index.html' style='text-decoration:none; color:#007fff; font-size: 14px; text-transform: uppercase; font-weight: 400;'> Return Home</a>";
                            ?>
                    
                    <br><br>
                    <p>
                        <b>Factory and Workshop</b><br>
                        Krishnapura Sahabelishor, Dhamrai<br>
						Dhaka-1351, Bangladesh
					</p>
                
                    <p>
                        <b>Corporate Head Office</b><br>
                        40 Shahid Tajuddin Ahmed Sarani, Tejgaon I/N<br>
						Dhaka-1208, Bangladesh
					</p>
                    
                    <div><a href="mailto:info@sbe-systems.com" class="link">info@sbe-systems.com</a></div>
                </div>
            </div>
        </div> 
    </div>          
</section>

<section class="sbe-footer" id="footer5-f">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="#/">
                       <img src="assets/images/logo.png" alt="SBE">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
            <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="index.html" class="text-black footer-menu">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="about.html" class="text-black footer-menu">ABOUT US</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="products.html" class="text-black footer-menu">Products</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="services.html" class="text-black footer-menu">Services</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="quality.html" class="text-black footer-menu">Quality</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="events.html" class="text-black footer-menu">Events</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="clients.html" class="text-black footer-menu">Clients</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="career.html" class="text-black footer-menu">Carrer</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="contact.html" class="text-black footer-menu">CONTACT</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 SBE - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  <!-- SBE MAP -->
    <script>
      function initMap() {
        var uluru = {lat: 23.76838387, lng: 90.40036261};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbgFd-ePpopS2SqlUHSEiR_dog5Tboiq4&callback=initMap">
    </script>
</body>
</html>