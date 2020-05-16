<?php
$sport="Cricket";
$sport2="cricket";
$this->pageTitle="Mixed Cricket - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Mixed Criket</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Mixed Cricket</h1>
			</header>
      <p>
        It’s a fun event which takes place in the Open Air Theatre (OAT) where in 32 teams each comprising of 5 guys and 2 girls play against each other with rules similar to street cricket.</p>
        <p>It usually takes place in October.</p>

    </article>
</div>
</div>
