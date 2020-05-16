<?php
$sport="Volleyball";
$sport2="volleyball";
$this->pageTitle="IVL - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">IVL</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">IVL	</h1>
				</header>
				<h3>Institute Volleyball League</h3>
					<p>The Institute Volleyball league is one of the most participated team event and is held during the spring semester.  This tournament is open to all students.
						It is a highly competitive League tournament and a great learning experience for volleyball enthusiasts.</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
