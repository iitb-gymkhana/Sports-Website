<?php 
	$sport="Basketball";
    $sport2="basketball";

$this->pageTitle="Gallery - ". ucfirst($sport)." - ". Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox2.css"/>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?></a></li>
			<li class="active">Gallery</li>
			<li class="active">Videos</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title"><?php echo $sport ?>	</h1>
			</header>

			<ul class="grid cs-style-6">
				<li>
					<video width="320" height="240" controls>
					  <source src="images/gallery/basketball/Videos/1.m4v" type="video/mp4">
					  Your browser does not support the video tag.
					</video><h4 style="text-align:center">Video 1</h4>
				</li>
				<li>
					<video width="320" height="240" controls>
					  <source src="images/gallery/basketball/Videos/2.m4v" type="video/mp4">
					  Your browser does not support the video tag.
					</video><h4 style="text-align:center">Video 2</h4>
				</li>
				<li>
					<video width="320" height="240" controls>
					  <source src="images/gallery/basketball/Videos/3.m4v" type="video/mp4">
					  Your browser does not support the video tag.
					</video><h4 style="text-align:center">Video 3</h4>
				</li>
				<li>
					<video width="320" height="240" controls>
					  <source src="images/gallery/basketball/Videos/4.m4v" type="video/mp4">
					  Your browser does not support the video tag.
					</video><h4 style="text-align:center">Video 4</h4>
				</li>
			</ul>
		</article>
</div> 
</div>