<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Enter Certi - '. Yii::app()->name;
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
					<h2>Enter Certi</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
		<form method="post" id="news" action="index.php?r=events/submitCerti" enctype="multipart/form-data">
			<h4 align="center">TITLE <span class="text-danger">*</span></h4>
				<input type="text" name="title" class="form-control" align="center" style="width 70%"><br><br>
				<h4 align="center">ROLL NO<span class="text-danger">*</span></h4>
					<input type="text" name="rollno" class="form-control"><br><br>
				<h4 align="center">NAME<span class="text-danger">*</span></h4>
					<input type="text" name="usr" class="form-control"><br><br>
							<h4 align="center">BRIEF INFO<span class="text-danger">*</span></h4>
							<input type="text" name="descr" class="form-control"><br><br>
							<h4 align="center">CERTIFICATE ID<span class="text-danger">*</span></h4>
							<input type="text" name="certi_id" class="form-control"><br><br>
							<div class="row" style="margin:auto">
							<h4 align="center">PDF</h4>
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