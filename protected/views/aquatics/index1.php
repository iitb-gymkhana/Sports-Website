<?php
/* @var $this SiteController */
$sport="Aquatics";
$sport2="aquatics";
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
                <img u="image" src="images/coverpics/Aquatics.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/aquatics/1.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/aquatics/2.JPG" />
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
				<p>The Indian Institute of Technology, Bombay began in 1958, as one of the five centers of excellence in engineering education, by a special Act of Parliament. The Student Activity Center (SAC) came up in 1980, along with the swimming pool. But, now due to increasing participation, a new olympic-size swimming pool had been built and is fully functional since 2012.</p>
        <p>The IIT Swimming club started functioning in 1983, under the stewardship of Coach, Dr. P. M. Reddy. It is affiliated to the Greater Mumbai Amateur Aquatic Association(GMAAA). Students of the club take part in many state and nation-wide meets. It is also conducts The Open IIT Swimming Gala which will run its 25th edition in early-2017. The IITB Swimming Club is recognised all over Mumbai not only for its participation and standings in Swimming but also for its excellent Water Polo team.</p>
        <br>
	</article>
	<!-- /Article -->



			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px"
						data-href="https://www.facebook.com/IITBAquatics?fref=ts"data-hide-cover="true"
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
