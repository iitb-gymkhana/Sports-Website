<?php 
$sport="Lawn Tennis";
$sport2="tennis";
$this->pageTitle="Camps - Lawn Tennis - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Workshops and Camps</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Workshops and Camps</h1>
			</header>

			<p>Along with all the tournaments and leagues Tennis Club of IIT-B conducts many workshops and 
			camps for beginners and intermediates, during the semester the duration of the camps are from 3-4 
			weeks and are conducted by the Inter-IIT players.</p>
			<p>During the summers under the Summer School of Sports Programme the tennis camp will be conducted 
			by an external professional coach.</p>

</article>
</div> 
</div>