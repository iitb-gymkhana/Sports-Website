<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="Inter IIT - Hockey - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
            <li class="active">Inter IIT</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Inter IIT</h1>
			</header>
      
		<p>The Inter IIT Sports Meet is where the teams from all IITs battle it out - for the glory of their 
		institute and spirit of the sport.</p>
		<p>IIT Bombay hockey has a glorious history at the Inter IIT. The team works very hard throughout the 
		year to produce good results at the event.</p>
		
		
	

</article>
</div> 
</div>