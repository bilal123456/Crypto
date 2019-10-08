<!DOCTYPE html>
<html>
<?php session_start();
include('Admin/Database/Connection.php');
$email = $_SESSION['email'];
$id = $_SESSION['id'];
?>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FXTRADING CORP.</title>
        <link rel="icon" href="/static/assets/img/favicon.d1b45b458ef6.png" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.d59729439a20.css">
        <link rel="stylesheet" type="text/css" href="css/export.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-extend.0f113029eba9.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.7d46203b9170.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.40fa6b0f442e.css">
        <link rel="stylesheet" type="text/css" href="css/cryptocoins.566b3ccd0c95.css">
        <link rel="stylesheet" type="text/css" href="css/simple-line-icons.1edcd7ccb77b.css">
        <link rel="stylesheet" type="text/css" href="css/master_style.3bd2ed6f9dd9.css">
        <link rel="stylesheet" type="text/css" href="css/general.371ce09cb303.css">
        <link rel="stylesheet" type="text/css" href="css/_all-skins.663f7ae35658.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.4765adee4f66.css">
        <link rel="stylesheet" type="text/css" href="css/website.9576659c0ec6.css">
      <script type="text/javascript" src="css/sweetalert2@8.js"></script>
      <script type="text/javascript" src="css/api.js"></script>
      <link rel="stylesheet" type="text/css" href="css/jquery.loading.ca1694f83fd1.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./dist/sidebar-menu.css">
       
<style>
.custom-overlay {
  background-color: #adadad;
  opacity: 0.7;
  display: none;
}
.loading-spinner-container {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.lds-ring {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 51px;
  height: 51px;
  margin: 6px;
  border: 6px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fff transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


  <link rel="stylesheet" href="./dist/sidebar-menu.css">
</style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-126999378-1']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_setDomainName', 'fxtradingcorp.com']); _gaq.push(['_setAllowHash', false]); _gaq.push(['_trackPageLoadTime']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    </head>

    <body>
<body class="hold-transition skin-green">
        
        

        <div class="wrapper page-dashboard">

            

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- logo for regular state and mobile devices -->
            
                   
            
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="col-5">
                 
<div class="text-center">
    <form id="locale_switcher" action="/i18n/setlang/" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="D6AdBz0fvFJI5HxRhhxB5sRBrrUsKM1fdQJxPiqotpq54I8RwArUrQ6q0rrKUVHq">
        <input name="next" type="hidden" value="">
        <select class="select-translate col-md-6" name="language" onchange="$('#locale_switcher').submit()">
        
        
        
        
            
            <option data-image="/static/assets/img/en.e499f1fbaeb0.png" value="en" selected="">
            
            English (en)
            </option>
        
            
            <option data-image="/static/assets/img/pt-br.3fc8860c56a9.png" value="pt-br">
            
            Português Brasileiro (pt-br)
            </option>
        
            
            <option data-image="/static/assets/img/zh-hans.00d7b6d94371.png" value="zh-hans">
            
            简体中文 (zh-hans)
            </option>
        
            
            <option data-image="/static/assets/img/ko.b026a63067e5.png" value="ko">
            
            한국어 (ko)
            </option>
        
            
            <option data-image="/static/assets/img/ja.8e69fa7dddb9.png" value="ja">
            
            日本語 (ja)
            </option>
        
            
            <option data-image="/static/assets/img/es.fed7d0ce876b.png" value="es">
            
            español (es)
            </option>
        
            
            <option data-image="/static/assets/img/it.cc79b1867397.png" value="it">
            
            italiano (it)
            </option>
        
            
            <option data-image="/static/assets/img/vi.fe6804314ec8.png" value="vi">
            
            Tiếng Việt (vi)
            </option>
        
            
            <option data-image="/static/assets/img/ar.ec114d74cb14.png" value="ar">
            
            العربيّة (ar)
            </option>
        
            
            <option data-image="/static/assets/img/ru.b36b3e38b06f.png" value="ru">
            
            Русский (ru)
            </option>
        
            
            <option data-image="/static/assets/img/de.cc23f204eaad.png" value="de">
            
            Deutsch (de)
            </option>
        
            
            <option data-image="/static/assets/img/hi.d51ec02ec1a8.png" value="hi">
            
            Hindi (hi)
            </option>
        
            
            <option data-image="/static/assets/img/th.5fd4b8d56250.png" value="th">
            
            ภาษาไทย (th)
            </option>
        
        </select>
        <noscript>
            <input type="submit" value="Set" />
        </noscript>
    </form>
</div>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="search-box">
                            <a class="nav-link hidden-sm-down" href="javascript:void(0)">
                            <i class="mdi mdi-magnify"></i>
                            </a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion ion-person"></i>
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <li class="user-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 text-left">
                                            <a href="/profile/">
                                            <i class="ion ion-person"></i>My Profile</a>
                                        </div>
                                        <div role="separator" class="divider col-12"></div>
                                        <div class="col-12 text-left">
                                            <a href="/logout">
                                            <i class="fa fa-power-off"></i>Logout</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        
        <aside class="main-sidebar" style="background-color: #1A2226 !important;">
            <!-- sidebar -->
            <section class="sidebar" >
                <!-- Sidebar user panel -->
                <div class="user-panel" style="height: 180px;">
                    <div class="ulogo">
                        <a href="/">
                            <!-- logo for regular state and mobile devices -->
                            <img src="img/Untitled (5).png">
                           
                        </a>
                    </div>
                </div>
 
    <ul class="sidebar-menu" style="background-color:#1A2226 !important;">

      <li>
        <a href="home.php">
          <i class="fa fa-dashboard sidebar-header"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="cryptopackage.html">
          <i class="fa fa-files-o"></i>
          <span>Package</span>
         
        </a>
       
      </li>
      <li>
        <a href="rafferal.php">
          <i class="fa fa-th"></i> <span>Network</span>
          
        </a>
      </li>
      <li>
        <a href="history.php">
          <i class="fa fa-pie-chart"></i>
          <span>Wallet</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
       
      </li>
    
      <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Support</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
           <li><a href="contactus.php"><i class="fa fa-circle-o"></i>Add ticket</a></li>
          <li><a href="tickets.php"><i class="fa fa-circle-o"></i>Your Tickets</a></li>
          
        </ul>
      </li>
        <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Setting</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

        <ul class="sidebar-submenu">
           <li><a href="changeprofile.php"><i class="fa fa-circle-o"></i>Profile Setting</a></li>
          <li><a href="changepassword.php"><i class="fa fa-circle-o"></i>Change Password</a></li>
          
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
          <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
      </li>
      <li>
        <a href="../calendar.html">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <small class="label pull-right label-danger">3</small>
        </a>
      </li>
      <li>
        <a href="../mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <small class="label pull-right label-warning">12</small>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li>
      <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
        </aside>
        

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                            <!-- RENOVATION -->
                            


                            <!-- ALERTS -->
                            
                            <div class="alert alert-info  alert-with-icon" data-notify="container">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="X">
                                    <i class="material-icons">X</i>
                                </button>
                                 <?php 
                                   
                                    $sql = "select * from notification where status='0'";
                                    $run = mysqli_query($link,$sql);
                                    if(mysqli_num_rows($run)>0)
                                    {


                                    while($row = mysqli_fetch_assoc($run))
                                    {
                                        $title = $row['title'];
                                        $text = $row['text'];
                                    }
                                }
                                else
                                {
$title = "";
$text = "No Notification";
                                    
                                }
                                ?>
                                <span data-notify="message"><b><?php  echo $title;?> </b>.
                                   
                                    <?php echo $text; ?>
                                </span>
                            </div>
                            
                            <div class="alert alert-danger  alert-with-icon" data-notify="container">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="X">
                                    <i class="material-icons">X</i>
                                </button>
                                <span data-notify="message"><b>Next day withdrawal release - </b>10/20, October 20.</span>
                            </div>
                            

                    <div class="row">
                        <div class="col-12">
                            <div class="box box-inverse box-dark">
                                <div class="box-body tickers-block" style="text-align: center;">
                                    <h4>United State  clock</h4>
                                    <span id="clock">
                                            <?php 
                                            $amNY = new DateTime('America/New_York');

echo date("l jS \of F Y h:i:s A");


                                            ?>


                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row">
                        <div class="col-12">
                            <div class="box box-inverse box-dark">
                                <div class="box-body tickers-block">
                                    <div class="tickercontainer" style="height: auto; overflow: hidden;"><div class="mask">

                                      <ul id="webticker-1" style="position: relative; overflow: hidden; float: left; font: bold 10px Verdana; list-style-type: none; margin: 0px; padding: 0px; width: 3240.25px; transition-timing-function: linear; transition-duration: 2.49156s; left: -124.578px;">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc-XMR"></i> XMR
                                            <span class="text-green1"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc DASH"></i> DASH
                                            <span class="text-green"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc BTC"></i> BTC
                                            <span class="text-green"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc ETH"></i> ETH
                                            <span class="text-green"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XRP"></i> XRP
                                            <span class="text-green"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc LTC"></i> LTC
                                            <span class="text-green"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XMR"></i> XMR
                                            <span class="text-green"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc DASH"></i> DASH
                                            <span class="text-green"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc BTC"></i> BTC
                                            <span class="text-green"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc ETH"></i> ETH
                                            <span class="text-green"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XRP"></i> XRP
                                            <span class="text-green"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc LTC"></i> LTC
                                            <span class="text-green"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XMR"></i> XMR
                                            <span class="text-green"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc DASH"></i> DASH
                                            <span class="text-green"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc BTC"></i> BTC
                                            <span class="text-green"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc ETH"></i> ETH
                                            <span class="text-green"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XRP"></i> XRP
                                            <span class="text-green"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc LTC"></i> LTC
                                            <span class="text-green"> $55.01</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XMR"></i> XMR
                                            <span class="text-green"> $55.09</span>
                                        </li><li class="last" style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc DASH"></i> DASH
                                            <span class="text-green"> $69.57</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc BTC"></i> BTC
                                            <span class="text-green"> $8209.68</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc ETH"></i> ETH
                                            <span class="text-green"> $174.65</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc XRP"></i> XRP
                                            <span class="text-green"> $0.25</span>
                                        </li><li style="white-space: nowrap; float: left; padding: 0px 7px;">
                                            <i class="cc LTC"></i> LTC
                                            <span class="text-green"> $55.01</span>
                                        </li></ul><span class="tickeroverlay-left" style="display: none;">&nbsp;</span><span class="tickeroverlay-right" style="display: none;">&nbsp;</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
</marquee>
   <!--                  <div class="row">
                        <div class="col-12">
                            <div class="box box-inverse box-dark">
                                <div class="box-body tickers-block">
                                    <style type="text/css">
                                        ul li span img 
                                        {
                                            position: relative;
                                            top: 10px;
                                            white-space: nowrap;
                                        }
                                    </style>
                                  
    <ul class="marquee" data-duplicated='true' data-direction='left'>
        <li><span> <img src="images/BTC.svg" width="32" height="32"></span>&nbsp;&nbsp;<span id="textcolor" style="color: yellow;">BITCOIN</span>
            <ul>
                <ol id="a"></ol>
                
            </ul>
        </li>
    <li id=""><span> <img src="images/BTC.svg" width="32" height="32"></span>&nbsp;&nbsp;<span id="textcolor"style="color: yellow;">BITCOIN Cash</span>
        <ul>
            <ol id="b"></ol>
        </ul>
    </li>
    <li id="l"><span> <img src="images/ETH.svg" width="32" height="32"></span>&nbsp;&nbsp;<span style="color: yellow;" id="textcolor">ETHREM
</span>        <ul>
            <ol id="c"></ol>
        </ul>
    </li>
    <li id="b"><span> <img src="images/LTC.svg" width="32" height="32"></span>&nbsp;&nbsp;<span id="textcolor" style="color: yellow;">LITECOI</span>
            <ul>
                <ol id="d"></ol>
            </ul>
        </li>
        <li id="b"><span> <img src="images/XRP.svg" width="32" height="32"></span>&nbsp;&nbsp;<span id="textcolor" style="color: yellow;">RIPPLE</span>            <ul>
                <ol id="e"></ol>
            </ul>
        </li>
       <li id="b"><span> <img src="images/BTC.svg" width="32" height="32"></span>&nbsp;&nbsp;<span style="color: yellow;">ETHREM CLASSIC</span>
            <ul>

                <ol id="g"></ol>
            </ul>
        </li> -->
        <!-- <li id="b">ENJ/USD
            <ul>
                <ol id="h"></ol>
            </ul>
        </li>
        <li id="b">ETT/USD
            <ul>
                <ol id="i"></ol>
            </ul>
        </li> -->
        <!-- <li id="b">KIN/USD
            <ul>
                <ol id="j"></ol>
            </ul>
        </li> -->
        <!-- <li id="b">MTL/USD
            <ul>
                <ol id="k"></ol>
            </ul>
        </li>
        <li id="b">MTX/USD
            <ul>
                <ol id="l"></ol>
            </ul>
        </li> -->
<!--        <li id="b">NULS/USD
            <ul>
                <ol id="m"></ol>
            </ul>
        </li>
        <li id="b">OAX/USD
            <ul>
                <ol id="n"></ol>
            </ul>
        </li> -->
<!--        <li id="b">SALT/USD
            <ul>
                <ol id="o"></ol>
            </ul>
        </li>
        <li id="b">SBC/USD
            <ul>
                <ol id="p"></ol>
            </ul>
        </li>
        <li id="b">ETH/USD
            <ul>
                <ol id="q"></ol>
            </ul>
        </li>
        <li id="b">BTC/USD
            <ul>
                <ol id="r"></ol>
            </ul>
        </li>
        <li id="b">XRP/USD
            <ul>
                <ol id="s"></ol>
            </ul>
        </li>
        <li id="b">LTC/USD
            <ul>
                <ol id="t"></ol>
            </ul>
        </li>
        <li id="b">DASH
            <ul>
                <ol id="u"></ol>
            </ul>
        </li> -->
</ul>

<style type="text/css">
    .marquee  li 
    {
        display: block;float: left;
    }
    .marquee li .textcolor
    {
        background-color:blue;
    }
    .marquee  li ul ol
    {
        position: relative;
        left: -40px;
        top: -10px;
        color: green;
        overflow: hidden;
        white-space: nowrap;
        animation: marquee 15s linear infinite;
    }

    .marquee  {

  overflow: hidden;

}

    
</style>
                                



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                    <div class="row" style="position: relative;left: 50px;">
                        <div class="col-lg-4 col-md-6">
                            <div class="box pull-up" id="boxBalance">
                                <div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h3 class="no-margin text-bold">Package</h3>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>
                                            <p class="no-margin font-weight-600 dollar-value">

<?php  
 $collectpackage = "select * from customer c
inner join customer_deposit d on
c.id = d.customerid
 where c.id='".$id."' 
limit 1";
$runpackage = mysqli_query($link,$collectpackage);
if(mysqli_num_rows($runpackage)>0)
{
    while($row = mysqli_fetch_assoc($runpackage))
    {
        $package = $row['package'];
        $amount = $row['amount'];
 ?>                                           

    <span><?php echo $package; ?> <strong id="spanBalance"><?php echo $amount ?></strong></span>
 <?php
    }

}


?>
  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="col-lg-4 col-md-6">
                            <div class="box pull-up" id="boxBalance">
                                <div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="no-margin text-bold">Package Roi Income</h4>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>
                                            <p class="no-margin font-weight-600 dollar-value">
                                                <span>U$ <strong id="spanBalance">0.00</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs1" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="box pull-up" id="boxTotalBalance">
                                <div class="box-body">
                                    <div class="media align-items-center p-0">
                                        <div class="text-center icon-dollar">
                                            <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <h3 class="no-margin text-bold">Available Balance</h3>
                                        </div>
                                    </div>
                                    <div class="flexbox align-items-center mt-5">
                                        <div>
                                            <p class="no-margin font-weight-600 dollar-value">
                                                <span>U$ <strong id="spanTotalBalance">0.00</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer p-0 no-border">
                                    <div class="chart">
                                        <canvas id="chartjs2" class="h-80"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <!-- Profile Image -->
                            <div class="box bg-inverse bg-dark bg-hexagons-white" id="boxResume">
                                <div class="box-body box-profile">
                                    <h3 class="profile-username text-center"><span id="spanResumeUsername"></span></h3>
                                    <h3 class="profile-username text-center" id="itemCarrerImg"></h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="profile-user-info">
                                                <p>
                                                    <i class="fa fa-paper-plane pr-15"></i>
                                                    <strong>Plan:</strong> <span id="spanPlanStr"></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-calendar pr-15"></i>
                                                    <strong>Status: </strong> <span id="spanResumoStatus"></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-tree pr-15"></i>
                                                    <strong>Binary qualified:</strong>
                                                    <span id="spanResumoBinaryQualify"></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-star pr-15"></i>
                                                    <strong>Carrer points: </strong>
                                                    <span id="spanResumoCarrerPoints">0</span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-anchor pr-15"></i>
                                                    <strong>Invite link: </strong>
                                                    </p><div class="clearfix"></div>
                                                    <div id="itemInviteLink">
                                                    <h3>You need an activated plan for invite users.</h3>
                                                    </div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-lg-9">
                            <!-- TEAMS -->
                            
                            <form id="form-side-left" action="/side/" method="POST">
                                <input type="hidden" name="csrfmiddlewaretoken" value="D6AdBz0fvFJI5HxRhhxB5sRBrrUsKM1fdQJxPiqotpq54I8RwArUrQ6q0rrKUVHq">
                                <input type="hidden" name="side" value="2">
                            </form>
                            <form id="form-side-right" action="/side/" method="POST">
                                <input type="hidden" name="csrfmiddlewaretoken" value="D6AdBz0fvFJI5HxRhhxB5sRBrrUsKM1fdQJxPiqotpq54I8RwArUrQ6q0rrKUVHq">
                                <input type="hidden" name="side" value="1">
                            </form>

                            <!-- ACCOUNT SECURITY -->
                            

                            <div class="col-md-12 ">
                                <div class="box">
                                  <div class="box-header">
                                    <h4 class="box-title">Tutorials and Materials</h4>
                                    <div class="box-controls pull-right">
                                      <a class="btn btn-sm btn-info" href="/materials/pdf/">Click here</a>
                                    </div>
                                  </div>

                                  <div class="box-body">
                                    <p>See our videos explaining step by step the FXTRADING CORP system.</p>
                                    <p>Take your doubts along with our videos that will be posted on this page so that you can enjoy all the benefits of the best investment company in the world.</p>
                                  </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </section>
            </div>
            <div id="overlayMapping">
            </div>
        </div>

        
          
<div class="modal fade modal-general" id="modal-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">System rules - Notes</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img src="/static/assets/img/release_system_notes_en_us.b4f3d71d1b98.jpg" class="img-responsive document">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        

        

<div class="modal fade modal-general" id="modal-close-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">Press release</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img width="250" src="/static/assets/img/logo-small.3ea85e78279e.png" class="img-responsive document">
        <p>
            It was a pleasure to have you on our platform.<br><br>
            Your cycle with the FX Trading Corporation comes to an end, receiving until this date, the importance of the maximum percentage of gain or the full recovery of your investment.
            We appreciate the partnership over these months.<br><br>
            Confident that we comply with our obligations, we are available to resolve any question through the support channel.
        </p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Fechar</button>
          <button type="button" onclick="setHideModal()" class="btn btn-default pull-right" data-dismiss="modal" style="margin-right:10px;">I Don't want see more this information</button>
      </div>
    </div>
  </div>
</div>


        

<div class="modal fade modal-general" id="modal-close-general" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modalDetailTitle">Press release</h4>
      </div>
      <div class="modal-body" id="bodyDetailsModal">
        <img width="250" src="/static/assets/img/logo-small.3ea85e78279e.png" class="img-responsive document">
        <p>
            It was a pleasure to have you on our platform.<br><br>
            Your cycle with the FX Trading Corporation comes to an end, receiving until this date, the importance of the maximum percentage of gain or the full recovery of your investment.
            We appreciate the partnership over these months.<br><br>
            Confident that we comply with our obligations, we are available to resolve any question through the support channel.
        </p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Fechar</button>
          <button type="button" onclick="setHideModal()" class="btn btn-default pull-right" data-dismiss="modal" style="margin-right:10px;">I Don't want see more this information</button>
      </div>
    </div>
  </div>
</div>




       <!--   Core JS Files   -->
       <script src="/static/assets/vendor_components/jquery/dist/jquery.min.473957cfb255.js" type="text/javascript"></script>
       







    
    <link rel="stylesheet" type="text/css" href="/static/session_security/style.8908ffb3a65a.css"></body>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>



  <script src="./dist/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
<script type="text/javascript">
    

    $(document).ready(function(){


    $(function(){

        $.ajax({
            type:'GET',
            url:"http://api.coinlayer.com/api/live?access_key=7b7bf4d01cc6e25eb34b61859858992f",
            dataType:'json',async: false, 
            success:function(data)
            {
                
                var ABC = data['rates'].BTC

                var ACP = data["rates"].BTCA
                var ACT = data["rates"].ETH
                var AIB = data["rates"].LTC
                var AST = data["rates"].RIYA
                var BAR = data["rates"].XLM


                var BTCA = data["rates"].BTCA
                var ENJ = data["rates"].ENJ
                var ETT = data["rates"].ETT
                var KIN = data["rates"].KIN
                var MTL = data["rates"].MTL


                var MTX = data["rates"].MTX
                var NULS = data["rates"].NULS
                var OAX = data["rates"].OAX
                var SALT = data["rates"].SALT
                var SBC = data["rates"].SBC





                var ETH = data["rates"].ETH
                var BTC = data["rates"].BTC
                var acp = data["rates"].XRP
                var LTC = data["rates"].LTC
                var DASH = data["rates"].DASH
            
$('.text-green1').html(ABC);
                
                $('#a').html(ABC);$('#b').html(ACP);
                $('#c').html(ACT);
                $('#d').html(AIB);$('#e').html(AST);
              // //  $('#f').append(BAR);
              //   $('#g').html(BTCA);
                // $('#h').append(ENJ);
                // $('#i').append(ETT);
                // $('#j').append(KIN);
                // // $('#k').append(MTL);
                // $('#l').append(MTX);
                // $('#m').append(NULS);$('#n').append(OAX);
                // $('#o').append(SALT);
                // $('#p').append(SBC);$('#q').append(ETH);
                // $('#r').append(BTC);
                // $('#s').append(acp);$('#t').append(LTC);
                // $('#u').append(DASH);
                
               //  $('#add').val(ABC);
               //  $('#add1').val(ACP);
               //  $('#add2').val(ACT);
               //  $('#add3').val(AIB);
               //  $('#add4').val(BTCA);


               // var id =  $('#add').val();
               // alert(id);
                
                // $('#getdata').text(ETH + "       " + BTC + "  "  + acp + "  " + LTC + "  " + DASH );

                // console.log(acp);console.log(btc);
            }
        })
    })
    $('.text-green1').html(ABC);

    $('.marquee').marquee({
  direction: 'left',
  speed:20,
});
      });


</script>


</body>
</html>