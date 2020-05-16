<?php

class EventsController extends Controller
{
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

	public function actionEventfeed()
	{
		header('Content-Type: text/xml');

		$connection = Yii::app()->db;
		$event = $connection->createCommand()->SELECT('*')->FROM('events')->ORDER('date DESC')->queryAll();
		$this->renderPartial('eventfeed',array(
			'event'=> $event,
			));
	}
	public function actionIndex()
	{
		$this->render('index');
	}

	// public function actionGc()
	// {
	// 	$connection = Yii::app()->db;
	// 	$result = $connection->createCommand()->SELECT('*')->FROM('gc_2018')->queryAll();
	// 	$pg_boys = $connection->createCommand()->SELECT('*')->FROM('pggc_boys')->queryAll();
	// 	$pg_girls = $connection->createCommand()->SELECT('*')->FROM('pggc_girls')->queryAll();

	// 	$this->render('gc',array(
	// 		'result'=> $result,
	// 		'pg_boys'=> $pg_boys,
	// 		'pg_girls'=> $pg_girls,
	// 		));
	// }

	public function actionGc()
	{
		$connection = Yii::app()->db;
		$ug = $connection->createCommand()->SELECT('*')->FROM('gc_2019')->queryAll();
		$schema = $connection->schema;
		// $pg_boys = $connection->createCommand()->SELECT('*')->FROM('pggc_boys')->queryAll();
		// $pg_girls = $connection->createCommand()->SELECT('*')->FROM('pggc_girls')->queryAll();

		$this->render('gc_new',array(
			'ug' => $ug,
			'schema' => $schema
			// 'pg_boys'=> $pg_boys,
			// 'pg_girls'=> $pg_girls,
			));
	}

	public function actionCalendar()
	{

		$this->render('calendar');
	}

	public function actionPutevent()
	{

		$this->render('putevent');
	}
	public function actionWorkshop()
	{
		// get info from db
		$connection = Yii::app()->db;
		$workshop = $connection->createCommand()->SELECT('*')->FROM('sport')->ORDER('date DESC')->queryAll();

		$this->render('workshop',array(
			'workshop'=> $workshop,
			));
	}
	public function actionTrip()
	{
		// get info from db
		$connection = Yii::app()->db;
		$trip = $connection->createCommand()->SELECT('*')->FROM('trip')->ORDER('date DESC')->queryAll();

		$this->render('trip',array(
			'trip'=> $trip,
			));
	}

	public function actionputworkshop()
	{

		$this->render('putworkshop');
	}
	public function actionPutTrip()
	{

		$this->render('puttrip');
	}
	public function actionCertiForm()
	{

		$this->render('certiform');
	}
	public function actionSingleCertiForm()
	{

		$this->render('singlecertiform');
	}
	public function actionMultiCertiForm()
	{

		$this->render('multicertiform');
	}
	public function actionMakeCerti()
	{
		$connection = Yii::app()->db;
		$rollno = \Yii::app()->request->getPost('rollno');
		$certificates = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->WHERE("rollno = '$rollno'")->queryAll();
		$certinumber = (count($certificates) ? count($certificates) + 1 : 1);
		$Numcerties = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->queryAll();
		$certi_id_base = (count($Numcerties) ? 1000 + count($Numcerties) : 1000);
		$string = Yii::app()->user->sport;
		$secy_id = "";
		if (strpos($string, " ")) 
		{
			$words = explode(" ", $string);
			foreach ($words as $value) {
			    $secy_id = $secy_id.substr($value, 0, 1);
			}
		}
		else $secy_id = strtoupper((substr($string, 0, 3))); 
		
		$template = \Yii::app()->request->getPost('template');
		$name = \Yii::app()->request->getPost('name');
		$sport = \Yii::app()->request->getPost('sport');
		$hostel = \Yii::app()->request->getPost('hostel');
		$year1 = substr($template, 0, 2);
		$year2 = substr($template, 2, 4);
		$certi_id = 'IITB'.$year1.$certi_id_base.$year2.'SPORTS'.$secy_id;

		$post=new Certificates();
		$post->title=$rollno.'_'.$certinumber.'_'.preg_replace('/\s+/', '', $sport);
		$post->date=date('Y-m-d H:i:s');
		$post->certi_id=$certi_id;
		$post->sport=$sport;
		$post->name=$name;
		$post->rollno=$rollno;
		$post->secy_id=$secy_id;
		$post->template=$template;
		$post->hostel=$hostel;

		if($post->save())
		{
			$this->redirect("index.php?r=events/certiform");
		}
		else echo "Please Try Again!";

	}

	public function actionMakeSingleCerti()
	{
		$connection = Yii::app()->db;
		$rollno = \Yii::app()->request->getPost('rollno');
		$certificates = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->WHERE("rollno = '$rollno'")->queryAll();
		$certinumber = (count($certificates) ? count($certificates) + 1 : 1);
		$Numcerties = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->queryAll();
		$certi_id_base = (count($Numcerties) ? 1000 + count($Numcerties) : 1000);
		$string = Yii::app()->user->sport;
		$secy_id = "";
		if (strpos($string, " ")) 
		{
			$words = explode(" ", $string);
			foreach ($words as $value) {
			    $secy_id = $secy_id.substr($value, 0, 1);
			}
		}
		else $secy_id = strtoupper((substr($string, 0, 3))); 
		
		$template = \Yii::app()->request->getPost('template');
		$name = \Yii::app()->request->getPost('name');
		$sport = \Yii::app()->request->getPost('sport');
		$hostel = \Yii::app()->request->getPost('hostel');
		$year1 = substr($template, 0, 2);
		$year2 = substr($template, 2, 4);
		$certi_id = 'IITB'.$year1.$certi_id_base.$year2.'SPORTS'.$secy_id;

		$post=new Certificates();
		$post->title=$rollno.'_'.$certinumber.'_'.preg_replace('/\s+/', '', $sport);
		$post->date=date('Y-m-d H:i:s');
		$post->certi_id=$certi_id;
		$post->sport=$sport;
		$post->name=$name;
		$post->rollno=$rollno;
		$post->secy_id=$secy_id;
		$post->template=$template;
		$post->hostel=$hostel;

		if($post->save())
		{
			$this->redirect("index.php?r=events/certiform");
		}
		else echo "Please Try Again!";

	}

	public function actionMakeMultiCerti()
	{
		$connection = Yii::app()->db;
		$check=$_FILES["fileToUpload"]["name"];
		if($check!="")
		{
			$target_dir = "/home/sports/public_html/assets/certificates/";
			$temp = explode(".",$_FILES["fileToUpload"]["name"]);
			$newfilename = $temp[0]. '.' .end($temp);
			$target_file = $target_dir .$newfilename;
			$uploadOk = 1;
			$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($FileType != "csv" ) {
			    echo "Sorry, only csv files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo('<script>console.log( "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.")</script>');
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		}

		$file = fopen('/home/sports/public_html/assets/certificates/'.$check, 'r');
		/*while (($line = fgetcsv($file)) !== FALSE) {
		  //$line is an array of the csv elements
		  print_r($line);
		}
		fclose($file);*/

		$all_rows = array();
		$header = null;
		$i = 0;
		while ($row = fgetcsv($file)) {
		    if ($header === null) {
		        $header = $row;
		        continue;
		    }
		    $all_rows[$i] = array_combine($header, $row);
		    $i = $i+1;
		    print_r ($all_rows);
		}
		foreach ($all_rows as $certi_details => $value) {
			
			$rollno = $value['Roll Number'];
			print_r ($value);
			$certificates = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->WHERE("rollno = '$rollno'")->queryAll();
			$certinumber = (count($certificates) ? count($certificates) + 1 : 1);
			$Numcerties = $connection->createCommand()->SELECT('rollno')->FROM('certificates')->queryAll();
			$certi_id_base = (count($Numcerties) ? 1000 + count($Numcerties) : 1000);
			$string = Yii::app()->user->sport;
			$secy_id = "";
			if (strpos($string, " ")) 
			{
				$words = explode(" ", $string);
				foreach ($words as $value) {
				    $secy_id = $secy_id.substr($value, 0, 1);
				}
			}
			else $secy_id = strtoupper((substr($string, 0, 3))); 

			$pos = $value['Position'];
			$template = (\Yii::app()->request->getPost('type')).$pos;
			$name = $value['Name'];
			$sport = strtoupper((\Yii::app()->request->getPost('sport')));
			$hostel = $value['Hostel'];
			$year1 = substr($template, 0, 2);
			$year2 = substr($template, 2, 4);
			$certi_id = 'IITB'.$year1.$certi_id_base.$year2.'SPORTS'.$secy_id;

			$post=new Certificates();
			$post->title=$rollno.'_'.$certinumber.'_'.preg_replace('/\s+/', '', $sport);
			$post->date=date('Y-m-d H:i:s');
			$post->certi_id=$certi_id;
			$post->sport=$sport;
			$post->name=$name;
			$post->rollno=$rollno;
			$post->secy_id=$secy_id;
			$post->template=$template;
			$post->hostel=$hostel;

			if($post->save())
			{
				echo "Success for ".$name;
			}
			else echo "Please Try Again!";
		}

	}
	public function actionShowCerti()
	{
		if(!Yii::app()->user->isGuest) 
		{
			$certi_id = $_GET["certiid"];
			$connection = Yii::app()->db;
			$certificate = $connection->createCommand()->SELECT('*')->FROM('certificates')->WHERE("certi_id = '$certi_id'")->queryAll();
			$this->renderFile('/home/sports/public_html/protected/views/events/fpdf/makecerti.php');
		}
	}
	public function actionMakeTrialCerti()
	{
		if(!Yii::app()->user->isGuest) 
		{      
    		$connection = Yii::app()->db;
    		$check=Yii::app()->user->rollno;
			$this->renderFile('/home/sports/public_html/protected/views/events/fpdf/maketrialcerti.php');
		}
	}
	public function actionShowWorkshop()
	{
		// get info from db
		$connection = Yii::app()->db;
		$workshop = $connection->createCommand()->SELECT('*')->FROM('sport')->ORDER('date DESC')->queryAll();

		$this->render('showworkshop',array(
			'workshop'=> $workshop,
			));
	}

	public function actionDeleteWorkshop()
	{
		$command = Yii::app()->db->createCommand();
		$id = $_GET["id"];
		$command->delete('sport', 'id=:id', array(':id'=>$id));
		$this->redirect("index.php?r=events/workshop");		
	}

	public function actionShowTrip()
	{
		// get info from db
		$connection = Yii::app()->db;
		$trip = $connection->createCommand()->SELECT('*')->FROM('trip')->ORDER('date DESC')->queryAll();

		$this->render('showtrip',array(
			'trip'=> $trip,
			));
	}
	public function actionDeleteTrip()
	{
		$command = Yii::app()->db->createCommand();
		$id = $_GET["id"];
		$command->delete('trip', 'id=:id', array(':id'=>$id));
		$this->redirect("index.php?r=events/trip");		
	}

	public function actionSubmit()   //For News
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$date=\Yii::app()->request->getPost('date');
		$title = \Yii::app()->request->getPost('title');
		$time = \Yii::app()->request->getPost('time');
		$venue = \Yii::app()->request->getPost('venue');
		$descr = \Yii::app()->request->getPost('descr');

		$post=new Events();
		$post->title=$title;
		$post->published=date('Y-m-d H:i:s');
		$post->time=$time;
		$post->venue=$venue;
		$post->date=$date;
		$post->descr=$descr;
		$post->usr=$usr;

		if($post->save())
		{
			echo "Success!";
			sleep(0.5);
			$this->redirect("index.php?r=events/calendar");
		}

		else echo "Please try again";
	}


	public function actionSubmitAavhan()   //For Aavhan Prereg
	{
		$connection = Yii::app()->db;
		$name=\Yii::app()->request->getPost('name');
		$email = \Yii::app()->request->getPost('email');
		$sport = \Yii::app()->request->getPost('sport');
		$phone = \Yii::app()->request->getPost('phone');
		$college = \Yii::app()->request->getPost('college');

		$post=new Aavhan();
		$post->name=$name;
		$post->time=date('Y-m-d H:i:s');
		$post->email=$email;
		$post->sport=$sport;
		$post->college = $college;
		$post->phone=$phone;

		if($post->save())
		{
			$this->redirect("http://www.aavhan.com");
		}

		else echo "Please try again";
	}



	public function actionSubmitSport()   //For Workshop
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$sport=Yii::app()->user->sport;
		$date=\Yii::app()->request->getPost('date');
		$title = \Yii::app()->request->getPost('title');
		$time = \Yii::app()->request->getPost('time');
		$reg_link = \Yii::app()->request->getPost('reg_link');
		$descr = \Yii::app()->request->getPost('descr');

		$post=new Sport();
		$post->title=$title;
		$post->published=date('Y-m-d H:i:s');
		$post->reg_link=$reg_link;
		$post->date=$date;
		$post->descr=$descr;
		$post->usr=$usr;
		$post->post=$sport;

		$check=$_FILES["fileToUpload"]["name"];

		if($check!="")
		{
			$target_dir = "images/upcomingworkshops/";
			$temp = explode(".",$_FILES["fileToUpload"]["name"]);
			$newfilename = $title. '.' .end($temp);
			$target_file = $target_dir .$newfilename;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$post->img=$target_file;
		}
		if($post->save())
		{
			$this->redirect("index.php?r=events/workshop");
		}

		else echo "Please try again";

	}

	public function actionSubmitTrip()   //For Trip
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$sport=Yii::app()->user->sport;
		$date=\Yii::app()->request->getPost('date');
		$title = \Yii::app()->request->getPost('title');
		$time = \Yii::app()->request->getPost('time');
		$reg_link = \Yii::app()->request->getPost('reg_link');
		$descr = \Yii::app()->request->getPost('descr');

		
		$uploadOk = 1;

		$check=$_FILES["fileToUpload"]["name"];
		if($check!="")
		{
			$target_dir = "images/trip/";
			$temp = explode(".",$_FILES["fileToUpload"]["name"]);
			$newfilename = $title. '.' .end($temp);
			$target_file = $target_dir .$newfilename;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
							$uploadOk = 1;
					} else {
							echo "File is not an image.";
							$uploadOk = 0;
					}
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
					$uploadOk = 0;
					echo "Sorry, your file is too large.";
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					} else {
						$uploadOk = 0;
							echo "Sorry, there was an error uploading your file.";
					}
			}
		}

		if($uploadOk!=0){
			$post=new Trip();
							$post->title=$title;
							$post->published=date('Y-m-d H:i:s');
							$post->reg_link=$reg_link;
							$post->date=$date;
							$post->descr=$descr;
							$post->usr=$usr;
							$post->post=$sport;
							if(isset($target_file))
							$post->img=$target_file;
			if($post->save())
			{
				$this->redirect("index.php?r=events/trip");
			}
		}
		else echo "Please try again";
	}




	public function actionSubmitCerti()   //For Certi
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->request->getPost('usr');
		$title = \Yii::app()->request->getPost('title');
		$rollno = \Yii::app()->request->getPost('rollno');
		$certi_id = \Yii::app()->request->getPost('certi_id');
		$descr = \Yii::app()->request->getPost('descr');
		
		$uploadOk = 1;
		var_dump("expression");
		$check=$_FILES["fileToUpload"]["name"];
		if($check!="")
		{			
			$target_dir = "assets/certificates/";
			$temp = explode(".",$_FILES["fileToUpload"]["name"]);
			$newfilename = $certi_id.'.'.end($temp);
			$target_file = $target_dir.$newfilename;
			$pdfFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if ($_FILES["fileToUpload"]["size"] > 10000000) {
					$uploadOk = 0;
					echo "Sorry, your file is too large.";
			}
			// Allow certain file formats
			if($pdfFileType != 'pdf' ) {
					echo "Sorry, only PDF files are allowed.";
					$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							$post=new Certificates();
							$post->title=$title;
							$post->date=date('Y-m-d H:i:s');
							$post->certi_id=$certi_id;
							$post->descr=$descr;
							$post->usr=$usr;
							$post->rollno=$rollno;
							$post->pdf=$target_file;
							var_dump($target_file);
							echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					} else {
						$uploadOk = 0;
							echo "Sorry, there was an error uploading your file.";
					}
			}
		}
		if($uploadOk!=0){
			if($post->save())
			{
				$this->redirect("index.php?r=events/putcerti");
			}
		}
		else echo "Please try again";
	}
}
