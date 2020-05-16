<?php
/* @var $this SiteController */
$sport="Weightlifting";
$sport2="weightlifting";
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
          <p style="width:80%;margin:auto">Those who think that weightlifting is a game of power, they are totally mistaken. 
                Weightlifting is a purely technical game, which consists of two lifts - snatch, and clean & jerk in 
                the respective order. Weightlifting was among those few sports featured in the first modern Olympic Games in 1896. In Inter-IIT, weightlifting plays a major role. Our IITB Weightlifting team has consistently 
                remained in the first three positions since 2003. And most of the time it has captured the 1st 
                position. Sumit Bhagat, famous in IIT Bombay won 4 gold medals in 4 consecutive years in campus.
               We have here great facilities and the best coach for weightlifting and weight training. </p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>
