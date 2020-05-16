<?php

class AboutController extends Controller
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
		$profile2 = $connection->createCommand()->SELECT('RollNumber')->FROM('profile')->queryAll();
		$i=0;
		foreach($profile2 as $profile3)
		{
			foreach($profile3 as $key=>$value){
				$profile[$i]=$value;
				$i++;
			}
		}
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('date DESC')->LIMIT(4)->queryAll();
		$event = $connection->createCommand()->SELECT('*')->FROM('events')->WHERE('date >= CURDATE()')->ORDER('date ASC')->LIMIT(4)->queryAll();
		$this->render('index',array(
			'news'=> $news,
			'event'=> $event,
			'profile' => $profile,
			));
	}
	public function actionOfficers()
	{
		$this->render('officers');
	}
	public function actionContact()
	{
		// get info from db
		$connection = Yii::app()->db;
		$gsec = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "gsec"')->queryAll();
		$nominees = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "nominee"')->queryAll();
		$secretaries = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "secy"')->queryAll();
		$pg = $connection->createCommand()->SELECT('*')->FROM('sports_council')->WHERE('category = "pg"')->queryAll();
		$this->render('contact',array(
			'gsec'=> $gsec,
			'nominees'=>$nominees,
			'secretaries'=>$secretaries,
			'pg'=>$pg
			));
	}

	public function actionNewsfeed()
	{
		header('Content-Type: text/xml');
		$connection = Yii::app()->db;
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('date DESC')->queryAll();

		$this->renderPartial('newsfeed',array(
			'news'=> $news,
			));
	}

	public function actionNews()
	{
		// get info from db
		$connection = Yii::app()->db;
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('post_date DESC')->LIMIT(21)->queryAll();

		$this->render('news',array(
			'news'=> $news,
			));
	}

	public function actionPutnews()
	{

		$this->render('putnews');
	}

	public function actionShownews()
	{
		// get info from db
		$connection = Yii::app()->db;
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('date DESC')->queryAll();

		$this->render('shownews',array(
			'news'=> $news,
			));
	}
	public function actionEditnews()
	{
		// get info from db
		$connection = Yii::app()->db;
		$news = $connection->createCommand()->SELECT('*')->FROM('news')->ORDER('date DESC')->queryAll();

		$this->render('editnews',array(
			'news'=> $news,
			));
	}
	public function actionDeleteNews()
	{
		$command = Yii::app()->db->createCommand();
		$id = $_GET["id"];
		$command->delete('news', 'id=:id', array(':id'=>$id));
		$this->redirect("index.php?r=about/news");		
	}

	public function actionSubmit()   //For News
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$sport=Yii::app()->user->sport;
		$date=date('d-m-Y');
		$post_date = \Yii::app()->request->getPost('post_date');
		$title = \Yii::app()->request->getPost('title');
		$msg = \Yii::app()->request->getPost('msg');

		$post = new News();
		$post->title=$title;
		$post->msg=$msg;
		$post->date=date('Y-m-d H:i:s');
		$post->usr=$usr;
		$post->sport=$sport;
		$post->post_date = $post_date;

		$check=$_FILES["fileToUpload"]["name"];

		if($check!="")
		{	$target_dir = "images/news/";
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
			if ($_FILES["fileToUpload"]["size"] > 500000) {
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
			$this->redirect('index.php?r=about/news');
			echo "Success!";
		}

		else
		{
			print_r($_FILES);
			echo "Please try again";
		}
	}

	public function actionSubmitedit()   //For News
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$sport=Yii::app()->user->sport;
		$date=date('d-m-Y');
		$post_date = \Yii::app()->request->getPost('post_date');
		$title = \Yii::app()->request->getPost('title');
		$msg = \Yii::app()->request->getPost('msg');
		$id = \Yii::app()->request->getPost('id');

		$usercriteria = new CDbCriteria();
		$usercriteria->condition = "id='$id'";

		if($id!=NULL){
		$post=News::model()->find($usercriteria);
		$post->title=$title;
		$post->msg=$msg;
		$post->usr=$usr;
		$post->sport=$sport;
		$post->post_date = $post_date;

		$check=$_FILES["fileToUpload"]["name"];

		if($check!="")
		{	$target_dir = "images/news/";
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
			if ($_FILES["fileToUpload"]["size"] > 500000) {
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
			$this->redirect('index.php?r=about/news');
			echo "Success!";
		}

		else
		{
			print_r($_FILES);
		echo "Please try again";
		}
	}
}

	public function actionSubmit2()   //For Ask a Secy
	{
		$connection = Yii::app()->db;
		$usr=Yii::app()->user->id;
		$date=date('Y-m-d');
		$ldap=Yii::app()->user->ldap;
		$ldap=$ldap. "@iitb.ac.in";
		$sport=\Yii::app()->request->getPost('sport');
		$phone=\Yii::app()->request->getPost('phone');
		$subject = \Yii::app()->request->getPost('subject');
		$msg = \Yii::app()->request->getPost('msg');

		$post=new AskaSecy();
		$post->usr=$usr;
		$post->date=$date;
		$post->ldap=$ldap;
		$post->sport=$sport;
		$post->phone=$phone;
		$post->subject=$subject;
		$post->msg=$msg;

		if($post->save())
		{
			$this->render('submit2');

			/*$mail = new YiiMailer();
			$body=nl2br("<h4>Complaint or Feedback</h4>\n\nDetails: \nSport - ". $sport. "\n\nMessage - ". $msg. "
				\n\nFrom: ". $usr. "\n". $phone );

			//$mail->clearLayout();//if layout is already set in config
			$mail->setFrom($ldap);
			$mail->setTo(Yii::app()->params['adminEmail']);
			$mail->setSubject($subject);
			$mail->setBody($body);
			$mail->send();
			*/

			$connection = Yii::app()->db;
			$secy = SportsCouncil::model()->findByAttributes(array('post'=>$sport));
			$secy_ldap=$secy->ldap. "@iitb.ac.in";

			$body=nl2br("<h4>Complaint or Feedback</h4>\n\nMessage - ". $msg. "
				\n\nFrom: ". $usr. "\n". $phone );

			$mail2 = new YiiMailer();
			$mail2->setFrom($ldap);
			$mail2->setTo($secy_ldap);
			$mail2->setCc(Yii::app()->params['adminEmail']);
			$mail2->setSubject($subject);
			$mail2->setBody($body);
			$mail2->send();
		}

		else echo "Please try again";
	}

	public function actionFaq()
	{

		$this->render('faq');
	}

	public function actionAskasecy()
	{

		$this->render('askasecy');
	}
	public function actionKreeda()
	{
		$version = $_GET["version"];
		$file = "/home/sports/public_html/assets/Kreeda/Kreeda_Version_".$version.".pdf";
		$filename = "Kreeda Edition ".$version;
		
		if(file_exists($file)){
			header('Content-Description: File Viewing');
		    header('Content-Type: application/pdf');
		    header('Content-Disposition: inline; filename="'.$filename.'.pdf"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
			readFile($file);
		}
		else {
			echo "File does not exist!";
		}

	}
	public function actionWorkReport()
	{
		$sport = $_GET["sport"];
		$file = "/home/sports/public_html/assets/WorkReports/".$sport.".pdf";
		$filename = $sport." Work Report Autumn 2017";
		
		if(file_exists($file)){
			header('Content-Description: File Viewing');
		    header('Content-Type: application/pdf');
		    header('Content-Disposition: inline; filename="'.$filename.'.pdf"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
			readFile($file);
		}
		else {
			echo "File does not exist!";
		}

	}
}
