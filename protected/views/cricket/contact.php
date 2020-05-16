<?php
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$coaches = $this->coaches;
	$sport="Cricket";
	$sport2="cricket";

	$this->pageTitle="People - ". ucfirst($sport)." - ". Yii::app()->name;


	foreach ($secretaries as $key => $value) {
		if ($value['post'] == ucwords($sport)) {
			$secy = $value;
			break;
		}
	}
	foreach ($coaches as $key => $value) {
		if ($value['sport'] == ucwords($sport)) {
			$coach[] = $value;
			break;
		}
	}
	foreach ($captains as $key => $value) {
		if ($value['sport'] == ucwords($sport)) {
			$captain[] = $value;
		}
	}
?>


	<?php include 'sidebar.php'; ?>

<div class="fh5co-overlay" style="height:80px;"></div>
<div id="fh5co-work-section">
			<div class="container" style="margin-top:60px;">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>CONTACT</h3>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<a href="<?php echo $secy['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $secy['image']?>" alt="" style="max-height:150px; border-radius:50%"></a><br>
							<br><h3>INSTITUTE SECRETARY</h3>
							<p><?php echo $secy['name']; ?><br>
							<i class="fa fa-phone"></i>  <?php echo ' ' .$secy['phone']; ?><br>
							<a target="_blank" href="mailto:<?php echo $secy['email']?>;" style="color:inherit"><i class="fa fa-envelope"></i> <?php echo $secy['email']?></a><br>
						</div>
					</div>
					<?php
					if(isset($coach)) {
					foreach($coach as $key=>$value){
						?>
						
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<?php if(isset($value['fb'])){
								$string=$value['fb'];?>
							<a href="<?php echo $string; ?>" target="_blank" alt="" ><img src="images/council/coach/<?php echo $value['image']?>" alt="" style="max-height:150px; border-radius:50%"></a><br>
							<?php } 
							?>
							<br><h3>COACH</h3>
							<?php if(isset($value['name'])){?>
							<p><?php echo $value['name']; ?><br>
								<?php }
								if(isset($value['phone'])){ ?>
							<i class="fa fa-phone"></i>  <a style="color:inherit;" href="tel:<?php echo ' ' .$value['phone'];?>"><?php echo ' ' .$value['phone']; ?></a><br>
							<?php }
							 ?>
							<?php if(isset($value['email'])){ ?>
							<a target="_blank" href="mailto:<?php echo $value['email']?>;" style="color:inherit"><i class="fa fa-envelope"></i> <?php echo $value['email']?></a><br>
							<?php
						}
						 ?>
						</div>
					</div>
					<?php
				}
				}
				?>
					<?php
					if(isset($captain)) {
					foreach ($captain as $key => $value) { ?>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<a href="<?php echo $value['fb'] ?>" target="_blank" alt="" ><img src="images/council/captains/<?php echo $value['image']?>" alt="" style="max-height:150px; border-radius:50%"></a><br>
							<br><h3><?php if($value['girls_captain']) {
								echo "Girls Captain";
							} else {
								echo "Captain";
							} ?></h3>
							<p><?php echo $value['name']; ?><br>
							<i class="fa fa-phone"></i>  <?php echo ' ' .$value['phone']; ?><br>
							<a target="_blank" href="mailto:<?php echo $value['email']?>;" style="color:inherit"><i class="fa fa-envelope"></i> <?php echo $value['email']?></a><br><br>
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>
