<?php
/* @var $this SiteController */
$sport="Badminton";
$sport2="badminton";
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
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="images/coverpics/Badminton.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/badminton/1.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/badminton/2.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/badminton/3.JPG" />
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
        <br>
				<p>For all badminton loving folks of IIT Bombay, Badminton club has been one of the most proactive clubs handling the most loved sport in the institute.
With promotion of Badminton as its true motive, it has organised a wide range of events in the previous years and this year it's gonna be bigger and better.</p>
        <p>Headed by the Institute Badminton Secretary, Badminton Club will be one of the most happening clubs of the year. We have an amazing lineup of tournaments and camps planned for you all this year.</p>
        <p>So pick up your racket and come, let's take the game in the institute to a higher level.</p>
	</article>
	<!-- /Article -->



			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px"
                        data-href="https://www.facebook.com/groups/BadmintonClubIITB/"data-hide-cover="true"
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
