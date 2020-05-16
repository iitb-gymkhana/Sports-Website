<?php
/* @var $this SidebarleftController */

$this->pageTitle="Court Booking System - ". Yii::app()->name;
$date=date("d-m-Y");
?>
	
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Misc</li>
			<li class="active">Court Booking System</li>
		</ol>

		<div class="row">
			
			<!-- Sidebar -->
			<aside class="col-md-2 sidebar sidebar-left">		
			   <div class="panel-group" id="accordion">
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#badminton">                  
			                   Badminton</a>
			               </h4>
			           </div>
			       </div>
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#khokho">
			                   Kho Kho</a>
			               </h4>
			           </div>
			       </div>
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#squash">
			                   Squash</a>
			               </h4>
			           </div>
			       </div>
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#skating">
			                   Skating</a>
			               </h4>
			           </div>			 
			       </div>
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#tennis">
			                   Lawn Tennis</a>
			               </h4>
			           </div>
			       </div> 
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#volleyballout">
			                   Volleyball - Outdoor Courts</a>
			               </h4>
			           </div>
			       </div> 
			       <div class="panel panel-default">
			           <div class="panel-heading">
			               <h4 class="panel-title">
			                   <a href="#volleyballin">
			                   Volleyball - Indoor Courts</a>
			               </h4>
			           </div>
			       </div> 
			   </div>			
			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Court Availability for <?php echo $date; ?></h1>
				</header>



    
	<h3 id="badminton">Badminton<?php $date=date("Y-m-d");?></h3>    <!--Badminton -->
	<div class="jumbotron" >
		<div class="container">

			<div class="row">
			<?php $count=1; foreach($badminton as $slot){ while($count<=$slot['courts']) { ?>
				<div class="col-md-2 col-sm-4">
					<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
					<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																				else if(time() <= strtotime($time)) { $done='n';?>
					<div class="h-body">
						<div class="col-xs-6">
							<p><?php echo $time; ?></p>
						</div>
						<div class="col-xs-6">
						<?php foreach($booked as $check) { 
							if($check['sport']=="Badminton"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
								<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
							<?php } } 
								if($done=='n') { ?>
									<form method="post" action="index.php?r=misc/submit2">
									<input name="sport" type="hidden" value="Badminton">
									<input name="court" type="hidden" value="<?php echo $count; ?>">
									<input name="time" type="hidden" value="<?php echo $time; ?>">
									<input name="date" type="hidden" value="<?php echo $date; ?>">
									<p><input type="submit" value="Available" class="submitlink" 
									onClick="return confirm('Are you sure you want to book this court?');"></p>
									</form>
							<?php }  ?>
						</div>
					</div>
					<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
				</div>
				<?php $count=$count+1;} } ?>
				 <!-- /row  -->
		
		</div>
	</div>
	</div>



	<h3 id="khokho">Kho Kho<?php $date=date("Y-m-d");?></h3>	 <!--Kho Kho -->
	<div class="jumbotron" >
		<div class="container">

			<div class="row">
			<?php $count=1; foreach($khokho as $slot){ while($count<=$slot['courts']) { ?>
				<div class="col-md-2 col-sm-4">
					<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
					<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																				else if(time() <= strtotime($time)) { $done='n';?>
					<div class="h-body">
						<div class="col-xs-6">
							<p><?php echo $time; ?></p>
						</div>
						<div class="col-xs-6">
						<?php foreach($booked as $check) { 
							if($check['sport']=="Kho Kho"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
								<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
							<?php } } 
								if($done=='n') { ?>
									<form method="post" action="index.php?r=misc/submit2">
									<input name="sport" type="hidden" value="Kho Kho">
									<input name="court" type="hidden" value="<?php echo $count; ?>">
									<input name="time" type="hidden" value="<?php echo $time; ?>">
									<input name="date" type="hidden" value="<?php echo $date; ?>">
									<p><input type="submit" value="Available" class="submitlink" 
									onClick="return confirm('Are you sure you want to book this court?');"></p>
									</form>
							<?php }  ?>
						</div>
					</div>
					<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
				</div>
				<?php $count=$count+1;} } ?>
				 <!-- /row  -->
		
		</div>
	</div>
	</div>



<!--Squash-->
<h3 id="squash">Squash<?php $date=date("Y-m-d");?></h3>   
		<div class="jumbotron" >
			<div class="container">
	
				<div class="row">
					<?php  foreach($squash as $slot){$count=1; if($slot['id']==1) { ?>
						<h5 class="thin text-left">Morning</h5>
						<?php while($count<=$slot['courts']) {?>
						<div class="col-md-2 col-sm-4">
							<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
							<?php $time=$slot['start']; while($time < $slot['stop']) { if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																						else if(time() <= strtotime($time)) { $done='n';?>
							<div class="h-body">
								<div class="col-xs-6">
									<p><?php echo $time; ?></p>
								</div>
								<div class="col-xs-6">
								<?php foreach($booked as $check) { 
									if($check['sport']=="Squash"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
										<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
									<?php } } 
										if($done=='n') { ?>
											<form method="post" action="index.php?r=misc/submit2">
											<input name="sport" type="hidden" value="Squash">
											<input name="court" type="hidden" value="<?php echo $count; ?>">
											<input name="time" type="hidden" value="<?php echo $time; ?>">
											<input name="date" type="hidden" value="<?php echo $date; ?>">
											<p><input type="submit" value="Available" class="submitlink" 
											onClick="return confirm('Are you sure you want to book this court?');"></p>
											</form>
									<?php }  ?>
								</div>
							</div>
							<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
						</div>
						<?php $count=$count+1;}  ?>
						 <!-- /row  -->
					
						</div>
					
					 <?php } 

					else if($slot['id']==2) { ?>
						<div class="row">
						<h5 class="thin text-left">Evening</h5>
						<?php while($count<=$slot['courts']) {?>
						<div class="col-md-2 col-sm-4">
							<?php $time=$slot['start']; while($time < $slot['stop']) { if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																						else if(time() <= strtotime($time)) { $done='n';?>
							<div class="h-body">
								<div class="col-xs-6">
									<p><?php echo $time; ?></p>
								</div>
								<div class="col-xs-6">
								<?php foreach($booked as $check) { 
									if($check['sport']=="Squash"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
										<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
									<?php } } 
										if($done=='n') { ?>
											<form method="post" action="index.php?r=misc/submit2">
											<input name="sport" type="hidden" value="Squash">
											<input name="court" type="hidden" value="<?php echo $count; ?>">
											<input name="time" type="hidden" value="<?php echo $time; ?>">
											<input name="date" type="hidden" value="<?php echo $date; ?>">
											<p><input type="submit" value="Available" class="submitlink" 
											onClick="return confirm('Are you sure you want to book this court?');"></p>
											</form>
									<?php }  ?>
								</div>
							</div>
							<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" ));  }?>
						</div>
						<?php $count=$count+1;}  ?>
						 <!-- /row  -->
					
						</div>
					</div>
				</div>
					 <?php } }?>




		<h3 id="skating">Skating<?php $date=date("Y-m-d");?></h3>    <!--Skating -->
	<div class="jumbotron" >
		<div class="container">

			<div class="row">
			<?php $count=1; foreach($skating as $slot){ while($count<=$slot['courts']) {?>
				<div class="col-md-2 col-sm-4">
					<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
					<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																				else if(time() <= strtotime($time)) { $done='n';?>
					<div class="h-body">
						<div class="col-xs-6">
							<p><?php echo $time; ?></p>
						</div>
						<div class="col-xs-6">
						<?php foreach($booked as $check) { 
							if($check['sport']=="Skating"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
								<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
							<?php } } 
								if($done=='n') { ?>
									<form method="post" action="index.php?r=misc/submit2">
									<input name="sport" type="hidden" value="Skating">
									<input name="court" type="hidden" value="<?php echo $count; ?>">
									<input name="time" type="hidden" value="<?php echo $time; ?>">
									<input name="date" type="hidden" value="<?php echo $date; ?>">
									<p><input type="submit" value="Available" class="submitlink" 
									onClick="return confirm('Are you sure you want to book this court?');"></p>
									</form>
							<?php }  ?>
						</div>
					</div>
					<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
				</div>
				<?php $count=$count+1;} } ?>
				 <!-- /row  -->
		
		</div>
	</div>
	</div>



		<h3 id="tennis">Lawn Tennis<?php $date=date("Y-m-d");?></h3>    <!--Lawn Tennis -->
	<div class="jumbotron" >
		<div class="container">

			<div class="row">
			<?php $count=1; foreach($tennis as $slot){ while($count<=$slot['courts']) {?>
				<div class="col-md-2 col-sm-4">
					<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
					<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																				else if(time() <= strtotime($time)) { $done='n';?>
					<div class="h-body">
						<div class="col-xs-6">
							<p><?php echo $time; ?></p>
						</div>
						<div class="col-xs-6">
						<?php foreach($booked as $check) { 
							if($check['sport']=="Lawn Tennis"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
								<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
							<?php } } 
								if($done=='n') { ?>
									<form method="post" action="index.php?r=misc/submit2">
									<input name="sport" type="hidden" value="Lawn Tennis">
									<input name="court" type="hidden" value="<?php echo $count; ?>">
									<input name="time" type="hidden" value="<?php echo $time; ?>">
									<input name="date" type="hidden" value="<?php echo $date; ?>">
									<p><input type="submit" value="Available" class="submitlink" 
									onClick="return confirm('Are you sure you want to book this court?');"></p>
									</form>
							<?php }  ?>
						</div>
					</div>
					<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
				</div>
				<?php $count=$count+1;} } ?>
				 <!-- /row  -->
		
		</div>
	</div>
	</div>


<!--Table Tennis 
	<?php  foreach($tt as $slot){$count=1; if($slot['id']==1) { ?>
		<h3 id="ttold">Old Table Tennis Hall<?php $date=date("Y-m-d");?></h3>   
		<div class="jumbotron" >
			<div class="container">
	
				<div class="row">
		<?php while($count<=$slot['courts']) {?>
		<div class="col-md-2 col-sm-4">
			<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
			<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																		else if(time() <= strtotime($time)) { $done='n';?>
			<div class="h-body">
				<div class="col-xs-6">
					<p><?php echo $time; ?></p>
				</div>
				<div class="col-xs-6">
				<?php foreach($booked as $check) { 
					if($check['sport']=="Old Table Tennis Hall"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
						<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
					<?php } } 
						if($done=='n') { ?>
							<form method="post" action="index.php?r=misc/submit2">
							<input name="sport" type="hidden" value="Old Table Tennis Hall">
							<input name="court" type="hidden" value="<?php echo $count; ?>">
							<input name="time" type="hidden" value="<?php echo $time; ?>">
							<input name="date" type="hidden" value="<?php echo $date; ?>">
							<p><input type="submit" value="Available" class="submitlink" 
							onClick="return confirm('Are you sure you want to book this court?');"></p>
							</form>
					<?php }  ?>
				</div>
			</div>
			<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
		</div>
		<?php $count=$count+1;}  ?> -->
		 <!-- /row  -->
	<!--
		</div>
	</div>
	</div> <?php } 

	else if($slot['id']==2) { ?>
		<h3 id="ttnew">New Table Tennis Hall<?php $date=date("Y-m-d");?></h3>   
		<div class="jumbotron" >
			<div class="container">
	
				<div class="row">
		<?php while($count<=$slot['courts']) {?>
		<div class="col-md-2 col-sm-4">
			<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
			<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>=strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																		else if(time() <= strtotime($time)) { $done='n';?>
			<div class="h-body">
				<div class="col-xs-6">
					<p><?php echo $time; ?></p>
				</div>
				<div class="col-xs-6">
				<?php foreach($booked as $check) { 
					if($check['sport']=="New Table Tennis Hall"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
						<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
					<?php } } 
						if($done=='n') { ?>
							<form method="post" action="index.php?r=misc/submit2">
							<input name="sport" type="hidden" value="New Table Tennis Hall">
							<input name="court" type="hidden" value="<?php echo $count; ?>">
							<input name="time" type="hidden" value="<?php echo $time; ?>">
							<input name="date" type="hidden" value="<?php echo $date; ?>">
							<p><input type="submit" value="Available" class="submitlink" 
							onClick="return confirm('Are you sure you want to book this court?');"></p>
							</form>
					<?php }  ?>
				</div>
			</div>
			<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
		</div>
		<?php $count=$count+1;}  ?> -->
		 <!-- /row  -->
	<!--
		</div>
	</div>
	</div> <?php } }?>
-->


<!--Volleyball -->
	<?php  foreach($volleyball as $slot){$count=1; if($slot['id']==1) { ?>
		<h3 id="volleyballout">Volleyball - Outdoor Courts<?php $date=date("Y-m-d");?></h3>   
		<div class="jumbotron" >
			<div class="container">
	
				<div class="row">
		<?php while($count<=$slot['courts']) {?>
		<div class="col-md-2 col-sm-4">
			<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
			<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																		else if(time() <= strtotime($time)) { $done='n';?>
			<div class="h-body">
				<div class="col-xs-6">
					<p><?php echo $time; ?></p>
				</div>
				<div class="col-xs-6">
				<?php foreach($booked as $check) { 
					if($check['sport']=="Volleyball - Outdoor"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
						<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
					<?php } } 
						if($done=='n') { ?>
							<form method="post" action="index.php?r=misc/submit2">
							<input name="sport" type="hidden" value="Volleyball - Outdoor">
							<input name="court" type="hidden" value="<?php echo $count; ?>">
							<input name="time" type="hidden" value="<?php echo $time; ?>">
							<input name="date" type="hidden" value="<?php echo $date; ?>">
							<p><input type="submit" value="Available" class="submitlink" 
							onClick="return confirm('Are you sure you want to book this court?');"></p>
							</form>
					<?php }  ?>
				</div>
			</div>
			<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
		</div>
		<?php $count=$count+1;}  ?>
		 <!-- /row  -->
	
		</div>
	</div>
	</div> <?php } 

	else if($slot['id']==2) { ?>
		<h3 id="volleyballin">Volleyball - Indoor Courts<?php $date=date("Y-m-d");?></h3>   
		<div class="jumbotron" >
			<div class="container">
	
				<div class="row">
		<?php while($count<=$slot['courts']) {?>
		<div class="col-md-2 col-sm-4">
			<h4 class="thin text-center"><?php echo "Court ". $count; ?></h4>
			<?php $time=$slot['start']; while($time < $slot['stop']){ if (time()>strtotime($slot['stop'])) { echo "<h6>Court Booking Closed for Today</h6>"; break; }
																		else 	if(time() <= strtotime($time)) { $done='n';?>
			<div class="h-body">
				<div class="col-xs-6">
					<p><?php echo $time; ?></p>
				</div>
				<div class="col-xs-6">
				<?php foreach($booked as $check) { 
					if($check['sport']=="Volleyball - Indoor"&&$time==$check['time']&&$count==$check['court']&&$check['date']==$date&&$check['booked']==1) { $done='y'; ?>
						<p style="color:red; font-weight:bold">&nbsp&nbspBooked</p>
					<?php } } 
						if($done=='n') { ?>
							<form method="post" action="index.php?r=misc/submit2">
							<input name="sport" type="hidden" value="Volleyball - Indoor">
							<input name="court" type="hidden" value="<?php echo $count; ?>">
							<input name="time" type="hidden" value="<?php echo $time; ?>">
							<input name="date" type="hidden" value="<?php echo $date; ?>">
							<p><input type="submit" value="Available" class="submitlink" 
							onClick="return confirm('Are you sure you want to book this court?');"></p>
							</form>
					<?php }  ?>
				</div>
			</div>
			<?php } $time=date( "H:i:s", strtotime( $time. "+". $slot['duration']. "minutes" )); } ?>
		</div>
		<?php $count=$count+1;}  ?>
		 <!-- /row  -->
	
		</div>
	</div>
	</div> <?php } }?>





			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
