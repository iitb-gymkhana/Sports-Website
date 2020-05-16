<?php

class ProfileController extends Controller
{
	public $certificates;
	public function actionIndex()
	{

		$connection = Yii::app()->db;
		
		#echo createCommand()->SELECT('Name, RollNumber,Photo')->FROM('profile')->ORDER('Name ASC');	

		$people = $connection->createCommand()->SELECT('Name, RollNumber,Photo')->FROM('profile')->ORDER('Name ASC')->queryAll();

		$this->render('index',array(
			'people'=>$people,
			));		
	}

	public function actionPutinfo()
	{

		if(!Yii::app()->user->isGuest) 
		{      
			$connection = Yii::app()->db;
			$check=Yii::app()->user->rollno;
			$data = $connection->createCommand()->SELECT('*')->FROM('profile')->WHERE("RollNumber = '$check'")->queryAll();
					
			if($data==NULL)
			{
				$this->render('newprofile',array(
				'name'=> Yii::app()->user->id,
				'rollno'=> Yii::app()->user->rollno,
				));
			}

			else
			{
				$this->render('putinfo',array(
				'id'=> $data[0]['Id'],
				'name'=> $data[0]['Name'],
				'photo' => $data[0]['Photo'],
				'rollno'=> $data[0]['RollNumber'],
				'hostel'=>$data[0]['Hostel'],
				'about'=> $data[0]['About'],
				'roomno'=>$data[0]['RoomNo'],
				'sports'=>$data[0]['Sports'],
				'GCAch'=>$data[0]['GCAch'],
				'InterIITAch'=>$data[0]['InterIITAch'],
				'OthersAch'=>$data[0]['OthersAch'],
				'PhoneNumber'=>$data[0]['PhoneNumber'],
				'fb'=>$data[0]['fb'],
				'gmail'=>$data[0]['gmail'],
				'twitter'=>$data[0]['twitter'],
				'Email'=> $data[0]['Email'],
				));
			}
		}

		else echo "<p>Please log in</p>";
	}

	public function actionDisplay()
	{
		$connection = Yii::app()->db;

		if(!isset($_GET["rollno"]))
			{ echo "Please Select a Profile";
		}

		else {
		$check=$_GET["rollno"];
		$data = $connection->createCommand()->SELECT('*')->FROM('profile')->WHERE("RollNumber = '$check'")->queryAll();
		$this->certificates = $connection->createCommand()->SELECT('*')->FROM('certificates')->WHERE("rollno = '$check'")->queryAll();
		// var_dump($this->certificates);
		$this->render('display',array(
			'id'=> $data[0]['Id'],
			'name'=> $data[0]['Name'],
			'image'=> $data[0]['Photo'],
			'rollno'=> $data[0]['RollNumber'],
			'hostel'=>$data[0]['Hostel'],
			'roomno'=>$data[0]['RoomNo'],
			'sports'=>$data[0]['Sports'],
			'about'=> $data[0]['About'],
			'GCAch'=>$data[0]['GCAch'],
			'InterIITAch'=>$data[0]['InterIITAch'],
			'OthersAch'=>$data[0]['OthersAch'],
			'PhoneNumber'=>$data[0]['PhoneNumber'],
			'fb'=>$data[0]['fb'],
			'gmail'=>$data[0]['gmail'],
			'twitter'=>$data[0]['twitter'],
			'Email'=> $data[0]['Email'],
			'team'=> $data[0]['Team'],
			
			));
		}
	}

	public function actionNew()           
	{		
		$connection = Yii::app()->db;

		$Name = \Yii::app()->request->getPost('name');
		$RollNo = \Yii::app()->request->getPost('roll');
		$Sports = \Yii::app()->request->getPost('sports');
		$Image = \Yii::app()->request->getPost('image');
		$PhoneNumber = \Yii::app()->request->getPost('PhoneNumber');
		$Email = \Yii::app()->request->getPost('Email');
		$FB = \Yii::app()->request->getPost('fb');
		$Twitter = \Yii::app()->request->getPost('twitter');
		$Gmail = \Yii::app()->request->getPost('gmail');
		$Hostel = \Yii::app()->request->getPost('Hostel');
		$RoomNo = \Yii::app()->request->getPost('RoomNo');
		$About = \Yii::app()->request->getPost('About');

		$post=new Profile();			
		$post->Name=$Name;
		$post->RollNumber=$RollNo;
		$post->Sports=$Sports;
		$post->Photo=$Image;
		$post->PhoneNumber=$PhoneNumber;
		$post->Email=$Email;
		$post->fb=$FB;
		$post->gmail=$Gmail;
		$post->twitter=$Twitter;
		$post->Hostel=$Hostel;
		$post->RoomNo=$RoomNo;
		$post->About=$About;
		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionPic()
	{

		$target_dir = "images/profilepics/";
		$temp = explode(".",$_FILES["fileToUpload"]["name"]);
		$rollno=Yii::app()->user->rollno;
		$newfilename = $rollno. '.' .end($temp);
		$target_file = $target_dir .$newfilename;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is an actual image or fake image
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
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too
		     large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && $imageFileType != "JPEG") {
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

		$connection = Yii::app()->db;
		$id = \Yii::app()->request->getPost('id');

		$post=Profile::model()->findByPk($id);	
		$post->Photo=$target_file;
		$post->save();
	}

	public function actionPersonal()           
	{		
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$updatedName = \Yii::app()->request->getPost('name');
		$updatedRollNo = \Yii::app()->request->getPost('roll');
		$updatedSports = \Yii::app()->request->getPost('sports');
		$updatedPhoneNumber = \Yii::app()->request->getPost('PhoneNumber');
		$updatedEmail = \Yii::app()->request->getPost('Email');
		$updatedFB = \Yii::app()->request->getPost('fb');
		$updatedTwitter = \Yii::app()->request->getPost('twitter');
		$updatedGmail = \Yii::app()->request->getPost('gmail');
		$updatedHostel = \Yii::app()->request->getPost('Hostel');
		$updatedRoomNo = \Yii::app()->request->getPost('RoomNo');
		$updatedAbout = \Yii::app()->request->getPost('About');

		$post=Profile::model()->findByPk($id);			
		$post->Name=$updatedName;
		$post->RollNumber=$updatedRollNo;
		$post->PhoneNumber=$updatedPhoneNumber;
		$post->Email=$updatedEmail;
		$post->fb=$updatedFB;
		$post->gmail=$updatedGmail;
		$post->twitter=$updatedTwitter;
		$post->Hostel=$updatedHostel;
		$post->RoomNo=$updatedRoomNo;
		$post->Sports=$updatedSports;
		$post->About=$updatedAbout;
		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionGc()           
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$GCAch = \Yii::app()->request->getPost('GCAch');
		$addedGC = \Yii::app()->request->getPost('GCinfo');

		if (get_magic_quotes_gpc()) $addedGC = stripslashes($addedGC);
		$addedGC=str_replace("~","",$addedGC);
		#Filter this string before adding.
		if( strlen($addedGC) > 250 )
		{
			echo " Too Big Achievement.Please cut down or if more than one achievement add more than once.";
		}
		else
		{
		$addedGC .="~";
		#Remove ~ first.
		$updatedGC=$GCAch.$addedGC;
		echo $updatedGC;
	    }

		$post=Profile::model()->findByPk($id);			
		$post->GCAch=$updatedGC;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionDelgc()           
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$GCAch = \Yii::app()->request->getPost('GCAch');

		$newGC="";
		$GCList=explode("~",$GCAch); 
		$GCitemcount=0;
		foreach ($GCList as $GCItem) { 
		$posted='GCitemcount'.$GCitemcount;
		if($GCitemcount != count($GCList)-1){
			$check=\Yii::app()->request->getPost($posted);
		if(!isset($check)){
		$GCItem .="~";
		$newGC.=$GCItem;
		}}
		$GCitemcount+=1;}

		$post=Profile::model()->findByPk($id);			
		$post->GCAch=$newGC;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionInteriit()           
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$InterIITAch = \Yii::app()->request->getPost('InterIITAch');
		$addedInterIIT = \Yii::app()->request->getPost('InterIITinfo');
		
		if (get_magic_quotes_gpc()) $addedInterIIT = stripslashes($addedInterIIT);
		$addedInterIIT=str_replace("~","",$addedInterIIT);
		#Filter this string before adding.
		if( strlen($addedInterIIT) > 250 )
		{
			echo " Too Big Achievement.Please cut down or if more than one achievement add more than once.";
		}
		else
		{
		$addedInterIIT .="~";
		#Remove ~ first.
		$updatedInterIIT=$InterIITAch.$addedInterIIT;
		echo $updatedInterIIT;
		}

		$post=Profile::model()->findByPk($id);			
		$post->InterIITAch=$updatedInterIIT;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionDelinteriit()          
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$InterIITAch = \Yii::app()->request->getPost('InterIITAch');
		
		$newInterIIT="";
		$InterIITList=explode("~",$InterIITAch); 
		$InterIITitemcount=0;
		foreach ($InterIITList as $InterIITItem) { 
		$posted='InterIITitemcount'.$InterIITitemcount;
		if($InterIITitemcount != count($InterIITList)-1){
		if(!isset($_POST[$posted])){
		$InterIITItem .="~";
		$newInterIIT.=$InterIITItem;
		}}
		$InterIITitemcount+=1;}

		$post=Profile::model()->findByPk($id);			
		$post->InterIITAch=$newInterIIT;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionOther()           
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$OthersAch = \Yii::app()->request->getPost('OthersAch');
		$addedOthers = \Yii::app()->request->getPost('Othersinfo');
		
		if (get_magic_quotes_gpc()) $addedOthers = stripslashes($addedOthers);
		$addedOthers=str_replace("~","",$addedOthers);
		#Filter this string before adding.
		if( strlen($addedOthers) > 250 )
		{
			echo " Too Big Achievement.Please cut down or if more than one achievement add more than once.";
		}
		else
		{
		$addedOthers .="~";
		$updatedOthers=$OthersAch.$addedOthers;
		echo $updatedOthers;
		}

		$post=Profile::model()->findByPk($id);			
		$post->OthersAch=$updatedOthers;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionDelother()          
	{
		$connection = Yii::app()->db;

		$id = \Yii::app()->request->getPost('id');
		$OthersAch = \Yii::app()->request->getPost('OthersAch');
		
		$newOthers="";
		$OthersList=explode("~",$OthersAch); 
		$Othersitemcount=0;
		foreach ($OthersList as $OthersItem) { 
		$posted='Othersitemcount'.$Othersitemcount;
		if($Othersitemcount != count($OthersList)-1){
		if(!isset($_POST[$posted])){
		$OthersItem .="~";
		$newOthers.=$OthersItem;
		}}
		$Othersitemcount+=1;}

		$post=Profile::model()->findByPk($id);			
		$post->OthersAch=$newOthers;

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
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