<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Triathlon - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Triathlon</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Triathlon</h1>
			</header>

			<p>The IIT Swimming club holds triathlon competition every year. This tri sport of event includes swimming, cycling, and running.</p>
			<p>The event is organized in two categories:</p>
			<ol>
				<li>Team Triathlon- Team of 3 (at least one female member)</li>
				<li>Individual Triathlon</li>
			</ol>
			 
			 <br>
			<h4>Details of each category are as follows:</h4>
			<table style="width:100%;" border=1;>
			<tr>
				<th>Category</th>
				<th>Swimming</th>
				<th>Cycling</th>
				<th>Running</th>
			</tr>
			<tr>
				<td>Team</td>
				<td>500 meters</td>
				<td>6 rounds[SAC]</td>
				<td>2 rounds[SAC]</td>
			</tr>
			<tr>
				<td>Individual</td>
				<td>300 meters</td>
				<td>1 rounds[SAC]</td>
				<td>1 rounds[SAC]</td>
			</tr>
			</table>
			<br>
			<h4>Previous Year Results:</h4>
			<ul>
				<li><a href="assets/view/Triathlon 2014.pdf" target="_blank">2014</a></li>
				<li><a href="assets/view/Triathlon 2010.pdf" target="_blank">2010</a></li>
				<li><a href="assets/view/Triathlon 2009.pdf" target="_blank">2009</a></li>
			</ul>
			 
</article>
</div> 
</div>