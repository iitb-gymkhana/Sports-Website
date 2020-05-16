<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Camps - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Camps</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Camps</h1>
			</header>

			<p>Every summer, by popular demand, our coach, Dr. P. M. Reddy, holds camps in swimming at the beginners, intermediate and advanced levels. Camps are also held for IIT students during the semester.</p>

			<p>The beginners camps are held separately for children, ladies, students and staff.
			The duration is normally 15-20 days, and there is a demonstration for parents and families on the last day, when certificates are handed out.</p>
			<p>The Intermediate camp is open to anyone who has completed the prescribed 40 laps in the beginners. In this camp, they are taught, the breaststroke, the butterfly stroke and the backstroke.</p>
			<p>The advanced swimming camp is a year round affair, 6 days a week, throughout the year, with 2 sessions a day in the summer. To qualify for the advanced camp, one must be able to do 3000 metres of freestyle in a certain amount of time.</p>
			
			<p>Our club also holds water polo camp to train the students for water polo.</p>
			<p>The details of the camps would be out soon.</p>

</article>
</div> 
</div>