<?php
session_start();
?>
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
$loginstatus = 0;
$user_id = '';
include('../backend/login.php');
?>
<main id="main">
<!-- ======= SignUp Section Start ======= -->
<section  class="contact"></section>

<section id="login" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
              <?php
              if($loginstatus === 2) {
              ?>
              <section class="status-message" >
              <div class='error'> 
              <p>Error - Invalid your login details!.Please try with correct your account details,</p>
              <p>Please contact to our customer care phone number (+91 7671853535)!.,</p>
              </div>
              </section>
              <?php
              } else if($loginstatus === 1) {
                ?>
                <script>
                  window.location.href = "<?php echo $base_url?>/admin/";
                </script>
                <?php
              } 
              ?>
            <form  method="post" role="form" class="login-form php-email-form" name="login-form" >
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="username" class="form-control" id="email" placeholder="Email Address" required>
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <div class="text-center">
                  <a class=""  href="<?php echo $base_url?>/forgotpassword" > Forgot Password</a>
                  </div>
                </div>
              <div class="text-center"><button type="submit" class="lead-btn"  name='loginformsubmit'>Login</button></div>
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