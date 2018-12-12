<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin Dashboard PPJCP 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <link href="<?php echo base_url(); ?>assets/back/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/plugins/shape-hover/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/plugins/shape-hover/css/component.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/plugins/owl-carousel/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/plugins/owl-carousel/owl.theme.css" />
  <link href="<?php echo base_url(); ?>assets/back/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?php echo base_url(); ?>assets/back/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
  <!-- BEGIN CORE CSS FRAMEWORK -->
  <link href="<?php echo base_url(); ?>assets/back/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/css/animate.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
  <!-- END CORE CSS FRAMEWORK -->

  <!-- BEGIN CSS TEMPLATE -->
  <link href="<?php echo base_url(); ?>assets/back/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/back/css/magic_space.css" rel="stylesheet" type="text/css"/>
  <!-- END CSS TEMPLATE -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
  <!-- BEGIN HEADER -->
  <div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
      <div class="header-seperation">
        <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
          <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
            <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
        </ul>
        <!-- BEGIN LOGO -->

        <center><h1><b>PPJCP5</b></h1></center>

      </div>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <div class="header-quick-nav" >
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="pull-left">
          <ul class="nav quick-section">
            <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
              <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
          </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
        <!-- BEGIN CHAT TOGGLER -->
        <div class="pull-right">

          <div class="chat-toggler">
            <div class="user-details">
              <div class="username"> <span class="bold">John Smith</span> </div>
            </div>
            <div class="profile-pic"> <img src="<?php echo base_url(); ?>assets/back/img/profiles/avatar_small.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/avatar_small2x.jpg" width="35" height="35" /> </div>
          </div>
          <ul class="nav quick-section ">
            <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
              <div class="iconset top-settings-dark "></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href="user-profile.html"> My Account</a> </li>
              <li><a href="calender.html">My Calendar</a> </li>
              <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a> </li>
              <li class="divider"></li>
              <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">

      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
      <ul>
        <li class="start "> <a href="index.html" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow open"></span> </a>
          <ul class="sub-menu">
            <li > <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
            <li class="active"> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul>
        </li>
        <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span> <span class="label label-important pull-right ">HOT</span></a> </li>
        <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span></a> </li>
        <li class=""> <a href="../../frontend/index.html"> <i class="fa fa-flag"></i>  <span class="title">Frontend</span></a></li>
        <li class="active open "> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">Themes</span> <span class="arrow open"></span> </a>
          <ul class="sub-menu">
            <li > <a href="theme_coporate.html">Coporate </a> </li>
            <li > <a href="theme_simple.html">Simple</a> </li>
            <li > <a href="theme_elegant.html">Elegant</a> </li>
          </ul>
        </li>

      </ul>

      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>

  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
      <!-- BEGIN DASHBOARD TILES -->

      <!-- END DASHBOARD TILES -->
      <div class="row" >
        <!-- BEGIN WORLD MAP WIDGET - MAP -->

        <!-- END WORLD MAP WIDGET - CRAFT MAP -->

        <!-- BEGIN REALTIME SALES GRAPH -->
        <div class="col-md-4 col-vlg-4 m-b-10 ">
          <div class="tiles white">

            <div class="row">
              <div class="sales-graph-heading">
                <div class="col-md-5 col-sm-5">
                  <h5 class="no-margin">You have earned</h5>
                  <h4><span class="item-count animate-number semi-bold" data-value="21451" data-animation-duration="700">0</span> USD</h4>
                </div>
                <div class="col-md-3 col-sm-3">
                  <p class="semi-bold">TODAY</p>
                  <h4><span class="item-count animate-number semi-bold" data-value="451" data-animation-duration="700">0</span> USD</h4>
                </div>
                <div class="col-md-4 col-sm-3">
                  <p class="semi-bold">THIS MONTH</p>
                  <h4><span class="item-count animate-number semi-bold" data-value="8514" data-animation-duration="700">0</span> USD</h4>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <h5 class="semi-bold m-t-30 m-l-30">LAST SALE</h5>
            <table class="table no-more-tables m-t-20 m-l-20 m-b-30">
              <thead style="display:none">
                <tr>
                  <th style="width:9%">Project Name</th>
                  <th style="width:22%">Description</th>
                  <th style="width:6%">Price</th>
                  <th style="width:1%"> </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="v-align-middle bold text-success">25601</td>
                  <td class="v-align-middle"><span class="muted">Redesign project template</span> </td>
                  <td><span class="muted bold text-success">$4,500</span> </td>
                  <td class="v-align-middle"></td>
                </tr>
                <tr>
                  <td class="v-align-middle bold text-success">25601</td>
                  <td class="v-align-middle"><span class="muted">Redesign project template</span> </td>
                  <td><span class="muted bold text-success">$4,500</span> </td>
                  <td class="v-align-middle"></td>
                </tr>
              </tbody>
            </table>
            <div id="sales-graph"> </div>
            
          </div>
        </div>
        <!-- END REALTIME SALES GRAPH -->
      </div>






    </div>
  </div>
  <!-- BEGIN CHAT -->
  <div class="chat-window-wrapper">
    <div id="main-chat-wrapper" class="inner-content">
      <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >
        <div class="chat-header">
          <div class="pull-left">
            <input type="text" placeholder="search">
          </div>
          <div class="pull-right">
            <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
          </div>
        </div>
        <div class="side-widget">
          <div class="side-widget-title">group chats</div>
          <div class="side-widget-content">
            <div id="groups-list">
              <ul class="groups" >
                <li><a href="#"><div class="status-icon green"></div>Office work</a></li>
                <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="side-widget fadeIn">
          <div class="side-widget-title">favourites</div>
          <div id="favourites-list">
            <div class="side-widget-content" >
              <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                <div class="user-profile">
                  <img src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="user-name">
                    Jane Smith
                  </div>
                  <div class="user-more">
                    Hello you there?
                  </div>
                </div>
                <div class="user-details-status-wrapper">
                  <span class="badge badge-important">3</span>
                </div>
                <div class="user-details-count-wrapper">
                  <div class="status-icon green"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="David Nester">
                <div class="user-profile">
                  <img src="<?php echo base_url(); ?>assets/back/img/profiles/c.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/c.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/c2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="user-name">
                    David Nester
                  </div>
                  <div class="user-more">
                    Busy, Do not disturb
                  </div>
                </div>
                <div class="user-details-status-wrapper">
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-count-wrapper">
                  <div class="status-icon red"></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="side-widget">
          <div class="side-widget-title">more friends</div>
          <div class="side-widget-content" id="friends-list">
            <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="Jane Smith">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="user-name">
                  Jane Smith
                </div>
                <div class="user-more">
                  Hello you there?
                </div>
              </div>
              <div class="user-details-status-wrapper">

              </div>
              <div class="user-details-count-wrapper">
                <div class="status-icon green"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="David Nester">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/h.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/h.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/h2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="user-name">
                  David Nester
                </div>
                <div class="user-more">
                  Busy, Do not disturb
                </div>
              </div>
              <div class="user-details-status-wrapper">
                <div class="clearfix"></div>
              </div>
              <div class="user-details-count-wrapper">
                <div class="status-icon red"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="Jane Smith">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/c.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/c.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/c2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="user-name">
                  Jane Smith
                </div>
                <div class="user-more">
                  Hello you there?
                </div>
              </div>
              <div class="user-details-status-wrapper">

              </div>
              <div class="user-details-count-wrapper">
                <div class="status-icon green"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-chat-user-pic-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" data-user-name="David Nester">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/h.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/h.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/h2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="user-name">
                  David Nester
                </div>
                <div class="user-more">
                  Busy, Do not disturb
                </div>
              </div>
              <div class="user-details-status-wrapper">
                <div class="clearfix"></div>
              </div>
              <div class="user-details-count-wrapper">
                <div class="status-icon red"></div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
        <div class="chat-header">
          <div class="pull-left">
            <input type="text" placeholder="search">
          </div>
          <div class="pull-right">
            <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="chat-messages-header">
          <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
          <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
        </div>
        <div class="chat-messages scrollbar-dynamic clearfix">
          <div class="inner-scroll-content clearfix">
            <div class="sent_time">Yesterday 11:25pm</div>
            <div class="user-details-wrapper " >
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="bubble">
                  Hello, You there?
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="bubble">
                  How was the meeting?
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
              <div class="user-profile">
                <img src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg"  alt="" data-src="<?php echo base_url(); ?>assets/back/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/back/img/profiles/d2x.jpg" width="35" height="35">
              </div>
              <div class="user-details">
                <div class="bubble">
                  Let me know when you free
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="sent_time ">Today 11:25pm</div>
            <div class="user-details-wrapper pull-right">
              <div class="user-details">
                <div class="bubble sender">
                  Let me know when you free
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="sent_time off">Sent On Tue, 2:45pm</div>
            </div>
          </div>
        </div>
        <div class="chat-input-wrapper" style="display:none">
          <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- END CHAT -->
</div>

<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->

<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<![endif]-->

<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/Mapplic/js/jquery.easing.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/Mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/Mapplic/js/hammer.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/Mapplic/mapplic/mapplic.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript" ></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo base_url(); ?>assets/back/js/core.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/js/chat.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/back/js/dashboard_v2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
  $(".live-tile,.flip-list").liveTile();
});
</script>

<!-- END CORE TEMPLATE JS -->
</body>
</html>
