<?php 
$sport="Athletics";
$sport2="athletics";
$this->pageTitle="Athletics GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Athletics GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Athletics GC</h1>
			</header>

			<p>Every year we have an Inter Hostel Athletics Competition - The Athletics General Championship, with assorted supporters crying themselves hoarse in support of their hostel mates, irrespective of the level of athletes. It is an ideal platform for people to flaunt their athletic skills and make their hostel proud!</p>  
			<p>With a restriction on participation as 3 events per athlete excluding relay, the gymkhana ground is the place to be during the days of the Athletics GC.</p>
			<p>The GC is organized in two categories</p>
			<p><b><u>Boys GC</u></b></p>
			<p>The events organized in this GC are:</p>
			<p><b>Track Events</b></p>
			<ol>
				<li>100 m, 200 m, 400 m sprints</li>
				<li>800 m middle distance</li>
				<li>1500 m, 5000 m long distance</li>
				<li>110 m, 400 m hurdles</li>
				<li>4*100 m, 4*400 m relays</li>
			</ol>
			<p><b>Field Events</b></p>
			<ol>
				<li>Long Jump, Triple Jump</li>
				<li>High Jump</li>
				<li>Pole Vault</li>
				<li>Shot put Throw</li>
				<li>Discus Throw</li>
				<li>Hammer Throw</li>
				<li>Javelin Throw</li>
			</ol>
			<p><b><u>Girls GC</u></b></p>
			<p>The events organized in this GC are:</p>
			<p><b>Track Events</b></p>
			<ol>
				<li>100 m, 200 m, 400 m sprints</li>
				<li>800 m middle distance</li>
				<li>4*100 m relay</li>
			</ol>
			<p><b>Field Events</b></p>
			<ol>
				<li>Long Jump</li>
				<li>High Jump</li>
				<li>Shot put Throw</li>
				<li>Discus Throw</li>
			</ol>


</article>
</div> 
</div>