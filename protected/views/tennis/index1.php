<?php
/* @var $this SiteController */
$sport="Lawn Tennis";
$sport2="tennis";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>

<!-- FB plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.simplefade.js"></script>


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sports</li>
			<li class="active"><?php echo $sport ?>	</li>
		</ol>

		<div class="row">

			<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
            <!-- Sidebar -->


			<!-- Article main content -->
			<article class="col-md-7 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $sport ?>	</h1>
				</header>


		   <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px ; overflow: hidden;">
            <div>
                <img u="image" src="images/coverpics/Lawn Tennis.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/tennis/1.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/tennis/2.JPG" />
            </div>
        </div>


		 <!-- bullet navigator container -->
        <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->

    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="top: 123px; left: 0px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 123px; right: 0px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>

    </div>
    <!-- Jssor Slider End -->

				<p><br><br>Since its inception, the Tennis Club of IIT Bombay has been a hub for tennis enthusiasts. The purpose of the club is to conduct various events such as camps, workshops and tournaments along with fun events like screenings of matches etc. Looking for competition, social play, team camaraderie, a good workout, quality time with friends, tournaments exposure? Tennis Club of IIT Bombay will strive to provide you with all this and more! We have an amazing lineup of events planned for you all this year. So grab your racket and keep hitting the courts because “You only live once, but you get to serve twice!”</p>


                <p>Tennis engages your mind and body at the same time, unlike a traditional workout and is hence a more fun way for a workout. From playing tennis one can develop a work ethic, learn sportsmanship, accept responsibility, manage mistakes, enhance discipline, learn to compete, cope with pressure and adversity, develop healthy habits and more, skills which are beyond the realm of academics.<br> <br></p>
	</article>
	<!-- /Article -->



			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px"
                        data-href="https://www.facebook.com/groups/tennisiitb/"data-hide-cover="true"
                        data-show-facepile="false" data-show-posts="true" > </div>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->


   <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->
