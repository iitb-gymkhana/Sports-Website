<?php

class QuestController extends Controller
{
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		//$sport=array("athletics","baddy","basky","cricket","fitness","footer","hockey","squash",
		//		"swimming","tennis","tt","volley",);
		//$this->render('index',array(
		//	'sport'=>$sport
		//	));
		$connection = Yii::app()->db;
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('date DESC')->LIMIT(4)->queryAll();
		$captain = $connection->createCommand()->SELECT('*')->FROM('captain')->queryAll();		
		$people = $connection->createCommand()->SELECT('*')->FROM('quest')->queryAll();
		$event = $connection->createCommand()->SELECT('*')->FROM('events')->WHERE('date >= CURDATE()')->ORDER('date ASC')->LIMIT(4)->queryAll();
		$this->render('index',array(
			'news'=> $news,
			'event'=> $event,
			'people'=> $people,
			'captain'=> $captain,
			));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}