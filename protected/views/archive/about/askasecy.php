<?php
/* @var $this ContactController */

$this->pageTitle="Ask a Secy - ". Yii::app()->name;

?>
	
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Misc</li>
			<li class="active">Ask a Secy</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="maincontent">
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
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
