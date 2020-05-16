<?php

class RubikController extends Controller
{
	public $halloffame;
	public $secretaries;
	public $captains;
	public $people;

	public function actionContact()
	{
		$connection = Yii::app()->db;
		$this->secretaries = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "secy"')->queryAll();
		$this->captains = $connection->createCommand()->SELECT('*')->FROM('captain')->queryAll();

		$this->render('contact');
	}

	public function actionTeam()
	{
		$connection = Yii::app()->db;

		if(!isset($_GET["sport"]))
			{ echo "Please Select a Sport";
		}

		else {
		$check=$_GET["sport"];
			$people = $connection->createCommand()->SELECT('Name,RollNumber,Team')->FROM('profile')->WHERE("Team LIKE '$check'")->ORDER("Name ASC")->queryAll();

		$this->render('team',array(
			'people'=>$people,
			));	
		}
	}

	public function actionHallofFame()
	{
		$connection = Yii::app()->db;
		$this->halloffame = $connection->createCommand()->SELECT('*')->FROM('awards')->queryAll();

		$this->render('halloffame');
	}

	public function actionGallery()
	{
		$this->render('gallery');
	}
	public function actions()
	{
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			return array(
				'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
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