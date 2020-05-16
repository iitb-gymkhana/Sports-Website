<?php 
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$sport=$_GET["sport"];

	$this->pageTitle="People - ". ucfirst($sport)." - ". Yii::app()->name;

	if($sport=="Indian Games")
		$sport2="indian";
	elseif($sport=="Lawn Tennis")
		$sport2="tennis";
	elseif($sport=="Table Tennis")
		$sport2="tt";
	else $sport2=$sport;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=sports/<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">People</li>
			<li class="active">Team</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->
	
		 <!-- Article main content -->
      <article class="maincontent">
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