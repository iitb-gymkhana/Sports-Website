<?php
/* @var $this SiteController */
$secretaries = $this->secretaries;
$sport="Skating";
$sport2="skating";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
$this->pageTitle="Skating Club - ". Yii::app()->name;
foreach ($secretaries as $key => $value) {
		if ($value['name'] == ucwords("Rajendra Bhaskar")) {
			$secy = $value;
			break;
		}
	}

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
         <p>Institute Skating Club was founded in early 2011. Seniors had done a great job to develop such a skating culture in institute. In early 2015 Skating was recognised as gymkhana sports in institute.</p>
				<p>Our senior achieved a milestone in <b>recreational and slalom skating.</b> Due to great participation in all the camps, institute provide inline skates to students, which they can issue from SAC-Store. Soon we will include quad skate and skateboard in our inventory. Our usual place for practice is <b>outdoor basketball court</b>.</p>
              </div>
            </div>
		<div class="container animate-box sports">
        <div class="row">
			<h2 align="center" style="color:#fbfbfb">EVENTS</h2>
			<h3 align="center">Camps: </h3>
				<p align="center">The sessions of camp will contain Inline skate, Quad skate and Skateboard. 4 camps are organised throughout the year. You have to register for these camp,you can do it right now through the registration tab on your left. The duration of camps is usually 3 to 4 weeks. The camps are as follows:</p>
				<ul align="center">
					<li style="color:#fbfbfb"align="center"><b>Autumn Camp:</b> The camp is a Beginner Camp and most probably starts in first week of October. No previous experience will be required for this camp.</li>
					<li style="color:#fbfbfb"align="center"><b>Spring camps:</b> In spring semester we conduct 2 camps, one is before midsem and other one is after midsem.The first camp is Intermediate and other later one is Advance camp. Beginner can also join these camps.</li>
					<li style="color:#fbfbfb"align="center"><b>Summer camp:</b> The summer camp usually start in mid of May. This camp is also a Advance level camp, but beginner can also join this camp.</li>
				</ul>
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

