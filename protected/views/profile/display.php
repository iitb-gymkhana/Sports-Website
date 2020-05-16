<?php
/* @var $this ProfileController */

$this->pageTitle="View Profile - ". Yii::app()->name;
$certificates = $this->certificates;
?>

<link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- CUSTOM STYLE CSS -->
    <!--<style type="text/css">*/
               /*.btn-social {
            color: white;
            opacity: 0.8;
        }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

        .btn-facebook {
            background-color: #3b5998;
        }

        .btn-twitter {
            background-color: #00aced;
        }

        .btn-linkedin {
            background-color: #0e76a8;
        }

        .btn-google {
            background-color: #c32f10;
        }*/
    </style>-->
    <div class="fh5co-overlay" style=" height: 80px;"></div>

    <div id="fh5co-content-section">
      <div class="container" style="margin-top:40px;">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3><?php echo $name;?></h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="fh5co-testimonial text-center animate-box">
              <figure>
                <?php if(isset($image)){ ?>
                <img src="<?php echo $image; ?>" alt="user">
                <?php
              }
              ?>
              </figure>
              <div class="row" style="margin:0">
                <div class="col-md-4">
                  <p align="center"><b>ROLL NO: </b><?php echo $rollno; ?></p>
              </div>
                <div class="col-md-4">
                  <p align="center"><b>EMAIL-ID: </b><a style="color:inherit" href="mailto:<?php echo $Email; ?>" ><?php echo $Email;?></a></p>
              </div>
              <div class="col-md-4">
                <p align="center"><b>PHONE NUMBER: </b><a style="color:inherit" href="tel:<?php echo $PhoneNumber; ?>" ><?php echo $PhoneNumber ;?></a></p>
            </div>
            </div>
            <?php if(isset($Hostel)||isset($sports)){ ?>
            <div class="row" style="margin:0">
              <div class="col-md-1"></div>
              <div class="col-md-3" style="margin-top:15px">
                <p align="center" style="font-size:15px;"><b>ROOM: </b><?php echo $hostel;?>/<?php echo $roomno;?></p>
            </div>
              <div class="col-md-8" style="margin-top:15px">
                <p align="center" style="font-size:15px;"><b>FAVOURITE SPORT(S): </b><?php echo $sports; ?></p>
            </div>
          </div>
          <?php
        }
            ?>
            <?php if($about!=''){ ?>
            <div class="row" style="margin:10px 0 0 0;">
              <h4 style="margin-bottom:0px" align="center">ABOUT</h4>
              <p style="font-size:15px;font-style:italic;text-align:center;margin-left:5px;margin-right:5px;"><?php echo $about; ?></p>
            </div>
            <?php } ?>
          <?php
          if(!(Yii::app()->user->isGuest))
          {
            if(Yii::app()->user->rollno==$rollno || Yii::app()->user->post!='user')
            {
              if (empty($certificates)): ?>
                <div class="row" style="margin:10px 0 0 0;">
                  <h4 style="margin-bottom:0px" align="center">CERTIFICATES </h4>
                  <a href="index.php?r=events/maketrialcerti&rollnum=<?php echo $rollno; ?>" target="_blank" style="text-decoration:none"><p style="font-size:15px;font-style:italic;text-align:center;margin-left:5px;margin-right:5px;">Trial Certificate</p> </a>
                </div>
             <?php else : ?>
                <div class="row" style="margin:10px 0 0 0;">
                <h4 style="margin-bottom:0px" align="center">CERTIFICATES </h4>
                <?php
                  foreach ($certificates as $key => $value) { 
                    if (substr($value['template'], 0, 4) != '1617') { ?>
                      <a href="index.php?r=events/showcerti&certiid=<?php echo $value['certi_id']; ?>" target="_blank" style="text-decoration:none"><p style="font-size:15px;font-style:italic;text-align:center;margin-left:5px;margin-right:5px;"><?php echo $value['title']; ?></p> </a>

             <?php } }?>
                </div>
             <?php 
              endif;
           }
         } ?>

           <?php 
            if($fb!=NULL||$twitter!=NULL||$gmail!=NULL){
             ?>
             <div class="row" style="margin:10px 0 0 0;">
               <h4 style="margin-bottom:0px" align="center">Connect with <?php echo $name;?></h4>
              <?php if($fb!=NULL) { ?>
               	  <a href="<?php echo $fb; ?>"  target="_blank" style="font-size:30px;color:inherit"><i class="icon-facebook-with-circle"></i></a>
                <?php }
                  ?>
              <?php if($twitter!=NULL) { ?>
                	<a href="<?php echo $twitter; ?>"  target="_blank" style="font-size:30px;color:inherit"><i class="icon-twitter-with-circle"></i></a>
                <?php }
                     ?>
              <?php if($gmail!=NULL) { ?>
                 	<a href="<?php echo $gmail; ?>"  target="_blank" style="font-size:30px;color:inherit"><i class="icon-google-with-circle"></i></a>
                <?php }
                    ?>
             </div>
             <?php
           }
           $InterIITList=explode("~",$InterIITAch);
             if($InterIITList[0]==NULL){} else {
            ?>
            <div class="row" style="max-width:100%;margin:10px 0 0 0;">
              <h4 style="margin-bottom:0" align="center">Inter IIT Achievements </h4>
              <?php foreach ($InterIITList as $InterIITItem) { if($InterIITItem!=NULL) {?>
                <p style="font-size:15px;margin:0;"><?php echo $InterIITItem; ?></p>
                <?php }} ?>
            </div>
            <?php
          }
          $GCList=explode("~",$GCAch);
            if($GCList[0]==NULL){} else {
           ?>
           <div class="row" style="max-width:100%;margin:20px 0 0 0;">
             <h4 style="margin-bottom:0" align="center">GC Achievements </h4>
             <?php foreach ($GCList as $GCItem) { if($GCItem!=NULL) {?>
               <p style="font-size:15px;margin:0;"><?php echo $GCItem; ?></p>
               <?php }} ?>
           </div>
           <?php
         }
         $OthersList=explode("~",$OthersAch);
           if($OthersList[0]==NULL){} else {
          ?>
          <div class="row" style="max-width:100%;margin:20px 0 0 0;">
            <h4 style="margin-bottom:0" align="center">Other Achievements </h4>
            <?php foreach ($OthersList as $OthersItem) { if($OthersItem!=NULL) {?>
              <p style="font-size:15px;margin:0;"><?php echo $OthersItem; ?></p>
              <?php }} ?>
          </div>
          <?php
        }

        ?>
            </div>
          </div>
        </div>
      </div><br><br>
      <?php
          if(!(Yii::app()->user->isGuest))
          {
            if(Yii::app()->user->rollno==$rollno){ ?>
            <div class="col-md-4"></div>
              <a class="btn btn-primary col-md-4" href="index.php?r=profile/putinfo">EDIT PROFILE</a>
        <?php
      }}
       ?>
    </div>



      <!-- Article main content -->
      <!-- <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $name; ?></h1>
        </header>

        <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $image;?>" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h2>Personal Information: </h2>
                        <?php if($team!=NULL) { ?>
                        <h4 style="color:red">Member of Institute <?php echo "$team"; ?> Team</h4>
                        <?php } ?>
                        <div class="row">
                        <div class="col-md-4">
                          <p><b>Roll No: </b> <?php echo $rollno; ?> </p>
                        </div>
                        <div class="col-md-4">
                          <p><b>Hostel No: </b><?php echo $hostel; ?> </p>
                        </div>
                        <div class="col-md-4">
                          <p><b>Room No: </b><?php echo $roomno; ?> </p>
                        </div>
                        <div class="col-md-8">
                          <p><b>About: </b><?php echo $about; ?> </p>
                        </div>
                        <div class="col-md-4">
                          <p><b>Phone Number: </b><?php echo $PhoneNumber; ?> </p>
                          <p><b>Email ID: </b><?php echo $Email; ?> </p>
                        </div>
                        </div>
                        <div class="row">
                        <br>
                        <div class="col-md-4">
                          <h4><b>Favourite Sports: </b></h4><p><?php echo $sports; ?> </p >
                        </div>
                        </div>
                    </div>
                    <div >
                        <?php if($fb!=NULL) { ?>
                        <a href="<?php echo $fb; ?>" target="_blank" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <?php }
                        if($gmail!=NULL) { ?>
                        <a href="<?php echo $gmail; ?>" target="_blank" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google Plus</a>
                        <?php }
                        if($twitter!=NULL) { ?>
                        <a href="<?php echo $twitter; ?>" target="_blank" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>InterIIT Achievements</h3>
                    <ol>
                      <?php $InterIITList=explode("~",$InterIITAch);
                            if($InterIITList[0]==NULL) { echo "None"; } else {?>
                      <?php foreach ($InterIITList as $InterIITItem) { if($InterIITItem!=NULL) {?>
                      <p><li><?php echo $InterIITItem; ?></li></p>
                      <?php } } }?>
                    </ol>
                    <br />
                </div>
                    <div class="form-group col-md-4">
                    <h3>GC Achievements</h3>
                        <ol>
                          <?php $GCList=explode("~",$GCAch);
                                if($GCList[0]==NULL) { echo "None"; } else {?>
                          <?php foreach ($GCList as $GCItem) { if($GCItem!=NULL) {?>
                          <p><li><?php echo $GCItem; ?></li></p>
                          <?php } } }?>
                        </ol>
                        <br/>
                    </div>
                    <div class="form-group col-md-4">
                    <h3>Other Achievements</h3>
                        <ol>
                          <?php $OthersList=explode("~",$OthersAch);
                                if($OthersList[0]==NULL) { echo "None"; } else { ?>
                          <?php foreach ($OthersList as $OthersItem) { if($OthersItem!=NULL) {?>
                          <p><li><?php echo $OthersItem; ?></li></p>
                          <?php } } }?>
                        </ol>
                    </div>
                </div>
            <!-- ROW END -->

        <!-- </section> -->
        <!-- SECTION END -->
    <!-- </div> -->
    <!-- CONATINER END -->
<!--
</article>
</div>
</div> -->
