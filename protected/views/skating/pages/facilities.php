<?php 
$sport="Skating";
$sport2="skating";
$this->pageTitle="Facilities - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Facilities</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Facilities	</h1>
				</header>


				<p>Recently institute provided us a great support. Currently we are having 15 inline skate and safety gadget, soon we will increase our inventory by 10 inline skates, 15 quad skate and 5 skateboard. These can be issued from SAC-Store against institute ID-card. Also our usual practice arena is outdoor basketball court in between 5:30 pm to 7:30 pm. During the camps the skates are preferably issued to those who registered for camp.
</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->