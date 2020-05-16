<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="css/timer.css" />
<body>
<div class="fh5co-hero" style="height:100vh">
  <div class="fh5co-overlay" style = "height:100vh;background:url(images/coverpics/web.jpg) no-repeat center center fixed; background-size:cover"></div>
  <div class="fh5co-cover text-center" style="height:100vh" data-stellar-background-ratio="0.5">
    <div class="desc animate-box">
      <h2>UNTIL. VICTORY. ALWAYS.</h2><br>
      <?php if(Yii::app()->user->isGuest)
      { ?>
      <span><a class="btn btn-primary" href="index.php?r=site/login">SIGN IN</a></span>
      <?php }
      else {
        if(in_array(Yii::app()->user->rollno, $profile)){?>
        <h3 style="color:#fbfbfb">Welcome, <a style="color:#FCC72C" href="index.php?r=profile/display&rollno=<?php echo Yii::app()->user->rollno; ?>"><?php echo Yii::app()->user->id; ?></a></h3>
        <span><a class="btn btn-primary" href="index.php?r=site/logout">LOGOUT</a></span>
        <p>Click on your name to visit your profile!</p>
        <?php
      }
      else{
        ?>
        <h3>Welcome, <?php echo Yii::app()->user->id; ?>. <br>Create your profile <a href="index.php?r=profile/putinfo">here.</a></h3>
        <?php
      }
    }
    ?>
    </div>
  </div>

</div>
<div id="fh5co-blog-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
          <h3>DAYS TO INTER IIT</h3>
        </div>
      </div>
      <?php
      $date = strtotime("December 12, 2016 12:00 AM");
      $remaining = $date - time();
      $days_remaining = floor($remaining / 86400);
      $day_1 = floor($days_remaining/10);
      $day_2 = $days_remaining%10;
      $hours_remaining = floor(($remaining % 86400) / 3600);
      $hour_1 = floor($hours_remaining/10);
      $hour_2 = $days_remaining%10;
      $minutes_remaining = floor(($remaining % 3600) / 60);
      $minute_1 = floor($minutes_remaining/10);
      $minute_2 = $days_remaining%10;
      $seconds_remaining = floor(($remaining % 60));
      $second_1 = floor($seconds_remaining/10);
      $second_2 = $days_remaining%10;
      ?>
      <div class="row">
        <div class="col-md-12 text-center animate-box" style="margin-left: 15%;">
            <div class="countdown">
              <div class="bloc-time days" data-init-value="<?php echo $days_remaining ?>">
                <span class="count-title">Days</span>

                <div class="figure days days-1">
                  <span class="top"><?php echo $day_1 ?></span>
                  <span class="top-back">
                    <span><?php echo $day_1 ?></span>
                  </span>
                  <span class="bottom"><?php echo $day_1 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $day_1 ?></span>
                  </span>
                </div>

                <div class="figure days days-2">
                  <span class="top"><?php echo $day_2 ?></span>
                  <span class="top-back">
                    <span><?php echo $day_2 ?></span>
                  </span>
                  <span class="bottom"><?php echo $day_2 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $day_2 ?></span>
                  </span>
                </div>
              </div>

              <div class="bloc-time hours" data-init-value="<?php echo $hours_remaining ?>">
                <span class="count-title">Hours</span>

                <div class="figure hours hours-1">
                  <span class="top"><?php echo $hour_1 ?></span>
                  <span class="top-back">
                    <span><?php echo $hour_1 ?></span>
                  </span>
                  <span class="bottom"><?php echo $hour_1 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $hour_1 ?></span>
                  </span>
                </div>

                <div class="figure hours hours-2">
                  <span class="top"><?php echo $hour_2 ?></span>
                  <span class="top-back">
                    <span><?php echo $hour_2 ?></span>
                  </span>
                  <span class="bottom"><?php echo $hour_2 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $hour_2 ?></span>
                  </span>
                </div>
              </div>

              <div class="bloc-time min" data-init-value="<?php echo $minutes_remaining ?>">
                <span class="count-title">Minutes</span>

                <div class="figure min min-1">
                  <span class="top"><?php echo $minute_1 ?></span>
                  <span class="top-back">
                    <span><?php echo $minute_1 ?></span>
                  </span>
                  <span class="bottom"><?php echo $minute_1 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $minute_1 ?></span>
                  </span>
                </div>

                <div class="figure min min-2">
                 <span class="top"><?php echo $minute_2 ?></span>
                  <span class="top-back">
                    <span><?php echo $minute_2 ?></span>
                  </span>
                  <span class="bottom"><?php echo $minute_2 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $minute_2 ?></span>
                  </span>
                </div>
              </div>

              <div class="bloc-time sec" data-init-value="<?php echo $seconds_remaining ?>">
                <span class="count-title">Seconds</span>

                  <div class="figure sec sec-1">
                  <span class="top"><?php echo $second_1 ?></span>
                  <span class="top-back">
                    <span><?php echo $second_1 ?></span>
                  </span>
                  <span class="bottom"><?php echo $second_1 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $second_1 ?></span>
                  </span>
                </div>

                <div class="figure sec sec-2">
                  <span class="top"><?php echo $second_2 ?></span>
                  <span class="top-back">
                    <span><?php echo $second_2 ?></span>
                  </span>
                  <span class="bottom"><?php echo $second_2 ?></span>
                  <span class="bottom-back">
                    <span><?php echo $second_2 ?></span>
                  </span>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

            <div id="fh5co-blog-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3><a href="index.php?r=about/news" style="color:inherit">LATEST NEWS</a></h3>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                   <?php $count=0; foreach($news as $item) {
                    $count++;
                    if($count%3==1 && $count!=1)
                    {
                      ?> </div> <div class="row" > <?php } ?>
                    <?php $string = strip_tags($item['msg']);
                      if (strlen($string) > 100) {
                        $stringCut = substr($string, 0, 100);
                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                      } ?>
                    <div class="col-md-4 col-md-4" >
                       <!-- style="height:150px; overflow:hidden" -->
                        <div class="fh5co-blog animate-box">
                          <a href="index.php?r=about/shownews&id=<?php echo $item['id']; ?>" style="color:inherit"><?php echo "<h3 style=\"font-size:18px;margin-bottom:10px\">".$item['title']."</h3>"; ?> </a>
                          <?php echo "<p style=\"font-size:16px;color:inherit;margin-bottom:5px;display:inline;\">".date("d/m/y",strtotime($item['date']));
      if(strtotime($item['date'])<strtotime(date("m/d/y")))
      echo 	"</p><span style=\"font-size:20px;display:inline;color:green\">"."     &#10004</span>";?>
                          <?php echo "<p style=\"font-size:15px;margin-bottom:10px\">".$string.'</p>'; ?>
                          <a href="index.php?r=about/shownews&id=<?php echo $item['id']; ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
            </div>
            <div class="fh5co-hero" style="height:400px">
            <div class="fh5co-overlay" style = "background:url(images/coverpics/download.jpg) no-repeat center center fixed; background-size:cover;height:100%">
            </div>
          </div>

        <div id="fh5co-blog-section">
              <div class="container" style="height:80%">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3 class="text-center top-space" style="margin-top:30px;"><a href="index.php?r=events/calendar" style="color:inherit">Upcoming Events </a></h3>
                  </div>
                </div>
              </div>


              <div class="container">
                <div class="row text-center">
                   <?php $count=0; foreach($event as $item) { $day = date("d", strtotime($item['date']));
                     $month = date("M", strtotime($item['date']));
                     $count++; if($count%3==1 && $count!=1){?> </div> <div class="row text-center" > <?php } ?>
                    <div class="col-md-4 col-md-4" >
                        <div class="fh5co-blog animate-box">
                           <h3 style="font-size:45px;color:#FCC72C;margin-bottom:5px"><?php echo $day; ?></h3>
                           <h4><?php echo $month; ?></h4>
                          <?php echo "<h3 style =\"text-align:center;font-size:18px;display:inline;margin-bottom:10px;\"><b>".$item['title']."</b></h3>"; ?>
                          <?php if(strtotime($item['date'])<strtotime(date("m/d/y")))
                          echo 	"<span style=\"font-size:20px;display:inline;color:green\">"."     &#10004</span>";?>
                          <h4 style="font-size:16px;line-height:1.7;margin-bottom:10px;">
                          <?php echo "<b>Time: </b>". $item['time']; ?><br></h4>
                            <p id="event" style ="font-size:15px;"><?php echo $item['descr']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
            </div>

              <div id="fh5co-content-section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                      <h3>From the General Secretary's Desk</h3>
                    </div>
                  </div>
                </div>
                <br>
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="fh5co-testimonial text-center animate-box">
                        <figure>
                          <img src="images/council/gsec.jpg" alt="user">
                        </figure>
                        <blockquote>
        								<p align="left">"What does Sports actually stand for in IIT Bombay? This can be summarized in just 4 words – it's learning, recreation, fitness, and most importantly, interaction. Along with learning new skills and taking part in numerous activities, sports inculcate within you a sense of camaraderie and a sense of unity.</p>

                        <p align="left">Do you know what my favourite part of the game is? It’s the opportunity to play. Talking about opportunities, the IITB gymkhana is a home to a wide range of sports, both indoor and outdoor. IIT Bombay provides a plethora of sports activities that include all major team sports as well as individual sports. With great pride, I can say that the Gymkhana is one of institute’s greatest assets.</p>

                        <p align="left">The facilities provided to the students match international standards and are one of the best in the country, and the students who have been associated with them for a long time grow a strange connection to it, even after they are no longer students here"</p>
        							</blockquote>
        							<span>Sahil Dhingra, General Secretary, IITB Sports</span>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
            <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
</body>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
