<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Certificate Form';

$this->registerJs($this->render('script.php', [
	'sample_url' => Url::toRoute('certificate/sample'),
	'generate_url' => Url::toRoute('certificate/generate')
]));
?>

<div class="text-center">

	<div class="row">
		<?=
			Html::img($template, ['style' => 'height: 450px; margin: 15px;']);
		?>
	</div>

	<?php
		$form = ActiveForm::begin([
			'method' => 'post',
			'action' => ['certificate/generate'],
			'id' => 'csv_input',
			'options' => ['enctype' => 'multipart/form-data'],
		]);
		//$lambda = function(){	return $this->getInputId();	};
		$field['csv'] = $form->field(
	    	$model,
	    	'csv_file',
	    	[
	    		'labelOptions' => [
		    		'label' => 'Upload CSV File',
		    		'class' => ' col-md-4 col-md-offset-4 text-center animate-box fadeInUp animated',
		    		'style' => 'visibility: hidden'
		    		],
	    	]
    	);
		$field['template'] = $form->field($model, 'template');
    	$field['template']->template = "{input}";
	?>

    <?php
    	echo $field['csv']->fileinput([
    		'class' => 'btn col-md-6 col-md-offset-3',
    		'style' => 'display: block; margin: auto; max-width: 350px; text-align: center;'
    	]);
    	echo "<div class='row'>".
    		"<div class='btn col-md-2 col-md-offset-5' id='sample' style='display: none'>Show sample</div></div>";
    	echo $field['template']->input('hidden', ['value' => $template]);
    ?>

    <div class="row" style="">
    	<button class="btn btn-primary animate-box fadeInUp animated">Submit</button>
    </div>
	<?php ActiveForm::end() ?>
</div>