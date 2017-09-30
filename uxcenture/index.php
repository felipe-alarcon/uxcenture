<?php
$submit = $_POST['submit'];
if(isset($submit)){
  // Check for empty fields
  if(empty($_POST['name'])  		||
     empty($_POST['email']) 		||
     empty($_POST['phone']) 		||
     empty($_POST['message'])	  ||
     !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
  	 $error = "Error in the form";
  	  return false;
     }else{
      $name = $_POST['name'];
      $email_address = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      // Create the email and send the message
      $to = 'fandressouza@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
      $email_subject = "Website Contact Form:  $name";
      $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
      $headers = "From: noreply@uxcenture.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
      $headers .= "Reply-To: $email_address";
      mail($to,$email_subject,$email_body,$headers);
      $result = "Completed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UXcenture</title>

  <!-- Bootstrap Core CSS -->
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/agency.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico' />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">UXcenture</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Services</a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">Portfolio</a>
          </li>
          <li>
            <a class="page-scroll" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Team</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <div class="mask">
    <header>
      <div class="container">
        <div class="intro-text">
          <?php if(isset($result)) echo "<script>alert('Your message has been sent successfully');</script>";?>
          <?php if(isset($error)) echo "<script>alert('Sorry, there was a problem. Try again later!');</script>";?>
          <div class="intro-lead-in">Web Development - Online Marketing</div>
          <div class="intro-heading">"Turn Your Business Into a Web Success"</div>
          <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
          <a href="#contact" class="page-scroll btn btn-xl-2">Contact Us</a>
        </div>
      </div>
    </header>
  </div>
  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Services</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
          <h4 class="service-heading">E-Commerce</h4>
          <p class="text-muted">
            We develop highly professional and custom made E-Commerce experiences for any type
            of online businesses. Talk to us and we will discuss all the options available for you.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Responsive Design</h4>
          <p class="text-muted">
            We take care of everything to make sure your website is cross-browser as well
            as responsive as most people nowadays use a number of devices from smartphones to large monitors.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                    </span>
          <h4 class="service-heading">AdWords Campaigns</h4>
          <p class="text-muted">
            Our highly trained and always updated team on marketing can help you improve your website
            for the AdWords platform. We have tons of experience in this field. Contact us for more!
          </p>
        </div>
      </div>

      <!-- Separation of rows -->
      <hr>

      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
                    </span>
          <h4 class="service-heading">Consulting</h4>
          <p class="text-muted">
            Not sure how to get started? still deciding how to put together your website? Talk
            to us we'll drive you through the whole to get going quicly without losing focus or your hair.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
                    </span>
          <h4 class="service-heading">Intranet Websites</h4>
          <p class="text-muted">
            We also deliver innovative intranet solutions for your business. Intranet websites
            are a great way to keep all your internal documentation and processes for your company.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                    </span>
          <h4 class="service-heading">Web Apps</h4>
          <p class="text-muted">
            Our team is highly specialized in web app development through the use of web technologies.
            These apps can be of internal use for your employees or perhaps that next big product.
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Portfolio Grid Section -->
  <section id="portfolio" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Portfolio</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="img/portfolio/myfitness.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Your Fitness Gym</h4>
            <p class="text-muted">Web Design and Development</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="img/portfolio/photo-contrast.jpg" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Photo Contrast - Photography Business</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="img/portfolio/sobo.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>SOBO Cafe - Local Coffee Shop In Dublin</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">About</h2>
          <h3 class="section-subheading text-muted">This is our History.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2013-2014</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    We started out as a web design company based in Dublin (Ireland).
                    We have worked with many small to medium sized business in
                    the beginning and that was the base of our sucess since the early
                    days.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2014</h4>
                  <h4 class="subheading">UXcenture as brand is born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    The name comes from user experience because we believe technology
                    without a positive experience or lack of "usability" is worthless
                    so our focus is mainly on how us humans interact with websites and web apps.
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2015</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    From this point on we started providing full service which means
                    we no only take care of your website but also help you launch
                    your brand and achieve an ever increasing number of clients through
                    AdWords campaigns and many other techniques.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2016</h4>
                  <h4 class="subheading">Further Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    Our current goal with the recent launch of Angular Js 2 is to provide
                    even more high quality SPA's (Single Page Applications) to our customers
                    as well as expanding even further through different countries throughout
                    the globe.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Our Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="">
            </a>
            <h4><a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Marie</a></h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li><a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
              <img style="width:145px" src="img/team/profile-img-2.jpg" alt="">
            </a>
            <h4><a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">Felipe Alarcon</a></h4>
            <p class="text-muted">Web Developer / Founder</p>
            <ul class="list-inline social-buttons">
              <li><a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
              <img style="width:150px" src="img/team/emilio.png" class="img-responsive" alt="">
            </a>
            <h4><a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">Emilio Padua</a></h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li><a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Aside -->
  <aside class="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
          </a>
        </div>
      </div>
    </div>
  </aside>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="" method="post" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-xl-2 btn-block" id="submit" name="submit" type="submit"/>
                  SEND <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; UXcenture 2017</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li><a href="https://twitter.com/uxcenture"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li><a href="#">Privacy Policy</a>
            </li>
            <li><a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>




  <!-- Portfolio Modals -->
  <!-- Use the modals below to showcase details about your portfolio projects! -->

  <!-- Team Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2>Marie</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quis vero earum consectetur laboriosam aut sed quasi dolor voluptatem impedit explicabo, recusandae totam praesentium dignissimos quo. Totam asperiores, mollitia repudiandae!
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Team Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Felipe Alarcon</h2>
              <p class="item-intro text-muted">Show me the code!</p>
              <p>
                I'm a software developer specialized in front end development
                and user experience. My passion comes from many years of programming
                and a dedication to my craft. When it comes to software, I'm always learning
                and improving my skills.
              </p>
              <p>
                I'm currently a Google TVC working for a German company called Arvato
                and I deal mainly with internal Google technologies such as Google SQL,
                Google Cloud Platform, Google App Script and G Business Suit. My main
                tasks include automation, App development and reports using internal
                Business Intelligence tools.
              </p>
              <p>
                To know more about my professional achievements, please visit my 
                <a href="#">Linkedin Account</a>
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Team Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2>Emilio Padua</h2>
              <p class="item-intro text-muted">Marketing is in my veins!</p>
              <p>
                I am a professional with almost 10 years experience within the communications industry,
                with a background of work in advertising agencies and Google.
              </p>
              <p>
                Main skills:
              </p>
              <p>
                <strong>Project Management</strong><br>
                From planning to executing.<br>
                <strong>Digital Marketing</strong><br>
                AdWords Optimization, Inbound Marketing and Inbound Sales, Content Marketing, Google Analytics.<br>
                <strong>Strategic Marketing</strong><br>
                Campaign Strategy<br>
                <strong>TV, Radio & Cinema</strong><br>
                Adverts/Productions<br>
                <strong>Risk Management</strong><br>
                General projects within advertising agencies such as printing management, planning and executing<br>complex jobs, logistic etc.<br>
                <strong>Social Media Management</strong><br>
                Instagram, Facebook, Youtube, LinkedIn.<br>
                <strong>Unconventional Marketing Actions</strong><br>
                Guerrilla, Ambush Marketing etc.<br>
              </p>
              <p>
                I have also written a book along with other marketers. This was about a real client,
                real problems and how we fixed their them with strategy, brand re-positioning, TV, radio, magazine, adverts, Unconventional media and others.
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- ---------------------------------- PORTFOLIO ------------------------------------ -->
  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2>Your Fitness Gym</h2>
              <p class="item-intro text-muted">Get Fit!</p>
              <p>
                This project was one of the first completed by UXcenture and remains one
                of the companies favourite pieces. You are more than welcome to visit the gym if
                in Dublin (Ireland).
              </p>
              <p>
                <a target="_blank" href="http://yourfitnessgym.ie">yourfitnessgym.ie</a>
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2>Photo Contrast</h2>
              <p class="item-intro text-muted">The best side of yourself!</p>
              <p>
                Photography is at hearth of many things we do so this is another
                project we feel proud to showcase to the world as it means beauty and harmony
                together with mastery of a craft.
              </p>
              <p>
                <a target="_blank" href="http://photo-contrast.com">photo-contrast.com</a>
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2>Sobo Cafe</h2>
              <p class="item-intro text-muted">Get a cuppa of Joe!</p>
              <p>
                Endless working hours, a lot to go through and a lot to learn all the time,
                what would we be without coffee? I don't know you but at UXcenture we can't
                live without it!
              </p>
              <p>
                <a target="_blank" href="http://sobo-cafe.com">sobo-cafe.com</a>
              </p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/cbpAnimatedHeader.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/agency.js"></script>

</body>

</html>
