<?php
$sport="Cricket";
$sport2="cricket";
$this->pageTitle="Cricket GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Cricket GC</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">GC</h1>
			</header>

			<p>This is the inter hostel cricket tournament which takes place every year on the main ground in which the hostels bring their best players to win and grab some valuable points for the sports General Championship.
				<br> It comprises of 15-over matches played with white balls and takes place in the month of January.</p>
<table border = 1px width = 100%>
<caption><h3 align ="left">GCs till now</h3></caption>
<tr>
	<td align = "center"><b>YEAR</b></td>
	<td align = "center"><b>CHAMPIONS</b></td>
</tr>
<tr>
	<td align = "center">2015-16</td>
	<td align = "center">Hostel 2</td>
</tr>
<tr>
	<td align = "center">2014-15</td>
	<td align = "center">Hostel 3</td>
</tr><tr>
	<td align = "center">2013-14</td>
	<td align = "center">Hostel 4</td>
</tr><tr>
	<td align = "center">2012-13</td>
	<td align = "center">Hostel 12</td>
</tr>
<tr>
	<td align = "center">2011-12</td>
	<td align = "center">Hostel 2</td>
</tr>
</table>
<br><br>
    </article>
</div>
</div>
