<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="Hockey GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Hockey GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">GC</h1>
			</header>

			<p>1. <b>Sophie GC</b> provides sophomores to prove their mettle in a 4vs4 Hockey tournament.</p>
			<br>
			<p>2. IIT Bombay has a very competitive Inter Hostel Sports scenario. <b>Hockey General Championship</b> 
			is equally weighted to the other sports.</p>
			<p>Being scheduled towards the end of the season every year, it many a times turns out to be 
			the Overall Championship decider. The event sees a great amount of participation and students 
			show Great Spirit and learn and enjoy the sport.</p>
			

    </article>
</div> 
</div>

