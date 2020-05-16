<?php 
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$sport="Skating";
	$sport2="skating";
	$sport3="Adventure and Rolling Sports";

	$this->pageTitle="People - ". ucfirst($sport)." - ". Yii::app()->name;


	foreach ($secretaries as $key => $value) {
		if ($value['post'] == $sport3) {
			$secy = $value;
			break;
		}
	}
?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Clubs</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?> Club</a></li>
			<li class="active">People</li>
			<li class="active">Contact</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->
	
		<article class="col-md-10 maincontent">
		<header class="page-header">
				<h1 class="page-title">Contact	</h1>
		</header>

			<ul class="grid cs-style-6">
				<!-- INSTITUTE SECRETARY -->
				<li>
					<h2 class="text-center top-space">Institute Secretary</h2>			
					<figure style="width:250px;height:250px; ">
						<a href="<?php echo $secy['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $secy['image']?>" alt=""></a>
						<figcaption>
							<h3><?php echo $secy['name']; ?></h3>
							<span><i class="fa fa-phone"></i><?php echo ' ' .$secy['phone']; ?></span>
							<a target="_blank" href="mailto:<?php echo $secy['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>						
						</figcaption>
					</figure>
				</li>

			</ul>
		</article>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script>