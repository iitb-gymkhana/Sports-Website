<?php 
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$sport="Board Games";
	$sport2="boardgames";

	$this->pageTitle="Team - ". $sport." - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">People</li>
			<li class="active">Team</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->
	
		 <!-- Article main content -->
      <article class="col-md-10 maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $sport; ?> Team</h1>
        </header>

        <?php foreach ($people as $person) { ?> 
          <a href="index.php?r=profile/display&rollno=<?php echo $person['RollNumber']; ?>">
            <h4><?php echo $person['Name']; ?></h4>
          </a>
        <?php } ?>

      </article>
    </div>
  </div>