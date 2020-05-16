<?php 
	$sport="Badminton";
    $sport2="badminton";

$this->pageTitle="Gallery - ". ucfirst($sport)." - ". Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox2.css"/>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">Gallery</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title"><?php echo $sport ?>	</h1>
			</header>

	<!--	<div class="stackeffect">
            <b>Kolad</b>
            <a href="images/trip/trip.jpg" data-lightbox="kolad"><img src="images/trip/trip.jpg"></a>
        </div>
    	<div class="stackeffect">
    		<b>Waterfall Rappelling</b>
    		<a href="images/trip/rappelling/1.jpg" data-lightbox="rappelling"><img src="images/trip/rappelling/1.jpg"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Kolad Trip</b>
    		<a href="images/trip/kolad/2.jpg" data-lightbox="kolad"><img src="images/trip/kolad/2.jpg"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Kulang Trek</b>
    		<a href="images/trip/kulang/1.jpg" data-lightbox="kulang"><img src="images/trip/kulang/1.jpg"></a>
    	</div>


    <div class="hide">
    	<a href="images/gallery/<?php echo "$sport2" ?>/2.jpg" data-lightbox="rappelling"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/3.jpg" data-lightbox="rappelling"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/4.jpg" data-lightbox="rappelling"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/5.jpg" data-lightbox="rappelling"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/6.jpg" data-lightbox="rappelling"></a>

    	<a href="images/gallery/<?php echo "$sport2" ?>/2.jpg" data-lightbox="kolad"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/3.jpg" data-lightbox="kolad"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/4.jpg" data-lightbox="kolad"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/5.jpg" data-lightbox="kolad"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/6.jpg" data-lightbox="kolad"></a>

    	<a href="images/gallery/<?php echo "$sport2" ?>/2.jpg" data-lightbox="kulang"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/3.jpg" data-lightbox="kulang"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/4.jpg" data-lightbox="kulang"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/5.jpg" data-lightbox="kulang"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/6.jpg" data-lightbox="kulang"></a>
    </div>
-->
    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>