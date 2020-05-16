<?php
$sport="Kho Kho";
$sport2="khokho";
$this->pageTitle="NSO - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Events</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">NSO</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">NSO	</h1>
				</header>
				<p>The Government of India, through its National Sports Organization, provides a scheme in all IITs, where all incoming, i.e. first year students, must sign up for a particular sport, and undergo training. This scheme, popularly called NSO, is available to IIT students for training in various sports, such as swimming, hockey, basketball, squash, badminton, tennis, athletics, Kho-Kho, Handball, table tennis, football etc.</p>
				<p>Every Year, 30-35 aspiring freshmen are chosen to learn Kho-Kho to learn under the guidance of our coach biweekly throughout two semesters. Every year, better players ready for advance training walk out from this program.</p>


	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
