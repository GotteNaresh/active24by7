<!DOCTYPE html>
<html lang="en">
<?php
$active_menu = "login";
include('../includes/config.php');
include('../includes/header.php');
?>
<body>
<?php
include('../includes/topbar.php');
include('../includes/user_header.php');
$forgotpasswordstatus = 0;
include('../backend/forgotpassword.php');
?>
<main id="main">
<!-- ======= SignUp Section Start ======= -->
<section  class="contact"></section>

<section id="forgotpassword" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
              <?php
              if($forgotpasswordstatus === 2) {
              ?>
              <section class="status-message" >
              <div class='error'> 
              <p>Error - Invalid your email id!.Please try with correct your account email id,</p>
              <p>Please contact to our customer care phone number (+91 7671853535)!.,</p>
              </div>
              </section>
              <?php
              } 
              ?>
              <?php
              if($forgotpasswordstatus === 1) {
              ?>
              <section class="status-message" >
              <div class='success'> 
              <p>Success - Your new password has been sent your email id successfully.,</p>
              <p>Please check in your email inbox!.,</p>
              </div>
              </section>
              <?php
              } 
              ?>
            <form  method="post" role="form" class="forgotpassword-form php-email-form" name="forgotpassword-form" >
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" required>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
              <div class="text-center"><button type="submit" class="lead-btn"  name='forgotpasswordformsubmit'>Get Password</button></div>
              <div class="text-center" >Do n't have an account? <a class="scrollto" href="<?php echo $base_url?>/signup">Sign Up</a></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End SignUp Section -->
  </main>
  <?php
  include('../includes/footer.php')
  ?>
</body>
</html>