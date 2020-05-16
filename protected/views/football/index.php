<?php
/* @var $this SiteController */
$sport="Football";
$sport2="Football";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>
<body>
  <div class="fh5co-overlay" style="height:0px;"></div>
  <div id="fh5co-blog-section" style="min-height:100vh;background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center;background-size:cover;">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb"><?php echo $sport;?></h2>
          </div>
        </div>
      </div>
      <div class="container animate-box sports">
        <div class="row">
          <p style="width:80%;margin:auto">Ever dreamt of playing in an environment as the ones you watch in premiership football? This being the most followed and played sport in the institute along with the state of art facilities available at your disposal, Football at IIT Bombay surely contributes to making your stay at the campus memorable! Besides, the Inter IIT coaching facility is groomed to an altogether another level where you learn to develop your style of play professionally, regardless of where you start from. Together, lets make this excellent sport flourish even further and take it to new heights!</p>
        </div>
      </div>
	</div>
			<?php include 'sidebar.php'; ?>
</body>