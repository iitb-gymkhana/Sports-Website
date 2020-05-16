<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle="New Survvey - ". Yii::app()->name;


?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Misc</li>
      		<li><a href="index.php?r=misc/survey">Surveys</a></li>
      		<li class="active">New Survey</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">New Surey</h1>
				</header>

			<?php if(Yii::app()->user->post=='gsec') {
			?>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" action="index.php?r=misc/submit5">
								<div class="top-margin">
									<label>Title <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="top-margin">
									<label>iframe Code <span class="text-danger">*</span></label>
									<textarea rows="10" name="url" class="form-control"></textarea>
								</div>
								<div class="top-margin">
									<label>Text</label>
									<textarea rows="10" name="msg" class="form-control"></textarea>
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
				<?php }  else echo "<p>Not Authorised</p>";
				?>
			</article>
		</div>
	</div>

