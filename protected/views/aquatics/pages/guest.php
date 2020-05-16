<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Guest Rules - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Info</li>
            <li class="active">Guest Rules</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Guest Rules</h1>
			</header>
      
      <ul>
      	<li>Guest charges are Rs 20/- per dip.</li>
		<li>No guest will be permitted during the peak hours of the pool if there are 30 or more 
		members in the pool. </li>

		<li>Guest cannot be in a regular visitor to the pool. </li>

		<li>Only the primary member of the swimming pool is allowed to bring the guest .No 
		depended /school children are eligible to bring the guset. </li>

		<li>Guest will be allowed only once/twice in a week. </li>

		<li>Primary member has to fill the guest form each time available at the pool office and 
		entry should be made in guest entry book as well as main entry book at the counter. </li>

		<li>It is compulsory that the guest should be accompanied by the primary member. </li>
	</ul>
</article>
</div> 
</div>