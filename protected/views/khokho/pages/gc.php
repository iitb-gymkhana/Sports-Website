<?php
$sport="Kho Kho";
$sport2="khokho";
$this->pageTitle="GC - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Events</li>
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
					<h1 class="page-title">GC</h1>
				</header>
				<p> This event is held once a year in the Spring Semester for All Boys and in the autumn Semester for the All Girls and is part of the Inter Hostel Sports General Championship.</p>

<p>In this event the best team of players from each hostel go head to head to determine which hostel boasts of the best talent. It is a fiercely contested event with all participants putting in everything they have to win glory for their hostels and earn themselves a chance to break into the Inter-IIT Team.</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
