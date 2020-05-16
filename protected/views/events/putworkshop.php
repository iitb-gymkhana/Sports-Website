<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Enter Upcoming Workshop - '. Yii::app()->name;
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>Enter Workshop</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
		<form method="post" id="news" action="index.php?r=events/submitsport" enctype="multipart/form-data">
			<h4 align="center">TITLE <span class="text-danger">*</span></h4>
				<input type="text" name="title" class="form-control" align="center" style="width 70%"><br><br>
				<h4 align="center">DATE<span class="text-danger">*</span></h4>
					<input type="date" name="date" class="form-control"><br><br>
							<h4 align="center">BRIEF INFO<span class="text-danger">*</span></h4>
							<input type="text" name="descr" class="form-control"><br><br>
							<h4 align="center">REG LINK<span class="text-danger">*</span></h4>
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
				</div>