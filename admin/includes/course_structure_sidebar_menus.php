<?php
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
?>
<div class="sidebar-menu">
        <div class="sidebar-menu-inner">
          <header class="logo-env">
            <div class="logo logo-img">
              <a href="<?php echo $base_url?>">
                <img src="<?php echo $base_url?>/assets/images/courses/active24by7-profile-pic.jpg" width="120" alt="" />
              </a>
            </div>
            <div class="sidebar-collapse">
              <a href="#" class="sidebar-collapse-icon">
                <i class="entypo-menu"></i>
              </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
              <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
              </a>
            </div>
          </header>
          <ul id="main-menu" class="main-menu">
            <li>
              <a href="<?php echo $base_url?>">
                <i class="entypo-home"></i>
                <span class="title">Home</span>
              </a>
            </li>
             <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Introduction</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Welcome</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=1">
                    <span class="title">System Setup</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Basic Requirements</span>
                  </a>
                </li>
                <li>
                  <a href="../../layouts/chat-open/index.html">
                    <span class="title">Vs Code Editor Setup</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Print Hello World</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Basic Concepts</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Syntax</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Comments</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Variables</span>
                  </a>
                </li>
                <li>
                  <a href="../../layouts/chat-open/index.html">
                    <span class="title">Control Statements(IF, else, else if)</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Iterations(For Loop & while Loop)</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Advanced Concepts</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Array & Array Methods</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">String & String Methods</span>
                  </a>
                </li>
                <li>
                  <a href="../../layouts/chat-open/index.html">
                    <span class="title">Date & Date Methods</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">DOM Manipulations</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">ES6 Concepts</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Quiz</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">What is Mern</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Basic Concepts questions</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Advanced Concepts questions</span>
                  </a>
                </li>
                <li>
                  <a href="../../layouts/chat-open/index.html">
                    <span class="title">ES6 Concepts questions</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Project</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Create User Registration</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">Create User  Login</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="has-sub">
              <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                <i class="entypo-layout"></i>
                <span class="title">Mock Interview</span>
              </a>
              <ul>
                <li>
                  <a href="<?php echo $base_url?>/course-details/?id=<?php echo $id ?>&index=0">
                    <span class="title">121 Interview with Master</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>