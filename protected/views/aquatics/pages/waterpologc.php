<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Waterpolo GC - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Waterpolo GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Waterpolo GC</h1>
			</header>

			<p>Every year we have an inter hostel water polo general championship where all the hostels battle 
			to prove their supremacy in the sport.</p>
			<p>The GC is organized according to the rules of FINA.</p>
			
			<p>Latest FINA Water Polo rule book</p>
			 
			<br>
			<h4>Previous year results</h4>
			<ul>
				<li><a href="assets/view/Water Polo GC 2008.pdf" target="_blank">2008</a></li>
			</ul>

</article>
</div> 
</div>