<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="IHL - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">IHL</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">IHL</h1>
			</header>

			<p>Institute Hockey League started last year saw a huge participation from students. 4 teams 
			participating in league and then the knockout round decided the winner.</p> 
			<p>This year it’s going to be bigger and better.</p>
			

    </article>
</div> 
</div>

