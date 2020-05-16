<?php
$sport="Badminton";
$sport2="badminton";
$this->pageTitle="Inter IIT - Badminton - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Inter IIT</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inter IIT	</h1>
				</header>


				<p>The Inter IIT sports meet is a battleground for all the IITs to exhibit their eminence in sports.
          <br>The IIT Bombay Badminton team has a great record at the meet as well. The team had secured 4th place at the recent 50th Inter IIT Sports Meet. The team works throughout the year to give their best shot and fight tooth and nail in the competition to seize the glory for the institute.</p>

	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
