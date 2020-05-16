<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Enter Trip - '. Yii::app()->name;
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
 <?php if(!Yii::app()->user->isGuest)
            {
              if(Yii::app()->user->post!='user')
              { ?>
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>Enter Trek</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
		<form method="post" id="news" action="index.php?r=events/submitTrip" enctype="multipart/form-data">
			<h4 align="center">TITLE <span class="text-danger">*</span></h4>
				<input type="text" name="title" class="form-control" align="center" style="width 70%"><br><br>
				<h4 align="center">DATE<span class="text-danger">*</span></h4>
					<input type="date" name="date" class="form-control"><br><br>
							<h4 align="center">BRIEF INFO<span class="text-danger">*</span></h4>
							<input type="text" name="descr" class="form-control"><br><br>
							<h4 align="center">REGISTRATION LINK<span class="text-danger">*</span></h4>
							<input type="text" name="reg_link" class="form-control"><br><br>
							<div class="row" style="margin:auto">
							<h4 align="center">IMAGE</h4>
							<span class="btn btn-default btn-file" style="width:100%">
									CHOOSE FILE<input type="file" name="fileToUpload" id="fileToUpload">
							</span>
						</div>
							<br><br>
							<button class="btn btn-action" type="submit" style="float:right">Submit</button>
						</form>
					</div>
					<?php  }
				}
					else
						echo "NOT AUTHORISED";
					?>
				</div>

<!-- <header id="head" class="secondary"></header> -->

	<!-- container -->
	<!-- <div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
      		<li class="active">Events</li>
      		<li><a href="index.php?r=events/workshop">Upcoming Treks and Trips</a></li>
      		<li class="active">Enter Trip</li>
		</ol>

		<div class="row"> -->

			<!-- Article main content -->
			<!-- <article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Enter Trip</h1>
				</header>

			<?php //if(Yii::app()->user->post!='user')
			{
			?>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">

							<form method="post" action="index.php?r=events/submitTrip" enctype="multipart/form-data">
								<div class="top-margin">
									<label>Date <span class="text-danger">*</span></label>
									<input type="date" name="date" class="form-control">
								</div>
								<div class="top-margin">
									<label>Title <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="top-margin">
									<label>Registration Link</label>
									<span><b>https://<b></span><input type="text" name="reg_link" class="form-control">
								</div>
								<div class="top-margin">
									<label>Info (4-5 lines)<span class="text-danger">*</label>
									<input type="text" name="descr" class="form-control">
								</div>
								<div class="top-margin">
									<label>Select image to upload: (Less than 5 MB)</label><br>
									<span class="btn btn-default btn-file">
									    Choose File <input type="file" name="fileToUpload" id="fileToUpload">
									</span>
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
				<?php }  //else echo "<p>Not Authorised</p>";
				?>
			</article>
		</div>
	</div> -->
