<?php 
$sport="Athletics";
$sport2="athletics";
$this->pageTitle="PG Athletics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">PG Athletics</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">PG Athletics</h1>
			</header>

			<p>The events organized in this GC are:</p>
			<p><b>Track Events</b></p>
			<ul>
				<li>100 m, 200 m, 400 m sprints</li>
				<li>800 m middle distance</li>
				<li>1500 m, 5000 m long distance</li>
				<li>110 m, 400 m hurdles</li>
				<li>4*100 m, 4*400 m relays</li>
			</ul>
			<p><b>Field Events</b></p>
			<ul>
				<li>Long Jump, Triple Jump</li>
				<li>High Jump</li>
				<li>Shot put Throw</li>
				<li>Discus Throw</li>
				<li>Hammer Throw</li>
				<li>Javelin Throw</li>
			</ul>

</article>
</div> 
</div>