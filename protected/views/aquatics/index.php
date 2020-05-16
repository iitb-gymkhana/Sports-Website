<?php
/* @var $this SiteController */
$sport="Aquatics";
$sport2="Aquatics";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>

<body>
  <div class="fh5co-overlay" style="height:0px;"></div>
  <div id="fh5co-blog-section" style="min-height:100vh; background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center;background-size:cover;">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb">Aquatics</h2>
          </div>
        </div>
      </div>
      <div class="container animate-box sports">
        <div class="row">
          <p style="width:80%;margin:auto">Comprising of Swimming and Water Polo, Aquatics is one of the most widely practiced sports at IIT Bombay. Owing to the remarkable infrastructure facilities consisting of an Olympic-sized Swimming Pool, accompanied by a Beginners Baby Pool, IIT Bombay Aquatics has witnessed a tremendous growth over the years. IITB Swimming Pool is also affiliated to the Greater Mumbai Amateur Aquatic Association(GMAAA). With several exciting events spread throughout the year to cater to all levels of players, IITB Aquatics functions with the sole aim of promoting Swimming and Water Polo. Coached by Dr. P.M. Reddy, the Swimming and Water Polo teams of IIT Bombay have the most successful history and a reputable name at the Inter-IIT Aquatics Meet.</p>
              </div>
            </div>

          <!-- <div class="fh5co-hero" style = "background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center center fixed;background-size:cover;">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5">
           <div class="desc animate-box" style="top:40%">
					<h2 style="font-size:25px">AQUATICS</h2><br>
					 <div class = "container"  style = "word-wrap: break-word;overflow:hidden">
					<p class="sports" align="center">The Indian Institute of Technology, Bombay began in 1958, as one of the five centers of
                excellence in engineering education, by a special Act of Parliament. The Student Activity
                Center (SAC) came up in 1980, along with the swimming pool. </p>
                <p class="sports">The IIT Bombay Swimming club started functioning in 1983, under the stewardship of Coach,
                Dr. P. M. Reddy. It is affiliated to the Greater Mumbai Amateur Aquatic Association(GMAAA).</p>
				 </div>
			 </div>
        </div>
			</div> -->
     <?php include 'sidebar.php'; ?>
</div>
  </body>

  <script src="js/jquery.min.js"></script>
  <script src="js/template.js"></script>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/headroom.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQuery.headroom.min.js"></script>
