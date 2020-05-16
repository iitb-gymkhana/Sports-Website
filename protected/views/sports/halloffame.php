<?php

$this->pageTitle="Hall of Fame - ". Yii::app()->name;

	$halloffame = $this->halloffame;

	foreach ($halloffame as $key => $value) {
			$awards[] = $value;
	}
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>HALL OF FAME</h2>
        </div>
      </div>
    </div>
			<?php
			if(!isset($awards)) { echo "<p>There are no awards to be displayed at this moment. We're working on it. Meanwhile checkout the previous year's <a href=\"index.php?r=archive/oldhof\">Hall of Fame</a></p>";}
			else { ?>
				 <!--ROH-->
				 <div class="container animate-box gsec" style="margin-top:15px">

				 <?php $count = 0;
				 foreach ($awards as $key => $awardee) {
						if($awardee['award'] == "Roll of Honour") {
						$count++;
						?>
						<?php if($count==1){?>
						<h3 align="center">Roll Of Honour</h3>
 					 <div class="row">
						 <?php
					 }
					  ?>
							<div class="col-md-6 col-md-6 council">
										<figure>
											<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
										</figure>
										<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
										<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
									</div>
					<?php
				}
					}
					 ?>
				 </div>
			 </div>

 				 <!--POY-->
 			<div class="container animate-box noms" style="margin-top:15px">
 				 <?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Person of the Year") {
					?>
						<div class="row">
							<h3 align="center">Person of the Year</h3>
								<div class="col-md-3 col-md-3 council"></div>
								<div class="col-md-6 col-md-6 council">
									<figure>
		        				<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
									</figure>
          				<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
									<?php echo $awardee['sport']; ?></p>
		        		</div>
		        		<div class="col-md-3 col-md-3 council"></div>
							</div>
				<?php }}
				 ?>
				</div>


				 <!--AmbroseOtieno-->
				<div class="container animate-box noms" style="margin-top:15px">

				 <?php $count = 0;
				 foreach ($awards as $key => $awardee) {
						if($awardee['award'] == "Ambrose Otieno") {
						$count++;
						?>
						<?php if($count==1){?>
						<h3 align="center">Ambrose Otieno</h3>
 					 <div class="row">
						 <?php
					 }
					  ?>
							<div class="col-md-6 col-md-6 council">
										<figure>
											<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
										</figure>
										<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
										<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
									</div>
					<?php
				}
					}
					 ?>
				 </div>
			 </div>

				 <!--FOTY -->
				 <div class="container animate-box noms" style="margin-top:15px">

				 <?php $count = 0;
				 foreach ($awards as $key => $awardee) {
						if($awardee['award'] == "Freshman of the Year") {
						$count++;
						?>
						<?php if($count==1){?>
						<h3 align="center">Freshmen of the Year</h3>
 					 <div class="row">
						 <?php
					 }
					  ?>
							<div class="col-md-6 col-md-6 council">
										<figure>
											<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
										</figure>
										<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
										<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
									</div>
					<?php
				}
					}
					 ?>
				 </div>
			 </div>

			 <!--Citation-->
			 <div class="container animate-box noms" style="margin-top:40px">
			 	<h3 align="center">Citation</h3>
			 <?php $count =0;
			 foreach ($awards as $key => $awardee) {
			 	 if($awardee['award'] == "Citation") {
			 	 ?>
			 	 <?php if($count%3==0){
			 		 ?>
			 	 <div class="row">
			 	 <?php
			  }
			  ?>
			 		 <div class="col-md-4 col-md-4 council">
			 					 <figure>
			 						 <img src="images/halloffame/<?php echo $awardee['image']; ?>" />
			 					 </figure>
			 					 <p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
			 					 <a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
			 				 </div>
			 				 <?php if($count%3==2){
			 					 ?>
			 				 </div>
			  <?php }
			  $count++;
			  }
			  }
			  if($count%3!=0)
			  {
			 	 ?>
			  </div>
			  <?php
			 }
			 	?>
			 </div>


		 <div class="container animate-box noms" style="margin-top:40px">
			 <h3 align="center">Color</h3>
		 <?php $count =0;
		 foreach ($awards as $key => $awardee) {
				if($awardee['award'] == "Color") {
				?>
				<?php if($count%3==0){
					?>
				<div class="row">
				<?php
			}
			?>
					<div class="col-md-4 col-md-4 council">
								<figure>
									<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
								</figure>
								<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
								<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
							</div>
							<?php if($count%3==2){
								?>
							</div>
			<?php }
			$count++;
			}
			}
			if($count%3!=0)
			{
				?>
			</div>
			<?php
		}
			 ?>
		</div>


	 <div class="container animate-box noms" style="margin-top:40px">
		 <h3 align="center">PG Passing out Color</h3>
		 <div class="row">
	 <?php $count = 0;
	 foreach ($awards as $key => $awardee) {
			if($awardee['award'] == "PG Passing out Color") {
			$count++;
			?>
				<div class="col-md-6 col-md-6 council">
							<figure>
								<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
							</figure>
							<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
							<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
						</div>
		<?php
	}
		}
		 ?>
	 </div>
 </div>


 <div class="container animate-box noms" style="margin-top:40px">
	 <h3 align="center">Special Mention</h3>
 <?php $count =0;
 foreach ($awards as $key => $awardee) {
		if($awardee['award'] == "Special Mention") {
		?>
		<?php if($count%3==0){
			?>
		<div class="row">
		<?php
	}
	?>
			<div class="col-md-4 col-md-4 council">
						<figure>
							<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
						</figure>
						<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
						<a style="color:#FCC72C" href="index.php?r=<?php echo $awardee['sport']; ?>"><?php echo $awardee['sport']; ?></a></p>
					</div>
					<?php if($count%3==2){
						?>
					</div>
	<?php }
	$count++;
}
}
if($count%3!=0)
{
	?>
</div>
<?php
}
}
 ?>
</div>

</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
