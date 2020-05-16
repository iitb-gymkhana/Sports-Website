<?php 
$sport="Football";
$sport2="football";
$this->pageTitle="NSO - Hockey - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">NSO</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">NSO</h1>
			</header>

			<p>Every year the 25 odd freshmen that choose hockey as their NSO are coached by an extremely dedicated coach Dr. B.B. Appaji.</p>
			<p>Currently Hockey NSO is held twice a week. It is conducted for around three hours in the evening. 
			Interested students are free to join the team in its daily practice.</p>

</article>
</div> 
</div>