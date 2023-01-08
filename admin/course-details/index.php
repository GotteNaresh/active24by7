<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demo.neontheme.com/ui/tiles/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 04:34:17 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  <?php
include('../includes/header.php');
  ?>
  <body class="page-body" data-url="https://demo.neontheme.com">
    <div class="page-container">
      <?php
      include('../includes/course_structure_sidebar_menus.php');
      ?>
      <div class="main-content">
      <?php
      include('../includes/user_menus.php');
      ?>
        <hr />
        <ol class="breadcrumb bc-3">
          <li>
            <a href="../../dashboard/main/index.html">
              <i class="fa-home"></i>Home </a>
          </li>
          <li class="active">
            <strong>Courses</strong>
          </li>
        </ol>
        <!-- <h2>Title - Tiles</h2>
        <br /> -->
        <div class="row">
            <video width="100%" controls>
            <source src="<?php echo $base_url?>/videos/courses/mern/basic/JavaScript_Variables.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
            </video>
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
    <link rel="stylesheet" href="../assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1">
    <script src="../assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
    <script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../assets/js/bootstrap.js" id="script-resource-3"></script>
    <script src="../assets/js/joinable.js" id="script-resource-4"></script>
    <script src="../assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="../assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="../assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src="../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script>
    <script src="../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script>
    <script src="../assets/js/neon-chat.js" id="script-resource-10"></script>
    <script src="../assets/js/neon-custom.js" id="script-resource-11"></script>
    <script src="../assets/js/neon-demo.js" id="script-resource-12"></script>
    <script src="../assets/js/neon-skins.js" id="script-resource-13"></script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-28991003-7']);
      _gaq.push(['_setDomainName', 'demo.neontheme.com']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
  <!-- Mirrored from demo.neontheme.com/ui/tiles/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 04:34:17 GMT -->
</html>