<?php
$sport="Cricket";
$sport2="cricket";
$this->pageTitle="Inter IIT - Cricket - ". Yii::app()->name;

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

		<p>Inter IIT Gold, The dream of every player in every single IIT.</p>
		<p>The Inter IIT team consists of the best of the institute in the sport and each year hundreds of students give their all to represent the institute in their respective sport in the Inter IIT Tournament. The IIT Bombay cricket team is consists of few of the most dedicated player who shed sweat and blood day in and day out for the ultimate glory. </p>
		<p>Always amongst the stronger teams, IIT Bombay has given the Title a good shot every year.</p>

		<h2>Performance in the recent years</h2>
<table border = "1" width = 100%>
		<tr>
			<td align = "center"><b>Year</b></td>
			<td align = "center"><b>InterIIT Host</b></td>
			<td align = "center"><b>Our Position</b></td>
		</tr>
		<tr>
			<td align = "center">2014</td>
			<td align = "center">Bombay</td>
			<td align = "center">3rd</td>
		</tr>
		<tr>
			<td align = "center">2013</td>
			<td align = "center">Guwahati</td>
			<td align = "center">Quarters</td>
		</tr>
		<tr>
			<td align = "center">2012</td>
			<td align = "center">Roorkee</td>
			<td align = "center">3rd</td>
		</tr>
		<tr>
			<td align = "center">2008</td>
			<td align = "center"> Madras</td>
			<td align = "center">1st</td>
		</tr>
</table>
<br><br>
</article>
</div>
</div>
