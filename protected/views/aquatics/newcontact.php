<?php
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$coaches = $this->coaches;
	$sport="Aquatics";
	$sport2="aquatics";

	$this->pageTitle="People - ". ucfirst($sport)." - ". Yii::app()->name;


	foreach ($secretaries as $key => $value) {
		if ($value['post'] == ucwords($sport)) {
			$secy = $value;
			break;
		}
	}
	foreach ($captains as $key => $value) {
		if ($value['sport'] == ucwords($sport)) {
			$captain[] = $value;
		}
	}
	foreach ($coaches as $key => $value) {
		if ($value['sport'] == ucwords($sport)) {
			$coach = $value;
		}
	}
?>

<!-- <header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">People</li>
			<li class="active">Contact</li>
		</ol> -->

<!-- <div class="row"> -->

			<!-- Sidebar -->
			<!-- <?php //include 'sidebar.php'; ?> -->
			<!-- /Sidebar -->

			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>

				<div class="fh5co-cover fh5co-cover text-center" data-stellar-background-ratio="0.5" style="height:100%; background-image: url(images/gallery/aquatics/2.JPG);">
						<!-- INSTITUTE SECRETARY -->
						<div class="desc animate-box">
						<?php
						if(isset($secy))
						{
							?>

							<h3 style="color:#bbbbb1"> INSTITUTE SECRETARY </h3>
							<div class = "contact" style="min-height: 250px">
							<figure>
								<a href="<?php echo $secy['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $secy['image']?>" alt="user"></a>
							</figure>
						</div>
									<!-- <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"></button> -->
					<!-- </div> -->
					<?php
				}
				if(isset($coach))
					{
					?>
						<h3 style="color:#bbbbb1"> COACH </h3>
						<div class = "contact">
						<figure>
							<a href="<?php echo $coach['fb'] ?>" target="_blank" alt="" ><img src="images/council/coach/<?php echo $coach['image']?>" alt="user"></a>
						</figure>
					</div>
								<!-- <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"></button> -->

				<?php
			}
			?>
			</div>
			</div>
			</div>

				<!-- <h1 class="page-title">Contact	</h1>
		</header>

			<ul class="grid cs-style-6"> -->
				<!-- INSTITUTE SECRETARY -->
				<!-- <li>
					<h2 class="text-center top-space">Institute Secretary</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $secy['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $secy['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $secy['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$secy['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $secy['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li> -->


				<!-- COACH -->
				<!-- <li>
					<h2 class="text-center top-space">Coach</h2>
					<figure style="width:250px;height:250px; ">
					<a href="<?php echo $coach['fb'] ?>" target="_blank" alt="" ><img src="images/council/coach/<?php echo $coach['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $coach['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$coach['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $coach['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li> -->




			<!-- CAPTAIN -->

				<!-- <?php
				if(isset($captain)) {
				foreach ($captain as $key => $value) { ?>
				<li>
				<h2 class="text-center top-space">
				<?php if($value['girls_captain']) {
					echo "Girls Captain";
				} else {
					echo "Captain";
				} ?>
				</h2>
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $value['fb'] ?>" target="_blank" alt="" ><img src="images/council/captains/<?php echo $value['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $value['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$value['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $value['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>
						</figcaption>
					</figure>
				</li>
				<?php } } ?>


			</ul>
		</article>
	</div>
</div> -->

<!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script> -->
