<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Sign In - '. Yii::app()->name ;
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>SIGN IN</h2>
        </div>
      </div>
    </div>
		<div class="container" style="margin-top:20px;">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<!-- <div class="panel panel-default"> -->
						<!-- <div class="panel-body"> -->
							<h4 class="thin text-center">Sign In with Your LDAP ID and Password</h4>
							<hr>
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div><hr>
	<div class="row">
		<div class="col-lg-8">

		</div>

		<div class="col-lg-4 text-right">
		<div class="row buttons">
			<span><?php echo CHtml::submitButton('Sign In', array('class' => 'btn btn-action')); ?></span>
		</div>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<!-- </div> -->
<!-- </div> -->
</div>
</div>
</div>
