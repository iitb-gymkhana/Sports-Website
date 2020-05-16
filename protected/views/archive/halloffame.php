<?php

$this->pageTitle="Hall of Fame - ". Yii::app()->name;

$halloffame = $this->halloffame;

foreach ($halloffame as $key => $value) {
	$awards[] = $value;
}
?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h2>HALL OF FAME</h2>
			</div>
		</div>
	</div>
	<?php
	if(!isset($awards)) {
		echo "<p>There are no awards to be displayed at this moment. We're working on it. Meanwhile checkout the previous year's <a href=\"index.php?r=archive/oldhof\">Hall of Fame</a></p>";
	}
	else { ?>

	<!--ROH-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Roll of Honour") $count++;
		if($count % 2 == 0)
			$buffer_div = "";
		else if($count % 2 == 1)
			$buffer_div = "<div class='col-md-3'></div>";

		$multiple = (int) ($count/2);
		?>

		<div class="col-md-8 col-md-offset-2 text-center animate-box">
			<h3 align="center">Roll of Honour</h3>
		</div>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Roll of Honour")
			{
				$curr++;
				if($curr % 2 == 1)	echo "<div class='row'>";
				if($curr == 2*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-6 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 2 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>


	<!--POY-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Person of the Year") $count++;
		if($count % 2 == 0)
			$buffer_div = "";
		else if($count % 2 == 1)
			$buffer_div = "<div class='col-md-3'></div>";

		$multiple = (int) ($count/2);
		?>

		<br>
		<div class="col-md-8 col-md-offset-2 text-center animate-box">
			<h3 align="center">Person of the Year</h3>
		</div>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Person of the Year")
			{
				$curr++;
				if($curr % 2 == 1)	echo "<div class='row'>";
				if($curr == 2*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-6 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 2 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

	<!--Ambrose Otieno-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Ambrose Otieno") $count++;
		if($count % 2 == 0)
			$buffer_div = "";
		else if($count % 2 == 1)
			$buffer_div = "<div class='col-md-3'></div>";

		$multiple = (int) ($count/2);
		?>

		<h3 align="center">Ambrose Otieno</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Ambrose Otieno")
			{
				$curr++;
				if($curr % 2 == 1)	echo "<div class='row'>";
				if($curr == 2*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-6 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 2 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

	<!--FOTY-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Freshman of the Year") $count++;
		if($count % 2 == 0)
			$buffer_div = "";
		else if($count % 2 == 1)
			$buffer_div = "<div class='col-md-3'></div>";

		$multiple = (int) ($count/2);
		?>

		<h3 align="center">Freshman of the Year</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Freshman of the Year")
			{
				$curr++;
				if($curr % 2 == 1)	echo "<div class='row'>";
				if($curr == 2*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-6 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 2 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>
			
	<!--Citation-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Citation") $count++;
		if($count % 3 == 0)
			$buffer_div = "";
		else if($count % 3 == 1)
			$buffer_div = "<div class='col-md-4'></div>";
		else if($count % 3 == 2)
			$buffer_div = "<div class='col-md-2'></div>";

		$multiple = (int) ($count/3);
		?>

		<h3 align="center">Citation</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Citation")
			{
				$curr++;
				if($curr % 3 == 1)	echo "<div class='row'>";
				if($curr == 3*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-4 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 3 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

	<!--Color-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Color") $count++;
		if($count % 3 == 0)
			$buffer_div = "";
		else if($count % 3 == 1)
			$buffer_div = "<div class='col-md-4'></div>";
		else if($count % 3 == 2)
			$buffer_div = "<div class='col-md-2'></div>";

		$multiple = (int) ($count/3);
		?>

		<h3 align="center">Color</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Color")
			{
				$curr++;
				if($curr % 3 == 1)	echo "<div class='row'>";
				if($curr == 3*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-4 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 3 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

	<!--PG Passing out color-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "PG Passing out Color") $count++;
		if($count % 3 == 0)
			$buffer_div = "";
		else if($count % 3 == 1)
			$buffer_div = "<div class='col-md-4'></div>";
		else if($count % 3 == 2)
			$buffer_div = "<div class='col-md-2'></div>";

		$multiple = (int) ($count/3);
		?>

		<h3 align="center">PG Passing out Color</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "PG Passing out Color")
			{
				$curr++;
				if($curr % 3 == 1)	echo "<div class='row'>";
				if($curr == 3*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-4 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 3 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

	<!--Special Mention-->
	<div class="container animate-box noms margin-top-xl margin-bottom-xl" style="margin-top: 40px; margin-bottom: 40px;">
		<?php 
		$count = 0;
		$curr = 0;
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Special Mention") $count++;
		if($count % 3 == 0)
			$buffer_div = "";
		else if($count % 3 == 1)
			$buffer_div = "<div class='col-md-4'></div>";
		else if($count % 3 == 2)
			$buffer_div = "<div class='col-md-2'></div>";

		$multiple = (int) ($count/3);
		?>

		<h3 align="center">Special Mention</h3>
		<?php
		foreach ($awards as $key => $awardee)
			if($awardee['award'] == "Special Mention")
			{
				$curr++;
				if($curr % 3 == 1)	echo "<div class='row'>";
				if($curr == 3*$multiple + 1)	echo $buffer_div;
		?>
			<div class="col-md-4 council">
				<figure>
					<img src="images/halloffame/<?php echo $awardee['image']; ?>" />
				</figure>
				<p align="center">
					<?php if(isset($awardee['fb'])) { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } else { ?>
						<a href="<?php echo $awardee['fb'];?>" target="_blank"><?php echo $awardee['name'];?></a><br>
					<?php } echo $awardee['sport']; ?>
				</p>
			</div>
		
		<?php
			if($curr == $count)	echo $buffer_div;
			if($curr % 3 == 0 || $curr == $count)	echo "</div>";
			}
		?>
	</div>

 	<?php
 	}
 	?>
</div>
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
