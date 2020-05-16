<?php 
$sport="Adventure and Rolling Sports";
$sport2="adv";
$this->pageTitle="Cycling Club - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Cycling Club</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Cycling Club</h1>
				</header>


				<p>Cycling is recently included in Gymkhana sports due to a huge participation in this 
				exciting sport.</p>
				<p>We usually conduct a cycling ride to nearby places in Mumbai in a month. The usual distance 
				of these rides is 50 km and 120 km.</p>
				<p>These rides are under the supervision of a professional cyclist and also supported by some 
				senior cyclist if our insti. For safety purposes, the institute provides a supporting vehicle 
				in each ride.</p>

				<p>Apart from rides we also conduct cycling competitions like biathlon on Independence Day and 
				triathlon GC.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->