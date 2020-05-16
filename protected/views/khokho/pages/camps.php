<?php
$sport="Kho Kho";
$sport2="khokho";
$this->pageTitle="Camps - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Events</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Camps</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Camps</h1>
				</header>
				<p>Kho-Kho is a new budding sport, especially in our institute. Being easy to learn, it attracts a lot of beginners. So for the enthusiasts out there, we organize various Beginners’ and Intermediate Camp over the year. And for the betterment of Institute Kho-Kho team, we organize the summer advanced training camp.</p>.

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
