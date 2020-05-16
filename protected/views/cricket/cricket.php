<?php
/* @var $this SiteController */
$halloffame = $this->halloffame;
$secretaries = $this->secretaries;
$captains = $this->captains;
$coach = $this->coach;
$sport="Cricekt";
$sport2="cricket";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
foreach ($halloffame as $key => $value) {
        if ($value['sport'] == ucwords($sport)) {
            $awards[] = $value;
        }
    }
foreach ($secretaries as $key => $value) {
    if ($value['post'] == ucwords($sport)) {
        $secy = $value;
        break;
    }
}
foreach ($captains as $key => $value) {
    if ($value['sport'] == ucwords($sport)) {
        $captain[] = $value;
    }
}
foreach ($coach as $key => $value) {
    if ($value['sport'] == ucwords($sport)) {
        $coach = $value;
    }
}
foreach ($convener as $key => $value) {
    if ($value['sport'] == ucwords($sport)) {
        $conveners[] = $value;
    }
}
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

	<!-- container -->
<!-- 	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sports</li>
			<li class="active"><?php echo $sport ?>	</li>
		</ol>

		<div class="row">
 -->
			<!-- Sidebar -->
 <?php include 'sidebar.php'; ?> 
            <!-- Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-7 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $sport ?>	</h1>
				</header>


<div class="wrapper">
            <div class="demo">
                <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: -200px; left: 0px; width: 100%; height: 700px; overflow: hidden;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: -30px; width: 100%;
                    height: 700px; overflow: hidden;">
                    <div>
                        <img u="image" src="images/coverpics/Cricket.jpg" />
                    </div>
                </div>
                </div>
            </div>
            
            <div class="description">
                <h2 class="text-center top-space" style="position:relative;"><b>CRICKET</b></h2>
                <p><h4>Introduction</h4>
          Cricket was first played in southern England in the
                16th century. By the end of the 18th century, it had
                developed to be the national sport of England. The
                expansion of the British Empire led to cricket being
                played overseas and by the mid-19th century
                the first international match was held. Cricket is
                easily the most popular sport in India. The Indian
                national cricket team won the 1983 Cricket World
                Cup, the 2007 ICC World Twenty20 and the 2011
                Cricket World Cup. The Indian Premier League (IPL)
                is the most-watched Twenty20 cricket league in the
                world and is also known for its commercial success.</p>
        <p><h4>At IIT Bombay</h4>
          Cricket is surely one of the most loved sports of the country and the IIT Bombay Cricket Club was formed to nurture this love of the cricket enthusiasts in the institute.<br>
          With International level pitches, lush green outfield and Indoor Nets, IIT Bombay has one of the best cricketing facilities in the city.
          <br>With all year round events and activities in the form of NSO, Mixed Cricket, Cric-mania and a lot more, the cricket club keeps the sport lovers active with a combination of fun events and serious sport.
        </p>

            <div class="syntax">
                <h1 class="page-title">Events   </h1>

                    <h1 class="page-title">Drona</h1>
            
      <p>
        It is a camp meant for beginners to gain some expertise in professional cricket.
        <br>Organized by the Sports Council of IIT Bombay, it takes place in the month of March/April and a senior Inter IIT Cricket player conducts the sessions (about 10 sessions) where he helps the registered students practice and improve his skills with the cricket ball.</p>

                    <h1 class="page-title">GC</h1>

            <p>This is the inter hostel cricket tournament which takes place every year on the main ground in which the hostels bring their best players to win and grab some valuable points for the sports General Championship.
                <br> It comprises of 15-over matches played with white balls and takes place in the month of January.</p>
                    <table border = 1px width = 100%>
                    <caption><h3 align ="left">GCs till now</h3></caption>
                    <tr>
                        <td align = "center"><b>YEAR</b></td>
                        <td align = "center"><b>CHAMPIONS</b></td>
                    </tr>
                    <tr>
                        <td align = "center">2015-16</td>
                        <td align = "center">Hostel 2</td>
                    </tr>
                    <tr>
                        <td align = "center">2014-15</td>
                        <td align = "center">Hostel 3</td>
                    </tr><tr>
                        <td align = "center">2013-14</td>
                        <td align = "center">Hostel 4</td>
                    </tr><tr>
                        <td align = "center">2012-13</td>
                        <td align = "center">Hostel 12</td>
                    </tr>
                    <tr>
                        <td align = "center">2011-12</td>
                        <td align = "center">Hostel 2</td>
                    </tr>
                    </table>

                    <h1 class="page-title">Inter IIT</h1>
                    <p>Inter IIT Gold, The dream of every player in every single IIT.</p>
                    <p>The Inter IIT team consists of the best of the institute in the sport and each year hundreds of students give their all to represent the institute in their respective sport in the Inter IIT Tournament. The IIT Bombay cricket team is consists of few of the most dedicated player who shed sweat and blood day in and day out for the ultimate glory. </p>
                    <p>Always amongst the stronger teams, IIT Bombay has given the Title a good shot every year.</p>

                    <h2>Performance in the recent years</h2>
                    <table border = "1" width = 100%>
                            <tr>
                                <td align = "center"><b>Year</b></td>
                                <td align = "center"><b>InterIIT Host</b></td>
                                <td align = "center"><b>Our Position</b></td>
                            </tr>
                            <tr>
                                <td align = "center">2014</td>
                                <td align = "center">Bombay</td>
                                <td align = "center">3rd</td>
                            </tr>
                            <tr>
                                <td align = "center">2013</td>
                                <td align = "center">Guwahati</td>
                                <td align = "center">Quarters</td>
                            </tr>
                            <tr>
                                <td align = "center">2012</td>
                                <td align = "center">Roorkee</td>
                                <td align = "center">3rd</td>
                            </tr>
                            <tr>
                                <td align = "center">2008</td>
                                <td align = "center"> Madras</td>
                                <td align = "center">1st</td>
                            </tr>
                    </table>

            <h1 class="page-title">Leagues</h1>

      <!-- CricMania -->
      <h3>Cric-mania (Institute Cricket League)</h3>
       <p> The cricket Club was one of the first clubs of IIT Bombay to start the Institute level sports leagues. It is one of the most awaited events of the Institute and takes place in the month of February in which any cricket enthusiast could register. Once the registrations are done, bidding of players takes place to form the teams. Wearing their respective jerseys, they play for glory.
         <br> Meant for giving an opportunity to the students of IIT Bombay to showcase their cricketing skills, Cricmania is one of the most successful cricket events and has completed its 6th edition this year.
         <br>Check out our <a href= "https://www.facebook.com/cricmaniaiitb/?fref=ts">facebook page</a> for more.
       </p>

       <!-- CricFiesta -->
       <h3>CricFiesta</h3>
         <p>An event which is a part of the Freshie Girls Week where in teams of around 7 girls play cricket on the main pitches of the gymkhana ground.
           <br>Nearly 4 teams register every year and a knockout tournament is conducted among them with a tennis ball.</p>

      <!-- Freshman League -->
      <h3>Freshmen Cricket League</h3>
      <p>A league initiated with the goal to give the freshmen an opportunity to showcase their talent gained through NSO, GC, Cricmania and several other camps and also for those who couldn’t take part in any of them.
        <br>A league comprising of 4 teams formed through bidding takes place in the month of March and has been an encouragement to the cricket enthusiasts to pursue the game in the institute and also has been a source of raw talent which on being nurtured produced few of the best players of IIT Bombay.
      </p>

      <h1 class="page-title">Mixed Cricket</h1>
      <p>
        It’s a fun event which takes place in the Open Air Theatre (OAT) where in 32 teams each comprising of 5 guys and 2 girls play against each other with rules similar to street cricket.</p>
        <p>It usually takes place in October.</p>

        <h1 class="page-title">NSO</h1>

            <p>It’s a part of the academic curriculum for the undergraduate students. Through selections for students who opted for cricket nearly 30-40 are selected and trained throughout the academic year, 2 days a week (Monday and Tuesday). </p>
            <p>NSO has always been a source of some great talent for IIT Bombay cricket with students of high enthusiasm for the sport putting in efforts day in and day out to improve their skills in the sport.</p>

            


        </div>

            <div class="scrollbar">
                <h1 class="page-title">Facilities   </h1>
                <ol>
                  <h3><li>Indoor Nets</li></h3>
                        <p> The Indoor nets were constructed recently (2015) and are used specially for practice during the monsoons. It consists of 4 nets and has a matted surface, located opposite to Hostel 3.
                            <br>Timings: 6 am – 10 pm (open on all days throughout the year, unless otherwise mentioned)</p>

                        <h3><li>Gymkhana ground</li></h3>
                         The gymkhana ground has 5 cricket pitches maintained by a curator with over 20 years of experience. The ground is used for both cricket and athletics and is booked for activities with mutual consent of both the secretaries.
                         <br> With excellent ground staff, the pitches and outfield are thoroughly maintained. The gymkhana ground has been lauded by many professional as one of the best ground in the city.</p>

                         <h3><li>Outdoor Pitches</li></h3>
                          <p>We have 4 pitches on the gymkhana grounds with nets. They are re-soiled just before monsoon every year and used after. These will shifted to the area beside the Indoor
                                nets as this area is required for athletics.</p>
                </ol>
                <br>
            </div>

            <div class="rotations">
                <h1 class="page-title">Rules</h1>
                <h3>Court Timings</h3>
                  <ol>
                  <li>Both indoor and outdoor basketball courts are open daily except for certain institute holidays.</li>
                  <li>Morning timings: 6:00 am to 9:00 am</li>
                  <li>Evening timings: 5:00 pm to 10:00 pm</li>
                </ol>
                  <h3>Who may use the courts?</h3>
                  <ol>
                  <li>IIT Bombay students, staff and faculty possessing a valid IIT Bombay identity card</li>
                  <li>Guests must be accompanied by the host member</li>
                  <li>Players must make an entry in the logbook on entering and leaving the courts</li>
                </ol>
                  <h3>Priority of play and court reservations</h3>
                  <ol>
                  <li>The courts are available on a first come-first serve basis</li>
                  <li>Players may be asked to vacate the courts which are pre-reserved during the specified hours, if the need arises</li>
                  <li>Courts are not open for reservations. Special requests regarding the same may be put forward to the council</li>
                  <li>Courts may be pre-reserved for girls, Institute events or team practice. Information regarding the same will be put up on the notice board.</li>
                </ol>
                  <h3>General rules for court use</h3>
                  <ol>
                  <li>Courts are to be used only for playing basketball</li>
                <li>  Basketball shoes or gum soled shoes are mandatory when using the courts</li>
                <li>Running shoes are strictly not permitted</li>
                <li>Please dispose off the trash in proper receptacles</li>
                <li>No eatables are allowed on the courts.</li>
                </ol>
                <h3>Enforcement of rules</h3>
                <ol>
                <li>IIT Bombay Sports will enforce the rules of court play through the council and the caretakers of the courts</li>
                <li>Failure to adhere to the rules will result in loss of court privileges</li>
                </ol>
                <h3>Issue of equipment</h3>
                <ol>
                <li>Basketballs can be issued from store room located in sac or in outdoor facilities</li>
                <li>Issued equipment should be used properly and returned after use without any damage</li>
                
            </div>

            <div class="source">
                <h1 class="page-title">PEOPLE</h1>
                <div class="row">
    <h1 class="page-title">HOF   </h1>
    <div class="row">

        <article class="col-md-10 maincontent">
            <header class="page-header">
                <h1 class="page-title">Hall of Fame</h1>
            </header>

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
                <?php } } ?>

            </ul>
            <?php } ?>
        </article>
    </div>
</div>
</div>

<div class="row">
    
        <article class="col-md-10 maincontent">
        <header class="page-header">
                <h1 class="page-title">Contact  </h1>
        </header>

            <ul class="grid cs-style-6">
                <!-- INSTITUTE SECRETARY -->
                <li>
                    <h2 class="text-center top-space">Institute Secretary</h2>          
                    <figure style="width:250px;height:250px; ">
                        <a href="<?php echo $secy['fb'] ?>" target="_blank" alt="" ><img src="images/council/<?php echo $secy['image']?>" alt=""></a>
                        <figcaption>
                            <h3><?php echo $secy['name']; ?></h3>
                            <span><i class="fa fa-phone"></i><?php echo ' ' .$secy['phone']; ?></span>
                            <a target="_blank" href="mailto:<?php echo $secy['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>                        
                        </figcaption>
                    </figure>
                </li>


                <!-- COACH -->
                <li>
                    <h2 class="text-center top-space">Coach</h2>            
                    <figure style="width:250px;height:250px; ">
                        <a href="<?php echo $coach['fb'] ?>" target="_blank" alt="" ><img src="images/council/coach/<?php echo $coach['image']?>" alt=""></a>
                        <figcaption>
                            <h3><?php echo $coach['name']; ?></h3>
                            <span><i class="fa fa-phone"></i><?php echo ' ' .$coach['phone']; ?></span>
                            <a target="_blank" href="mailto:<?php echo $coach['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>                       
                        </figcaption>
                    </figure>
                </li>


            

            <!-- CAPTAIN -->

                <?php 
                if(isset($captain)) {
                foreach ($captain as $key => $value) { ?>
                <li>
                <h2 class="text-center top-space">
                <?php if($value['girls_captain']) {
                    echo "Girls Captain";
                } else {
                    echo "Captain";
                } ?>
                </h2>
                    <figure style="width:250px;height:250px; ">
                        <a href="<?php echo $value['fb'] ?>" target="_blank" alt="" ><img src="images/council/captains/<?php echo $value['image']?>" alt=""></a>
                        <figcaption>
                            <h3><?php echo $value['name']; ?></h3>
                            <span><i class="fa fa-phone"></i><?php echo ' ' .$value['phone']; ?></span>
                            <a target="_blank" href="mailto:<?php echo $value['email']?>;" ><i class="fa fa-envelope"></i> e-mail</a>                       
                        </figcaption>
                    </figure>
                </li>
                <?php } } ?>
            </ul>
        </article>
    </div>

    <div class="row">
            
         <!-- Article main content -->
      <article class="col-md-10 maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $sport; ?> Team</h1>
        </header>

       <ul class="grid cs-style-1" style="padding: 0px 0px 10px 0px;">          

        <?php foreach ($people as $person) {    ?>
                <li style="width: 180px;">
                    <figure style="width:150px;height:150px; ">
                        <img src="<?php echo $person['Photo']?>" alt="">
                        <figcaption>
                            <h4 style="font-size:15px; margin-top:45px"><a href="index.php?r=profile/display&rollno=<?php echo $person['RollNumber']; ?>" target="_blank" style="position:absolute; background:none; top:0px;left:5px;right:5px;"><?php echo $person['Name']; ?></a></h4>
                            <span style="font-size:12px; text-align:left"><?php if($person['YearDept']!="") {echo $person['YearDept']. '<br>'; } if($person['Position']!="") {echo $person['Position']. '<br>'; } echo $person['Medals']?></span>
                            <a target="_blank" href="" style="position:absolute;bottom:5px;right:10px" data-toggle="modal" data-target="#myModal<?php echo $person['id']; ?>"><i class="fa fa-search"></i> About </a>
                        </figcaption>
                    </figure>
                </li>

                <!--  Modal Window Starts -->
        
          <!-- Modal -->
          <div class="modal fade" id="myModal<?php echo $person['id']; ?>" role="dialog" style="top:20%">
            <div class="modal-dialog" style="width:60%">
            
              <!-- Modal content-->
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title"><a href="index.php?r=profile/display&rollno=<?php echo $person['RollNumber']; ?>" target="_blank" style="color:inherit"><?php echo $person['Name']; ?></a></h2>
                </div>
                <div class="modal-body col-md-4">
                    <img src="<?php echo $person['Photo']?>" alt="">
                </div>
                <div class="modal-body col-md-8">
                  <p style="font-size:16px; text-align:left"><?php echo $person['About']; ?></p>
                </div>
                <div class="modal-footer">
                </div>
              </div>
              
            </div>
          </div>  
<!--  Modal Window Ends -->

        <?php } ?>
        </ul>

      </article>
    </div>

            <div class="follow">
                <h1 class="page-title">GALLERY</h1>
            </div>

            </div>

    <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->