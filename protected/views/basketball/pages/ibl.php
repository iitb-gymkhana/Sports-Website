<?php
$sport="Basketball";
$sport2="basketball";
$this->pageTitle="IBL - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">IBL</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">IBL	</h1>
				</header>

				<p> Institute Basketball League for both boys and girls. It is scheduled like this: </p>
				<ol>
					<li>It starts with bidding for players. Proper bidding format is followed in the team allocation.</li>
					<li>This is followed by league matches and playoffs - where we have witnessed huge amounts of enthusiasm.</li>
					<li>The top enthusiastic basketball players from the institute as well as the alumni available in the city participate in this league</li>
				</ol>
						<p>It’s a great opportunity to play alongside great players across the institute which is restricted in the GC format
								A great learning experience and the fun is an add on.  It will be scheduled towards the end of the season every year.</p>
</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
