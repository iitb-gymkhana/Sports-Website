<?php
/* @var $this SiteController */
$sport="Hockey";
$sport2="hockey";
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
          <p style="width:80%;margin:auto">Live, study and play in the heart of elite hockey in IIT Bombay! Hockey here is all about fun. Hockey Club provides a unique atmosphere where a player 
                becomes a part of the hockey family which strives to educate, develop and encourage each and 
                every one of its members on their quest to excellence. </p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>

