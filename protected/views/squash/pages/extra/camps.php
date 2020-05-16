<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="Camps - Hockey - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Camps</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Camps</h1>
			</header>

			<p>Beginners' camps are held every year in the second semester.</p>
			<p>The camps see a very enthusiastic participation from students. The Coach and the IITB hockey team act 
			as mentors to the participants.</p>
			<p>Participants are provided with the necessities like sticks and balls everyday during the camp for 
			practice. The camp also observes participation from girls.</p>
			<p>Besides the beginners camp, an inter IIT camp is also held every year during December. The camp 
			is filled with rigorous training sessions aimed at preparing the IITB team for the upcoming Inter 
			IIT Sports Meet.</p>
			<p>Special attention is paid towards the fitness and strategies that are to be implemented during 
			the games.</p>

</article>
</div> 
</div>