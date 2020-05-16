<?php
/* @var $this SiteController */
$sport="Athletics";
$sport2="athletics";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>

<body>
  <div class="fh5co-overlay" style="height:0px;"></div>
  <div id="fh5co-blog-section" style="min-height:100vh;background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center;background-size:cover;">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb">Athletics</h2>
          </div>
        </div>
      </div>
      <div class="container animate-box sports">
        <div class="row">
          <p style="width:80%;margin:auto">The club aims at the general health and fitness of the students, along with preparing them 
                for competitions. The students are put through efficient training routines under the guidance of
                experienced coaches. The routines generally include gymming, drills and basic yoga. We provide a very friendly and supportive environment in which you can develop your skills 
                to the fullest. If athletics is your passion then this is the place to be!</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>