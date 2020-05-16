<?php
$sport="Cricket";
$sport2="cricket";
$this->pageTitle="Drona - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Drona</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Drona</h1>
			</header>
      <p>
        It is a camp meant for beginners to gain some expertise in professional cricket.
        <br>Organized by the Sports Council of IIT Bombay, it takes place in the month of March/April and a senior Inter IIT Cricket player conducts the sessions (about 10 sessions) where he helps the registered students practice and improve his skills with the cricket ball.</p>

    </article>
</div>
</div>
