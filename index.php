<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Active 24/7 - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/active24by7-images/active24by7-profile-pic.jpg" rel="icon">
  <link href="assets/img/active24by7-images/active24by7-profile-pic.jpg" rel="active24by7-logo-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/active24by7.css" rel="stylesheet">
  
</head>
<?php
$contactus = 0;
$leadstatus = 0;
include('./backend/contactus.php');
include('./backend/lead.php');
?>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:support@active24by7.com">support@active24by7.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> <a>+91 8688388672</a>
      </div>
      <!-- <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">Get Started</a>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><img src='./assets/img/active24by7-images/active24by7_logo_new-22.png' class="active24by7-logo"/> <span class="logo-title-1">Active</span> <span class="logo-title-2">24/7</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Courses</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <!-- <h2>Up Coming Courses Slots</h2> -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <img class="slide" src="./assets/img/active24by7-images/slides/Facebook_Ad_Naresh_Gotte.png" />
          <!-- <h2 class="animate__animated animate__fadeInDown">ReactJs</span></h2>
          <p class="animate__animated animate__fadeInUp">Dive in and learn React.js from scratch! Learn Reactjs, Hooks, Redux, React Routing and way more!.</p> -->
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <img class="slide" src="./assets/img/active24by7-images/slides/Facebook_Ad_Naresh_Gotte.png" />
          <!-- <h2 class="animate__animated animate__fadeInDown">ReactJs</span></h2>
          <p class="animate__animated animate__fadeInUp">Dive in and learn React.js from scratch! Learn Reactjs, Hooks, Redux, React Routing and way more!.</p> -->
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <img class="slide" src="./assets/img/active24by7-images/slides/Facebook_Ad_Naresh_Gotte.png" />
          <!-- <h2 class="animate__animated animate__fadeInDown">ReactJs</span></h2>
          <p class="animate__animated animate__fadeInUp">Dive in and learn React.js from scratch! Learn Reactjs, Hooks, Redux, React Routing and way more!.</p> -->
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
  
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Create And Manage The Web Applications</a></h4>
              <p class="description">We are collect client requirements then we should develop the Web Applications.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Freelancing  Technical Support</a></h4>
              <p class="description">we are giving Technical support to Frontend and Backend Web Applications</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Online Training</a></h4>
              <p class="description">we are Conducting online training classes on daily and weekends for IT & Software Courses</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Offline Training</a></h4>
              <p class="description">we are providing the offline class room Training on web technologies Courses</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>The Active 24/7 is providing the Freelancing  tectnical support, Online Training , Offline Training and Conducting the mock Interviews.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              we need to provide solid IT & Software Technical Spport & Solutions to world wide all Digital Software Tools and Projects in innovative process.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> My First Agenda is who ever bocome a highly paid software engineer that people addressing or identify to them and give the best IT & software Courses to them and guide to them and push to place in a software JOB.</li>
              <li><i class="ri-check-double-line"></i> We want to know the which best trading web technologies and provide the technologies courses to all of us.</li>
              <li><i class="ri-check-double-line"></i>we are provide the software Development life cycle work flow for all projects </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              By using the frontend and backend web technologies. we have to give Technical support to we applications.We will give the online and offline training of who are interested to learn the web technologies. After Courses completed then conducting the mock interviews and test's. we should prepare the your resume bases on your skill set and company's requirement and we are properly guide to upto you will job.
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --><!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section> --><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Active24by7 is providing the services are web design, web Development, Project Management, Online and Offline Training, Freelancing  Technical Support, Conduction the Mock Intrviews and Preparing the resume.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Web Design</a></h4>
              <p>By using HTML, CSS, Bootstrap, SASS, Flexbox and Photoshop</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#"> Web Development</a></h4>
              <p>By using JavaScript, Jquery, ReactJs, NodeJs, ExpressJs and Restfull Web API's </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Project Management</a></h4>
              <p>Create new project, handle Project, add new requirement on existing project and manipulating the Project innovative ways..</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Freelancing  Technical Support</a></h4>
              <p>We are supporting of Web Design and Web Development Tools are: HTML, CSS, SASS, Flexbox, JavaScript, Jquery, NodeJs, ExpressJs, MongoDB, MySQL and Restful API's Integration and creation </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Conducting Mock Interview</a></h4>
              <p>We are Conducting Mock Interview after finished our course and guide to Preparing the Resume for Main Interviews.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Preparing your Resume</a></h4>
              <p>We are provide the sample resume to you and guide to you for your main interview.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>If you have any doubt then Can you please call to my phone number or send a mail to my support mail</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfoio Section ======= -->
    <!-- <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfoio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
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
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Available Courses</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>MERN Full Stack Development</h3>
              <ul>
                <li>MySQL and MongoDB - Database</li>
                <li>ExpressJs - NodeJs Framework</li>
                <li>ReactJs - JavaScript Library</li>
                <li>NodeJs</li>
                <!-- <li class="na"><sup>Rs</sup>29999<span></li> -->
              </ul>
              <h4><sup>Rs</sup>29999<span>/-</span></h4>
              <div> Duration : 3 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
                <!-- <button type="button" class=" btn-buy btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now</button> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>MEAN Full Stack Development</h3>
              <ul>
                <li>MySQL and MongoDB - Database</li>
                <li>ExpressJs - NodeJs Framework</li>
                <li>Angular - JavaScript Framework</li>
                <li>NodeJs</li>
                <!-- <li class="na"><sup>Rs</sup>29999<span></li> -->
              </ul>
              <h4><sup>Rs</sup>29999<span>/-</span></h4>
              <div> Duration : 3 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Frontend design</h3>
              <ul>
                <li>HTML & HTML 5</li>
                <li>CSS & CSS3</li>
                <li>Photoshop</li>
                <li>Bootstrap</li>
                <li>Flexbox</li>
                <li>SASS</li>
              </ul>
              <h4><sup>Rs</sup>29999<span>/-</span></h4>
              <div> Duration : 3 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Frontend Development</h3>
              <ul>
                <li>JavaScript</li>
                <li>Jquery</li>
                <li>Angular</li>
                <li>ReactJs</li>
              </ul>
              <h4><sup>Rs</sup>14999<span>/-</span></h4>
              <div> Duration : 2 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Backend Development</h3>
              <ul>
                <li>NodeJs</li>
                <li>ExpressJS</li>
                <li>PHP</li>
                <li>CodeIgniter</li>
              </ul>
              <h4><sup>Rs</sup>14999<span>/-</span></h4>
              <div> Duration : 2 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>ReactJs</h3>
              <ul>
                <li></li>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>14999<span>/-</span></h4>
              <div> Duration : 2 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>JavaScript</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>14999<span>/-</span></h4>
              <div> Duration : 2 Months </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Jquery</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>NodeJs & ExpressJs</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>MySQL & MongoDB</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>HTML & HTML 5</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>CSS & CSS3</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>SASS</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Flexbox</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Restful Web API's creation & Integration</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>GitHub , VSCode, Windows, Linux and Agile Work Flow</h3>
              <ul>
                <li>Basic Concepts</li>
                <li>Advanced concepts</li>
                <li>Create 1 Project</li>
                <li>Real-Time Project Work(for Basic Experience)</li>
              </ul>
              <h4><sup>Rs</sup>9999<span>/-</span></h4>
              <div> Duration : 45 Days </div>
              <div class="btn-wrap">
                <a href="#lead" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> --><!-- End Frequently Asked Questions Section -->

    

    <!-- ======= Lead Section ======= -->
    <section id="lead" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Please Fill Your Requirement Details</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
              <?php
              if($leadstatus === 1) {
              ?>
              <section class="status-message" >
              <div class='success'> 
              Your Information has been Submitted successfully.And we will call to you soon!..
              <script>
              alert("Your Information has been Submitted successfully.And we will call to you soon!..");
              </script>
              </div>
              </section>
              <?php
              }
              ?>
            <form  method="post" role="form" class="lead-us-form php-email-form" name="lead-us-form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your Last Name" required>
                </div>
                <div class="col-md-6 form-group">
                <select name="countrycode" id="countrycode" class="form-control col-md-3">
                <option data-countryCode="GB" value="44" >Norway (+47)</option>
                <option data-countryCode="US" value="1">UK (+44)</option>
                <optgroup label="Other countries">
                  <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                  <option data-countryCode="AD" value="376">Andorra (+376)</option>
                  <option data-countryCode="AO" value="244">Angola (+244)</option>
                  <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                  <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                  <option data-countryCode="AR" value="54">Argentina (+54)</option>
                  <option data-countryCode="AM" value="374">Armenia (+374)</option>
                  <option data-countryCode="AW" value="297">Aruba (+297)</option>
                  <option data-countryCode="AU" value="61">Australia (+61)</option>
                  <option data-countryCode="AT" value="43">Austria (+43)</option>
                  <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                  <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                  <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                  <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                  <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                  <option data-countryCode="BY" value="375">Belarus (+375)</option>
                  <option data-countryCode="BE" value="32">Belgium (+32)</option>
                  <option data-countryCode="BZ" value="501">Belize (+501)</option>
                  <option data-countryCode="BJ" value="229">Benin (+229)</option>
                  <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                  <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                  <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                  <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                  <option data-countryCode="BW" value="267">Botswana (+267)</option>
                  <option data-countryCode="BR" value="55">Brazil (+55)</option>
                  <option data-countryCode="BN" value="673">Brunei (+673)</option>
                  <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                  <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                  <option data-countryCode="BI" value="257">Burundi (+257)</option>
                  <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                  <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                  <option data-countryCode="CA" value="1">Canada (+1)</option>
                  <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                  <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                  <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                  <option data-countryCode="CL" value="56">Chile (+56)</option>
                  <option data-countryCode="CN" value="86">China (+86)</option>
                  <option data-countryCode="CO" value="57">Colombia (+57)</option>
                  <option data-countryCode="KM" value="269">Comoros (+269)</option>
                  <option data-countryCode="CG" value="242">Congo (+242)</option>
                  <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                  <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                  <option data-countryCode="HR" value="385">Croatia (+385)</option>
                  <option data-countryCode="CU" value="53">Cuba (+53)</option>
                  <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                  <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                  <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                  <option data-countryCode="DK" value="45">Denmark (+45)</option>
                  <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                  <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                  <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                  <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                  <option data-countryCode="EG" value="20">Egypt (+20)</option>
                  <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                  <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                  <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                  <option data-countryCode="EE" value="372">Estonia (+372)</option>
                  <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                  <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                  <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                  <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                  <option data-countryCode="FI" value="358">Finland (+358)</option>
                  <option data-countryCode="FR" value="33">France (+33)</option>
                  <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                  <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                  <option data-countryCode="GA" value="241">Gabon (+241)</option>
                  <option data-countryCode="GM" value="220">Gambia (+220)</option>
                  <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                  <option data-countryCode="DE" value="49">Germany (+49)</option>
                  <option data-countryCode="GH" value="233">Ghana (+233)</option>
                  <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                  <option data-countryCode="GR" value="30">Greece (+30)</option>
                  <option data-countryCode="GL" value="299">Greenland (+299)</option>
                  <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                  <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                  <option data-countryCode="GU" value="671">Guam (+671)</option>
                  <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                  <option data-countryCode="GN" value="224">Guinea (+224)</option>
                  <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                  <option data-countryCode="GY" value="592">Guyana (+592)</option>
                  <option data-countryCode="HT" value="509">Haiti (+509)</option>
                  <option data-countryCode="HN" value="504">Honduras (+504)</option>
                  <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                  <option data-countryCode="HU" value="36">Hungary (+36)</option>
                  <option data-countryCode="IS" value="354">Iceland (+354)</option>
                  <option data-countryCode="IN" value="91" Selected >India (+91)</option>
                  <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                  <option data-countryCode="IR" value="98">Iran (+98)</option>
                  <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                  <option data-countryCode="IE" value="353">Ireland (+353)</option>
                  <option data-countryCode="IL" value="972">Israel (+972)</option>
                  <option data-countryCode="IT" value="39">Italy (+39)</option>
                  <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                  <option data-countryCode="JP" value="81">Japan (+81)</option>
                  <option data-countryCode="JO" value="962">Jordan (+962)</option>
                  <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                  <option data-countryCode="KE" value="254">Kenya (+254)</option>
                  <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                  <option data-countryCode="KP" value="850">Korea North (+850)</option>
                  <option data-countryCode="KR" value="82">Korea South (+82)</option>
                  <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                  <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                  <option data-countryCode="LA" value="856">Laos (+856)</option>
                  <option data-countryCode="LV" value="371">Latvia (+371)</option>
                  <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                  <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                  <option data-countryCode="LR" value="231">Liberia (+231)</option>
                  <option data-countryCode="LY" value="218">Libya (+218)</option>
                  <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                  <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                  <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                  <option data-countryCode="MO" value="853">Macao (+853)</option>
                  <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                  <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                  <option data-countryCode="MW" value="265">Malawi (+265)</option>
                  <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                  <option data-countryCode="MV" value="960">Maldives (+960)</option>
                  <option data-countryCode="ML" value="223">Mali (+223)</option>
                  <option data-countryCode="MT" value="356">Malta (+356)</option>
                  <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                  <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                  <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                  <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                  <option data-countryCode="MX" value="52">Mexico (+52)</option>
                  <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                  <option data-countryCode="MD" value="373">Moldova (+373)</option>
                  <option data-countryCode="MC" value="377">Monaco (+377)</option>
                  <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                  <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                  <option data-countryCode="MA" value="212">Morocco (+212)</option>
                  <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                  <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                  <option data-countryCode="NA" value="264">Namibia (+264)</option>
                  <option data-countryCode="NR" value="674">Nauru (+674)</option>
                  <option data-countryCode="NP" value="977">Nepal (+977)</option>
                  <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                  <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                  <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                  <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                  <option data-countryCode="NE" value="227">Niger (+227)</option>
                  <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                  <option data-countryCode="NU" value="683">Niue (+683)</option>
                  <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                  <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                  <option data-countryCode="NO" value="47">Norway (+47)</option>
                  <option data-countryCode="OM" value="968">Oman (+968)</option>
                  <option data-countryCode="PW" value="680">Palau (+680)</option>
                  <option data-countryCode="PA" value="507">Panama (+507)</option>
                  <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                  <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                  <option data-countryCode="PE" value="51">Peru (+51)</option>
                  <option data-countryCode="PH" value="63">Philippines (+63)</option>
                  <option data-countryCode="PL" value="48">Poland (+48)</option>
                  <option data-countryCode="PT" value="351">Portugal (+351)</option>
                  <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                  <option data-countryCode="QA" value="974">Qatar (+974)</option>
                  <option data-countryCode="RE" value="262">Reunion (+262)</option>
                  <option data-countryCode="RO" value="40">Romania (+40)</option>
                  <option data-countryCode="RU" value="7">Russia (+7)</option>
                  <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                  <option data-countryCode="SM" value="378">San Marino (+378)</option>
                  <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                  <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                  <option data-countryCode="SN" value="221">Senegal (+221)</option>
                  <option data-countryCode="CS" value="381">Serbia (+381)</option>
                  <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                  <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                  <option data-countryCode="SG" value="65">Singapore (+65)</option>
                  <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                  <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                  <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                  <option data-countryCode="SO" value="252">Somalia (+252)</option>
                  <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                  <option data-countryCode="ES" value="34">Spain (+34)</option>
                  <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                  <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                  <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                  <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                  <option data-countryCode="SD" value="249">Sudan (+249)</option>
                  <option data-countryCode="SR" value="597">Suriname (+597)</option>
                  <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                  <option data-countryCode="SE" value="46">Sweden (+46)</option>
                  <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                  <option data-countryCode="SI" value="963">Syria (+963)</option>
                  <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                  <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                  <option data-countryCode="TH" value="66">Thailand (+66)</option>
                  <option data-countryCode="TG" value="228">Togo (+228)</option>
                  <option data-countryCode="TO" value="676">Tonga (+676)</option>
                  <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                  <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                  <option data-countryCode="TR" value="90">Turkey (+90)</option>
                  <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                  <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                  <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                  <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                  <option data-countryCode="UG" value="256">Uganda (+256)</option>
                  <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                  <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                  <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                  <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                  <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                  <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                  <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                  <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                  <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                  <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                  <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                  <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                  <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                  <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                  <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                  <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                  <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                </optgroup>
              </select>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" name="phone" class="form-control col-md-6 col-md-3" id="phone" placeholder="Your Phone" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
              <!-- <label for="slot">Choose your time slot:</label> -->
                <input class="form-control" list="slots" name="slot" id="slot" placeholder="Time Slot" required >
                <datalist id="slots">
                  <option value="06AM - 07AM (Daily)">
                  <option value="07AM - 08AM (Daily)">
                  <option value="08AM - 09AM (Daily)">
                  <option value="10AM - 11AM (Daily)">
                  <option value="11AM - 12AM (Daily)">
                  <option value="06PM - 07PM (Daily)">
                  <option value="07PM - 08PM (Daily)">
                  <option value="08PM - 09PM (Daily)">
                  <option value="10PM - 11PM (Daily)">
                  <option value="11PM - 12PM (Daily)">
                  <option value="06AM - 07AM (Weekends{Sat and Sun})">
                  <option value="07AM - 09AM (Weekends{Sat and Sun})">
                  <option value="09AM - 11AM (Weekends{Sat and Sun})">
                  <option value="11AM - 01PM (Weekends{Sat and Sun})">
                  <option value="03PM - 05PM (Weekends{Sat and Sun})">
                  <option value="05PM - 07PM (Weekends{Sat and Sun})">
                  <option value="07PM - 09PM (Weekends{Sat and Sun})">
                </datalist>
              </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
              </div>
              <div class="form-group mt-3">
                <label for="course">Choose your course from the list:</label>
                <input class="form-control" list="courses" name="course" id="course" placeholder="Course" required >
                <datalist id="courses">
                <option value="MERN Full Stack Development(Rs-29999/-)">
                <option value="MEAN Full Stack Development(Rs-29999/-)">
                <option value="Frontend Design(Rs-29999/-)">
                <option value="Frontend Development(Rs-14999/-)">
                <option value="Backend Development(Rs-14999/-)">
                <option value="ReactJs(Rs-14999/-)">
                <option value="JavaScipt(Rs-14999/-)">
                <option value="Jquery(Rs-9999/-)">
                <option value="NodeJs & ExpressJs(Rs-9999/-)">
                <option value="MySQL & MongoDB(Rs-9999/-)">
                <option value="HTML & HTML5 (Rs-9999/-)">
                <option value="CSS & CSS# (Rs-9999/-)">
                <option value="SASS (Rs-9999/-)">
                <option value="FlexBox (Rs-9999/-)">
                <option value="Restful Web API's Creating & Integration (Rs-9999/-)">
                <option value="GitHUb, VSCode, Windows, Linux And Agile Work Flow (Rs-9999/-)">
                </datalist>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="address" rows="5" placeholder="Adress" required></textarea>
              </div> -->
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="lead-btn"  name='leadformsubmit'>Register Course</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hyderabad, Telangana, India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8688388672</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
              <?php
              if($contactus === 1) {
              ?>
              <section class="status-message" >
              <div class='success'> 
              Your Information has been Submitted successfully.And we will call to you soon!..
              <script>
              alert("Your Information has been Submitted successfully.And we will call to you soon!..");
              </script>
              </div>
              </section>
              <?php
              }
              ?>
            <form  method="post" role="form" class="contact-us-form php-email-form" name="contact-us-form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your Last Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="address" rows="5" placeholder="Adress" required></textarea>
              </div> -->
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="contact-btn"  name='contactformsubmit'>Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Modal Start-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Modal Header</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class=''>If you have interested then,</p>
          <ul class="details">
              <li>Please Send mail to "support@active24by7.com"</li>
              <li>Please Call to "+91 8688388672".</li>
              <li>Please fill <a href="#contact">Contact Form </a> then I will call to you soon!..</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal End-->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service & Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Online & Offline Training</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Freelancing  Technical Support</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Hyderabad <br>
              Telangana<br>
              India <br><br>
              <strong>Phone:</strong> +91 8688388672<br>
              <strong>Email:</strong> support@activeby7.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Active 24 / 7</h3>
            <p>The Active 24/7 is providing the Freelancing  tectnical support, Online Training , Offline Training and Conducting the mock Interviews.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Active 24/7</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">active 24/7</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="assets/js/contactus.js"></script>
  <script src="assets/js/lead.js"></script>
  

</body>

</html>