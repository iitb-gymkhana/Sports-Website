<?php
$sport="Football";
$sport2="football";
$this->pageTitle="Tournaments - Football - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">Tournaments</li>
		</ol>

<div class="row">

			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Tournaments</h1>
			</header>
                    <h3>Institute Football League</h3>
                    <p>It contains league  and cup matches.	Proper bidding format is followed in the team allocation. The top enthusiastic football players from the institute as well as the alumni available in the city participate in this league.</p>
                    <p>It is a great opportunity to play alongside great players across the institute which is restricted in the GC format. A great learning experience and not to mention very enjoyable!</p>
                    <h3>Freshie Tournament</h3>
                    <ul>
                        <li>Freshie tournament is the first competitive event of the even semester.</li>
                        <li>A platform for all the freshmen to show their skills. </li>
                        <li>It is an 11-on-11  tournament.</li>
                    </ul>

</article>
</div>
</div>
