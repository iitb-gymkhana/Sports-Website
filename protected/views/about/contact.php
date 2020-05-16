<?php
$this->pageTitle="Contact";
?>


<!-- <div class="fh5co-hero" style="height:100vh">
  <div class="fh5co-overlay animate-box" style = "height:100vh;background:url(images/council/councilPic.jpg) no-repeat center center fixed; background-size:cover"></div>
  <div class="fh5co-cover text-center" style="height:100vh" data-stellar-background-ratio="0.5">
  </div>
</div>  -->

<!--<div class="fh5co-hero" style="height:11vh">
  <div class="fh5co-overlay animate-box" style = "height:11vh;background-color: #33322d"></div>
  <div class="fh5co-cover text-center" style="height:100vh" data-stellar-background-ratio="0.5">
  </div>
</div>-->
<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h2>INSTITUTE SPORTS COUNCIL 2020-21</h2>
			</div>
		</div>
	</div>

	<!-- GENERAL SECRETARY -->
	<div class="container animate-box gsec">
		<div class="row">
			<h3 align="center"></h3>
			<?php $person = $gsec[0] ;?>
			<div class="col-md-3 col-md-3"></div>
			<div class="col-md-6 col-md-6 council">
				<h3 align="center">GENERAL SECRETARY</h3>
				<figure>
					<img style="filter:grayscale(80%);" src="images/council/<?php echo $person['image']; ?>" />
				</figure>
				<p align="center" style="text-align: center">
					<a href="<?php echo $person['fb'];?>" target="_blank"><?php echo $person['name'];?></a>
					<br>
					<a href="tel:<?php echo $person['phone'];?>"><?php echo $person['phone'];?></a><br>
				</p>
				<p align="center" style="text-align: center; text-transform: lowercase">
					<a href="mailto:<?php echo $person['email'];?>" target="_blank"><?php echo $person['email'];?></a>
				</p>
			</div>
			<div class="col-md-3 col-md-3"></div>
		</div>
	</div>


	<!-- nominees -->
	<div class="container noms animate-box">
		<div class="row">
			<h3 align="center"></h3>
			<?php foreach ($nominees as $person) { ?>
				<div class="<?php echo (strpos($person['image'], 'nom') == true ? 'col-md-6' : 'col-md-4');?>  council" style="margin-bottom:4em;">
					<h4 align="center"><?php echo $person['post'];?></h4>
					<figure style="margin-bottom:0em;">
						<img style="filter:grayscale(80%);" src="images/council/<?php echo $person['image'];?>" />
					</figure>
					<p align="center">
						<a href="<?php echo $person['fb'];?>" target="_blank"><?php echo $person['name'];?></a>
						<br>
						<a href="tel:<?php echo $person['phone'];?>"><?php echo $person['phone'];?></a><br>
					</p>
					<p style="text-transform:inherit" align="center">
						<a href="mailto:<?php echo $person['email'];?>" target="_blank"><?php echo $person['email'];?></a>
					</p> 
				</div>
			<?php } ?>
		</div>
	</div>


	<!-- secys -->
	<div class="container animate-box">
		<div class="row">
			<h3 align="center">SECRETARIES</h3>
			<?php foreach ($secretaries as $person) { ?>
				<div class="col-md-4 col-md-4 council" style="margin-bottom:4em;">
					<h4 align="center"><?php echo $person['post'];?></h4>
					<figure>
						<img style="filter:grayscale(80%); height: 133px; width: auto"  src="images/council/<?php echo $person['image']; ?>" />
					</figure>
					<p align="center">
						<a href="<?php echo $person['fb'];?>" target="_blank"><?php echo $person['name'];?></a><br>
						<a href="tel:<?php echo $person['phone'];?>"><?php echo $person['phone'];?></a><br>
					</p>
					<p style="text-transform:inherit" align="center">
						<a href="mailto:<?php echo $person['email'];?>" target="_blank"><?php echo $person['email'];?></a>
					</p>
					<!-- <p style="text-transform:inherit" align="center">
						<a href="assets/WorkReports/<?php echo $person['post'];?>.pdf">WORK REPORT</a>
					</p> -->
					<br>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script>
