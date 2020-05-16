<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="IITB Sports">
	<meta name="author"      content="Astrit Manikantan">


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/newfavicon.png">

	<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-themes.css" media="screen" >
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jssor.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jssor-simplefade.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/components3.css">

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.slider.js"></script>
	<script>
	function showSearch()
	{
		// alert("alpha");
	  document.getElementById('abc').style.visibility='visible';
	}
	</script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
	<![endif]-->
</head>

<body >
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse headroom" >
		<div class="container" style="margin-left:0px;margin-right:0px;width:98%">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
				class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newlogo.png" style="height:65px;width:60px;margin-left:10px;position:relative;left:615px;"alt="IITB Sports Logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="index.php?r=about/news">News</a></li>
							<!--<li class="active"><a href="construction">Facilities</a></li>
							<li class="active"><a href="index.php?r=about/faq">FAQs</a></li>-->
							<li class="active"><a href="index.php?r=about/askasecy">Ask a Secy</a></li>
							<li class="active"><a href="index.php?r=about/contact">Contact Us</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">SPORTS <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="index.php?r=archive/halloffame">Hall of Fame</a></li>
							<li class="dropdown-submenu">
							  <a tabindex="-1" href="#">Clubs</a>
							    <ul class="dropdown-menu">
							    <li class="active"><a href="index.php?r=adv">Adventure</a></li>
							    <li class="active"><a href="index.php?r=cycling">Cycling</a></li>
							    <!--<li class="active"><a href="index.php?r=fitness">Fitness</a></li>-->
								<!-- <li class="active"><a href="index.php?r=indian">Indian Games</a></li> -->
								<!--<li class="active"><a href="index.php?r=rubik">Rubik's Cube</a></li>-->
								<li class="active"><a href="index.php?r=skating">Skating</a></li>
								<li class="active"><a href="index.php?r=darkknight">The Dark Knight</a></li>
							    </ul>
							</li>
							<li class="active"><a href="index.php?r=aquatics">Aquatics</a></li>
							<li class="active"><a href="index.php?r=athletics">Athletics</a></li>
							<li class="active"><a href="index.php?r=badminton">Badminton</a></li>
							<li class="active"><a href="index.php?r=basketball">Basketball</a></li>
							<li class="active"><a href="index.php?r=boardgames">Board Games</a></li>
							<li class="active"><a href="index.php?r=cricket">Cricket</a></li>
							<li class="active"><a href="index.php?r=football">Football</a></li>
							<li class="active"><a href="index.php?r=hockey">Hockey</a></li>
							<!-- <li class="active"><a href="index.php?r=indian">Indian Games</a></li> -->
							<li class="active"><a href="index.php?r=khokho">Kho Kho</a></li>
							<li class="active"><a href="index.php?r=tennis">Lawn Tennis</a></li>
							<li class="active"><a href="index.php?r=squash">Squash</a></li>
							<li class="active"><a href="index.php?r=tt">Table Tennis</a></li>
							<li class="active"><a href="index.php?r=volleyball">Volleyball</a></li>
							<li class="active"><a href="index.php?r=weightlifting">Weightlifting</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">EVENTS <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="index.php?r=events/calendar">Calendar</a></li>
							<li class="active"><a href="index.php?r=events/gc">GC Results</a></li>
							<li class="active"><a href="index.php?r=events/page&view=trip">Upcoming Treks and Trips</a></li>
							<li class="active"><a href="index.php?r=events/page&view=sport">Upcoming Workshops</a></li>
							<!-- <li class="active"><a href="index.php?r=events/page&view=mixed">Mixed Event of the Month</a></li> -->
							<!--<li class="dropdown-submenu">
							  <a tabindex="-1" href="#">League</a>
							    <ul class="dropdown-menu">
							    <li class="active"><a href="construction">Cricmania</a></li>
								<li class="active"><a href="construction">IFL</a></li>
								<li class="active"><a href="construction">Basketball</a></li>
								<li class="active"><a href="construction">Badminton</a></li>
								<li class="active"><a href="construction">ITTL</a></li>
								<li class="active"><a href="construction">ITC</a></li>
								<li class="active"><a href="construction">IHL</a></li>
							    </ul>
							</li>
							<li class="dropdown-submenu">
							  <a tabindex="-1" href="#">Ladder</a>
							    <ul class="dropdown-menu">
							    <li class="active"><a href="construction">Tennis</a></li>
							    </ul>
							</li>-->
						</ul>
					</li>

					<!-- <li><a href="wordpress" target="_blank">PG Sports</a></li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<!--<li class="active"><a href="index.php?r=misc/court">Court Booking</a></li>
							<li class="active"><a href="index.php?r=misc/ground">Ground Booking</a></li>-->
							<li class="active"><a href="index.php?r=misc/reg">Registrations</a></li>
							<li class="active"><a href="index.php?r=misc/survey">Surveys</a></li>
							<li class="active"><a href="index.php?r=misc/nso_feedback">NSO Feedback</a></li>
							<!--<li class="active"><a href="construction">CPS</a></li>-->
						</ul>
					</li>
					<li><a href="index.php?r=archive/gallery">GALLERY</a></li>
					<li><a href="index.php?r=profile&letter=A">PROFILES</a></li>
					<?php if(Yii::app()->user->isGuest)
					{ ?>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">TESTING<b class="caret"></b></a>
								<ul class="dropdown-menu">
						<li><a href="index.php?r=events/workshops">Workshops</a></li>
						<li><a href="index.php?r=events/trip">Trip</a></li>
					</ul>
							<?php } ?>
					<li><a onclick="showSearch()"><i class="glyphicon glyphicon-search" ></i></a></li>

					<form id ="abc"action="search/search.php" method="get" class="navbar-form pull-right" role="search"style="color:white;visibility:hidden;background-color:transparent;position:absolute;top:70px;right:2px;transition:width s;" >
	        			<div class="input-group">
	        			    <input type="text" class="form-control" placeholder="Search" name="query" id="query"style="color:white;background-color:transparent;transition:width s;">
	        			    <input name="search" value="1" type="hidden">
	        			</div>
	        		</form>

					<!-- <input id = "search-box" type = "search-box" type = "text" style="color:white;visibility:hidden;background-color:transparent;position:absolute;top:70px;right:2px;transition:width s;" ></input>
					<label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
				  <input type="submit" id="search-submit" /> -->



					<!--<div id="sb-search" class="sb-search">
					 </div>-->
					<!-- <form class="search-container" action="//llamaswill.tumblr.com/search">
  					<input id="search-box" type="text" class="search-box" name="q" />
  <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
  <input type="submit" id="search-submit" />
</form>
					 -->
					<?php if(Yii::app()->user->isGuest)
					{ ?> <li><a href="index.php?r=site/login"><i class="glyphicon glyphicon-user"></i></a></li> <?php }
					else {?> <li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<?php echo Yii::app()->user->id ?>
								</a>
								<ul class="dropdown-menu">
									<li class="active"><a href="index.php?r=profile/putinfo">My Profile</a></li>
									<li class="active"><a href="index.php?r=site/logout">Sign Out</a></li>
								</ul>
							</li>
					<?php } ?>
				</ul>
	<!-- 			<form action="search/search.php" method="get" class="navbar-form pull-right" role="search">
        			<div class="input-group">
        			    <input type="text" class="form-control" placeholder="Search" name="query" id="query">
        			    <input name="search" value="1" type="hidden">
        			</div>
        		</form> -->
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
        <!--main content-->

<!-- Header -->
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->

	<!-- /Header -->

<?php echo $content; ?>


	<!--          Footer      -->
	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 widget" style="width:100%">

							<div class="col-md-3 widget">
							<h3 class="widget-title"><a href="index.php?r=about/askasecy">ASK A SECY?</a></h3>

							</div>
							<div class="col-md-3 widget">
							<h3 class="widget-title"><a href="index.php?r=events/gc">GC RESULTS</a></h3>

							</div>


					<div class="col-md-3 widget">
						<h3 class="widget-title"><a href="index.php?r=about/contact">COUNCIL</a></h3>
					</div>
					<div class="col-md-3 widget" style="display:inline">
						<h3 class="widget-title"><a href="index.php?r=misc/reg">REGISTRATIONS</a></h3></div>
</div>




				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Top</a> |
								<a href="construction">Sitemap</a>
								<?php// if(Yii::app()->user->isGuest) { ?>
								| <b><a href="index.php?r=site/login"> Sign in</a></b> <?php //} ?>
							</p>
						</div>
					</div> -->

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p style="position:relative; left:330px;">
													COPYRIGHT &copy; 2016, IIT-B SPORTS. DESIGNED BY <a target="_blank"
								href="https://www.facebook.com/astrit.manikantan.94">ASTRIT MANIKANTAN</a>
								and <a target="_blank" href="https://www.facebook.com/Ghostlyhawk">
								KRISHNA HARSHA REDDY</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/headroom.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQuery.headroom.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/template.js"></script>

	  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-40916633-3', 'iitb.ac.in');
      ga('send', 'pageview');

    </script>


</body>
</html>
