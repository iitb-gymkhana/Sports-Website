<?php
$sport="Basketball";
$sport2="basketball";
$this->pageTitle="GC - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">GC</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">GC	</h1>
				</header>

				<h3>Boys GC</h3>
				<p> In this event the best Basketball players from each hostel go very tough to determine which hostel boasts of the best talent. It is a fiercely contested event with all participants putting in everything they have to win glory for their hostels and earn themselves a chance to break into the Inter-IIT Team.</p>
					<p>Boys GC is scheduled towards the end of season every year.</p>
					<h3>Girls GC</h3>
					<p>First girls gc was held in March 2015 and was decided to consider it a mock gc. There were 3*3 matches played by girls on international format. This mock gc saw a huge participation from girls. </p>
						<p>Girls GC will be scheduled towards the end of season every year.</p>
<br>
	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
