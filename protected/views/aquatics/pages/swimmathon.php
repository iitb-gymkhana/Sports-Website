<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Swimmathon - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Swimmathon</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Swimmathon</h1>
			</header>

			<p>Swimmathon is the largest Event organised by IIT Bombay Swimming Club and is held annually during the end of Spring season. Swimmathon started in 1989 and was initially supposed to be a 6 hour swimming marathon, but owing to the response and enthusiasm shown by the participants the duration was changed to 12 hours. </p>
			<p>Its open to everyone on campus, and one can see hoards of IIT students participating quite happily along with 8 year old kids, professors and middle-aged ladies.</p>
			<p> Over the years, Swimmathon has grown exponentially and now attracts 100+ participants every year.</p>
 			<br>
			<h4>Previous Year Results:</h4>
			<ul>
				<li><a href="assets/view/Swimmathon 2014.pdf" target="_blank">2014</a></li>
				<li><a href="assets/view/Swimmathon.pdf" target="_blank">2012</a></li>
				<li><a href="assets/view/Swimathon 2011.pdf" target="_blank">2011</a></li>
			</ul>
</article>
</div> 
</div>