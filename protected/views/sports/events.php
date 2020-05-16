<?php 
	$sport=$_GET["sport"];
    $event=$_GET["event"];

$this->pageTitle="Gallery - ". ucfirst($sport)." - ". Yii::app()->name;


	if($sport=="Indian Games")
		$sport2="indian";
	elseif($sport=="Lawn Tennis")
		$sport2="tennis";
	elseif($sport=="Table Tennis")
		$sport2="tt";
	else $sport2=lcfirst($sport);

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=sports/<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">Events</li>
            <li class="active"><?php echo "$event" ?></li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title"><?php echo $sport ?>	</h1>
			</header>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>