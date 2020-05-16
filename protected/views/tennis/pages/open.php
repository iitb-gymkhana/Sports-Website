<?php 
$sport="Lawn Tennis";
$sport2="tennis";
$this->pageTitle="Institute Open - ". $sport. " - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Institute Tennis Open</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Institute Tennis Open</h1>
			</header>

			<p>It is the flagship open tournament for Tennis in IIT-B. This tournament is open to all students, alumni, professors and staff. It is a grand-slam styled open singles tournament and is held in the Spring Semester. It is highly competitive and is a must play for all tennis enthusiasts as it presents a great opportunity to learn for intermediates as it provides them a platform to go up against experienced players who are a part of the Inter-IIT team.</p>

			<p>This tournament has a beginner’s version as well for those who have finished the beginners camp and want to put their skills to a test. </p>

</article>
</div> 
</div>