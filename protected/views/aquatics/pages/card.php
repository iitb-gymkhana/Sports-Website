<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Making the Membership Card - Aquatics - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Info</li>
            <li class="active">Making the Membership Card</li>
		</ol>
<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Making the Membership Card</h1>
			</header>
      
      	<p>Procedure to get a Swimming Pool Card for students</p>
		<ul>
			<li>You can take a pink form from swimming pool counter or office in the evening from 5:00 PM to 8:00 PM.</li>
			<li>You would need a passport size photograph to stick on the form and one more to stick on your swimming card.</li>
			<li>After filling up the form you should get the General Physician’s signature and stamp from IIT Hospital. You would be checked for sensitivity to chlorine, skin problems, infection in ears etc.</li>
			<li>You should submit the form to Swimming Pool office, along with a passport size photograph</li>
			<li>Please wait for a day or two for processing of your form. You can collect you card from swimming pool office after two days from submitting the form.</li>
			
			<li>Extra info: Swimming Pool office is to your right after you enter the swimming pool.</li>
		</ul>
</article>
</div> 
</div>