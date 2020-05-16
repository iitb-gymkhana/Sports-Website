<?php 
$sport="Weightlifting";
$sport2="weightlifting";
$this->pageTitle="NSO - Weightlifting - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">NSO</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">NSO</h1>
			</header>

			<p>This is a compulsory course for the first year students. 12 students are selected for the one year training program. Out of them we select good performers for the IITB Weightlifting Team. </p>
			<p>NSO training time:</p>
			<p>For <b>UG students -</b> 06:00 pm to 07:30 pm on Monday and Wednesday.</p>
			<p>For <b>PG students -</b> 06:00 pm to 07:30 pm on Friday and Saturday.</p>

</article>
</div> 
</div>