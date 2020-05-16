<?php
/* @var $this SiteController */
$sport="Volleyball";
$sport2="volleyball";
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
          <p style="width:80%;margin:auto">IIT Bombay Volleyball Club is one of the most enthusiastic clubs at IIT bombay and is committed to training athletes to perform at their highest level by uniting talented and passionate players. We view the volleyball court as our classroom, transformed to teach lessons of accountability, character, commitment, communication, cooperation, courage, discipline, integrity, leadership, respect, responsibility, teamwork, work ethic, and the importance of sacrifice and sportsmanship. We strive to have a positive impact on each and every individual in our club. We participate in various tournaments in and around Bombay. One of our main aims is performing well in Inter IIT - a battle where teams from different IIT's compete against each other in a battle for supremacy.</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>


