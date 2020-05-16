<?php 
$sport="Badminton";
$sport2="badminton";
$this->pageTitle="Facilities - Badminton - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Facilities</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Facilities	</h1>
				</header>


				<p>5 wooden badminton courts in a very big air conditioned hall with international standards, 
				soon to be converted to 8 courts with synthetic mats on it.</p>

				<p>Timings : 6 AM - 10 PM ( All days unless mentioned otherwise)</p>

				<p>Shuttles and racquets issue will be started from the start of next academic semester 
				( Jul '15). Issuing will be done at the reception desk of the indoor badminton hall.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->