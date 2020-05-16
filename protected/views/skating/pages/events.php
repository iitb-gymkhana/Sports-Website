<?php 
$sport="Skating";
$sport2="skating";
$this->pageTitle="Events - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Events	</h1>
				</header>

				<h3>Camps: </h3>
				<p>The sessions of camp will contain Inline skate, Quad skate and Skateboard. 4 camps are organised throughout the year. You have to register for these camp,you can do it right now through the registration tab on your left. The duration of camps is usually 3 to 4 weeks. The camps are as follows:</p>
				<ul>
					<li><b>Autumn Camp:</b> The camp is a Beginner Camp and most probably starts in first week of October. No previous experience will be required for this camp.</li>
					<li><b>Spring camps:</b> In spring semester we conduct 2 camps, one is before midsem and other one is after midsem.The first camp is Intermediate and other later one is Advance camp. Beginner can also join these camps.</li>
					<li><b>Summer camp:</b> The summer camp usually start in mid of May. This camp is also a Advance level camp, but beginner can also join this camp.</li>
				</ul>

				<p>Register for the upcoming camp <a href="http://goo.gl/forms/Z5F4yYkllK" target="_blank">Here</a> </p>

				<p>We will be in touch with you and inform you when and where do you have to pay the registration fee for the camp. The registration fee is Rs.100, which is refundable subjected to minimum 80% attendance.</p>



	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->