<?php
$this->pageTitle="Gallery - ". Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox2.css"/>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h2>GALLERY</h2>
        </div>
      </div>
    </div>
    <div class="container animate-box">
            <div class="row">
    <div class="col-md-4 gallery stackeffect council">
                <figure>
            <a href="images/gallery/basketball/GC2016/0.JPG" data-lightbox="basketball_gc"><img src="images/gallery/basketball/GC2016/0.JPG"></a>
                        <br><h4 align="center">Basketball GC</h4>
                    </figure>
        </div>

        <div class="col-md-4 gallery stackeffect council">
                <figure>
            <a href="images/gallery/boardgames/Boys_Chess_GC/1.JPG" data-lightbox="bchess_gc"><img src="images/gallery//boardgames/Boys_Chess_GC/1.JPG"></a>
                        <br><h4 align="center">Boys Chess GC</h4>
                    </figure>
        </div>

        <div class="col-md-4 gallery stackeffect council">
                <figure>
            <a href="images/gallery//boardgames/Girls_Chess_GC/1.JPG" data-lightbox="gchess_gc"><img src="images/gallery//boardgames/Girls_Chess_GC/1.JPG"></a>
                        <br><h4 align="center">Girls Chess GC</h4>
                    </figure>
        </div>

        </div>
        </div>

		<div class="container animate-box">
			<div class="row">
      <div class="col-md-4 gallery stackeffect council">
				<figure>
            <a href="images/gallery/badminton/gc/1.jpg" data-lightbox="badminton_gc"><img src="images/gallery/badminton/gc/1.jpg"></a>
						<br><h4 align="center">Badminton GC</h4>
					</figure>
        </div>
				<div class="col-md-4 gallery stackeffect council">

            <a href="images/gallery/aquatics/gc/1.jpg" data-lightbox="swimming_gc"><img src="images/gallery/aquatics/gc/1.jpg"></a>
						<br><h4 align="center">Swimming GC</h4>
        </div>
        <div class="col-md-4 gallery stackeffect council">

            <a href="images/gallery/boardgames/PoolWorkshop/5.jpg" data-lightbox="Pool"><img src="images/gallery/boardgames/PoolWorkshop/5.jpg"></a>
						<br><h4 align="center">Pool Workshop</h4>
        </div>
		</div>
		<div class="row">
        <div class="col-md-4 gallery stackeffect council">

            <a href="images/gallery/boardgames/RCWorkshop/1.jpg" data-lightbox="RC"><img src="images/gallery/boardgames/RCWorkshop/1.jpg"></a>
						  <br><h4 align="center">Rubik's Cube Workshop</h4>
        </div>
				<div class="col-md-4 gallery stackeffect council">

            <a href="images/gallery/ugorientation/1.jpg" data-lightbox="ugo"><img src="images/gallery/ugorientation/1.jpg"></a>
						<br><h4 align="center">UG Orientation</h4>
        </div>
        <div class="col-md-4 gallery stackeffect council">
            
            <a href="images/gallery/boardgames/FoosballOpen/12.jpg" data-lightbox="FoosballOpen"><img src="images/gallery/boardgames/FoosballOpen/12.jpg"></a>
        <br><h4 align="center">Foosball Open</h4>
		</div>
		</div>
		<div class="row">
        <div class="col-md-4 gallery stackeffect council">
            
            <a href="images/gallery/darkknight/ICO/1.jpg" data-lightbox="ICO"><img src="images/gallery/darkknight/ICO/1.jpg"></a>
			<br><h4 align="center">Institute Chess Open</h4>
        </div>

        <div class="col-md-4 gallery stackeffect council">
        
            <a href="images/gallery/tennis/ssos/12.JPG" data-lightbox="tssos"><img src="images/gallery/tennis/ssos/12.JPG"></a>
			<br><h4 align="center">Tennis SSoS</h4>
        </div>

		<div class="col-md-4 gallery stackeffect council">
       
            <a href="images/gallery/tt/12.jpg" data-lightbox="ttssos"><img src="images/gallery/tt/12.jpg"></a>
			 <br><h4 align="center">Table Tennis SSoS</h4>
        </div>
		</div>
		</div>


    <div class="hide">

<?php for($foosball = 2; $foosball<16;$foosball++){?>
                 <a href="images/gallery/boardgames/Boys_Chess_GC/<?php echo $foosball; ?>.JPG" data-lightbox="bchess_gc"></a>
         <?php
         }
         ?>

         <?php for($foosball = 2; $foosball<20;$foosball++){?>
                 <a href="images/gallery/boardgames/Girls_Chess_GC/<?php echo $foosball; ?>.JPG" data-lightbox="gchess_gc"></a>
         <?php
         }
         ?>

        <?php for($foosball = 1; $foosball<12;$foosball++){?>
                 <a href="images/gallery/basketball/GC2016/<?php echo $foosball; ?>.JPG" data-lightbox="basketball_gc"></a>
         <?php
         }
         ?>
        <?php for($foosball = 2; $foosball<36;$foosball++){?>
                 <a href="images/gallery/badminton/gc/<?php echo $foosball; ?>.jpg" data-lightbox="badminton_gc"></a>
         <?php
         }
         ?>
			<?php for($foosball = 2; $foosball<12;$foosball++){?>
				 <a href="images/gallery/aquatics/gc/<?php echo $foosball; ?>.jpg" data-lightbox="swimming_gc"></a>
		 <?php
		 }
		 ?>
         <?php for($foosball = 1; $foosball<12;$foosball++){?>
            <a href="images/gallery/boardgames/FoosballOpen/<?php echo $foosball; ?>.jpg" data-lightbox="FoosballOpen"></a>
        <?php
        }
        ?>
        <?php for($ico = 2; $ico<7;$ico++){?>
            <a href="images/gallery/darkknight/ICO/<?php echo $ico; ?>.jpg" data-lightbox="ICO"></a>
        <?php
        }
        ?>
        <?php for($ico = 2; $ico<8;$ico++){?>
            <a href="images/gallery/boardgames/RCWorkshop/<?php echo $ico; ?>.jpg" data-lightbox="RC"></a>
        <?php
        }
        ?>
        <?php for($ico = 1; $ico<8;$ico++){?>
            <a href="images/gallery/boardgames/PoolWorkshop/<?php echo $ico; ?>.jpg" data-lightbox="Pool"></a>
        <?php
        }
        ?>

          <?php for($ico = 1; $ico<12;$ico++){?>
            <a href="images/gallery/tennis/ssos/<?php echo $ico; ?>.JPG" data-lightbox="tssos"></a>
        <?php
        }
        ?>
		<?php for($ico = 3; $ico<12;$ico++){?>
            <a href="images/gallery/tt/<?php echo $ico; ?>.jpg" data-lightbox="ttssos"></a>
        <?php
        }
        ?>
				<?php for($ico = 2; $ico<12;$ico++){?>
		            <a href="images/gallery/ugorientation/<?php echo $ico; ?>.jpg" data-lightbox="ugo"></a>
		        <?php
		        }
		        ?>

    	<?php $x=2;
    	while($x<=86)
    	{ ?>
    		<a href="images/gallery/Carnival/<?php echo $x; ?>.jpeg" data-lightbox="carnival"></a>
    	<?php $x++; } ?>

    	<?php $x=2;
    	while($x<=111)
    	{ ?>
    		<a href="images/gallery/Photo Booth/<?php echo $x; ?>.jpeg" data-lightbox="photobooth"></a>
    	<?php $x++; } ?>

    	<a href="images/gallery/boxing/1.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/3.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/4.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/5.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/6.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/7.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/8.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/9.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/10.JPG" data-lightbox="boxing"></a>


        <a href="images/gallery/bmc/2.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/3.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/1.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/5.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/6.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/7.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/8.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/9.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/10.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/11.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/12.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/13.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/14.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/15.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/16.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/17.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/18.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/19.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/20.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/21.JPG" data-lightbox="bmc"></a>


        <a href="images/gallery/spardha/1.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/2.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/3.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/4.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/5.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/6.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/7.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/8.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/9.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/10.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/11.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/12.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/13.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/14.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/15.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/16.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/17.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/18.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/19.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/20.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/21.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/22.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/23.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/25.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/26.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/27.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/28.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/29.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/30.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/31.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/32.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/33.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/34.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/35.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/36.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/37.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/38.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/39.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/40.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/41.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/42.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/43.JPG" data-lightbox="spardha"></a>


        <a href="images/gallery/lohgad/1.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/2.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/3.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/4.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/5.jpg" data-lightbox="lohgad"></a>
    </div>
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>
