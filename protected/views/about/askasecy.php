<?php
/* @var $this ContactController */

$this->pageTitle="Ask a Secy - ". Yii::app()->name;

?>



<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container" style="margin-top:40px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h2>Ask a Secy</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<?php if(Yii::app()->user->isGuest)
					{ ?>
					<div class="row">
						<p align="center">Have any feedback/complaints/suggestions for us? You've come to the right place! Write away.</p>
						<p align="center">You need to sign in to use this feature!</p>
						<a class="btn btn-primary" href="index.php?r=site/login" style="position:absolute;left:46%;">SIGN IN</a>
					</div>  <?php }
					else {?>
		<div class="row">
			<p align="center">Have any feedback/complaints/suggestions for us? You've come to the right place! Write away.</p>
			<form method="post" action="index.php?r=about/submit2">
				<div class="row">
						<select name="sport" class="form-control" style="width:40%; margin-left:30%">
								<option value="" disabled selected>SPORT</option>
								<option value="General Secretary">GSEC</option>
									<option value="Aquatics">AQUATICS</option>
								<!--<option value="Adventure and Rolling Sports">ADVENTURE AND ROLLING SPORTS</option>-->
								<option value="Athletics">ATHLETICS</option>
								<option value="Badminton">BADMINTON</option>
								<option value="Basketball">BASKETBALL</option>
								<option value="Board Games">BOARD GAMES</option>
								<option value="Cricket">CRICKET</option>
								<option value="Football">FOOTBALL</option>
								<option value="Hockey">HOCKEY</option>
								<option value="Indian Games">KHO KHO</option>
								<option value="Lawn Tennis">LAWN TENNIS</option>
								<option value="Squash">SQUASH</option>
								<option value="Table Tennis">TABLE TENNIS</option>
								<option value="Volleyball">VOLLEYBALL</option>
								<option value="Weightlifting">WEIGHTLIFTING</option>
						</select>
					</div>
					<br>
					<div class="row" style="width:40%; margin-left:30%">
						<input name="phone" class="form-control" type="text" placeholder="YOUR PHONE NUMBER">
					</div>
					<br>
					<div class="row" style="width:70%; margin-left:10%">
						<input name="subject" class="form-control" type="text" placeholder="SUBJECT">
					</div>
				</div>
				<br>
				<div class="row" >
					<div class="col-sm-12">
						<textarea name="msg" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
					</div>
				</div>
				<br>
				<label><span class="text-danger">*</span>All fields are compulsory</label>
				<div class="row">
					<div class="text-right">
						<input class="btn btn-action" type="submit" value="Send message">
					</div>
				</div>
			</form>
		</div> <?php } ?>
	</div>
</div>
<!-- <header id="head" class="secondary"></header> -->

	<!-- container -->
	<!-- <div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Misc</li>
			<li class="active">Ask a Secy</li>
		</ol>

		<div class="row"> -->

			<!-- Article main content -->
			<!-- <article class="maincontent">
				<header class="page-header">
					<h1 class="page-title">Ask a Secy</h1>
				</header>

				<p>Please submit any feedback or complaints here. We'd love to hear from you.</p>

				<br>
					<form method="post" action="index.php?r=about/submit2">
						<div class="row">
							<div class="col-sm-4">
								<select name="sport" class="form-control">
								 	  <option value="" disabled selected>Sport</option>
								 	  <option value="Adventure and Rolling Sports">Adventure and Rolling Sports</option>
								  	  <option value="Aquatics">Aquatics</option>
									  <option value="Athletics">Athletics</option>
									  <option value="Badminton">Badminton</option>
									  <option value="Basketball">Basketball</option>
									  <option value="Board Games">Board Games</option>
									  <option value="Cricket">Cricket</option>
									  <option value="Football">Football</option>
									  <option value="Hockey">Hockey</option>
									  <option value="Indian Games">Kho Kho</option>
									  <option value="Lawn Tennis">Lawn Tennis</option>
									  <option value="Squash">Squash</option>
									  <option value="Table Tennis">Table Tennis</option>
									  <option value="Volleyball">Volleyball</option>
									  <option value="Weightlifting">Weightlifting</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input name="phone" class="form-control" type="text" placeholder="Phone Number">
							</div>
							<div class="col-sm-4">
								<input name="subject" class="form-control" type="text" placeholder="Subject">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea name="msg" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<label><span class="text-danger">*</span>All fields are compulsory</label>
						<div class="row">
							<div class="text-right">
								<input class="btn btn-action" type="submit" value="Send message">
							</div>
						</div>
					</form>
<br>
			</article> -->
			<!-- /Article -->

		<!-- </div>
	</div>	<!-- /container -->
