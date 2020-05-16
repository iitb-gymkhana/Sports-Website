<?php
$sport="Board Games";
$sport2="boardgames";
$this->pageTitle="Info - Board Games - ". Yii::app()->name;

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

			<p>Inter IIT chess has taken place once in the 50th INTER IIT, IIT Bombay 2014 with the IIT Bombay team emerging victorious.<br>
This competition took place on a trial basis. So it is our constant endeavour to make Chess a permanent Inter-IIT Sport.</p>

<br>
</article>
</div>
</div>
