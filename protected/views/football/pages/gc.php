<?php 
$sport="Football";
$sport2="football";
$this->pageTitle="Football GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Football GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">GC</h1>
			</header>

                    <p>Scheduled towards the end of the season every year, many a times it turns out to be the Overall Championship decider. <br>
The event sees a great amount of participation and students who didn't get chance to play in Inter IIT have great platform to show what they got , bringing pride to their hostels.  
<br>Football General Championship is weighted equally as other team  sports.
</p>
			

    </article>
</div> 
</div>

