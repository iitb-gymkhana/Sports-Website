<?php

class ArchiveController extends Controller
{
	public $halloffame;

	public function getHalloffame()
	{
		// get info from db
		$connection = Yii::app()->db;
		$this->halloffame = $connection->createCommand()->SELECT('*')->FROM('awards')->queryAll();
	}

	public function actionHalloffame()
	{
		$this->getHalloffame();
		$this->render('halloffame');
	}

	public function actionGallery()
	{
		$this->render('gallery');
	}

	public function actionProfile()
	{
		if(!Yii::app()->user->isGuest&&Yii::app()->user->post!='user') {
			if(!isset($_POST["sport"])) {$sport="Aquatics";}
			else {	$sport=$_POST["sport"];}
			$this->render('profile',array(
			'sport'=> $sport
			));

		}

		else echo "Please log in or not authorised";

	}

	public function actionSubmit()        //For quest profiles
	{

		$connection = Yii::app()->db;
		$rollno = \Yii::app()->request->getPost('rollno');
		$yeardept = \Yii::app()->request->getPost('yeardept');
		$position = \Yii::app()->request->getPost('position');
		$medals = \Yii::app()->request->getPost('medals');
		$about = \Yii::app()->request->getPost('About');

		$post=Quest::model()->findByAttributes(array('RollNumber'=>$rollno));		
		$post->YearDept=$yeardept;
		$post->Position=$position;
		$post->Medals=$medals;
		$post->About=$about;
		$check=$_FILES["fileToUpload"]["name"];

		if($check!="")
		{	$target_dir = "images/quest/";
			$temp = explode(".",$_FILES["fileToUpload"]["name"]);
			$newfilename = $rollno. '.' .end($temp);
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
			//if ($_FILES["fileToUpload"]["size"] > 500000) {
			//    echo "Sorry, your file is too large.";
			//    $uploadOk = 0;
			//}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG") {
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
	
			$post->Photo=$target_file;
		}

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}
}