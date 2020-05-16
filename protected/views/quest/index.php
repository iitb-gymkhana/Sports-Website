<?php
/* @var $this SiteController */

$this->pageTitle="Quest 2015 - ". Yii::app()->name;
$date=date('M');
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/overlayhover.css" />
<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox.css"/>



<style type="text/css">
    .flex-caption {
      width: 96%;
      padding: 2%;
      left: 0;
      bottom: 0;
      background: rgba(0,0,0,.5);
      color: #fff;
      text-shadow: 0 -1px 0 rgba(0,0,0,.3);
      font-size: 14px;
      line-height: 18px;
    }
    li.css a {
      border-radius: 0;
    }
  </style>

<header id="head" class="secondary"></header>


<div class="container" >
  <header class="page-header">
    <h1 class="page-title">Quest 2015, IIT Madras</h1>
  </header>
<div class="row">

<!-- Sidebar -->
            <aside class="col-md-2 sidebar sidebar-left">

                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>Meet The Leaders</h4> 
	                    <section class="slider">
                         <div class="flexslider">
                           <ul class="slides">
                           <?php foreach ($captain as $person) { ?>
                             <li>
                                 <img src="images/quest/captain/<?php echo $person['rollno']; ?>.jpg" />
                               <p class="flex-caption"><a target="_blank" href="" style="color:inherit" data-toggle="modal" data-target="#myModal<?php echo $person['id']; ?>"><i class="fa fa-search"></i> <?php echo $person["name"]. ' ('. $person['sport']. ')'; ?> </a> </p>
                                 </li>
                            <?php } ?>
                           </ul>
                         </div>
                        </section>
			
            <?php foreach ($captain as $person) { ?>
             <!-- Modal -->
          <div class="modal fade" id="myModal<?php echo $person['id']; ?>" role="dialog" style="top:20%">
            <div class="modal-dialog" style="width:60%">
            
              <!-- Modal content-->
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title"><a href="index.php?r=profile/display&rollno=<?php echo $person['rollno']; ?>" target="_blank" style="color:inherit"><?php echo $person["name"]; ?></a></h2>
                </div>
                <div class="modal-body col-md-4">
                    <img src="images/quest/captain/<?php echo $person['rollno']; ?>.jpg" alt="">
                </div>
                <div class="modal-body col-md-8">
                  <p style="font-size:16px; text-align:left"><?php echo $person["about"]; ?></p>
                </div>
                <div class="modal-footer">
                </div>
              </div>
              
            </div>
          </div>  
<!--  Modal Window Ends -->
<?php } ?>
<br>
			        <h4>Moments</h4> 
                    <section class="slider">
                         <div class="flexslider">
                           <ul class="slides">
                             <li><a href="images/gallery/volleyball/1.JPG" data-lightbox="1"><img src="images/gallery/volleyball/1.JPG" /></a></li>
                             <li><a href="images/gallery/spardha/17.JPG" data-lightbox="1"><img src="images/gallery/spardha/17.JPG" /></a></li>
                             <li><a href="images/gallery/basketball/Inter IIT - Boys/6.jpg" data-lightbox="1"><img src="images/gallery/basketball/Inter IIT - Boys/6.jpg" /></a></li>
                           </ul>
                         </div>
                        </section>    
			    </div>
			</div>         
            </aside>
            <!-- /Sidebar -->


<article class="col-md-7 maincontent" style="overflow:hidden">
      
    <!-- Highlights - jumbotron -->
		

		<h2 class="text-center"><a href="index.php?r=about/news" style="color:inherit">Updates</a> &nbsp&nbsp<a href="https://feeds.feedburner.com/IITBSportsLatestNews" target="_blank" style="color:inherit"><i class="fa fa-rss"></i></a></h2>
		<br>
        <div class="row" >
            <?php $count=0; foreach($news as $item) { $count++; if($count%2!=0){?> </div> <div class="row" > <?php } ?> 
            <div class="col-sm-6" style="height:150px; overflow:hidden">
                  <a href="index.php?r=about/shownews&id=<?php echo $item['id']; ?>" style="color:inherit"><?php echo "<h3>".$item['title']."</h3>"; ?> </a>
                  <?php echo "<p>".$item['msg'].'</p>'; ?>
            </div>
            <?php } ?>
		</div> <!-- /row -->



	<h2 class="text-center top-space">Teams</h2>
        <div id="effect-5" class="effects clearfix">
            <div class="row">
            	<div class="img" style="width:25%">
            	    <img src="images/coverpics/QuestAqua.JPG" alt="">
            	    <div class="overlay">
            	        <a href="index.php?r=Aquatics/team&sport=aquatics" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestAthletics.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Athletics/team&sport=athletics" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestBaddy.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Badminton/team&sport=badminton" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestBasky.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Basketball/team&sport=basketball" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            </div>
            <div class="row">
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestCricket.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Cricket/team&sport=cricket" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestFooter.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Football/team&sport=football" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestHockey.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Hockey/team&sport=hockey" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestSquash.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Squash/team&sport=squash" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            </div>
            <div class="row">
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestTennis.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Tennis/team&sport=tennis" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestTT.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=tt/team&sport=tt" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestVolley.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Volleyball/team&sport=volleyball" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            	<div class="img" style="width:25%">
            	<img src="images/coverpics/QuestWeight.JPG">
            	    <div class="overlay">
            	        <a href="index.php?r=Weightlifting/team&sport=weightlifting" target="_blank" class="expand" style="text-decoration:none">+</a>
            	    </div>
            	</div>
            </div>            	
        </div>
         


            <h2 class="text-center top-space"><a href="index.php?r=events/calendar" 
            style="color:inherit">Upcoming Events </a>&nbsp&nbsp<a href="https://feeds.feedburner.com/IITBSportsUpcomingEvents" target="_blank" style="color:inherit"><i class="fa fa-rss"></i></a></h2> 
            <div class="row">
            <?php foreach($event as $item) {  $dateOnly = date("d", strtotime($item['date']));?>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text"><?php echo $dateOnly; ?></strong></span><h4><?php echo $item['title']; ?></h4></div>
                        <p><center><?php echo "Time: ". $item['time']; ?><br>
                            <?php echo "Venue: ". $item['venue']; ?></center>
                            <?php echo $item['descr']; ?></p>
                </div>
            <?php  } ?>        
        	</div>

</article>


<!-- Sidebar -->
            <aside class="col-md-3 sidebar sidebar-right">
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>The Countdown</h4> 
<iframe src="countdown.html" frameborder="0" style="width:100%; height:120px; padding:0px 0px 0px 20px; margin: 0 0 0 0"></iframe>

                        <br><br><br>
                        <h4>Upcoming Matches</h4>            
                    </div>
                </div>         
            </aside>
            <!-- /Sidebar -->
</div>
</div>



<script src="js/jquery-2.1.1.js"></script>
<script src="js/modernizr.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>


<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>


  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",slideshowSpeed: 3000,pauseOnAction: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

  </script>
