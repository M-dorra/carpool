<!DOCTYPE html>
<?php
session_start();

// If session variable 'login' is not set, redirect to login page
if (!isset($_SESSION['login'])) {
    header("Location: ../login/login.html");
    exit;
}
?>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

       
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Covoiturage</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Styles -->

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Forms -->
    <link href="../css/jquery.idealforms.css" rel="stylesheet">
    <!-- Select  -->
    <link href="../css/jquery.idealselect.css" rel="stylesheet">
    <!-- Slicknav  -->
    <link href="../css/slicknav.css" rel="stylesheet">
    <!-- Main style -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="../js/modernizr.js"></script>

    <!-- Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a href="../logout.php"> 
                                   Log Out
                                </a> 

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                       

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('../img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1><?php $login=$_GET['login'];
															
															echo "$login"
															?></h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                    <?php $login=$_GET['login'];
															
															echo "<a href=passagerhome.php?login=$login>Home</a>"
															?> 
                                                    </li>
                                                    <li>
                                                      
                                                        <?php $login=$_GET['login'];
															
															echo "<a href=rides.php?login=$login>All Rides</a>"
															?> 
                                                    </li>
                                                    <li>
                                                        <a>Account</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                            <?php $login=$_GET['login'];
															
															echo "<a href=updatepassager.php?login=$login>Modify</a>"
															?> 
                                                               
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Welcome,<?php $login=$_GET['login'];
															
															echo "$login"
															?>!
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

     



        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="../js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="../js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src=".../js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="../js/hoverIntent.js"></script>
        <script type="text/javascript" src="../js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="../js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="../js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>

    </body>
</html>
