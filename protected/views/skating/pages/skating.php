<?php 
$sport="Adventure and Rolling Sports";
$sport2="adv";
$this->pageTitle="Skating Club - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Skating Club</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Skating Club</h1>
				</header>


				<p>Institute Skating Club was founded in early 2011. Seniors had done a great job to develop 
				such a skating culture in the institute. In early 2015 Skating was recognised as a Gymkhana 
				Sport in the institute.</p>

				<p>Our senior achieved a milestone in recreational and slalom skating and to retain this 
				culture we organise four camps through the whole year. Three beginner camps in autumn sem, 
				spring sem and summer vacation and one advance camp in spring sem. Currently we use to teach 
				inline skates, quad skates and skateboard.</p>

 				<p>Due to great participation in all the camps, institute provides inline skates to students, 
 				which they can issue from SAC-Store. Soon we will include quad skate and skateboard in our 
 				inventory. Our usual place for practice is outdoor basketball court.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->