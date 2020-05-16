<?php 
$sport="Athletics";
$sport2="athletics";
$this->pageTitle="Crossy GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Crossy GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Crossy GC</h1>
			</header>

			<ul>
				<li>2 Boys’ Crossy: One in each semester</li>
				<li>2 Girls’ Crossy: One in each semester</li>
				<li>PG Crossy</li>
				<li>Sophie Crossy, Freshie Crossy</li>
			</ul>


</article>
</div> 
</div>