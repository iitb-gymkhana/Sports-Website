<?php
/* @var $this SiteController */
$secretaries = $this->secretaries;
$sport="Cycling";
$sport2="cycling";
foreach ($secretaries as $key => $value) {
		if ($value['name'] == ucwords("Rajendra Bhaskar")) {
			$secy = $value;
			break;
		}
	}
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>
<body>
  <div class="fh5co-overlay" style="height:0px;"></div>
  <div id="fh5co-blog-section" style="min-height:100vh;background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center center fixed;background-size:cover;">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb"><?php echo $sport;?> Club</h2>
          </div>
        </div>
      </div>
      <div class="container animate-box sports">
        <div class="row">
          	<p align="center">Cycling is recently included in Gymkhana sports due to a huge participation in this 
                exciting sport.</p>
                <p align="center">We usually conduct a cycling ride to nearby places in Mumbai in a month. The usual distance 
                of these rides is 50 km and 120 km.</p>
                <p align="center">These rides are under the supervision of a professional cyclist and also supported by some 
                senior cyclist if our insti. For safety purposes, the institute provides a supporting vehicle 
                in each ride.</p>

                <p align="center">Apart from rides we also conduct cycling competitions like biathlon on Independence Day and 
                triathlon GC.</p>
              </div>
            </div>
			<div class="container animate-box gsec" style="margin-top:60px;>
						<div class="row" style="width:90%; margin:auto;">
							<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb">INSTITUTE SECY</h2>
							</div>
								<div class="col-md-6 col-md-6 council sports" style="left:25%;vertical-align:middle; ">
									<figure>
		        				<img src="images/council/<?php echo $secy['image']; ?>" />
									</figure>
          				<p align="center"><a href="<?php echo $secy['fb'];?>" target="_blank"><?php echo $secy['name'];?></a>
									<p align="center"><a href="mailto:<?php echo $secy['email']; ?>"><?php echo $secy['email']; ?></a></p>
									<p align="center"><a href="tel:<?php echo $secy['phone']; ?>"><?php echo $secy['phone'];?></a></p>
		        		</div>
							</div>
						</div>
	</div>
	</body>