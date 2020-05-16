<?php
/* @var $this SiteController */
$sport="Basketball";
$sport2="Basketball";
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
          <p style="width:80%;margin:auto">Basketball is not just a sport at IIT Bombay, it is a culture of it's own. There is a robust community of basketball players who enjoy and practice basketball all days of the week! The institute men's and women's teams have shown exemplary performances at Inter-IIT Sports Meets and also in the local circuit in Mumbai time and again. All enthusiastic players are guided wonderfully by the coach Dr. Edwin sir and encouraged to pursue the sport wholeheartedly. He is a master trainer who delves into the intricacies of the game and brings out the best out of all his players. The infrastructure at IIT Bombay boasts of two indoor and two outdoor state-of-the-art basketball courts. So come along and let's play basketball!</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>