<!DOCTYPE html>
<html lang="en">
<?php
$contactus = 0;
$leadstatus = 0;
include('./includes/config.php');
include('./backend/contactus.php');
include('./backend/lead.php');
include('./includes/header.php');
?>
<body>
<?php
include('./includes/topbar.php');
include('./includes/nav_header.php');
include('./includes/hero_section.php');
?>
  <main id="main">
    <?php
    include('./includes/incon_boxes_section.php');
    include('./components/aboutus.php');
    include('./components/services.php');
    include('./components/calltoaction.php');
    include('./components/courses.php');
    include('./components/lead.php');
    ?>
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
                <p>support@active24by7.com</p>
                <p>info.active24by7@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 7671853535</p>
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

  <!-- Forgot Password Modal Start-->
  <div class="modal fade" id="forgotPassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <div class="modal-title section-title"><h2>Forgot Your Password!.</h2></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
       <!-- ======= Forgot Password Section Start ======= -->
    <section id="forgotpassword1" class="contact">
      <div class="container" data-aos="fade-up">

        <!-- <div class="section-title">
          <h2>Forgot Your Password!.</h2>
        </div> -->

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
                <div class="col-md-12 form-group">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" required>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
              <div class="text-center"><button type="submit" class="lead-btn"  name='leadformsubmit'>Get Password</button></div>
              <div class="text-center" >Do n't have an account? <a class="scrollto" href="#signup" data-dismiss="modal">Sign Up</a></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Forgot Password Section -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Forgot Password Modal End-->

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
              <li>Please Send mail to "support@active24by7.com & info.active24by7@gmail.com"</li>
              <li>Please Call to "+91 7671853535".</li>
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

  <?php
  include('includes/footer.php')
  ?>
  

</body>

</html>
