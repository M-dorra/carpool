<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>
	
	
	
	
		

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>My ride - Add ride</title>
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

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="background parallax clearfix" style="background-image:url('../img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>Add Ride</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
													 <?php $login=$_GET['login'];
															
															echo "<a href=conducteurhome.php?login=$login>Home</a>"
															?> 
                                                        
                                                    </li>
                                                    <li>
                                                        <a >Rides</a>
														<ul class="sub-menu">
														 <li>
															<a href="add-ride.php">Add a ride</a>
														 </li>
														 <li>
														  <?php $login=$_GET['login'];
															
															echo "<a href=listerides.php?login=$login>Rides</a>"
															?> 
															</li>
														</ul>
                                                    </li>
                                                    <li>
                                                        <a>Account</a>
                                                        <ul class="sub-menu">
                                                            <li>
															<?php $login=$_GET['login'];
															
															echo "<a href=updateconduct.php?login=$login>Modify</a>"
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

            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Add a ride</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-content add-new-ride">

                            <form action="addtrajet.php" method="get"  target="_self">
								
								<div class="field">
									<label>Confirm login (username) :  *</label>
									<input name="login" type="text" required>
								</div>
							
							
                                <div class="field">
                                    <select name="from" required>
                                        <option value="" disabled selected>From *</option>
                                        <option>Tunis</option>
                                        <option>Sousse</option>
                                        <option>Monastir</option>
                                        <option>Djerba</option>
                                        <option>Gafsa</option>
                                        <option>Bizerte</option>
                                        <option>Mahdia</option>
                                    </select>
                                </div>
								<br>
                                <div class="field">
                                    <select  name="to" required>
                                        <option value="" disable selected>To*</option>
                                        <option>Tunis</option>
                                        <option>Sousse</option>
                                        <option>Monastir</option>
                                        <option>Djerba</option>
                                        <option>Gafsa</option>
                                        <option>Bizerte</option>
                                        <option>Mahdia</option>
                                    </select>
                                </div>
								<br>
                                <div class="field">
                                <label>Date *</label>
                                    <input name="datevo" type="date" placeholder="Date" class="datepicker" required>
                                </div>
	
	
								<div class="field">
								<label>Duration *</label>
								<input name="duree" type="time" required>
                                </div>
								
								<div class="field">
								<label>Distance(KM) *</label>
								<input name="distance" type="number" step="0.1" min="0" required>
                                </div>
								
								<div class="field">
								<label>Departure Hour *</label>
								<input name="heure" type="time" required>
                                </div>
								
								<div class="field">
								<label>PickUp Hour *</label>
								<input name="heurepick" type="time" required>
                                </div>
								
                                <div class="field">
                                   <label>Ride State *</label>
								   <input name="etat" type="text" required> 
                                </div>

								<div class="field">
                                   <label>Price *</label>
								   <input name="prix" type="number" step="0.1" min="0" required> 
                                </div>
								
								<div class="field">
                                   <label>Comments </label>
								   <input name="commentaire" type="text"> 
                                </div>
								
								<table>
								<tr>
								<td><input type="radio" onclick="javascript:yesnoCheck();" name="etape" value="sans" required/> <label>Without Stop</label></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><input type="radio" onclick="javascript:yesnoCheck();" name="etape" value="avec" required/> <label>With Stop</label></td>
								</tr>
								</table>
								
								
								<div >
								    
									<div class="field">
										<select id="from" name="frome">
											<option value="default">From (Stop)</option>
                                            <option>Tunis</option>
                                        <option>Sousse</option>
                                        <option>Monastir</option>
                                        <option>Djerba</option>
                                        <option>Gafsa</option>
                                        <option>Bizerte</option>
                                        <option>Mahdia</option>
										</select>
									</div>
									<br>
									<div class="field">
										<select id="to" name="toe">
											<option value="default">To (Stop)</option>
                                            <option>Tunis</option>
                                        <option>Sousse</option>
                                        <option>Monastir</option>
                                        <option>Djerba</option>
                                        <option>Gafsa</option>
                                        <option>Bizerte</option>
                                        <option>Mahdia</option>
										</select>
									</div>
									<br>
									<div class="field">
										<label>Departure Time (Stop) </label>
										<input name="heuret" type="time">
									</div>
								
								    <div class="field">
										<label>Price (Stop) </label>
										<input name="prixe"type="number" step="0.01" min="0"> 
									</div>
								
								</div>
								
								<!-- <script> -->
								 <!-- function yesnoCheck() { -->
									<!-- if (document.getElementById('avec').checked) { -->
										<!-- document.getElementById('ifYes').style.visibility = 'visible'; -->
										
									<!-- } -->
									<!-- else document.getElementById('ifYes').style.visibility = 'hidden'; -->
									<!-- } -->
									
								<!-- </script> -->
                                <input type="hidden" id="error" name="error" value="">
                                <div class="field buttons">
                                    <button type="submit" class="btn btn-lg green-color">Submit</button>
                                </div>

                            </form>

                        </div><!-- end .page-content -->

                    </div><!-- end .col-sm-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by @My ride
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpass" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

         <!-- Javascript -->
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="../js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="../js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="../js/jquery.idealselect.min.js"></script>
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
