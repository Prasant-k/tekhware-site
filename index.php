<?php
$con = mysqli_connect("localhost", "root", "", "tekhware") or die("<script>alert('connection failed')</script>");
$wb = $ad = $iot = $logo = $other = '';
if (isset($_POST['submitmssg'])) {
  $name = $_POST['cname'];
  $email = $_POST['cemail'];
  $phn = $_POST['cPno'];
  $subject = $_POST['csubject'];
  $mssg = $_POST['cmessage'];
  if (isset($_POST['wdev']))
    $wb = $_POST['wdev'];
  if (isset($_POST['adev']))
    $ad = $_POST['adev'];
  if (isset($_POST['iotdev']))
    $iot = $_POST['iotdev'];
  if (isset($_POST['lgdes']))
    $logo = $_POST['lgdes'];
  if (isset($_POST['other']))
    $other = $_POST['other'];
  $qrry = "INSERT INTO `contact_us` (`c_name`, `c_email`, `subjt`, `c_mssg`, `Pno.`, `web_dev`, `app_dev`, `iot_dev`, `logo_design`, `other`) VALUES ('$name', '$email','$subject', '$mssg','$phn','$wb','$ad', '$iot', '$logo','$other')";
  mysqli_query($con, $qrry) or die("<script>alert('Failed')</script>");
  echo "<script>alert('Submitted')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TekhWare | Way towards Digitalization</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Web Development, App Development,Iot Prototyping ,Graphic design, web support,logo,poster,banner" name="keywords">
  <meta content="Communication is the key on which the lock of every organization turns, Our organization provides a digital support to upscale your growing business. We Develop Websites | Mobile Apps | Iot Prototypes | Graphic Design. Our association is specialize
            in various services like Website
            Designing, Web Development, Android Development,
            Software
            Development,
            and Graphics Designing.Get in
            touch with our team today to
            experience what makes TekhWare
            stand apart
            from other agencies.5" name="description">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicons -->
  <link href="img/logo 2.jpg" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="img/(1).png" alt="" class="img-fluid "></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="tekhnews\bootstrap-news-template">Tekhnews</a>
          </li>
          <li class="drop-down"><a href="">Tekh1008</a>
            <ul>
              <li><a href="#">Tekh fact</a></li>
              <li class="drop-down"><a href="#">Development Courses</a>
                <ul>
                  <li><a href="#">Python</a></li>
                  <li><a href="#">java</a></li>
                  <li><a href="#">c language</a></li>
                  <li><a href="#">IOT Deep Concept</a></li>
                  <li><a href="#">Data structures</a></li>
                </ul>
              </li>
              <!-- <li><a href="#">Drop Down 3</a></li> -->
              <!-- <li><a href="#">Drop Down 4</a></li> -->
              <!-- <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>Solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p> Let's us help you to create Powerful Brand to enhance your Business throught <mark>(website and android
              App)</mark> Design & Development Solutions </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>

              TekhWare is a software development company that has set new and higher quality standard for services. As a
              leader in Android App Development, Web
              Design, e-Commerce, Website Conversion, and Internet Marketing Services, our firm prides ourselves on
              driving traffic,
              converting visitors, and measuring effectiveness to ultimately deliver real results for our clients.
              TekhWare aim to make
              your online business experience smooth, speedy and efficient. With our strategic marketing approach, we
              make your
              business stand out from the competition and increase sales.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">What Makes Our Development Team Stand Out?</a></h4>
              <p class="description">Our promise to you is a partnership – our relationship is fueled by the success of
                your business. Simply creating a stunning website or software isn’t enough in today’s era, you’ll need
                to have a marketing focus in mind or be prepared for failure.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">We love the Graphic Design Business!</a></h4>
              <p class="description">We’ve perfected the process of building unforgettable logos and branding.our
                designers understand how to convey ideas and data in the most visually appealing way.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Experience</a></h4>
              <p class="description">We have carved out a niche in web application development alongside valued
                consulting and analysis solutions to serve
                growing businesses and industry leaders.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Custom Solutions for Your Business</h4>
            <p>
              Our expertise working with startup, MSME and people-to-people fields as well as other business areas
              helps us
              develop web and mobile solutions tailored with care for our clients. You can come to us at any stage of
              your project -
              from just an idea to architecture, from development to quality assurance and support.
            </p>
            <p>
              While the solutions we develop take the form of web & mobile apps, SaaS platforms or integrations, we are
              not just about
              the code. We’re about driving business results.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>We’re the graphic
              design company, but
              we design without
              any boundaries.
              .</h4>
            <p>
              TekhWare Design is visual communication and the aesthetic expression of concepts and ideas using various
              graphic elements
              and tools. TekhWare graphic designers create visuals to meet precise commercial or promotional needs like
              website designs
              and logos. We focus on usability, simplicity and innovative user interface.
            </p>
            <p>
              Our graphic designs create visual concepts that inspire and captivate customers. Our graphic designers are
              proficient in
              different designing tools and have a remarkable experience in handling web designing projects.
            </p>
            <p>
              We have established ourselves as one of the leading innovative Graphic Design companies catering to
              clients.
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Our association is specialize
            in various services like Website
            Designing, Web Development, Android Development,
            Software
            Development,
            and Graphics Designing.Get in
            touch with our team today to
            experience what makes TekhWare
            stand apart
            from other agencies.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Website Designing</a></h4>
              <p class="description">We are specialized in designing creative user centric websites customized to your
                business goals & targeted niche. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Logo, Poster and Business Cards</a></h4>
              <p class="description">TekhWare is a dynamic graphic design and branding agency that helps brands define
                who they
                are, what they do, and how they
                do in just the way their customers expect.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Web Based Application</a></h4>
              <p class="description">With the help of our highly qualified and skilled IT professionals, we have been
                able to serve our clients with valuable
                Web Application Development Services.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Android Application Development</a></h4>
              <p class="description">TekhWare is a Android app development company that provides offshore Android
                application development services built around
                specific business requirements of the customers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">IOT software prototype and Development</a></h4>
              <p class="description">Enhance your startup or business efficiency by making your devices smarter using
                our top-notch IoT application development
                services.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Custom Softwares</a></h4>
              <p class="description">A comprehensive range of custom softwares development services to boost your
                business with advanced technology &
                optimal cost and help you accomplish your goals.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>We design, build and support websites and apps for clients worldwide. We make your business stand out.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">After Sales Servics </h5>
                <p class="card-text">We don't want to push our ideas on to customers, we simply want to make what they
                  want.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Online exploration</h5>
                <p class="card-text">When you assume negative intent, you're angry. If you take away that anger and
                  assume positive intent, you will be
                  amazed.
                </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Network building</h5>
                <p class="card-text">A brand for a company is like a reputation for a person. You earn reputation by
                  trying to do hard things well.
                </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">100</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/rth.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/rht.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/2t.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/2t.jpeg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team"> -->
    <!-- <div class="container"> -->
    <!-- <div class="section-header"> -->
    <!-- <h3>Team</h3> -->
    <!--  <p>Your dream deserves more than a place in your imagination. Our developers can build the <mark>Web and -->

    <!-- mobile app</mark>to your -->
    <!-- requirement, in your budget and as per your timeline.</p> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="row"> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp"> -->
    <!-- <div class="member"> -->
    <!-- <img src="img/team-1.jpg" class="img-fluid" alt=""> -->
    <!-- <div class="member-info"> -->
    <!-- <div class="member-info-content"> -->
    <!-- <h4>Swaraj chaturvedi</h4> -->
    <!-- <span>software developer</span> -->
    <!-- <div class="social"> -->
    <!-- <a href=""><i class="fa fa-twitter"></i></a> -->
    <!-- <a href=""><i class="fa fa-facebook"></i></a> -->
    <!-- <a href=""><i class="fa fa-google-plus"></i></a> -->
    <!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> -->
    <!-- <div class="member"> -->
    <!-- <img src="img/team-2.jpeg" class="img-fluid" alt=""> -->
    <!-- <div class="member-info"> -->
    <!-- <div class="member-info-content"> -->
    <!-- <h4>ishita goyel</h4> -->
    <!-- <span>software developer</span> -->
    <!-- <div class="social"> -->
    <!-- <a href=""><i class="fa fa-twitter"></i></a> -->
    <!-- <a href=""><i class="fa fa-facebook"></i></a> -->
    <!-- <a href=""><i class="fa fa-google-plus"></i></a> -->
    <!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s"> -->
    <!-- <div class="member"> -->
    <!-- <img src="img/team-3.jpg" class="img-fluid" alt=""> -->
    <!-- <div class="member-info"> -->
    <!-- <div class="member-info-content"> -->
    <!-- <h4>Prasant Kumar</h4> -->
    <!-- <span>software developer</span> -->
    <!-- <div class="social"> -->
    <!-- <a href=""><i class="fa fa-twitter"></i></a> -->
    <!-- <a href=""><i class="fa fa-facebook"></i></a> -->
    <!-- <a href=""><i class="fa fa-google-plus"></i></a> -->
    <!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s"> -->
    <!-- <div class="member"> -->
    <!-- <img src="img/team-4.jpg" class="img-fluid" alt=""> -->
    <!-- <div class="member-info"> -->
    <!-- <div class="member-info-content"> -->
    <!-- <h4>Amanda Jepson</h4> -->
    <!-- <span>Accountant</span> -->
    <!-- <div class="social"> -->
    <!-- <a href=""><i class="fa fa-twitter"></i></a> -->
    <!-- <a href=""><i class="fa fa-facebook"></i></a> -->
    <!-- <a href=""><i class="fa fa-google-plus"></i></a> -->
    <!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- </div> -->
    <!-- </section>#team -->
    <!--  -->
    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="section-bg"> -->
    <!--  -->
    <!-- <div class="container"> -->
    <!--  -->
    <!-- <div class="section-header"> -->
    <!-- <h3>Our CLients</h3> -->
    <!-- <p>Our diverse client base across various industries have successfully leveraged our rich web expertise to -->

    <!-- launch highly -->
    <!-- scalable applications</p> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="row no-gutters clients-wrap clearfix wow fadeInUp"> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-1.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-2.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-3.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-4.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-5.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-6.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-7.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- <div class="col-lg-3 col-md-4 col-xs-6"> -->
    <!-- <div class="client-logo"> -->
    <!-- <img src="img/clients/client-8.png" class="img-fluid" alt=""> -->
    <!-- </div> -->
    <!-- </div> -->
    <!--  -->
    <!-- </div> -->
    <!--  -->
    <!-- </div> -->
    <!--  -->
    <!-- </section> -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.6075777980013!2d77.5911411776944!3d27.605693436646693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736ce47bffc039%3A0xfe5fc3da92c6341!2sGLA%20University!5e0!3m2!1sen!2sin!4v1604754905886!5m2!1sen!2sin" frameborder="0" style="border:0;width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-4  info ">
                <i class="ion-ios-email-outline"></i>
                <p class="text-secondary">contacts@tekhware.com</p>
              </div>
              <div class="col-md-6 info">
                <i class="ion-ios-telephone-outline"></i>
                <pre class="text-secondary">+91 74530 02645</pre>
              </div>
            </div>

            <div class="form">
              <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
              <!-- <div id="errormessage"></div> -->
              <form action="" method="POST" class="">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="cname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="cemail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="cPno" id="Phone" placeholder="Phone No." data-rule="minlen:4" data-msg="Please enter Phone NO." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="#selectwrk " class="text-secondary">Related Work </label>
                  <div class="container mb-3" name="selectwrk">
                    <div class="form-check">
                      <div class="col">
                        <input class="form-check-input" type="checkbox" name="wdev" id="gridCheck" value="Y">
                        <label class="form-check-label text-secondary" for="gridCheck">
                          Web Development
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="checkbox" name="adev" id="gridCheck" value="Y">
                        <label class="form-check-label text-secondary" for="gridCheck">
                          App Development
                        </label>
                      </div>
                    </div>
                    <div class="form-check">
                      <div class="col">
                        <input class="form-check-input" type="checkbox" name="iotdev" id="gridCheck" value="Y">
                        <label class="form-check-label text-secondary" for="gridCheck">
                          Iot Prototype & Software Devlp.
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="checkbox" name="lgdes" id="gridCheck" value="Y">
                        <label class="form-check-label text-secondary" for="gridCheck">
                          Logo,Poser & Business Card Design
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input" type="checkbox" name="other" id="gridCheck" value="Y">
                        <label class="form-check-label text-secondary" for="gridCheck">
                          Other
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="csubject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="cmessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" name="submitmssg">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>TekhWare
            </h3>
            <p>TekhWare is a software development company that has set new and higher quality standard for services. As
              a leader in
              Android App Development, Web Design, e-Commerce, Website Conversion, and Internet Marketing Services, our
              firm prides
              ourselves on driving traffic, converting visitors, and measuring effectiveness to ultimately deliver real
              results for
              our clients. TekhWare aim to make your online business experience smooth, speedy and efficient. With our
              strategic
              marketing approach, we make your business stand out from the competition and increase sales. </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              17km Stone, NH-2, <br>
              Mathura-Delhi Road Mathura,<br>
              Chaumuhan, Uttar Pradesh 281406
              <strong>Phone:</strong> +91 74530 02645<br><br>
              <strong>Email:</strong> contacts@tekhware.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Experience</h4>
            <p>We have carved out a niche in web application development alongside valued consulting and analysis
              solutions to serve
              growing businesses and industry leaders.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TekhWare</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">tekhware</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>