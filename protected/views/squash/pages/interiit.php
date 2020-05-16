<?php
$sport="Squash";
$sport2="squash";
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
					<h1 class="page-title">Inter IIT	</h1>
				</header>

			<p>Inter IIT is the Olympics for all players here at IIT Bombay. The Inter IIT meet is held every year during december for all sports except Aquatic , which is held during October. All 16 IITs across the nation strive for that one General Championship Trophy over the span of a week.</p>
			<p>Our institute team is giving an ever-improving performance every year . We finished  4th in 2012 , 3rd in 2013 and 2nd in 2014.</p>



	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
