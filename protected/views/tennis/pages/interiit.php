<?php
$sport="Lawn Tennis";
$sport2="tennis";
$this->pageTitle="Inter IIT - Lawn Tennis - ". Yii::app()->name;

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

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Inter IIT</h1>
			</header>

		<p>IIT-B has a rich legacy in tennis with many of our alumni being state-level players and a few of
		them being national-level players. A very important part of this legacy is the Inter-IIT Tennis
		Championship held annually in the month of December. The Inter-IIT Sports General Championships
		completed its 50th anniversary last year and is the most prestigious sporting event among all the
		IIT’s with participants coming from all the IIT’s to display their sporting prowess.</p>

		<p>IIT-B has been showing stellar performances in the Tennis Championships of the Inter-IIT Sports
		General Championships. Break into the tennis team to embark on further glorifying this legacy!</p>




</article>
</div>
</div>
