<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle="Women's Registrations (IITB Students) - Athletics Gala - ". Yii::app()->name;
?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=athletics">Athletics</a></li>
			<li class="active">Athletics Gala</a></li>
			<li class="active">Women's Open and Under 18 Category Registrations (IITB Students)</a></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Women's Open and Under 18 Category Registrations (IITB Students)</h1>
				</header>


			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" id="athletics" action="index.php?r=tournament/submit3">
								<div class="top-margin">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Mobile Number <span class="text-danger">*</span></label>
									<input type="number" min="1000000000" max="9999999999" name="phone" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email ID <span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="top-margin">
									<label>College/Club <span class="text-danger">*</span></label>
									<input type="text" name="college" value="IIT Bombay" class="form-control" readonly>
								</div>
								<div class="top-margin">
									<label>Category <span class="text-danger">*</span></label>
									<input type="radio" name="category" value="Women's Open Category" class="form-control">Open<br>
									<input type="radio" name="category" value="Women's Under 18 Category" class="form-control">Under 18
								</div>

								<div class="top-margin">
									<label>Events <span class="text-danger">*</span></label>
									<input type="checkbox" name="run100" value="1" class="form-control"> 100m
									<input type="checkbox" name="run200" value="1" class="form-control"> 200m
									<input type="checkbox" name="run400" value="1" class="form-control"> 400m
									<input type="checkbox" name="run800" value="1" class="form-control"> 800m
									<input type="checkbox" name="run1500" value="1" class="form-control"> 1500m
									<input type="checkbox" name="hurdles110" value="1" class="form-control"> 100m Hurdles
									<input type="checkbox" name="longjump" value="1" class="form-control"> Long Jump
									<input type="checkbox" name="highjump" value="1" class="form-control"> High Jump
									<input type="checkbox" name="javelin" value="1" class="form-control"> Javelin Throw
									<input type="checkbox" name="shotput" value="1" class="form-control"> Shotput
									<input type="checkbox" name="discus" value="1" class="form-control"> Discus Throw
									<div class="form-group">
									 	<input id="relay100" name="relay100" type="checkbox" value="1" class="form-control">4x100m Relay
									</div>
									<div id="delivery1" style="display:none;">
									  <div class="form-group">
									    <input type="text" name="relay100_2" placeholder="Player 2" class="form-control">
										<input type="text" name="relay100_3" placeholder="Player 3" class="form-control">
										<input type="text" name="relay100_4" placeholder="Player 4" class="form-control">
									  </div>
									</div>								
									<div class="form-group2">
									 	<input id="relay400" name="relay400" type="checkbox" value="1" class="form-control">4x400m Relay
									</div>
									<div id="delivery2" style="display:none;">
									  <div class="form-group2">
									    <input type="text" name="relay400_2" placeholder="Player 2" class="form-control">
										<input type="text" name="relay400_3" placeholder="Player 3" class="form-control">
										<input type="text" name="relay400_4" placeholder="Player 4" class="form-control">
									  </div>
									</div>	
								</div>
									<input type="hidden" name="gender" value="f">
							
								<hr>
								


								<div class="row">
									
									<div class="col-lg-12 text-right">
										<button class="btn btn-action" type="submit" onClick="return confirm('Do you really want to submit the form?');">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</article>
		</div>
	</div>





<script>

var checkbox = document.getElementById('relay100');
var delivery_div = document.getElementById('delivery1');
var showHiddenDiv = function(){
   if(checkbox.checked) {
     delivery_div.style['display'] = 'block';
   } else {
     delivery_div.style['display'] = 'none';
   } 
}
checkbox.onclick = showHiddenDiv;
showHiddenDiv();
</script>

<script>

var checkbox2 = document.getElementById('relay400');
var delivery_div2 = document.getElementById('delivery2');
var showHiddenDiv2 = function(){
   if(checkbox2.checked) {
     delivery_div2.style['display'] = 'block';
   } else {
     delivery_div2.style['display'] = 'none';
   } 
}
checkbox2.onclick = showHiddenDiv2;
showHiddenDiv2();
</script>