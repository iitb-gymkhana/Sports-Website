<?php 
	$sport="Athletics";
    $sport2="athletics";

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
            <a href="images/gallery/athletics/InterIIT2k14/10.jpg" data-lightbox="Inter IIT"><img src="images/gallery/athletics/InterIIT2k14/10.jpg"></a>
        </div>
    	<div class="stackeffect">
    		<b>Inter IIT Felicitation</b>
    		<a href="images/gallery/athletics/InterIIT Felicitation/1.jpg" data-lightbox="Inter IIT Felicitation"><img src="images/gallery/athletics/InterIIT Felicitation/1.jpg"></a>
    	</div>


    <div class="hide">
        <a href="images/gallery/athletics/InterIIT2k14/1.jpg" data-lightbox="Inter IIT"></a>
    	<a href="images/gallery/athletics/InterIIT2k14/2.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/3.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/4.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/5.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/6.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/7.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/8.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/9.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/11.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/12.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/13.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/14.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/15.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/16.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/17.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/18.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/19.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/20.jpg" data-lightbox="Inter IIT"></a>
        <a href="images/gallery/athletics/InterIIT2k14/21.jpg" data-lightbox="Inter IIT"></a>

        <a href="images/gallery/athletics/InterIIT Felicitation/2.jpg" data-lightbox="Inter IIT Felicitation"></a>
        <a href="images/gallery/athletics/InterIIT Felicitation/3.jpg" data-lightbox="Inter IIT Felicitation"></a>
        <a href="images/gallery/athletics/InterIIT Felicitation/4.jpg" data-lightbox="Inter IIT Felicitation"></a>
        <a href="images/gallery/athletics/InterIIT Felicitation/5.jpg" data-lightbox="Inter IIT Felicitation"></a>
        <a href="images/gallery/athletics/InterIIT Felicitation/6.jpg" data-lightbox="Inter IIT Felicitation"></a>
        <a href="images/gallery/athletics/InterIIT Felicitation/7.jpg" data-lightbox="Inter IIT Felicitation"></a>
    	
    </div>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>