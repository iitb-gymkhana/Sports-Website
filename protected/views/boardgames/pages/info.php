<?php
$sport="Board Games";
$sport2="boardgames";
$this->pageTitle="Info - Board Games - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Info</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Info</h1>
			</header>

			<h3>Room Timings</h3>
      <p>The Board Games room, Old Snooker room and the Chess Room all remain Open from 6:00 am to 10:00 pm everyday except for national holidays and special day offs.</p>
      <h3>Cue Stick Maintenance</h3>
      <p>The tip of the cue stick wears down with frequent usage. So it is important to keep replacing the tip of the stick on regular intervals.</p>
      <p>You can buy the required stuff <a href = "http://tinyurl.com/z9rpaw4">here.</a></p>
      <p>The detailed procedure for the same is available <a href="https://www.youtube.com/watch?v=E2cqaAH0hQ4">here.</a></p>
      <h3>Board Games Room Location</h3>
      <p>The Board Games Room and the Chess Room are located in the New Gymkhana Building opposite Hostel 11.
        <br>The Old Snooker room is located in the Old SAC (next to MI Room) opposite Hostel 1.
</p>

<br>
</article>
</div>
</div>
