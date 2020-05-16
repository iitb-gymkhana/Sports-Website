<?php
$this->pageTitle="Contact";
?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
			<li class="active">Contact Us</li>
		</ol>



			<!-- GENERAL SECRETARY -->
			<h2 class="text-center top-space">General Secretary</h2>
            <?php $person = $gsec[0] ;?>
			<ul class="grid cs-style-6">
				<li>
					<figure style="width:300px;height:300px; ">
						<a href="<?php echo $person['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $person['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $person['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$person['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $person['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li>
				</ul>


			<!-- nominees -->
			<h2 class="text-center top-space">Sports Nominees</h2>
				<ul class="grid cs-style-6">
				<?php foreach ($nominees as $person) { ?>
				<li>
					<h3 class="thin" style="text-align:center"><?php echo $person['post'] ?> </h3>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $person['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $person['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $person['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$person['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $person['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li>
				<?php } ?>
				</ul>

			<!-- secys -->
			<h2 class="text-center top-space">Sports Secretaries</h2>
				<ul class="grid cs-style-6">
				<?php foreach ($secretaries as $person) { ?>
				<li>
					<h3 class="thin" style="text-align:center"><?php echo $person['post'] ?> </h3>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $person['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $person['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $person['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$person['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $person['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li>
				<?php } ?>
				</ul>

				<!-- pg -->
			<!-- <h2 class="text-center top-space">PG Council</h2>
				<ul class="grid cs-style-6">
				<?php foreach ($pg as $person) { ?>
				<li>
					<h3 class="thin" style="text-align:center"><?php echo $person['post'] ?> </h3>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $person['fb'] ?>" target="_blank" alt="" ><img src="images/council/pg/<?php echo $person['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $person['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$person['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $person['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li>
				<?php } ?>
				</ul> -->
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script>
