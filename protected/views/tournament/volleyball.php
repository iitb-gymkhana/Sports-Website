<?php
/* @var $this SiteController */

$this->pageTitle="Volleyball Tournament - ". Yii::app()->name;
?>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.simplefade.js"></script>


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=volleyball">Volleyball</a></li>
			<li class="active">Volleyball Tournament</li>
		</ol>

		<div class="row">


			
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inter College Volleyball Tournament</h1>
				</header>


		 <div class="row">
		   <div class=col-md-5>
		   		<h2><i class="fa fa-calendar"></i>&nbsp2-3 April, 2016</h2>
		   		<h2><i class="fa fa-map-marker"></i>&nbsp<a href="#map" style="color:inherit">Indoor Volleyball Courts, IITB <br>(Near Gymkhana Grounds, Opposite to Hostel 3)</a></h2>
		   		<h2><i class="fa fa-phone"></i>&nbsp<a href="index.php?r=volleyball/contact" style="color:inherit" target="_blank">Contact Us</a></h2>
		   		<br>
           		 <a href="index.php?r=tournament/register"><button class="btn btn-success btn-block" name="accept" type="submit" value="1">Register</button></a>
		   	</div>
		   	<br>
		     <div class=col-md-7> <img u="image" src="images/gallery/volleyball/2.JPG" /></div>

		</div>


		<div class="row">
           	<h2 class="text-left">About this Event</h2>

				<p>IIT Bombay Sports presents, for the first time ever, inter-college volleyball tournament. And thus exhibit the elegance of the new indoor volleyball courts at IITB to the rest of Mumbai.</p>
				
				<p>Hearts will race, and the tempo will rise as the best in Mumbai compete against each other in a battle for supremacy. Get ready to witness blazing smashes, deft drops and fearless digs amidst a perturbing atmosphere; where winning is all that matters; and unnerving sledges and mind games are all a "part of the plan".</p>
	
		</div>

		<div class="row">
			 <h2 class="text-left"><i class="fa fa-trophy"></i>&nbspPrizes to be Won</h2>
			 <div class="col-md-6">
			 	<h3><i class="fa fa-male"></i>&nbspMen</h3>
			 	<p><b>Winners: </b><i class="fa fa-inr"></i>&nbsp5500</p>
			 	<p><b>Runners Up: </b><i class="fa fa-inr"></i>&nbsp3000</p>
			 </div>

			 <div class="col-md-6">
			 	<h3><i class="fa fa-female"></i>&nbspWomen</h3>
			 	<p><b>Winners: </b><i class="fa fa-inr"></i>&nbsp4000</p>
			 	<p><b>Runners Up: </b><i class="fa fa-inr"></i>&nbsp2000</p>
			 </div>
			 <p><b>NOTE:</b> Prize money may be increased depending on participation</p>
		</div>

		<div class="row">
			 <h2 class="text-left"><i class="fa fa-money"></i>&nbspRegistration Fees</h2>
			 <div class="col-md-6">
			 	<h3><i class="fa fa-laptop"></i>&nbspOnline</h3>
			 	<p><b>Men: </b><i class="fa fa-inr"></i>&nbsp1000</p>
			 	<p><b>Women: </b><i class="fa fa-inr"></i>&nbsp700</p>
			 </div>

			 <div class="col-md-6">
			 	<h3><i class="fa fa-shopping-cart"></i>&nbspOffline</h3>
			 	<p><b>Men: </b><i class="fa fa-inr"></i>&nbsp1100</p>
			 	<p><b>Women: </b><i class="fa fa-inr"></i>&nbsp800</p>
			 </div>

		</div>

<br>
			<div class="row">
			      <div class="col-md-3"></div>
           		  <div class="col-md-6 text-center">
           		    <a href="index.php?r=tournament/register"><button class="btn btn-success btn-block" name="accept" type="submit" value="1">Register</button></a>
           		  </div>
           		  <div class="col-md-3"></div>

           	</div>

    <section class="container-full top-space" id="map">
		<div id="map"></div>
	</section>
<br>
	</article>
	<!-- /Article -->

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/google-maps-2.js"></script>




			
		

		</div>
	</div>	<!-- /container -->