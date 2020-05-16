<?php
/* @var $this SidebarleftController */

$this->pageTitle="Ground Booking System - ". Yii::app()->name;
$date2 = new DateTime('tomorrow');
$i=0;
if(!isset($_POST["date"])) {$date=date('Y-m-d', strtotime("+2 day"));}
else {$date=$_POST["date"];}
?>
	
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Misc</li>
			<li class="active">Ground Booking System</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">

				<form method="post" action="index.php?r=misc/ground">
					<h1 class="page-title">Ground Booking for <select name="date" onchange="this.form.submit()">
							<?php while($i<7){ $date2->modify('+1 day'); $i++; $date3=$date2->format('Y-m-d');?>
								<option value="<?php echo $date3; ?>" <?php if($date==$date3){ echo "selected";} ?> ><?php echo $date3; ?> </option>
								<?php } ?></select>
				</h1>
				</header>
				</form>

			<?php if(!Yii::app()->user->isGuest) {
			
			if(Yii::app()->user->post=='gsec')
			  { ?>
			  <h3 style="text-align:right"><a href="index.php?r=misc/groundapprove"> Approve Requests </a></h3>
			<?php } ?>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" action="index.php?r=misc/submit3">
								<div class="top-margin">
									<label>Sport <span class="text-danger">*</span></label>
									<select name="sport" class="form-control">
									  <option value="Cricket">Cricket</option>
									  <option value="Football">Football</option>
									</select>	
								</div>
								<div class="top-margin">
									<label>From <span class="text-danger">*</span></label>
									<input type="time" name="from" class="form-control">
								</div>
								<div class="top-margin">
									<label>To <span class="text-danger">*</span></label>
									<input type="time" name="to" class="form-control">
									<input name="date" type="hidden" value="<?php echo $date; ?>">
								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-12 text-right">
										<button class="btn btn-action" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<?php }  else echo "<p>Please Login</p>";
				?>
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->

