<?php
$sport="Cricket";
$sport2="cricket";
$this->pageTitle="Cricket Leagues - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Cricket Leagues</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Leagues</h1>
			</header>

      <!-- CricMania -->
      <h3>Cric-mania (Institute Cricket League)</h3>
       <p> The cricket Club was one of the first clubs of IIT Bombay to start the Institute level sports leagues. It is one of the most awaited events of the Institute and takes place in the month of February in which any cricket enthusiast could register. Once the registrations are done, bidding of players takes place to form the teams. Wearing their respective jerseys, they play for glory.
         <br> Meant for giving an opportunity to the students of IIT Bombay to showcase their cricketing skills, Cricmania is one of the most successful cricket events and has completed its 6th edition this year.
         <br>Check out our <a href= "https://www.facebook.com/cricmaniaiitb/?fref=ts">facebook page</a> for more.
       </p>

       <!-- CricFiesta -->
       <h3>CricFiesta</h3>
         <p>An event which is a part of the Freshie Girls Week where in teams of around 7 girls play cricket on the main pitches of the gymkhana ground.
           <br>Nearly 4 teams register every year and a knockout tournament is conducted among them with a tennis ball.</p>

      <!-- Freshman League -->
      <h3>Freshmen Cricket League</h3>
      <p>A league initiated with the goal to give the freshmen an opportunity to showcase their talent gained through NSO, GC, Cricmania and several other camps and also for those who couldn’t take part in any of them.
        <br>A league comprising of 4 teams formed through bidding takes place in the month of March and has been an encouragement to the cricket enthusiasts to pursue the game in the institute and also has been a source of raw talent which on being nurtured produced few of the best players of IIT Bombay.
      </p>
      <br>

    </article>
</div>
</div>
