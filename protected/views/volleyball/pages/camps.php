<?php
$sport="Volleyball";
$sport2="volleyball";
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
					<h1 class="page-title">Camps</h1>
				</header>

					<p>Volleyball is a popular sport in our institute and so it attracts a lot of beginners .
						<p> For the enthusiasts we conduct beginners workshops at different levels to help them learn proper skill sets and continue their passion in volleyball. </p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
