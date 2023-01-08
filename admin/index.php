<?php
session_start();
$loginstatus = 0;
include('../backend/getuserdetails.php');
include('includes/config.php');
if($loginstatus !== 1) {
  ?>
  <script>
  window.location.href = "<?php echo $userpanel_base_url?>";
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demo.neontheme.com/ui/tiles/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 04:34:17 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  <?php
      include('includes/header.php');
  ?>
  <body class="page-body" data-url="https://demo.neontheme.com">
    <div class="page-container">
      <?php
      include('includes/main_sidebar_menus.php');
      ?>
      <div class="main-content">
      <?php
      include('includes/user_menus.php');
      ?>
        <hr />
        <ol class="breadcrumb bc-3">
          <li>
            <a href="../dashboard/main/index.html">
              <i class="fa-home"></i>Home </a>
          </li>
          <li class="active">
            <strong>Courses</strong>
          </li>
        </ol>
        <!-- <h2>Title - Tiles</h2>
        <br /> -->
        <div class="row">
          <div class="col-sm-3">
            <div class="tile-title tile-purple">
              <div class="icon">
                <img src="assets/images/courses/mern_img.jpg" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>MERN Full Stack Development</h3>
                <p>Price : 29999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-red">
              <div class="icon">
                <img src="assets/images/courses/mean_img.jpg" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>MEAN Full Stack Development</h3>
                <p>Price : 29999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-blue">
              <div class="icon">
                <img src="assets/images/courses/front-end-design.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>Frontend Design</h3>
                <p>Price : 29999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-purple">
              <div class="icon">
                <img src="assets/images/courses/frontend-development.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>Frontend Development</h3>
                <p>Price : 14999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm-3">
            <div class="tile-title tile-cyan">
              <div class="icon">
                <img src="assets/images/courses/frontend-development.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>Backend Development</h3>
                <p>Price : 14999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-aqua">
              <div class="icon">
                <img src="assets/images/courses/reactjs.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>ReactJs</h3>
                <p>Price : 14999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-orange">
              <div class="icon">
                <img src="assets/images/courses/javascript.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>JavaScript</h3>
                <p>Price : 14999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-pink">
              <div class="icon">
                <img src="assets/images/courses/Logo_jQuery.svg" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>Jquery</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm-3">
            <div class="tile-title tile-blue">
              <div class="icon">
                <img src="assets/images/courses/nodejs.svg" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>NodeJs & ExpressJs</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-brown">
            <div class="icon">
                <img src="assets/images/courses/mysql_and_mongodb.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>MySQL & MongoDB</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-orange">
            <div class="icon">
                <img src="assets/images/courses/html-5.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>HTML & HTML5</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-red">
              <div class="icon">
                <img src="assets/images/courses/css3.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>CSS & CSS3</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-grey">
            <div class="icon">
                <img src="assets/images/courses/sass.svg" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>SASS</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-purple">
            <div class="icon">
                <img src="assets/images/courses/flexbox.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>FlexBox</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-red">
            <div class="icon">
                <img src="assets/images/courses/restful_api.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>Restful Web API's creation & Integration</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="tile-title tile-green">
            <div class="icon">
                <img src="assets/images/courses/git_workflow.png" alt=""  class="course-img" />
              </div>
              <div class="title">
                <h3>GitHub , VSCode, Windows, Linux and Agile Work Flow</h3>
                <p>Price : 9999/-</p>
                <p>Validity : 20 Dec 2023(1 Year Only)</p>
              </div>
            </div>
          </div>
        </div>
        <footer class="main">
          <div class="pull-right">
            <a href="https://themeforest.net/item/neon-bootstrap-admin-theme/6434477?ref=Laborator" target="_blank">
              <strong>Purchase this theme for $25</strong>
            </a>
          </div> &copy; 2022 <strong>Neon</strong> Admin Theme by <a href="https://laborator.co/" target="_blank">Laborator</a>
        </footer>
      </div>
      <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
        <div class="chat-inner">
          <h2 class="chat-header">
            <a href="#" class="chat-close">
              <i class="entypo-cancel"></i>
            </a>
            <i class="entypo-users"></i> Chat <span class="badge badge-success is-hidden">0</span>
          </h2>
          <div class="chat-group" id="group-1">
            <strong>Favorites</strong>
            <a href="#" id="sample-user-123" data-conversation-history="#sample_history">
              <span class="user-status is-online"></span>
              <em>Catherine J. Watkins</em>
            </a>
            <a href="#">
              <span class="user-status is-online"></span>
              <em>Nicholas R. Walker</em>
            </a>
            <a href="#">
              <span class="user-status is-busy"></span>
              <em>Susan J. Best</em>
            </a>
            <a href="#">
              <span class="user-status is-offline"></span>
              <em>Brandon S. Young</em>
            </a>
            <a href="#">
              <span class="user-status is-idle"></span>
              <em>Fernando G. Olson</em>
            </a>
          </div>
          <div class="chat-group" id="group-2">
            <strong>Work</strong>
            <a href="#">
              <span class="user-status is-offline"></span>
              <em>Robert J. Garcia</em>
            </a>
            <a href="#" data-conversation-history="#sample_history_2">
              <span class="user-status is-offline"></span>
              <em>Daniel A. Pena</em>
            </a>
            <a href="#">
              <span class="user-status is-busy"></span>
              <em>Rodrigo E. Lozano</em>
            </a>
          </div>
          <div class="chat-group" id="group-3">
            <strong>Social</strong>
            <a href="#">
              <span class="user-status is-busy"></span>
              <em>Velma G. Pearson</em>
            </a>
            <a href="#">
              <span class="user-status is-offline"></span>
              <em>Margaret R. Dedmon</em>
            </a>
            <a href="#">
              <span class="user-status is-online"></span>
              <em>Kathleen M. Canales</em>
            </a>
            <a href="#">
              <span class="user-status is-offline"></span>
              <em>Tracy J. Rodriguez</em>
            </a>
          </div>
        </div>
        <div class="chat-conversation">
          <div class="conversation-header">
            <a href="#" class="conversation-close">
              <i class="entypo-cancel"></i>
            </a>
            <span class="user-status"></span>
            <span class="display-name"></span>
            <small></small>
          </div>
          <ul class="conversation-body"></ul>
          <div class="chat-textarea">
            <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
          </div>
        </div>
      </div>
      <ul class="chat-history" id="sample_history">
        <li>
          <span class="user">Art Ramadani</span>
          <p>Are you here?</p>
          <span class="time">09:00</span>
        </li>
        <li class="opponent">
          <span class="user">Catherine J. Watkins</span>
          <p>This message is pre-queued.</p>
          <span class="time">09:25</span>
        </li>
        <li class="opponent">
          <span class="user">Catherine J. Watkins</span>
          <p>Whohoo!</p>
          <span class="time">09:26</span>
        </li>
        <li class="opponent unread">
          <span class="user">Catherine J. Watkins</span>
          <p>Do you like it?</p>
          <span class="time">09:27</span>
        </li>
      </ul>
      <ul class="chat-history" id="sample_history_2">
        <li class="opponent unread">
          <span class="user">Daniel A. Pena</span>
          <p>I am going out.</p>
          <span class="time">08:21</span>
        </li>
        <li class="opponent unread">
          <span class="user">Daniel A. Pena</span>
          <p>Call me when you see this message.</p>
          <span class="time">08:27</span>
        </li>
      </ul>
    </div>
    <?php
      include('includes/footer.php');
    ?>
  </body>
  <!-- Mirrored from demo.neontheme.com/ui/tiles/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 04:34:17 GMT -->
</html>