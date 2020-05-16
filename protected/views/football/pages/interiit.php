<?php 
$sport="Football";
$sport2="football";
$this->pageTitle="Inter IIT - Football - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
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
                    <p>Inter IIT is biggest event for any sports person in any IIT. Every player from each IIT fights for glory and wants to be in the Hall of Fame of his/her sport. IITB football team always given its best to achieve this aim.</p>
                    <p>There ensued a "golden" period in IITB football history from 2007-2010 - winning 3 consecutive golds followed by a bronze in 2011.</p>
</article>
</div> 
</div>