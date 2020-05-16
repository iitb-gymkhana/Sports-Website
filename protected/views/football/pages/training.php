<?php 
$sport="Football";
$sport2="football";
$this->pageTitle="Training - Football - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Training</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Training</h1>
			</header>
                    <h3>NSO</h3>
			<p>The Government of India, through its National Sports Organization, provides a scheme in all IITs, where all incoming, i.e. first year students, must sign up for a particular sport, and undergo training. This scheme, popularly called NSO, is available to IIT students for training in various sports, such as swimming, hockey, basketball, squash, badminton, tennis, athletics, table tennis, football, etc. 
                            Every year many players get motivated from this event and go on to join Inter IIT training.</p>
                        <h3>Girls' Beginner Camp</h3>
                        <p> It starts around the second week of January.There are no prerequisites it is a beginner camp.
                            <br>Practice sessions will depend on the availability of the trainees.</p>


</article>
</div> 
</div>