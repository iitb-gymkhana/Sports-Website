<?php
$sport="Volleyball";
$sport2="volleyball";
$this->pageTitle="Inter IIT - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Inter IIT</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inter IIT</h1>
				</header>

					<p>Inter IIT is the Olympics for all players here at IIT Bombay. The Inter IIT meet is held every year during december for all sports except Aquatics , which is held during October. All 16 IITs across the nation strive for that one General Championship Trophy over the span of a week.</p>
<p>	Our team is working hard and improving and has won all the inter college tournaments in Mumbai, participated last semester.

</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
