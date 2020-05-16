<?php 
	$sport="Volleyball";
    $sport2="volleyball";

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

		<div class="stackeffect">
            <b>Inter IIT</b>
            <a href="images/gallery/<?php echo "$sport2" ?>/1.JPG" data-lightbox="interiit"><img src="images/gallery/<?php echo "$sport2" ?>/1.JPG"></a>
        </div>


    <div class="hide">
    	<a href="images/gallery/<?php echo "$sport2" ?>/2.JPG" data-lightbox="interiit"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/3.jpg" data-lightbox="interiit"></a>
    	<a href="images/gallery/<?php echo "$sport2" ?>/6.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/7.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/8.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/9.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/10.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/11.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/12.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/13.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/14.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/15.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/16.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/17.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/18.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/19.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/20.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/21.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/22.jpg" data-lightbox="interiit"></a>
        <a href="images/gallery/<?php echo "$sport2" ?>/23.jpg" data-lightbox="interiit"></a>


    </div>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>