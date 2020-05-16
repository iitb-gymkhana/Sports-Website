<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h2>Error <?php echo $code; ?></h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
<p align = "center"> We're sorry, there's an error. Use our <a href="index.php?r=about/askasecy">ASK A SECY</a> portal to inform us, and we'll get right back.</p>
<h4 align="center"> About the error </h4>
<p align ="center"><?php echo CHtml::encode($message); ?></p>
</div>
</div>
</div>
