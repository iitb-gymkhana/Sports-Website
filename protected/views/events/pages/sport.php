	<?php
	/* @var $this SiteController */
	/* @var $model LoginForm */
	/* @var $form CActiveForm  */

	$this->pageTitle='Upcoming Workshops - '. Yii::app()->name;
	?>

	<style> .trip p{font-size: 18px;}  .trip li {font-size: 16px;}</style>
	<header id="head" class="secondary"></header>

		<!-- container -->
		<div class="container">

			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
	      		<li class="active">Events</li>
	      		<li class="active">Upcoming Workshops</li>
			</ol>

			<div class="row">

				<!-- Article main content -->
				<article class="maincontent">
					<header class="page-header">
						<h1 class="page-title">Upcoming Workshops</h1>
					</header>
					<?php if(!Yii::app()->user->isGuest)
					{
						if(Yii::app()->user->post!='user')
						{ ?>

							 <h3 style="text-align:right"><a href="index.php?r=events/putsport"> Add Workshop? </a></h3>

					<?php  }
					} ?>
					<div class="content trip clearfix">
	    	<div class="row-fluid">
	            <h2>1. Summer School of Sports - Starts 23rd May</h2><br>
	            <p>Institute Sports Council brings to you the Summer School of Sports to give you all a chance to learn the sport of your choice. SSoS provides you the perfect opportunity to improve skills, make new friends, laugh hard, and enjoy a lot.</p>
	        </div>
	<div>
	    <div style="text-align:center"><img src="images/upcomingworkshops/ssos.jpg" ></div>
	   </div><br>
	       	<div class="row-fluid">
	               <h2>2.Summer School of Fitness</h2>
								 <p>Experience fitness the fun way! The road to fitness doesn't have to be boring anymore. IIT Bombay Sports brings to you the Summer School of Fitness to give you all a chance to choose from a variety of activities that add diversity to your exercise routine and weight loss plan. There's something for all levels, personalities and body types.
	You can register and pay at <a href = "www.tinyurl.com/ssof2016">www.tinyurl.com/ssof2016</a> under one or more of these activities: Boxing, Yoga, Aerobics, Zumba, Swimming, Gym, general fitness and Weight loss. There are limited seats available and hence the registrations will be on first come first serve basis.</p>
	           </div>
	   <div>
	       <div style="text-align:center"><img src="images/upcomingworkshops/ssof.jpg" ></div>
	      </div>

	</div>
	<br>
	</article></div></div>
