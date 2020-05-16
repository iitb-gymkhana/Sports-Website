<?php 
	$halloffame = $this->halloffame;
	$sport="Indian Games";
	$sport2="indian";

$this->pageTitle="Hall of Fame - ". ucfirst($sport)." - ". Yii::app()->name;

	foreach ($halloffame as $key => $value) {
		if ($value['sport'] == ucwords($sport)) {
			$awards[] = $value;
		}
	}
?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">People</li>
			<li class="active">Hall of Fame</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Hall of Fame</h1>
			</header>

			<?php if(!isset($awards)) { echo "<h3>No awards available!</h3>";}
			else { ?>
			<ul class="grid cs-style-3">			

			<!-- Person of the Year -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Person of the Year") {
					?>
				<li>
				<h2 class="text-center top-space">Person of The Year</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

			<!-- Roll of Honour -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Roll of Honour") {
					?>
				<li>
				<h2 class="text-center top-space">Roll Of Honour</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

				<!-- Freshman of the Year -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Freshman of the Year") {
					?>
				<li>
				<h2 class="text-center top-space">Freshman of the Year</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

				<!-- Ambrose Otieno -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Ambrose Otieno") {
					?>
				<li>
				<h2 class="text-center top-space">Ambrose Otieno</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>
				
				<!-- Citation -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Citation") {
					?>
				<li>
				<h2 class="text-center top-space">Citation</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>


				<!-- PG Passing out Color -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "PG Passing out Color") {
					?>
				<li>
				<h2 class="text-center top-space">PG Passing out Color</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

				<!-- Color -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Color") {
					?>
				<li>
				<h2 class="text-center top-space">Color</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>

				<!-- Special Mention -->
				<?php foreach ($awards as $key => $awardee) { 
					if($awardee['award'] == "Special Mention") {
					?>
				<li>
				<h2 class="text-center top-space">Special Mention</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $awardee['name']; ?></h3>
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