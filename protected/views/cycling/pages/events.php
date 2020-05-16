<?php 
$sport="Cycling";
$sport2="cycling";
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

				<p>The club conducts a cycling rides of usual distance 50 km to 120 km every month. There is no prerequisite for these rides, your enthusiasm will be more than sufficient. The rides are accomplished by a supporting vehicle and refreshments.These ride are under the supervision of a professional cyclist and also supported by some senior cyclist if our institute. You have to register for these camp, you can do it right now through the registration tab on your left.
</p>



	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->