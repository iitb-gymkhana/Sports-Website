<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="Tournaments - Hockey - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Tournaments</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Tournaments</h1>
			</header>

			<p>IIT Bombay participates in the tournaments organized by the MHA (Maharashtra hockey association).</p>
			<p>From this year we will be having 2 teams from IIT Bombay. One team is currently playing in the 
			third division of the MHA league and second team comprising of only first and second year students 
			will start playing in fourth division.</p>
			<p>Also different teams are invited for several practice matches throughtout the year.</p>
			

</article>
</div> 
</div>