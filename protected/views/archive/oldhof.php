<?php

$this->pageTitle="Hall of Fame - ". Yii::app()->name;

	$oldhof = $this->oldhof;
	
	foreach ($oldhof as $key => $value) {
			$awards[] = $value;
	}
?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Archive</li>
			<li class="active">Hall of Fame</li>
			<li class="active">2014-15</li>
		</ol>

<div class="row">




<!-- Article main content -->
			<article class="maincontent">
				<header class="page-header">
					<h1 class="page-title" align="center">Hall of Fame 2014-15</h1>
				</header>
				
				
			<?php if(!isset($awards)) { echo "<h3>No awards available!</h3>";}
			else { ?>
				<h3 align = "left"><a href = "index.php?r=archive/halloffame"> &lt&ltPresent</a></h3>
			<ul class="grid cs-style-3">


			<!--Person of the Year --!>
			<h2 class="text-center top-space">Person of The Year</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Person of the Year") {
					?>
				<li>
					<figure style="width:300px;height:300px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>
				
			<!-- Roll of Honour -->
			<h2 class="text-center top-space" >Roll Of Honour</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Roll of Honour") {
					?>
				<li>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

		<!-- Freshman of the Year -->
			<h2 class="text-center top-space">Freshman of the Year</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Freshman of the Year") {
					?>
				<li>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

	<!-- Ambrose Otieno 			<h2 class="text-center top-space">Ambrose Otieno</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Ambrose Otieno") {
					?>
				<li>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>  -->


				<!-- Citation -->
			<h2 class="text-center top-space">Citation</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Citation") {
					?>
				<li>
					<figure style="width:200px;height:200px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>


				<!-- PG Passing out Color -->
			<h2 class="text-center top-space">PG Passing out Color</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "PG Passing out Color") {
					?>
				<li>
					<figure style="width:200px;height:200px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>



				<!-- Color -->
			<h2 class="text-center top-space">Color</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Color") {
					?>
				<li>
					<figure style="width:200px;height:200px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

				<!-- Special Mention -->
			<h2 class="text-center top-space">Special Mention</h2>
				<?php foreach ($awards as $key => $awardee) {
					if($awardee['award'] == "Special Mention") {
					?>
				<li>
					<figure style="width:200px;height:200px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
							<span><?php echo ' ' .$awardee['sport']; ?></span>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>


			</ul>
			<?php } ?>
		</article>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script>
