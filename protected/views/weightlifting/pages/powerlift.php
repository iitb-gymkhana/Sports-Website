<?php 
$sport="Weightlifting";
$sport2="weightlifting";
$this->pageTitle="Powerlifting and Arm Wrestling - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Powerlifting and Arm Wrestling</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Powerlifting and Arm Wrestling</h1>
				</header>

			<p>Every year 3 powerlifting and arm wrestling events are being played.</p>
			<ol>
				<li>Open powerlifting and arm wrestling</li>
				<li>PG powerlifting and arm wrestling </li>
				<li>Girls powerlifting and arm wrestling</li>
			</ol>
			
			<p>Both Powerlifting and arm wrestling are games of individuals in IITB. There is no restriction 
			on the number of players. Boys powerlifting includes 3 training squats, bench press and deadlift 
			and girls powerlifting includes 2 training squat and deadlift.</p>
			<p>Arm wrestling is open for all. There is no different weight category competition in it.</p>

			<p> In powerlifting there are 5 different weight categories</p>
			<ul>
				<li><b>Boys weight category:</b>
					<ul>
					 	<li>59 kg</li>
					 	<li>66 kg</li>
					 	<li>74 kg</li>
					 	<li>83 kg</li>
					 	<li>83 kg+</li>
					</ul>
				</li>
				
				<li><b>Girls weight category:</b>
				 	<ul>
				 		<li>47 kg</li>
				 		<li>52 kg</li>
				 		<li>57 kg</li>
				 		<li>63 kg</li>
				 		<li>63 kg+</li>
				 	</ul>
				</li>
			</ul>
			
	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->