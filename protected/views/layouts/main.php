<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="IIT Bombay Sports">
	<meta name="author"      content="Abhishek Sharma">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/newfavicon.png">

	<!-- <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/icomoon.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"> -->
	<!--<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">-->

	<!-- Custom styles for our template -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-themes.css" media="screen" > -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jssor.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jssor-simplefade.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/components3.css"> -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85055175-1', 'auto');
  ga('send', 'pageview');

</script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
	<![endif]-->
</head>

	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container" style="min-width:90%">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newlogo.png" style="height:75px;width:60px;margin-left:8px;"alt="IITB Sports Logo"></a><!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
						<!-- <div id="wrap">
						  <form action="search/search.php" method="get" role="search" autocomplete="on">
						  	<input id="search" name="query" type="text" placeholder="What're we looking for ?">
						  	<input id="search_submit" value="1" type="submit">
						  </form>
						</div> -->
						</li>
							<?php if(!Yii::app()->user->isGuest)
							{ ?>
							<li>
								<a href="index.php?r=profile/display&rollno=<?php echo Yii::app()->user->rollno; ?>" class="fh5co-sub-ddown sf-with-ul"><?php echo Yii::app()->user->id; ?></a>
								<ul class="fh5co-sub-menu">
									<li><a href="index.php?r=profile/display&rollno=<?php echo Yii::app()->user->rollno; ?>">MY PROFILE</a></li>
									<li><a href="index.php?r=site/logout">LOGOUT</a></li>
								</ul>
							</li>
							<?php } ?>
								<li>
									<a href="#" class="fh5co-sub-ddown sf-with-ul">NEWSLETTER<!-- <sup style="color:#FFEB00">NEW</sup>--></a>
									<ul class="fh5co-sub-menu">
										<li><a href="/~sports/magazine/kreeda/magazine/" target="blank">KREEDA 20.1</li>
										<li><a href="index.php?r=about/kreeda&version=17_1" target="blank">KREEDA 17.1</a></li>
										<li><a href="index.php?r=about/kreeda&version=18_1" target="blank">KREEDA 18.1</a></li>
									</ul>
								</li>
								<li>
									<a href="https://iitbsports.wordpress.com/" target="blank">BLOG <!-- <sup style="color:#FFEB00">NEW</sup> --></a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown sf-with-ul">UPDATES</a>
									<ul class="fh5co-sub-menu">
										<li><a href="index.php?r=about/news">NEWS</a></li>
										<li><a href="index.php?r=events/gc">GC TALLY</a></li>
									</ul>
								</li>
								<li><a href="#" class="fh5co-sub-ddown sf-with-ul">EVENTS</a>
									<ul class="fh5co-sub-menu">
									<?php if(!Yii::app()->user->isGuest)
						            {
						              if(Yii::app()->user->post!='user')
						              { ?>
				          				<!--<li><a href="index.php?r=events/putcerti">PUT CERTI</a></li>-->
				          				<li><a href="index.php?r=events/certiform">MAKE CERTI</a></li>
				          			<?php
				          			  }
				          			}
				          			?>
										<li><a href="index.php?r=events/calendar">CALENDAR</a></li>
										<li><a href="index.php?r=events/trip">TREKS</a></li>
										<li><a href="index.php?r=events/workshop">WORKSHOPS</a></li>
										<li><a href="index.php?r=events/gc">GC TALLY</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown sf-with-ul">SPORTS</a>
									 <ul class="fh5co-sub-menu">
										<li><a href="index.php?r=aquatics">AQUATICS</a></li>
 										<li ><a href="index.php?r=athletics">ATHLETICS</a></li>
 										<li ><a href="index.php?r=badminton">BADMINTON</a></li>
 										<li ><a href="index.php?r=basketball">BASKETBALL</a></li>
 										<li ><a href="index.php?r=boardgames">BOARD GAMES</a></li>
 										<li ><a href="index.php?r=cricket">CRICKET</a></li>
 										<li ><a href="index.php?r=football">FOOTBALL</a></li>
 										<li ><a href="index.php?r=hockey">HOCKEY</a></li>
 										<li ><a href="index.php?r=khokho">KHO KHO</a></li>
 										<li ><a href="index.php?r=tennis">LAWN TENNIS</a></li>
 										<li ><a href="index.php?r=squash">SQUASH</a></li>
 										<li ><a href="index.php?r=tt">TABLE TENNIS</a></li>
 										<li ><a href="index.php?r=volleyball">VOLLEYBALL</a></li>
 										<li ><a href="index.php?r=weightlifting">WEIGHTLIFTING</a></li>
 										<li ><a href="index.php?r=adv">ADVENTURE SPORTS</a></li>
										<li ><a href="index.php?r=darkknight">DARK KNIGHT</a></li>
										<li ><a href="http://iitbyogastha.in/" target="blank">YOGA</a></li>
									 </ul>
								</li>

								<!--<li><a href="index.php?r=archive/gallery">GALLERY</a></li>-->


							<li ><a href="#" class="fh5co-sub-ddown sf-with-ul">PEOPLE</a>
							<ul class="fh5co-sub-menu">
							<li><a href="index.php?r=archive/halloffame">HALL OF FAME</a></li>
							<li><a href="index.php?r=about/contact">COUNCIL</a></li>
							<?php if(!Yii::app()->user->isGuest)
						            { ?>
								<li><a href="index.php?r=profile&letter=A">PLAYERS</a></li>
							<?php } ?>
							<li><a href="index.php?r=about/officers">STAFF</a></li>

							</ul>
						</li>						
							</ul>
						</nav>
					</div>
				</div>
			</header>

		</div>




		<?php echo $content;?>

		<!-- fh5co-services-section -->

		<!-- fh5co-content-section -->
				<!-- fh5co-blog-section -->
		<footer>
			<div id="footer" style="padding-top:10px;padding-bottom:2px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h4>STAY CONNECTED!</h4>
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/IITBombaySports"  target="_blank"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/iitbombaysports/" target="_blank"><i class="icon-facebook2"></i></a>
								<a href="https://www.youtube.com/channel/UCePHRfik23CJydGv6_JvQOQ" target="_blank"><i class="icon-youtube"></i></a>
							</p>
							<p><a style="color:inherit" href="index.php?r=about/askasecy" title="Feedback/suggestions/complaints"> ASK A SECY </a></p>
							<!-- <p align="center">Designed by<br> Abhishek Sharma | Aditya Chavan</p> -->
						<p><a href="index.php?r=about/contact">Contact us</a></p>
						<!-- <p><a href="index.php?r=about/kreeda&version=171" target="_blank" style="text-decoration: none">Newsletter - Kreeda</a></p> -->
						<p><a href="assets/view/map.jpg" target="_blank" style="text-decoration: none">Map</p>
						</div>
					</div>



				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
