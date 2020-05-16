<?php
/* @var $this SiteController */
$sport="Kho Kho";
$sport2="khokho";
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
                <img u="image" src="images/coverpics/KhoKho.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/khokho/1.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/khokho/2.JPG" />
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
        <h3>History</h3>
        <p>Kho-Kho, an ancient game of undivided INDIA, probably was derived from the different strategy and tactics of "Kurukshetra" war in the Mahabharata. The chariot fight during the war and zigzag pathways followed by the retreating soldiers indicates the formation of Chain Play -Defence Skill in the game of Kho-Kho. On the 11th day of the war, the Chief of Kaurava Army, Guru Dronacharya drew a typical strategic formation- CHAKRAVYUH (Circular formation) keeping Jayadratha at the main entrance with seven soldiers to draw in and kill the enemy. Veer Abhimanyu, the son of Arjuna, entered into the trap, but could not get his way out and in the process got killed. He fought gallantly alone against seven soldiers. The method adopted by Abhimanyu resembles the idea of “Ring Play” – a Defence tactic in Kho Kho game.</p>
        <h3>At IIT Bombay</h3>
				<p>Kho-Kho is the fastest growing sport in IIT Bombay. IIT Bombay is the only institute having an indoor facility for Kho-Kho. It is simple, inexpensive and enjoyable. It does, however, demand physical fitness, strength, speed and stamina, and a certain amount of ability. Dodging, feinting and bursts of controlled speed make this game quite thrilling. Anyone with good running speed and agility can learn Kho-Kho. It is based on natural principles of physical development, fosters a healthy combative spirit of term understanding.</p>
	</article>
	<!-- /Article -->



			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<!--<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px"
                        data-href="https://www.facebook.com/groups/432515810159850/"data-hide-cover="true"
                        data-show-facepile="false" data-show-posts="true" > </div>
					</div>
				</div>-->

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->


   <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->
