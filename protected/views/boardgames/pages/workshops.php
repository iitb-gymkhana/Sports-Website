<?php
$sport="Board Games";
$sport2="boardgames";
$this->pageTitle="Workshops - Board Games - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Workshops</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Workshops</h1>
			</header>

			<p>We conduct numerous beginner and advanced workshops for : </p>
      <ol>
<li>Chess</li>
<li>Pool</li>
<li>Snooker</li>
<li>Rubik’s Cube</li>
<li>Card games</li>
</ol>
<p>All round the year

</p>


</article>
</div>
</div>
