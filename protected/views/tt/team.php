<?php 
	$secretaries = $this->secretaries;
	$captains = $this->captains;
	$sport="Table Tennis";
	$sport2="tt";

	$this->pageTitle="Team - ". $sport." - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">People</li>
			<li class="active">Team</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->
	
		 <!-- Article main content -->
      <article class="col-md-10 maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $sport; ?> Team</h1>
        </header>

         <ul class="grid cs-style-1" style="padding: 0px 0px 10px 0px;">			

        <?php foreach ($people as $person) { 	?>
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
  </div>






<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/toucheffects.js"></script>
