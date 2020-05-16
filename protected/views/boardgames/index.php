<?php
/* @var $this SiteController */
$sport="Board Games";
$sport2="boardgames";
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
          <p style="width:80%;margin:auto">Institute Board Games cater to all who want to learn any kind of Board Games. With the increasing culture of Chess, Carrom and Pool in the Institute, we also conduct events for Snooker, Rubik’s Cube among others. We even have facilities for Foosball.
We envision to take our Board Games culture to a renowned and established level of sport. Being indoor we have an opportunity to serve the students all 365 days. Board Games is not for the lethargic but for the enthusiastic.
<a href="index.php?r=darkknight">The Dark Knight Club</a> and Rubik’s Cube Club are the subordinates of the IITB Board Games.
Come be a part of the Institute Board Games!</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>
