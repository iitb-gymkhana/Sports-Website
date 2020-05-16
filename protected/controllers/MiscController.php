<?php

class MiscController extends Controller
{
	public function actionReg()
	{
		// get info from db
		$connection = Yii::app()->db;
		$reg = $connection->createCommand()->SELECT('*')->FROM('reg')->ORDER('date DESC')->queryAll();

		$this->render('reg',array(
			'reg'=> $reg,
			));
	}

	public function actionNewreg()
	{
	
		$this->render('newreg');
	}

	public function actionSubmit()           //For registrations
	{
		$connection = Yii::app()->db;
		$date=date('d-m-Y');
		$title = \Yii::app()->request->getPost('title');
		$url = \Yii::app()->request->getPost('url');
		$msg = \Yii::app()->request->getPost('msg');

		$post=new Reg();
		$post->title=$title;
		$post->url=$url;
		$post->msg=$msg;
		$post->date=date('Y-m-d H:i:s');

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionShowreg()
	{
		// get info from db
		$connection = Yii::app()->db;
		$reg = $connection->createCommand()->SELECT('*')->FROM('reg')->queryAll();

		$this->render('showreg',array(
			'reg'=> $reg,
			));
	}


	public function actionCourt()
	{
		// get info from db
		$connection = Yii::app()->db;
		$badminton = $connection->createCommand()->SELECT('*')->FROM('bookbaddy')->queryAll();
		$khokho = $connection->createCommand()->SELECT('*')->FROM('bookkhokho')->queryAll();
		$squash = $connection->createCommand()->SELECT('*')->FROM('booksquash')->queryAll();
		$skating = $connection->createCommand()->SELECT('*')->FROM('bookskating')->queryAll();
		$tt = $connection->createCommand()->SELECT('*')->FROM('booktt')->queryAll();
		$tennis = $connection->createCommand()->SELECT('*')->FROM('booktennis')->queryAll();
		$volleyball = $connection->createCommand()->SELECT('*')->FROM('bookvolley')->queryAll();

		$booked = $connection->createCommand()->SELECT('*')->FROM('courtbook')->queryAll();


		$this->render('court',array(
			'badminton'=> $badminton,
			'khokho'=> $khokho,
			'squash'=> $squash,
			'skating'=> $skating,
			'tt'=> $tt,
			'tennis'=> $tennis,
			'volleyball'=> $volleyball,
			'booked'=> $booked,
			));
	}


	public function actionSubmit2()    //For Court Booking
	{
	if(!Yii::app()->user->isGuest)
	{
		$connection = Yii::app()->db;
		$user=Yii::app()->user->id;
		$ldap=Yii::app()->user->ldap;
		$ldap=$ldap. "@iitb.ac.in";
		$sport = \Yii::app()->request->getPost('sport');
		$court = \Yii::app()->request->getPost('court');
		$time = \Yii::app()->request->getPost('time');
		$date = \Yii::app()->request->getPost('date');

		$check = $connection->createCommand()->SELECT('*')->FROM('courtbook')->queryAll();
		foreach($check as $item)
		{
			if($item['ldap']==$ldap&$item['date']==$date)
			{
				exit("Sorry. You are only allowed to make one booking per day");
			}
		}
		$post=new Courtbook();
		$post->user=$user;
		$post->ldap=$ldap;
		$post->sport=$sport;
		$post->court=$court;
		$post->time=$time;
		$post->date=$date;
		$post->booked=1;

		if($post->save())
		{
			echo "Success! Please show the e-mail at the court to play";

			$mail = new YiiMailer();
			$body=nl2br("Court Booking Confirmed \n\nName - ". $user. "\nID - ". $ldap. "\nSport - ". $sport. 
			"\nCourt - ". $court. "\nDate - ". $date. "\nTime - ". $time);

			//$mail->clearLayout();//if layout is already set in config
			$mail->setFrom('webmaster@iitbsports.com', 'webmaster@iitbsports');
			$mail->setTo(Yii::app()->params['adminEmail']);
			$mail->setSubject('Court Booking');
			$mail->setBody($body);		
			$mail->send();

			$mail2 = new YiiMailer();
			$mail2->setFrom('webmaster@iitbsports.com', 'webmaster@iitbsports');
			$mail2->setTo($ldap);
			$mail2->setSubject('Court Booking Confirmed');
			$mail2->setBody($body);		
			$mail2->send();
		}

		else echo "Please try again";
	}
	else echo "Please login";
	}

	public function actionGround()
	{
		$this->render('ground');
	}

	public function actionGroundapprove()
	{
		$connection = Yii::app()->db;
		$book = $connection->createCommand()->SELECT('*')->FROM('ground')->queryAll();

		$this->render('groundapprove',array(
			'book'=> $book,
			));
	}

	public function actionSubmit3()           //Ground booking to Gsec for approval
	{
		if(!Yii::app()->user->isGuest)
		{
			$connection = Yii::app()->db;
			$user=Yii::app()->user->id;
			$ldap=Yii::app()->user->ldap;
			$ldap=$ldap. "@iitb.ac.in";
			$sport = \Yii::app()->request->getPost('sport');
			$from = \Yii::app()->request->getPost('from');
			$to = \Yii::app()->request->getPost('to');
			$date = \Yii::app()->request->getPost('date');


			$post=new Ground();
			$post->user=$user;
			$post->ldap=$ldap;
			$post->sport=$sport;
			$post->from=$from;
			$post->to=$to;
			$post->date=$date;
			$post->approved=0;

		if($post->save())
		{
			echo "Please wait for us to approve your request";

			$mail = new YiiMailer();
			$body=nl2br("Ground booking request \n\nName - ". $user. "\nID - ". $ldap. "\nSport - ". $sport. 
			"\nDate - ". $date. "\nFrom - ". $from. " To - ". $to);

			//$mail->clearLayout();//if layout is already set in config
			$mail->setFrom('webmaster@iitbsports.com', 'webmaster@iitbsports');
			$mail->setTo(Yii::app()->params['adminEmail']);
			$mail->setSubject('Ground Booking Request');
			$mail->setBody($body);		
			$mail->send();

		}

		else echo "Please try again";
	}
		else echo "Please login";
	}

	public function actionSubmit4()          //Ground booking after approval for gsec
	{
		if(Yii::app()->user->post=='gsec')
		{
			$connection = Yii::app()->db;
			
			$id = \Yii::app()->request->getPost('id');
			$name = \Yii::app()->request->getPost('name');
			$ldap = \Yii::app()->request->getPost('ldap');
			$ldap=$ldap. "@iitb.ac.in";
			$sport = \Yii::app()->request->getPost('sport');
			$date=\Yii::app()->request->getPost('date');
			$from = \Yii::app()->request->getPost('from');
			$to = \Yii::app()->request->getPost('to');
			$accept=\Yii::app()->request->getPost('accept');
			$reject=\Yii::app()->request->getPost('reject');

			if(isset($accept))
			{
				$post=Ground::model()->findByPk($id);			
				$post->from2=$from;
				$post->to2=$to;
				$post->approved=1;
	
				if($post->save())
				{
					echo "Success!";
		
					$mail = new YiiMailer();
					$body=nl2br("Your request has been approved. \n\nName - ". $name. "\nID - ". $ldap. "\nSport - ". $sport. 
					"\nDate - ". $date. "\nFrom - ". $from. " To - ". $to);
		
					//$mail->clearLayout();//if layout is already set in config
					$mail->setFrom('webmaster@iitbsports.com', 'webmaster@iitbsports');
					$mail->setTo($ldap);
					$mail->setSubject('Ground Booking Confirmed');
					$mail->setBody($body);		
					$mail->send();
				}

				else echo "Please try again";
			}

			elseif(isset($reject))
			{
				$post=Ground::model()->findByPk($id);			
				$post->approved=2;

				if($post->save())
				{
					echo "Success!";
		
					$mail = new YiiMailer();
					$body=nl2br("Sorry. Your request could not be accepted by us. Please make an other booking");
		
					//$mail->clearLayout();//if layout is already set in config
					$mail->setFrom('webmaster@iitbsports.com', 'webmaster@iitbsports');
					$mail->setTo($ldap);
					$mail->setSubject('Ground Booking Rejected');
					$mail->setBody($body);		
					$mail->send();
				}

				else echo "Please try again";
			}
	}
		else echo "Please login";
	}

	public function actionSurvey()
	{
		// get info from db
		$connection = Yii::app()->db;
		$surv = $connection->createCommand()->SELECT('*')->FROM('surv')->ORDER('date DESC')->queryAll();

		$this->render('survey',array(
			'surv'=> $surv,
			));
	}

	public function actionNewsurv()
	{
	
		$this->render('newsurv');
	}

	public function actionSubmit5()          //For Surveys
	{
		$connection = Yii::app()->db;
		$date=date('d-m-Y');
		$title = \Yii::app()->request->getPost('title');
		$url = \Yii::app()->request->getPost('url');
		$msg = \Yii::app()->request->getPost('msg');

		$post=new Surv();
		$post->title=$title;
		$post->url=$url;
		$post->msg=$msg;
		$post->date=date('Y-m-d H:i:s');

		if($post->save())
		{
			echo "Success!";
		}

		else echo "Please try again";
	}

	public function actionShowsurv()
	{
		// get info from db
		$connection = Yii::app()->db;
		$surv = $connection->createCommand()->SELECT('*')->FROM('surv')->queryAll();

		$this->render('showsurv',array(
			'surv'=> $surv,
			));
	}

	public function actionNso_feedback()
	{
	
		$this->render('nso_feedback');
	}

	public function actionSubmit6()          //For NSO Feedback
	{
		$connection = Yii::app()->db;
		$roll = \Yii::app()->request->getPost('roll');
		$sport = \Yii::app()->request->getPost('sport');
		$one = \Yii::app()->request->getPost('1');
		$two = \Yii::app()->request->getPost('2');
		$three = \Yii::app()->request->getPost('3');
		$four = \Yii::app()->request->getPost('4');
		$five = \Yii::app()->request->getPost('5');
		$six = \Yii::app()->request->getPost('6');
		$seven = \Yii::app()->request->getPost('7');
		$eight = \Yii::app()->request->getPost('8');
		$nine = \Yii::app()->request->getPost('9');
		$ten = \Yii::app()->request->getPost('10');
		$eleven = \Yii::app()->request->getPost('11');
		$twelve = \Yii::app()->request->getPost('12');
		$thirteen = \Yii::app()->request->getPost('13');
		$fourteen = \Yii::app()->request->getPost('14');
		$fifteen = \Yii::app()->request->getPost('15');
		$sixteen = \Yii::app()->request->getPost('16');
		$seventeen = \Yii::app()->request->getPost('17');
		$eighteen = \Yii::app()->request->getPost('18');
		$nineteen = \Yii::app()->request->getPost('19');
		$feedback = \Yii::app()->request->getPost('feedback');

		$data = $connection->createCommand()->SELECT('*')->FROM('nso_feedback')->WHERE("Roll = '$roll'")->queryAll();
					
		if($data==NULL)
		{	
			$post=new NsoFeedback();
			$post->Roll=$roll;
			$post->Date=date('Y-m-d H:i:s');
			$post->Sport=$sport;
			$post->one=$one;
			$post->two=$two;
			$post->three=$three;
			$post->four=$four;
			$post->five=$five;
			$post->six=$six;
			$post->seven=$seven;
			$post->eight=$eight;
			$post->nine=$nine;
			$post->ten=$ten;
			$post->eleven=$eleven;
			$post->twelve=$twelve;
			$post->thirteen=$thirteen;
			$post->fourteen=$fourteen;
			$post->fifteen=$fifteen;
			$post->sixteen=$sixteen;
			$post->seventeen=$seventeen;
			$post->eighteen=$eighteen;
			$post->nineteen=$nineteen;
			$post->feedback=$feedback;
	
			if($post->save())
			{ 	echo "Thank you for your feedback. <br><br>Please complete your profile if you haven't done so already. This will help us serve you better in the future.";
			?>
						<meta http-equiv="Refresh" content="3; URL=index.php?r=profile/putinfo">
			<?php

			}

			else echo "Please answer all questions and try again";
		}

		else echo "You may submit feedback only once";

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