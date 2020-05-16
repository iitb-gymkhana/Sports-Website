<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Certificate Form';
?>

<?php
$counter = 0;
$dir = new DirectoryIterator(Url::to('certificates'));
foreach ($dir as $fileinfo) {
	if ($fileinfo->getExtension() != 'jpg')
		continue;
	if($counter % 2 == 0)
		echo '<div class="row text-center" style="margin-top:15px"><div class="col-xs-2"></div>';
	echo "<div class='col-xs-4'><figure>". 
    	Html::a(
    		$this->render('image', ['path' => $fileinfo->getPathname(), 'name' => $fileinfo->getBasename('.jpg')]),
        	Url::to(['index', 'template' => $fileinfo->getPathname()])
        )."</figure></div>";
    if($counter % 2 != 0)
		echo '<div class="col-xs-2"></div></div>';
	$counter++;
	
}
?>