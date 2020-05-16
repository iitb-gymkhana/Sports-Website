<?php
$sport="Kho Kho";
$sport2="khokho";
$this->pageTitle="Facilities - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Events</li>
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
				<h3>Institute Kho Kho League</h3>
				<p>The Institute Kho-Kho League is the most awaited event of IIT Bombay Kho-Kho club and is held during the spring semester. This tournament is open to all students. It is a highly competitive league tournament which is organized using the IPL format.</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
