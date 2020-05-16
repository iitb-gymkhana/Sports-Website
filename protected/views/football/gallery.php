<?php 
	$sport="Football";
    $sport2="football";

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
            <b>The Team</b>
            <a href="images/gallery/football/4.jpg" data-lightbox="team"><img src="images/gallery/football/4.jpg"></a>
        </div>
 
    	<?php $num=5;
        while($num<=6) { ?> 
        <a href="images/gallery/football/<?php echo $num; ?>.jpg" data-lightbox="team"></a>
        <?php $num++; } ?>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>