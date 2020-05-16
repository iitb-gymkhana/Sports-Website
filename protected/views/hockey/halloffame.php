<?php 
	$halloffame = $this->halloffame;
	$sport="Hockey";
	$sport2="hockey";

$this->pageTitle="Hall of Fame - ". ucfirst($sport)." - ". Yii::app()->name;

	foreach ($halloffame as $key => $value) {
		if ($value['sport'] == ucwords($sport) || stripos($value['sport'], ucwords($sport))) {
			$awards[] = $value;
		}
	}
?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
<!-- /Sidebar -->
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
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Person of the Year") {
					?>
					<div class="container animate-box gsec">
						<div class="row">
							<h3 align="center">Person of the Year</h3>
								<div class="col-md-6 col-md-6 council" style="left:25%;vertical-align:middle; ">
									<figure>
		        				<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
									</figure>
          				<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
		        		</div>
							</div>
						</div>
				<?php }}
				 ?>

				 <!--ROH-->
				 <?php $count = 0;
				 foreach ($awards as $key => $awardee) {
 					if($awardee['award'] == "Roll of Honour") {
						$count++;
 					?>
						<?php if($count == 1){?>
							<div class="container animate-box gsec">
						<h3 align="center">Roll of Honour</h3>
						<?php } ?>
 						<div class="row">
 								<div class="col-md-6 col-md-6 council" style="left:25%;vertical-align:middle; ">
 									<figure>
 		        				<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
 									</figure>
           				<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
 		        		</div>
 							</div>
 						</div>
 				<?php }
			}
 				 ?>

				 <!--FOTY -->

				 <?php $count = 0;
				 foreach ($awards as $key => $awardee) {
						if($awardee['award'] == "Freshman of the Year") {
						$count++;
						?>
						<?php if($count==1){?>
							<div class="container animate-box gsec">
							 <h3 align="center">Freshmen of the Year</h3>
							 <div class="row">
							 <?php
						 }
						 ?>
							<div class="col-md-6 col-md-6 council" style="left:25%;">
										<figure>
											<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
										</figure>
										<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
									</div>
					<?php
				}
					}
					  if($count!=0){?>
				 </div>
			 </div>
			 <?php
		 }
		 ?>




			 <?php $count = 0;
			 foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Citation") {
					$count++;
					?>
					<?php if($count==1){?>
						<div class="container animate-box noms" style="margin-top:40px">
						 <h3 align="center">Citations</h3>
						 <div class="row">
						 <?php
					 }
					 ?>
						<div class="col-md-4 col-md-4 council">
									<figure>
										<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
									</figure>
									<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
								</div>
				<?php
			}
				}
				 ?>
				 <?php if($count!=0){?>
 		 </div>
 	 </div>
 	 <?php
  }
  ?>



		 <?php $count =0;
		 foreach ($awards as $key => $awardee) {
				if($awardee['award'] == "Color") {

				 if($count==0){?>
					<div class="container animate-box noms" style="margin-top:40px">
					 <h3 align="center">Color</h3>
					 <?php
				 }

				 if($count%3==0){
					?>
				<div class="row">
				<?php
			}

			?>

					<div class="col-md-4 col-md-4 council">
								<figure>
									<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
								</figure>
								<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
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
			 <?php if($count!=0){?>
 </div>
 <?php
 }
 ?>




 <?php $count =0;
 foreach ($awards as $key => $awardee) {
		if($awardee['award'] == "PG Passing out Color") {

		 if($count==0){?>
			<div class="container animate-box noms" style="margin-top:40px">
			 <h3 align="center">PG Passing Out Color</h3>
			 <?php
		 }

		 if($count%3==0){
			?>
		<div class="row">
		<?php
	}

	?>

			<div class="col-md-4 col-md-4 council">
						<figure>
							<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
						</figure>
						<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
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
	 <?php if($count!=0){?>
</div>
<?php
}
?>




 <?php $count =0;
 foreach ($awards as $key => $awardee) {
		if($awardee['award'] == "Special Mention") {
		?>
		<?php if($count==0){?>
			 <div class="container animate-box noms" style="margin-top:40px">
			 <h3 align="center">Special Mention</h3>
			 <?php
		 }
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
						<p align="center"><a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a></p>
					</div>
					<?php if($count%3==2){
						?>
					</div>
	<?php }
	$count++;
}
}
if($count%3!=0){?>
</div>
<?php }
?>

<?php if($count!=0){?>
</div>
<?php
}
}
?>

</div>
