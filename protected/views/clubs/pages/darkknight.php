<?php
/* @var $this SiteController */
$club="The Dark Knight";
$this->pageTitle=$club. " - Clubs | ". Yii::app()->name;
$this->breadcrumbs=array(
	$club,
);
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
			<li class="active">Clubs</li>
			<li class="active"><?php echo $club ?>	</li>
		</ol>

		<div class="row">

			<!-- Sidebar -->
			<aside class="col-md-2 sidebar sidebar-left">

				<div class="row widget">
					<div class="col-xs-12">
						<div class="sidebar-props">
						<h4>Inside <?php echo $club ?></h4>
						<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Facilities</a></li>
						<li><a href="">Gallery</a></li>
						<li><a href="">People</a></li>
						</ul>
						</div>
					</div>

				</div>
			</aside>
			<!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-7 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $club ?>	</h1>
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
                <img u="image" src="images/coverpics/athletics.jpg" />
            </div>
            <div>
                <img u="image" src="images/coverpics/hockey.jpg" />
            </div>
            <div>
                <img u="image" src="images/coverpics/athletics.jpg" />
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



				<p>Text Here</p>
			</article>
			<!-- /Article -->


			
			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px" 
						data-href="https://www.facebook.com/groups/1414557188823122/"data-hide-cover="true" 
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