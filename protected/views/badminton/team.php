<?php 
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$sport="Badminton";
	$sport2="badminton";

	$this->pageTitle="Team - ". $sport." - ". Yii::app()->name;

?>

<?php include 'sidebar.php'; ?>

<div class="fh5co-overlay" style="height:80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>TEAM</h2>
        </div>
      </div>
    </div>
	<div class="container" >
		<figure>
		     <img  style="max-width:100%" src="images/teams/<?php echo $sport2; ?>.jpg" />
		</figure>
    </div>
	</div>