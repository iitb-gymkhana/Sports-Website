<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Calendar';
$this->breadcrumbs=array(
	'Calendar',
);
?>
<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>CALENDAR</h3>
      </div>
    </div>
  </div>

				<?php if(!Yii::app()->user->isGuest)
	{
				  if(Yii::app()->user->post!='user')
				  { ?>

				    <button style="margin-left:80%; margin-bottom:5px;"><a href="index.php?r=events/putevent"> ADD EVENT </a></button>

				<?php }
				} ?>
				<div class="responsive-iframe-container" style="margin-left:7%">
					<iframe src="https://calendar.google.com/calendar/embed?src=idvgb7a3en8e094827eadc9bhg%40group.calendar.google.com&ctz=Asia/Calcutta" style="border: 0" width="90%" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
		</div>
