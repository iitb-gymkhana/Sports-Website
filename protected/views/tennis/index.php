<?php
/* @var $this SiteController */
$sport="Lawn Tennis";
$sport2="tennis";
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
          <p style="width:80%;margin:auto">Scientists and doctors around the world point to tennis as one of the healthiest activities that one can 
                participate in because it delivers physical, mental and emotional gains. Since its inception, the Tennis Club of IIT-B has been a hub for tennis enthusiasts. The 
                purpose of the club is to conduct various events such as camps, workshops and tournaments 
                along with fun events like screenings of matches etc. Looking for competition, social play, 
                team camaraderie, a good workout, quality time with friends, tournaments exposure? Tennis Club 
                of IIT-B will strive to provide you with all this and more!</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>
