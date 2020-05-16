<?php
$sport="Basketball";
$sport2="basketball";
$this->pageTitle="Camps - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Camps</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Camps	</h1>
				</header>

				<h3>Beginners' Camp - Autumn</h3>
				<p>A Beginner’s Camp for all the UGs and the PGs is conducted in the Odd Semester.<br>
						This is to train the people who are enthusiastic for joining the Inter IIT practice or who just learn basketball for fun.
					<br>This will be a week long camp held on the outdoor facilities.
					<br>A full exhaustive camp where one who has never picked up a Hockey can prepared to be the one to soon pick up the Inter IIT trophy.</p>

					<h3>Beginners' Camp - Spring</h3>
					<p>The Spring Semester starts with another opportunity for people interested in basketball.<br>
						The 10-day long camp will be conducted in the first week of the semester itself.<br>
						This Beginner’s Camp is also to prepare all the first timers to acquire skill in Basketball before the basketball GC.<br>
						This camp is also open for all UGs and PGs to come and learn.</p>

						<h3>Girls' Camp  - Spring</h3>
						<p>This camp will be conducted on the respective hostel courts or indoor basketball courts itself and it is aimed at improving the skills and fitness of all the girls who want to give it a shot.</p>
<br>


	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
