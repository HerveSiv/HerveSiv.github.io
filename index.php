
<?php

if ( isset($_POST['btn-signup']) ) {

				$subject = "Your Account Credential ";
				$to = $_POST['email'];
				$from =  "info@onlinelacolombieregisto.com";
				
				
				//data
				$emess = "Your Name: ".$name."\r\n";
			       
			        $emess.= "Your Email: ".$email."\r\n";
			
			        $emess.= "Your Password: ".$pass."\r\n";    
			        
			        $emess.= "Requested Class: ".$classrequested."\r\n";   
			        
			        $emess.= "Link: http://onlinelacolombieregisto.com" ."\r\n";
			        
			        $emess.= "Date Registered:".$joining_date."\r\n";
			        
			        $emess.= "NB: This email address and password is valid ONLY for 1 day. After that duration it will be deleted.";
				
				//Headers
				$headers  = "MIME-Version: 1.0\r\n";
				//$headers .= "Content-type: text/html; charset=UTF-8\r\n";
				
				$headers .= "From: La Colombiere School <".$from."> ";
				
				mail($to,$subject,$emess,$headers);
				
				//unset($name);
				//nset($email);
				//unset($pass);
				//unset($classrequested);
				//unset($stfirstname);
				//unset($stlastname);

}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content=".: KODEN&lt;?&gt; ">
    <meta property="og:description" content="Technology on your Side!!">
    <meta property="og:image" content="https://www.kodenweb.com/img/about/favicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:url" content="https://kodeweb.com/">
	 
    <title>.: KODEN &lt;?&gt;</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
      <link rel="icon" href="img/about/favicon.png">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/about/Logo.png" alt="No Caption" class="navbar-brand js-scroll-trigger"/></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#why-us">Why us</a>
            </li>

            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>-->

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to <img src="img/about/Logo.png" alt="No Caption" class="navbar-brand js-scroll-trigger"/></div>
          <div class="intro-heading text" style="font-family: 'Bauhaus 93'">Technology on your side!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">More About KODEN</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container" >
        <div class="row">
          <div class="col-lg-12 text-center" >
            <h2 class="section-heading text-uppercase" >Services</h2>
            <h3 class="section-subheading text-muted">Taking the lead for excellent services</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Website Development </h4>
            <p class="text-muted">We Create website that looks exactly the way  you want. Your website is automatically mobile optimized so it looks stunning when people visit it.</p>
          </div>

          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">New Domains</h4>
            <p class="text-muted">After we are done building a professional website. You need to have a domain name. A domain name helps customers to reach your website. Make your desirable domain name and we execute. </p>
          </div>


         <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web hosting</h4>
            <p class="text-muted">Hosting is what makes your site visible on the web. We offer fast, reliable plans for every need.</p>
          </div>


         <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shield fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">For your business websites to be trusted by your customers,you need to be secured.We'll protect  from viruses,hackers and identity thieves. We keep your visitors safe.</p>
          </div>

         <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">SEO</h4>
            <p class="text-muted">With SEO, or Search Engine Optimization strategy, Your website will higherly appear in search results like Google, Bing,Yahoo and Customers will find and visit your site instead of your competitors. </p>
          </div>
		
	 <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-toggle-on fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">IT Consulting & Strategy</h4>
            <p class="text-muted">KODEN<?> offers IT consulting services to help you achieve your long-term IT objectives and IT support for an organization size . Power your Business with KODEN IT Support Services. </p>
          </div>


         <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Desktop Application </h4>
            <p class="text-muted">With KODEN , we makes it easy to quickly create professional-quality business Apps for Desktop, Cloud and Mobile devices on Windows, using Python, PHP, .NET, and Java.</p>
          </div>







          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-mobile-phone fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Mobile Apps Development</h4>
            <p class="text-muted">For your business to grow, We build you mobile apps for Android and iOS for fast access to your business services.  </p>
          </div>



            
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">If you love our portfolio , you'll love us.</h3>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/8.gif" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>The Groceries Store</h4>
              <p class="text-muted">App and Web</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/9.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>School Management System</h4>
              <p class="text-muted">.NET and Dashboard</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/12.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Advanced Student Enroll </h4>
              <p class="text-muted">App,Web and Dashboard</p>
            </div>
          </div>



        </div>
      </div>
    </section>

    <!-- About -->
    <section id="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Why Choose KODEN&lt;?&gt;?</h2>
            <h3 class="section-subheading text-muted">Better than best.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/download.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Unlimited Support</h4>
                    <!--<h4 class="subheading">Our Humble Beginnings</h4>-->
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Our professional Team is here to assist you every step of the way.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/6.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Take a breather</h4>
                    <!--<h4 class="subheading">An Agency is Born</h4>-->
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Let us worry about you. Leave your work to our professionals.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/7.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>On Schedule </h4>
                    <h4 class="subheading">Not delayed!!</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Our Customer will experience good services at high speed. We are dedicated to ensuring that our customers are happy with us. </p>
                  </div>
                </div>
              </li>


              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part Of
                    <br>KODEN &lt;?&gt;
                    <br>family!!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off"novalidate>
              <div class="row">
                <div class="col-md-6"> 
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number." onkeypress="return isNumber(event)">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="btn-signup" >Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
		<span class="copyright">Copyright &copy; KODEN&lt;?&gt; 2018</span> </br>
		<span class="copyright">Contact Info: (+250) 782374060 </span>
          </div>

          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>

         <!-- <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>-->


        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">

                  <!-- Project Details Go Here-->

                  <h2 class="text-uppercase">Coming Soon</h2>
                  <p class="item-intro text-muted">Our Team is working on.</p>
                  <!--<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">-->
                  <img class="img-fluid d-block mx-auto" src="img/coming-soon.png" alt="">
                  <ul class="list-inline">
                    <!--<li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: App,Web and Dashboard</li>-->
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>



     <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
	</script>

  </body>

</html>
