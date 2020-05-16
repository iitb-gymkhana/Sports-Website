<?php 
$sport="Weightlifting";
$sport2="weightlifting";
$this->pageTitle="Weightlifting GC - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
            <li class="active">GC</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">GC</h1>
			</header>

			<p>Every year three weightlifting GCs are being played.</p>
			<ol>
				<li>Inter hostel weightlifting GC</li>
				<li>PG weightlifting GC </li>
				<li>Girls weightlifting GC</li>
			</ol>
			<p>There are 5 different weight categories in both boys and girls competitions</p>
			
			<ul>
				<li><b>Boys weight category:</b>
					<ul>
					 	<li>56 kg</li>
					 	<li>62 kg</li>
					 	<li>69 kg</li>
					 	<li>77 kg</li>
					 	<li>77 kg+</li>
					</ul>
				</li>
				
				<li><b>Girls weight category:</b>
				 	<ul>
				 		<li>48 kg</li>
				 		<li>53 kg</li>
				 		<li>58 kg</li>
				 		<li>63 kg</li>
				 		<li>63 kg+</li>
				 	</ul>
				</li>
			</ul>
<br>
			<p>Maximum 2 players from one team are allowed to play in one weight category. Official procedure is same as Olympic weightlifting.</p>
			<p>Maximum 2 previous years Inter IIT players can participate from one hostel in the Inter Hostel GC as decided by the council.</p>
		
    </article>
</div> 
</div>

