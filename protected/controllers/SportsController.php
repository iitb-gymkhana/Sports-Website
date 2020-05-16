<?php

class SportsController extends Controller {

	public $secretaries;
	public $captains;
	public $halloffame;
	public $facilities;

	public function getPeople()
	{
		$connection = Yii::app()->db;
		$this->secretaries = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "secy"')->queryAll();
		$this->captains = $connection->createCommand()->SELECT('*')->FROM('captain')->queryAll();
	}

	public function getHalloffame()
	{
		$connection = Yii::app()->db;
		$this->halloffame = $connection->createCommand()->SELECT('*')->FROM('awards')->queryAll();
	}

	public function actionPeople()
	{
		$this->getPeople();
		$this->render('people');
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
		$this->getHalloffame();
		$this->render('halloffame');
	}

	public function actionGallery()
	{
		$this->render('gallery');
	}


	public function actionAquatics()
	{
		$this->getPeople();
		$this->render('aquatics');
	}

	public function actionAthletics()
	{
		$this->getPeople();
		$this->render('athletics');
	}

	public function actionBadminton()
	{
		$this->getPeople();
		$this->render('badminton');
	}

	public function actionBasketball()
	{
		$this->getPeople();
		$this->render('basketball');
	}

	public function actionBoardgames()
	{
		$this->getPeople();
		$this->render('boardgames');
	}

	public function actionCricket()
	{
		$this->getPeople();
		$this->render('cricket');
	}

	public function actionFootball()
	{
		$this->getPeople();
		$this->render('football');
	}

	public function actionHockey()
	{
		$this->getPeople();
		$this->render('hockey');
	}

	public function actionIndian()
	{
		$this->getPeople();
		$this->render('indian');
	}

	public function actionTennis()
	{
		$this->getPeople();
		$this->render('tennis');
	}

	public function actionSquash()
	{
		$this->getPeople();
		$this->render('squash');
	}

	public function actionTt()
	{
		$this->getPeople();
		$this->render('tt');
	}

	public function actionVolleyball()
	{
		$this->getPeople();
		$this->render('volleyball');
	}

	public function actionWeightlifting()
	{
		$this->getPeople();
		$this->render('weightlifting');
	}

}