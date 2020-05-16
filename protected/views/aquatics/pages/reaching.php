<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Reaching the Swimming Pool - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Info</li>
            <li class="active">Reaching the Swimming Pool</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Reaching the Swimming Pool</h1>
			</header>
      
      <p>The swimming pool is located just opposite to Hostel 2, besides the Indoor SAC. </p>
      
      <section class="container-full top-space">
		<div id="map"></div>
	</section>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/google-maps.js"></script>

</article>
</div> 
</div>