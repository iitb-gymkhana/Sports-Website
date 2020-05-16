<?php 
	$sport="Basketball";
    $sport2="basketball";

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
			<li class="active">Photos</li>
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
            <b>Inter IIT - Boys</b>
            <a href="images/gallery/basketball/Inter IIT - Boys/1.jpg" data-lightbox="boys"><img src="images/gallery/basketball/Inter IIT - Boys/1.jpg"></a>
        </div>
    	<div class="stackeffect">
    		<b>Inter IIT - Girls</b>
    		<a href="images/gallery/basketball/Inter IIT - Girls/1.jpg" data-lightbox="girls"><img src="images/gallery/basketball/Inter IIT - Girls/1.jpg"></a>
    	</div>
    	<div class="stackeffect">
    		<b>The Team</b>
    		<a href="images/gallery/basketball/The Team/1.JPG" data-lightbox="team"><img src="images/gallery/basketball/The Team/1.JPG"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Wood Court</b>
    		<a href="images/gallery/basketball/Wood Court/2.jpg" data-lightbox="wood"><img src="images/gallery/basketball/Wood Court/2.jpg"></a>
    	</div>

    <div class="hide">
    	<a href="images/gallery/basketball/Inter IIT - Boys/2.jpg" data-lightbox="boys"></a>
    	<a href="images/gallery/basketball/Inter IIT - Boys/3.jpg" data-lightbox="boys"></a>
    	<a href="images/gallery/basketball/Inter IIT - Boys/4.jpg" data-lightbox="boys"></a>
    	<a href="images/gallery/basketball/Inter IIT - Boys/5.jpg" data-lightbox="boys"></a>
    	<a href="images/gallery/basketball/Inter IIT - Boys/6.jpg" data-lightbox="boys"></a>

    	<a href="images/gallery/basketball/Inter IIT - Girls/2.jpg" data-lightbox="girls"></a>
    	<a href="images/gallery/basketball/Inter IIT - Girls/3.jpg" data-lightbox="girls"></a>
    	<a href="images/gallery/basketball/Inter IIT - Girls/4.JPG" data-lightbox="girls"></a>
    	<a href="images/gallery/basketball/Inter IIT - Girls/5.jpg" data-lightbox="girls"></a>
    	<a href="images/gallery/basketball/Inter IIT - Girls/6.jpg" data-lightbox="girls"></a>

    	<a href="images/gallery/basketball/The Team/2.JPG" data-lightbox="team"></a>
    	<a href="images/gallery/basketball/The Team/3.JPG" data-lightbox="team"></a>
    	<a href="images/gallery/basketball/The Team/4.JPG" data-lightbox="team"></a>
    	<a href="images/gallery/basketball/The Team/5.JPG" data-lightbox="team"></a>
    	<a href="images/gallery/basketball/The Team/6.JPG" data-lightbox="team"></a>    	
    	<a href="images/gallery/basketball/The Team/7.JPG" data-lightbox="team"></a>    	
    	<a href="images/gallery/basketball/The Team/8.JPG" data-lightbox="team"></a>

    	<a href="images/gallery/basketball/Wood Court/1.jpg" data-lightbox="wood"></a>
    	<a href="images/gallery/basketball/Wood Court/3.jpg" data-lightbox="wood"></a>
    	<a href="images/gallery/basketball/Wood Court/4.jpg" data-lightbox="wood"></a>
    	<a href="images/gallery/basketball/Wood Court/5.jpg" data-lightbox="wood"></a>
    	<a href="images/gallery/basketball/Wood Court/6.jpg" data-lightbox="wood"></a>




    </div>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>