<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Certificate Form - '. Yii::app()->name;
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
 <?php if(!Yii::app()->user->isGuest)
            {
              if(Yii::app()->user->post!='user')
              { 
              	if(Yii::app()->user->ldap==150020010) {?>
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>Choose Format</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
			<a href="index.php?r=events/singlecertiform"><button class="btn btn-action form-control" type="submit" style="width:50%;margin-left:25%;height:7.5%">Make Single Certificate</button></a><br><br>
			<a href="index.php?r=events/multicertiform"><button class="btn btn-action form-control" type="submit" style="width:50%;margin-left:25%;height:7.5%">Make Multiple Certificates</button></a>
		</div>
		<?php  }
				} }
					?>
					 <?php if(!Yii::app()->user->isGuest)
            {
              if(Yii::app()->user->post!='user')
              { ?>
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>Enter Certificate Details</h2>
        </div>
      </div>
    </div>
		<div class="container_putevent">
		<form method="post" id="news" action="index.php?r=events/makecerti" enctype="multipart/form-data">
			<h4 align="center">TEMPLATE<span class="text-danger">*</span></h4>
				<select type="text" name="template" class="form-control" required>
					  <!--<option value="1617GCFIRST" selected>GC First Position 2016-17</option>
					  <option value="1617GCSECOND">GC Second Position 2016-17</option>
					  <option value="1617GCTHIRD">GC Third Position 2016-17</option>-->
					  <option value="1718GCFIRST">GC First Position 2017-18</option>
					  <option value="1718GCSECOND">GC Second Position 2017-18</option>
					  <option value="1718GCTHIRD">GC Third Position 2017-18</option>
					  <option value="1718GCFOURTH">GC Fourth Position 2017-18</option>
				</select><br><br>
				<h4 align="center">ROLL NO<span class="text-danger">*</span></h4>
					<input type="text" name="rollno" class="form-control" required><br><br>
				<h4 align="center">NAME<span class="text-danger">*</span></h4>
					<input type="text" name="name" class="form-control" required><br><br>
				<h4 align="center">EVENT<span class="text-danger">*</span></h4>
					<input type="text" name="sport" class="form-control" required><br><br>
				<h4 align="center">HOSTEL<span class="text-danger">*</span></h4>
					<input type="text" name="hostel" class="form-control" required textholder="Hostel Number"><br><br>
				<!--<h4 align="center">CERTIFICATE ID<span class="text-danger">*</span></h4>
					<input type="text" name="certi_id" class="form-control" disabled><br><br>-->
					</div>
							<br><br>
							<button class="btn btn-action form-control" type="submit" style="width:50%;margin-left:25%">Submit</button>
		</form>
		</div>
		<?php  }
				}
					else
						echo "NOT AUTHORISED";
					?>

</div>