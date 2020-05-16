<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Enter Event - '. Yii::app()->name;
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>Enter Event</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
		<form method="post" id="news" action="index.php?r=events/submit" enctype="multipart/form-data">
			<h4 align="center">TITLE <span class="text-danger">*</span></h4>
				<input type="text" name="title" class="form-control" align="center" style="width 70%"><br><br>
				<h4 align="center">DATE<span class="text-danger">*</span></h4>
					<input type="date" name="date" class="form-control"><br><br>
					<h4 align="center">TIME<span class="text-danger">*</span></h4>
						<input type="time" name="time" class="form-control"><br><br>
							<h4 align="center">BRIEF INFO<span class="text-danger">*</span></h4>
							<input type="text" name="descr" class="form-control"><br><br>
							<button class="btn btn-action" type="submit" style="float:right">Submit</button>
						</form>
					</div>
				</div>


			<!-- Article main content -->
			<!-- <article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Enter News</h1>
				</header> -->

			<?php //if(Yii::app()->user->post!='user') {
			?>
			<!-- <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">

							<form method="post" action="index.php?r=events/submit" enctype="multipart/form-data">
								<div class="top-margin">
									<label>Date <span class="text-danger">*</span></label>
									<input type="date" name="date" class="form-control">
								</div>
								<div class="top-margin">
									<label>Event Name <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="top-margin">
									<label>Time</label>
									<input type="time" name="time" class="form-control">
								</div>
								<div class="top-margin">
									<label>Venue</label>
									<input type="text" name="venue" class="form-control">
								</div>
								<div class="top-margin">
									<label>Miscellaneous Info (Please keep this very short, not more than 2 lines) </label>
									<input type="text" name="descr" class="form-control">
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

				</div> -->
				<?php //}  else echo "<p>Not Authorised</p>";
				?>
			<!-- </article>
		</div>
	</div> -->
