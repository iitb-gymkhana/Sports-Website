<?php
$sport="Squash";
$sport2="squash";
$this->pageTitle="Camps - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
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
					<h1 class="page-title">Camps	</h1>
				</header>
				<p>Squash is a new budding sport especially in our institute .
					<br>Being easy to learn , it attracts a lot of beginners . So for the enthusiasts out there , we organise various Beginners’ and Intermediate Camp over the year  and through Summer School of Sports during the summers.</p>


	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
