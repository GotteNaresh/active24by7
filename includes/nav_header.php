<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo $base_url?>"><img src='<?php echo $base_url ?>/assets/img/active24by7-images/active24by7_logo_new-22.png' class="active24by7-logo"/> <span class="logo-title-1">Active</span> <span class="logo-title-2">24/7</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php echo $active_menu == '' || $active_menu == 'hero' ? 'active' : '' ?> " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto <?php echo $active_menu == 'about' ? 'active' : '' ?> " href="#about">About Us</a></li>
          <li><a class="nav-link scrollto <?php echo $active_menu == 'services' ? 'active' : '' ?> " href="#services">Services</a></li>
          <li><a class="nav-link scrollto <?php echo $active_menu == 'courses' ? 'active' : '' ?> " href="#courses">Courses</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#courses">courses</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#courses">courses</a></li>
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
          <li><a class="nav-link scrollto <?php echo $active_menu == 'contact' ? 'active' : '' ?> " href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto <?php echo $active_menu == 'login' ? 'active' : '' ?> " href="<?php echo $base_url ?>/login">Login</a></li>
          <li><a class="nav-link scrollto <?php echo $active_menu == 'signup' ? 'active' : '' ?> " href="<?php echo $base_url?>/signup">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->