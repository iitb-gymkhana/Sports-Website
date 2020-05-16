<?php
$sport="Basketball";
$sport2="basketball";
$this->pageTitle="Inter IIT - ". $sport ." - ". Yii::app()->name;

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


			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inter IIT	</h1>
				</header>


				<p> The inter IIT sports meet is the mecca for all sportsmen in IIT. Inter IIT is about cheering, it's about showcasing talent, but most importantly - it's about WINNING!.</p>
				<p>The Inter IIT meet is held every year during December for all sports except Aquatics, which is held during October. All 16 IITs across the nation strive for that one elusive General Championship Trophy.</p>
				<h3> Past Inter IITs Performance:</h3>
				<table width = 100% border = 1px>
					<tr>
						<td align = "center"><b>YEAR</b></td>
						<td align = "center"><b>HOST</b></td>
						<td align = "center"><b>RESULT</b></td>
					</tr>
					<tr>
						<td align = "center">2015</td>
						<td align = "center">Madras</td>
						<td align = "center">Cancelled</td>
					</tr>
					<tr>
						<td align = "center">2014</td>
						<td align = "center">Bombay</td>
						<td align = "center">2nd</td>
					</tr>
					<tr>
						<td align = "center">2013</td>
						<td align = "center">Guwahati</td>
						<td align = "center">4th</td>
					</tr>
					<tr>
						<td align = "center">2012</td>
						<td align = "center">Roorkee</td>
						<td align = "center">4th</td>
					</tr>
					<tr>
						<td align = "center">2011</td>
						<td align = "center">Kharagpur</td>
						<td align = "center">2nd</td>
					</tr>
				</table>
				<br>
	</article>
	<!-- /Article -->

		</div>
	</div>	<!-- /container -->
