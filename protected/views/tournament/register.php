<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle="Registrations - Volleyball Tournament - ". Yii::app()->name;
?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=volleyball">Volleyball</a></li>
			<li><a href="index.php?r=tournament/volleyball">Volleyball Tournament</a></li>
			<li class="active">Register</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Register</h1>
				</header>


			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" id="volleyball" action="index.php?r=tournament/submit">
								<div class="top-margin">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email ID <span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="top-margin">
									<label>Mobile Number <span class="text-danger">*</span></label>
									<input type="number" min="1000000000" max="9999999999" name="phone" class="form-control">
								</div>
								<div class="top-margin">
									<label>College <span class="text-danger">*</span></label>
									<input type="text" name="college" class="form-control">
								</div>
								<div class="top-margin">
									<label>Team <span class="text-danger">*</span></label><br>
									<input type="radio" name="sex" value="m">&nbsp Men<br>		  
									<input type="radio" name="sex" value="f">&nbsp Women
								</div>
									<input type="hidden" name="sport" value="Volleyball">
							
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

			</article>
		</div>
	</div>