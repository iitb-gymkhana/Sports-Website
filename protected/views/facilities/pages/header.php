<?php
/* @var $this SiteController */
$sport=$sport=$_GET["view"];

if($sport=="indian")
		$sport2="Indian Games";
	elseif($sport=="tennis")
		$sport2="Lawn Tennis";
	elseif($sport=="tt")
		$sport2="Table Tennis";
	else $sport2=ucfirst($sport);

	$this->pageTitle="Facilities - ". $sport2." - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=sports/<?php echo "$sport" ?>"><?php echo "$sport2" ?></a></li>
			<li class="active">Facilities</li>
		</ol>

		<div class="row">