<?php
$sport="Squash";
$sport2="squash";
$this->pageTitle="Institute Squash Open- ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Institute Squash Open</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Institute Squash Open</h1>
				</header>
				<p>The Institute Squash Open is the flagship event of IIT Bombay Squash Club and is held during the spring semester.  This tournament is open to all students, alumni, professors and staff . It is a highly competitive knockout tournament with some of the best squash ever played in the Institute on display.</p>


	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
