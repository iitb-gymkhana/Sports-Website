<?php
/* @var $this SiteController */
$sport="Athletics";
$sport2="athletics";
$halloffame = $this->halloffame;
//$secretaries = $this->secretaries;
//$captains = $this->captains;
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
foreach ($halloffame as $key => $value) {
  if ($value['sport'] == ucwords($sport)) {
    $awards[] = $value;
  }
}
// foreach ($secretaries as $key => $value) {
//   if ($value['post'] == ucwords($sport)) {
//     $secy = $value;
//     break;
//   }
// }
// foreach ($captains as $key => $value) {
//   if ($value['sport'] == ucwords($sport)) {
//     $captain[] = $value;
//   }
// }
?>

<!-- FB plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.simplefade.js"></script>


	<header id="head" class="secondary"></header>
	<div id="slider1_container" style="position: relative; margin: 0 auto;
        top: -200px; left: 0px; width: 100%; height: 700px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px width : 100%;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
       <div u="slides1" style="cursor: move; position: absolute; left: 0px; top: -30px; width: 100%;
            height: 700px; overflow: hidden;">

            <div id ="slide1" style = "width:100%">
                <img u="image" src="images/coverpics/new.jpg" style ="width:100%"/>
                <div style="position: absolute; width: 100%; left: 30px; padding: 5px;
                    line-height: 60px; text-transform: uppercase; font-size: 50px;
                        font-color: #005555;">
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute; top: 0px; left: 0px; width: 10px;padding-left: 10px;
         text-align: left; line-height: 24px; text-transform: uppercase; font-size: 18px;
             font-color: #005555;">
         <div class="row" style="z-index:1000 ">
             <div class="col-md-3">
                 <div class="fixed">
                         <ul class="nav navbar-fixed-top" style="margin:70px;width: 10px;font-color: #005555;">
                             <!-- <li class="nav-header" style="background:rgba(0,0,0,0)">Sidebar</li> -->
                             <li class="active"><a href="#slider1_container" style="color:#eee; background:rgba(0,0,0,0)">Link</a>
                             </li>
                             <li><a href="index.php?r=<?php echo "$sport2"?>#Intro" style="color:#eee; background:rgba(0,0,0,0)">Home</a>
                             </li>
                             <li><a href="index.php?r=<?php echo "$sport2"?>#Facilities" style="color:#eee; background:rgba(0,0,0,0)">Facilities</a>
                             </li>
                             <li><a href="#sec3" style="color:#eee; background:rgba(0,0,0,0)">Link</a>
                             </li>
                         </ul>
                     <!--/.well -->
                 </div>
                 <!--/sidebar-nav-fixed -->
             </div>
         </div>
     </div>
	<!-- container -->
	<div class="container">

		<!-- <ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sports</li>
			<li class="active"><?php echo $sport ?>	</li>
		</ol> -->

		<div class="row">

			<!-- Sidebar -->
<!-- <?php //include 'sidebar.php'; ?> -->
            <!-- Sidebar -->


			<!-- Article main content -->
			<article class="col-md-7 maincontent" style ="width:100%;position:relative; left:100px" >
        <div class ="pull-right">
				<!-- <header class="page-header"> -->
        <div class = "container">
					<h2 id="intro">INTRODUCTION</h2>
				<!-- </header> -->


		   <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->
   <!-- <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <!--<div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>-->

        <!-- Slides Container -->
        <!--<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="images/gallery/athletics/1.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/athletics/2.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/athletics/3.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/athletics/4.JPG" />
            </div>
            <div>
                <img u="image" src="images/gallery/athletics/5.JPG" />
            </div>
        </div>-->


		 <!-- bullet navigator container -->
        <!--<div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <!-- <div u="prototype"></div> -->
        <!-- </div> -->
        <!--#endregion Bullet Navigator Skin End -->

    <!-- Arrow Left -->
        <!--<span u="arrowleft" class="jssora12l" style="top: 123px; left: 0px;">
        </span>-->
        <!-- Arrow Right -->
        <!--<span u="arrowright" class="jssora12r" style="top: 123px; right: 0px;">
        </span>-->
        <!--#endregion Arrow Navigator Skin End -->
        <!--<a style="display: none" href="http://www.jssor.com">Image Slider</a>

    </div>-->
    <!-- Jssor Slider End -->

				<p >The club aims at the general health and fitness of the students, along with preparing them
                for competitions. The students are put through efficient training routines under the guidance of
                experienced coaches. The routines generally include gymming, drills and basic yoga. </p>
                <p>We provide a very friendly and supportive environment in which you can develop your skills
                to the fullest. If athletics is your passion then this is the place to be!!! </p>
              </div>
                <div class = "container">
        					<h2 id = "Facilities">FACILITIES</h2>



        				<p>Our club has an outdoor track in the shape of a stadium 400 metres in length, and has eight lanes 1.22 m in width. The institute provides you with all the necessary equipments for field events, like shot put, discus, hammer, javelin. Running spikes for different track events have been introduced this year to facilitate athletes during various level camps and Inter Hostel GCs. </p>
        				<p>This equipment is available to every student on campus, that can be issued against a valid IIT Bombay ID card. Along with the outdoor facilities, the club will soon introduce indoor facilities for certain events.</p>
        				<p>Facilities for jumps including long jump, high jump and pole vault pit can be used with the permission of the Institute Athletics Secretary only for workout purpose. No other usage will be entertained.</p>
              </div>

                <div class = "container">
                <h2 id ="Events">EVENTS	</h2>

                <p>We conduct workshops on a regular basis in gymming and long distance running at beginner and
                intermediate level.</p>
                <p>Summer camps are held for the students, where they are put through daily
                exercises to ensure their general physical and mental fitness.</p>
                <p>We provide students with the opportunity to showcase their talents in inter-college and
                intra-college competitions as well as marathons.</p>

              </div>
              <div class = "container">
          				<h2>ATHLETICS GC</h1>


          			<p>Every year we have an Inter Hostel Athletics Competition - The Athletics General Championship, with assorted supporters crying themselves hoarse in support of their hostel mates, irrespective of the level of athletes. It is an ideal platform for people to flaunt their athletic skills and make their hostel proud!</p>
          			<p>With a restriction on participation as 3 events per athlete excluding relay, the gymkhana ground is the place to be during the days of the Athletics GC.</p>
          			<p>The GC is organized in two categories</p>
          			<h4><b>BOYS GC</b></h4>
          			<p>The events organized in this GC are:</p>
          			<p><b>Track Events</b></p>
          			<ol>
          				<li>100 m, 200 m, 400 m sprints</li>
          				<li>800 m middle distance</li>
          				<li>1500 m, 5000 m long distance</li>
          				<li>110 m, 400 m hurdles</li>
          				<li>4*100 m, 4*400 m relays</li>
          			</ol>
          			<h4><b>FIELD EVENTS</b></h4>
          			<ol>
          				<li>Long Jump, Triple Jump</li>
          				<li>High Jump</li>
          				<li>Pole Vault</li>
          				<li>Shot put Throw</li>
          				<li>Discus Throw</li>
          				<li>Hammer Throw</li>
          				<li>Javelin Throw</li>
          			</ol>
          			<h4><b>GIRLS GC</b></h4>
          			<p>The events organized in this GC are:</p>
          			<p><b>Track Events</b></p>
          			<ol>
          				<li>100 m, 200 m, 400 m sprints</li>
          				<li>800 m middle distance</li>
          				<li>4*100 m relay</li>
          			</ol>
                <h4><b>CROSSY GC</b></h4>
          			<ol>
          				<li>2 Boys’ Crossy: One in each semester</li>
          				<li>2 Girls’ Crossy: One in each semester</li>
          				<li>PG Crossy</li>
          				<li>Sophie Crossy, Freshie Crossy</li>
          			</ol>
                <h3>PG GC</h3>
                <p>The events organized in this GC are:</p>
          			<p><b>Track Events</b></p>
          			<ul>
            				<li>100 m, 200 m, 400 m sprints</li>
            				<li>800 m middle distance</li>
          				<li>1500 m, 5000 m long distance</li>
          				<li>110 m, 400 m hurdles</li>
          				<li>4*100 m, 4*400 m relays</li>
          			</ul>
          			<p><b>Field Events</b></p>
          			<ul>
          				<li>Long Jump, Triple Jump</li>
          				<li>High Jump</li>
          				<li>Shot put Throw</li>
          				<li>Discus Throw</li>
          				<li>Hammer Throw</li>
          				<li>Javelin Throw</li>
          			</ul>
<br><br>
              </div>
            </div>

            <!-- <div class = "container">
<h2 id = "Team"> TEAM</h2>
            <ul class="grid cs-style-1" style="padding: 0px 0px 10px 0px;">

               <?php //foreach ($people as $person) { 	?>
     				<li style="width: 180px;">
     					<figure style="width:150px;height:150px; ">
     						<img src="<?php //echo $person['Photo']?>" alt="">
     						<figcaption>
                   				<h4 style="font-size:15px; margin-top:45px"><a href="index.php?r=profile/display&rollno=<?php //echo $person['RollNumber']; ?>" target="_blank" style="position:absolute; background:none; top:0px;left:5px;right:5px;"><?php //echo $person['Name']; ?></a></h4>
                   				<span style="font-size:12px; text-align:left"><?php //if($person['YearDept']!="") {echo $person['YearDept']. '<br>'; } //if($person['Position']!="") {//echo $person['Position']. '<br>'; } //echo $person['Medals']?></span>
     							<a target="_blank" href="" style="position:absolute;bottom:5px;right:10px" data-toggle="modal" data-target="#myModal<?php //echo $person['id']; ?>"><i class="fa fa-search"></i> About </a>
     						</figcaption>
     					</figure>
     				</li>

     				<!--  Modal Window Starts -->

     		  <!-- Modal -->
     		  <!-- <div class="modal fade" id="myModal<?php //echo $person['id']; ?>" role="dialog" style="top:20%">
     		    <div class="modal-dialog" style="width:60%">

     		      <!-- Modal content-->
     		      <!-- <div class="modal-content" >
     		        <div class="modal-header">
     		          <button type="button" class="close" data-dismiss="modal">&times;</button>
     		          <h2 class="modal-title"><a href="index.php?r=profile/display&rollno=<?php //echo $person['RollNumber']; ?>" target="_blank" style="color:inherit"><?php //echo $person['Name']; ?></a></h2>
     		        </div>
     		        <div class="modal-body col-md-4">
     		        	<img src="<?php ///echo $person['Photo']?>" alt="">
     		        </div>
     		        <div class="modal-body col-md-8">
     		          <p style="font-size:16px; text-align:left"><?php //echo $person['About']; ?></p>
     		        </div>
     		        <div class="modal-footer">
     		        </div>
     		      </div> -->

     		    <!-- </div>
     		  </div> -->
     <!--  Modal Window Ends -->

             <?php //} ?>
             <!-- </ul>
           </div>  -->
           <?php if(!isset($awards)) { echo "<h3>No awards available!</h3>";}
     			else { ?>
     			<ul class="grid cs-style-3">

     			<!-- Person of the Year -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Person of the Year") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Person of The Year</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     			<!-- Roll of Honour -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Roll of Honour") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Roll Of Honour</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     				<!-- Freshman of the Year -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Freshman of the Year") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Freshman of the Year</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     				<!-- Ambrose Otieno -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Ambrose Otieno") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Ambrose Otieno</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     				<!-- Citation -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Citation") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Citation</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>


     				<!-- PG Passing out Color -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "PG Passing out Color") {
     					?>
     				<li>
     				<h2 class="text-center top-space">PG Passing out Color</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     				<!-- Color -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Color") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Color</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } ?>

     				<!-- Special Mention -->
     				<?php foreach ($awards as $key => $awardee) {
     					if($awardee['award'] == "Special Mention") {
     					?>
     				<li>
     				<h2 class="text-center top-space">Special Mention</h2>
     					<figure style="width:250px;height:250px; ">
     						<a href="<?php echo $awardee['fb'] ?>" target="_blank" alt="" ><img src="images/halloffame/<?php echo $awardee['image']?>" alt=""></a>
     						<figcaption>
     							<h3><?php echo $awardee['name']; ?></h3>
     						</figcaption>
     					</figure>
     				</li>
     				<?php } } }?>

     			</ul>
              <div class = "container">
                <h2 id ="Gallery"> GALLERY</h2>
              <div class="stackeffect">
                      <b>Inter IIT</b>
                      <a href="images/gallery/athletics/InterIIT2k14/10.jpg" data-lightbox="Inter IIT"><img src="images/gallery/athletics/InterIIT2k14/10.jpg"></a>
                  </div>
              	<div class="stackeffect">
              		<b>Inter IIT Felicitation</b>
              		<a href="images/gallery/athletics/InterIIT Felicitation/1.jpg" data-lightbox="Inter IIT Felicitation"><img src="images/gallery/athletics/InterIIT Felicitation/1.jpg"></a>
              	</div>


              <div class="hide">
                  <a href="images/gallery/athletics/InterIIT2k14/1.jpg" data-lightbox="Inter IIT"></a>
              	<a href="images/gallery/athletics/InterIIT2k14/2.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/3.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/4.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/5.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/6.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/7.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/8.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/9.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/11.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/12.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/13.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/14.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/15.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/16.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/17.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/18.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/19.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/20.jpg" data-lightbox="Inter IIT"></a>
                  <a href="images/gallery/athletics/InterIIT2k14/21.jpg" data-lightbox="Inter IIT"></a>

                  <a href="images/gallery/athletics/InterIIT Felicitation/2.jpg" data-lightbox="Inter IIT Felicitation"></a>
                  <a href="images/gallery/athletics/InterIIT Felicitation/3.jpg" data-lightbox="Inter IIT Felicitation"></a>
                  <a href="images/gallery/athletics/InterIIT Felicitation/4.jpg" data-lightbox="Inter IIT Felicitation"></a>
                  <a href="images/gallery/athletics/InterIIT Felicitation/5.jpg" data-lightbox="Inter IIT Felicitation"></a>
                  <a href="images/gallery/athletics/InterIIT Felicitation/6.jpg" data-lightbox="Inter IIT Felicitation"></a>
                  <a href="images/gallery/athletics/InterIIT Felicitation/7.jpg" data-lightbox="Inter IIT Felicitation"></a>

              </div>
            </div>
	</article>
	<!-- /Article -->



			<!-- Sidebar -->
			<!-- <aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px"
                        data-href="https://www.facebook.com/groups/687543531325082/"data-hide-cover="true"
                        data-show-facepile="false" data-show-posts="true" > </div>
					</div>
				</div>

			</aside> -->
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->


   <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->
