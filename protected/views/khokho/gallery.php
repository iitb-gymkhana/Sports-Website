<?php 
	$sport="Kho Kho";
    $sport2="khokho";

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
            <b>Udghosh Award Ceremony</b>
            <a href="images/gallery/khokho/Udghosh Awards/2.jpg" data-lightbox="udghoshawards"><img src="images/gallery/khokho/Udghosh Awards/2.jpg"></a>
        </div>

        <div class="stackeffect">
            <b>Udghosh IIT Kanpur</b>
            <a href="images/gallery/khokho/Udghosh/1.jpeg" data-lightbox="udghosh"><img src="images/gallery/khokho/Udghosh/1.jpeg"></a>
        </div>

		<div class="stackeffect">
            <b>Spardha IIT BHU</b>
            <a href="images/gallery/spardha/24.JPG" data-lightbox="spardha"><img src="images/gallery/spardha/24.JPG"></a>
        </div>


    <div class="hide">

         <?php $num=2; ?>
         <a href="images/gallery/khokho/Udghosh/1.JPG" data-lightbox="udghosh"></a>
        <?php while($num<=92) { ?>
        <a href="images/gallery/khokho/Udghosh/<?php echo $num; ?>.jpeg" data-lightbox="udghosh"></a>
        <a href="images/gallery/khokho/Udghosh/<?php echo $num; ?>.JPG" data-lightbox="udghosh"></a>
        <?php $num++; }

        while($num<=125) { ?>
        <a href="images/gallery/khokho/Udghosh/<?php echo $num; ?>.jpeg" data-lightbox="udghosh"></a>
        <?php $num++; }?> 

        <?php $num=3;
        while($num<=25) { ?>
        <a href="images/gallery/khokho/Udghosh Awards/<?php echo $num; ?>.jpg" data-lightbox="udghoshawards"></a>
        <?php $num++; } ?>


    	<a href="images/gallery/spardha/1.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/2.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/3.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/4.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/5.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/6.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/7.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/8.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/9.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/10.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/11.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/12.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/13.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/14.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/15.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/16.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/17.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/18.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/19.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/20.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/21.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/22.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/23.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/25.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/26.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/27.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/28.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/29.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/30.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/31.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/32.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/33.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/34.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/35.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/36.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/37.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/38.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/39.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/40.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/41.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/42.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/43.JPG" data-lightbox="spardha"></a>
    </div>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>