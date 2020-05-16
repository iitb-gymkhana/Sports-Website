<?php 
$sport="Adventure and Rolling Sports";
$sport2="adv";
$this->pageTitle="Adventure Club - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Adventure Club</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Adventure Club</h1>
				</header>


				<h3>BMC</h3>
				<p>Adventure sports were first introduced as “Basic Mountaineering Course” (BMC). It is the most 
				popular event for every adventure loving student.</p>
				<p>It is in association with “Atal Bihari Vajpayee Institute of Mountaineering and Allied 
				Sports”(ABVIMAS), Manali. The course has three slots in May, June and July. The duration of the 
				course is 26 days.</p>
				<p>The course contains the basic techniques of Rock Climbing, Rappelling, River Crossing, 
				Camping, Ascending and Descending on Snow. It involves fairly high physical activities, but it 
				is a lifetime experience which you can never forget.</p> 
				
				<h3>Trekking and Trip of the Month</h3>
				<p>Initially trekking events were conducted by the club named Offbeat Trekkers. Recently 
				Gymkhana Sports has taken over all the adventure activities under itself.</p>
				<p>The most popular event under it is “Trip of the Month”. It is conducted once in a month, in 
				which we usually go to some nearby place around Mumbai and visit tourist sites like beaches and 
				forts. Sometime it includes a little bit of trekking to reach the destination point.</p> 
				<br>
				<p>We also conduct other adventure sports like water rappelling, river rafting etc. This year we 
				are planning to include more water sports like scuba diving and sky sports like paragliding. </p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->