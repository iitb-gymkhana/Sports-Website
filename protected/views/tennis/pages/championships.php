<?php 
$sport="Lawn Tennis";
$sport2="tennis";
$this->pageTitle="Institute Championships - ". $sport. " - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Institute Tennis Championships</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Institute Tennis Championships</h1>
			</header>

			<p>This usually follows the Institute Tennis Open, and is IIT-B’s version of the IPTL. It is a 
			team based event in which 8 managers are in charge of 8 teams. There is an auction of the players. The teams are divided into two pools of four each and play round-robin amongst each other. The format of each tie consists of: </p>

			<ol>
				<li>Marquee Player Singles</li>
				<li>Men’s Singles</li>
				<li>Men’s Doubles</li>
				<li>Women’s Singles</li>
				<li>Freshmen Singles</li>
			</ol>

			<p>The league format makes it a fun-filled event. The presence of a marquee player in each team ensures that each player gets proper guidance and gets to learn a lot during the course of the league. </p>

</article>
</div> 
</div>