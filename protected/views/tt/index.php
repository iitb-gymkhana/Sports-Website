<?php
/* @var $this SiteController */
$sport="Table Tennis";
$sport2="tt1";
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
          <p style="width:80%;margin:auto">
Ever fancied playing in a state of the art, fully air conditioned table tennis court which you get to see in the Olympics? Look no further! 
We strive to portray table tennis as a sport with absolutely no prerequisites with a massive number of people picking up and excelling in this sport every year with the guidance of a dedicated coach and our team players.
 Headed by the Table Tennis secretary and driven by the conveners, Table Tennis Club promises fun to everyone who is a part of it. Lets take the game to a higher level.</p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>