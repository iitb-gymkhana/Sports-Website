<?php
$sport="Board Games";
$sport2="boardgames";
$this->pageTitle="Board Games GCs - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Board Games GCs</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">GC</h1>
			</header>

			<p>The GCs for Chess and Carrom are held once a year for UG Boys in the Autumn Semester and for UG Girls in the Spring Semester and are a part of the Inter Hostel Sports General Championships.
				<br>This year the conduction of the Pool and Snooker GCs has also been proposed. </p>
				<p>This event is completely Hostel centric where best players from each Hostel come forward to portray the best talent from their respective Hostels. This is a fiercely contested event with all the participants striving to bring to bring glory for their Hostels.
</p>


    </article>
</div>
</div>
