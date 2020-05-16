<?php

class TournamentController extends Controller
{
	public $email; 

	public function actionVolleyball()
	{
		//$this->render('volleyball');
	}

	public function actionAthleticsgalamen()
	{
		//$this->render('athleticsgalamen');
	}

	public function actionAthleticsgalawomen()
	{
		//$this->render('athleticsgalawomen');
	}

	public function actionAthleticsgalarestricted()
	{
		//$this->render('athleticsgalarestricted');
	}

	public function actionAthleticsgalaiitmen()
	{
		//$this->render('athleticsgalaiitmen');
	}

	public function actionAthleticsgalaiitwomen()
	{
		//$this->render('athleticsgalaiitwomen');
	}

	public function actionRegister()
	{
	
		//$this->render('register');
	}

	public function actionSubmit()     //For Volleyball
	{

		$connection = Yii::app()->db;
		$name=\Yii::app()->request->getPost('name');
		$email=\Yii::app()->request->getPost('email');
		$phone = \Yii::app()->request->getPost('phone');
		$college = \Yii::app()->request->getPost('college');
		$sex = \Yii::app()->request->getPost('sex');
		$sport = \Yii::app()->request->getPost('sport');

		$data = $connection->createCommand()->SELECT('*')->FROM('tournament')->WHERE("Email = '$email'")->queryAll();
					
		if($data==NULL)
		{	

			$post=new Tournament();
			$post->Name=$name;
			$post->Email=$email;
			$post->Phone=$phone;
			$post->College=$college;
			$post->Sex=$sex;
			$post->Sport=$sport;
			$post->Time=date('Y-m-d H:i:s');
	
			if($post->save())
			{
				echo "Thank you for registering. Please make the payment <a href='https://www.instamojo.com/IITB_Sports/inter-college-volleyball-tournament/' target='_blank'>here</a> to complete your registration";
	
	
				$mail = new YiiMailer();
				$body=nl2br("<h4>Please complete payment <a href='https://www.instamojo.com/IITB_Sports/inter-college-volleyball-tournament/' target='_blank'>here</a> to confirm your registration</h4>
					\nName - ". $name. "\nTournament - ". $sport. "\nEmail ID - ". $email. "\nCollege - ". $college. "\nRegistered At - ". date('Y-m-d H:i:s'). "\nPayment Status: Not Paid");
	
				$subject=$sport. " Tournament Registration";
	
				$mail->setFrom(Yii::app()->params['adminEmail']);
				$mail->setTo($email);
				$mail->setSubject($subject);
				$mail->setBody($body);		
				$mail->send();
				  

			}

			else echo "Please try again";

		}
		else echo "You may register only once";

	}

	public function actionSubmit2()     //For Athletics Gala
	{

		$connection = Yii::app()->db;
		$name=\Yii::app()->request->getPost('name');
		$email=\Yii::app()->request->getPost('email');
		$phone = \Yii::app()->request->getPost('phone');
		$college = \Yii::app()->request->getPost('college');
		$gender = \Yii::app()->request->getPost('gender');
		$category = \Yii::app()->request->getPost('category');
		$run100 = \Yii::app()->request->getPost('run100');
		$run200 = \Yii::app()->request->getPost('run200');
		$run400 = \Yii::app()->request->getPost('run400');
		$run800 = \Yii::app()->request->getPost('run800');
		$run1500 = \Yii::app()->request->getPost('run1500');
		$hurdles110 = \Yii::app()->request->getPost('hurdles110');
		$hurdles400 = \Yii::app()->request->getPost('hurdles400');
		$longjump = \Yii::app()->request->getPost('longjump');
		$highjump = \Yii::app()->request->getPost('highjump');
		$triplejump = \Yii::app()->request->getPost('triplejump');
		$javelin = \Yii::app()->request->getPost('javelin');
		$shotput = \Yii::app()->request->getPost('shotput');
		$discus = \Yii::app()->request->getPost('discus');
		$polevault = \Yii::app()->request->getPost('polevault');
		$relay100 = \Yii::app()->request->getPost('relay100');
		$relay100_2 = \Yii::app()->request->getPost('relay100_2');
		$relay100_3 = \Yii::app()->request->getPost('relay100_3');
		$relay100_4 = \Yii::app()->request->getPost('relay100_4');
		$relay400 = \Yii::app()->request->getPost('relay400');
		$relay400_2 = \Yii::app()->request->getPost('relay400_2');
		$relay400_3 = \Yii::app()->request->getPost('relay400_3');
		$relay400_4 = \Yii::app()->request->getPost('relay400_4');

		if($category=="Under 16 Category")
		{
			if($gender=="m") $category="Men's Under 16 Category";

			else $category="Women's Under 16 Category";
		}

		if($category=="Under 14 Category")
		{
			if($gender=="m") $category="Men's Under 14 Category";

			else $category="Women's Under 14 Category";
		}


			$post=new Athleticsgala();
			$post->Name=$name;
			$post->Email=$email;
			$post->Phone=$phone;
			$post->College=$college;
			$post->Gender=$gender;
			$post->Category=$category;
			$post->Time=date('Y-m-d H:i:s');
			$post->run100=$run100;
			$post->run200=$run200;
			$post->run400=$run400;
			$post->run800=$run800;
			$post->run1500=$run1500;
			$post->hurdles110=$hurdles110;
			$post->hurdles400=$hurdles400;
			$post->longjump=$longjump;
			$post->highjump=$highjump;
			$post->triplejump=$triplejump;
			$post->javelin=$javelin;
			$post->shotput=$shotput;
			$post->discus=$discus;
			$post->polevault=$polevault;
			$post->relay100=$relay100;
			$post->relay100_2=$relay100_2;
			$post->relay100_3=$relay100_3;
			$post->relay100_4=$relay100_4;
			$post->relay400=$relay400;
			$post->relay400_2=$relay400_2;
			$post->relay400_3=$relay400_3;
			$post->relay400_4=$relay400_4;

			$payment1=$run100+$run200+$run400+$run800+$run1500+$hurdles110+$hurdles400+$longjump+$highjump+$triplejump+$javelin+$shotput+$discus+$polevault;
	
			if($payment1<=5)
			{
				$payment2=$relay100+$relay400;
				$payment=$payment1*100+$payment2*250;

				if($post->save())
				{
					echo "<h4>Selected Events:</h4>";
					if($run100==1) echo "100m<br>";
					if($run200==1) echo "200m<br>";
					if($run400==1) echo "400m<br>";
					if($run800==1) echo "800m<br>";
					if($run1500==1) echo "1500m<br>";
					if($hurdles110==1) echo "110m Hurdles<br>";
					if($hurdles400==1) echo "400m Hurdles<br>";
					if($longjump==1) echo "Long Jump<br>";
					if($highjump==1) echo "High Jump<br>";
					if($triplejump==1) echo "Triple Jump<br>";
					if($javelin==1) echo "Javelin Throw<br>";
					if($shotput==1) echo "Shotput<br>";
					if($discus==1) echo "Discus Throw<br>";
					if($polevault==1) echo "Pole Vault<br>";
					if($relay100==1) echo "4x100m Relay<br>";
					if($relay400==1) echo "4x400m Relay<br>";

					echo"<br>Category: ". $category;

					echo "<br><br>Thank you for registering. As per your selected events, your total registration 	fees is <span style='font-size:xx-large'><b>₹". $payment. "</b></span>";
					echo "<br><br>Please <a href='https://www.instamojo.com/@IITB_Sports/' target='_blank'>Click Here</a> for payment. Type <span style='font-size:large'>'IIT Bombay Athletics Gala'</span> as purpose of payment";
					echo "<br><br><span style='font-size:x-large'><b>NOTE:</b></span> Please save the payment ID. We may require it for verification. Registration will NOT be 	considered complete until above mentioned amount is payed in full<br><br>";

					echo "<br><br>We have also emailed you the details<br>Please contact us if you would like to change any details";
		
					$mail = new YiiMailer();
					$body=nl2br("Name - ". $name. "\nGender - ". $gender. "\nPhone Number - ". $phone. "\nEmail ID - ". $email. "\nCollege/Club - ". $college. "\nCategory - ". $category. "\nRegistered At - ". date('Y-m-d H:i:s'). "\nPayment Status: Not Paid
						<br><br>Thank you for registering. As per your selected events, your total registration fees is <span style='font-size:xx-large'><b>₹". $payment. "</b></span><br><br>Please <a href='https://www.instamojo.com/@IITB_Sports/' target='_blank'>Click Here</a> for payment. Type <span style='font-size:large'>'IIT Bombay Athletics Gala'</span> as purpose of payment<br><br><span style='font-size:x-large'><b>NOTE:</b></span> Please save the payment ID. We may require it for verification. Registration will NOT be considered complete until above mentioned amount is payed in full<br><br>Please contact us if you would like to change any details");

					$subject="Athletics Gala Registration";
	
					$mail->setFrom(Yii::app()->params['adminEmail']);
					$mail->setTo($email);
					$mail->setSubject($subject);
					$mail->setBody($body);		
					$mail->send();
				}

				else echo "Please fill all fields and try again.";
		

			}

			else echo "You may register for a maximum of 5 individual events";

	}


	public function actionSubmit3()     //For Athletics Gala  (IITB Students)
	{

		$connection = Yii::app()->db;
		$name=\Yii::app()->request->getPost('name');
		$email=\Yii::app()->request->getPost('email');
		$phone = \Yii::app()->request->getPost('phone');
		$college = \Yii::app()->request->getPost('college');
		$gender = \Yii::app()->request->getPost('gender');
		$category = \Yii::app()->request->getPost('category');
		$run100 = \Yii::app()->request->getPost('run100');
		$run200 = \Yii::app()->request->getPost('run200');
		$run400 = \Yii::app()->request->getPost('run400');
		$run800 = \Yii::app()->request->getPost('run800');
		$run1500 = \Yii::app()->request->getPost('run1500');
		$hurdles110 = \Yii::app()->request->getPost('hurdles110');
		$hurdles400 = \Yii::app()->request->getPost('hurdles400');
		$longjump = \Yii::app()->request->getPost('longjump');
		$highjump = \Yii::app()->request->getPost('highjump');
		$triplejump = \Yii::app()->request->getPost('triplejump');
		$javelin = \Yii::app()->request->getPost('javelin');
		$shotput = \Yii::app()->request->getPost('shotput');
		$discus = \Yii::app()->request->getPost('discus');
		$polevault = \Yii::app()->request->getPost('polevault');
		$relay100 = \Yii::app()->request->getPost('relay100');
		$relay100_2 = \Yii::app()->request->getPost('relay100_2');
		$relay100_3 = \Yii::app()->request->getPost('relay100_3');
		$relay100_4 = \Yii::app()->request->getPost('relay100_4');
		$relay400 = \Yii::app()->request->getPost('relay400');
		$relay400_2 = \Yii::app()->request->getPost('relay400_2');
		$relay400_3 = \Yii::app()->request->getPost('relay400_3');
		$relay400_4 = \Yii::app()->request->getPost('relay400_4');

		if($category=="Under 16 Category")
		{
			if($gender=="m") $category="Men's Under 16 Category";

			else $category="Women's Under 16 Category";
		}

		if($category=="Under 14 Category")
		{
			if($gender=="m") $category="Men's Under 14 Category";

			else $category="Women's Under 14 Category";
		}


			$post=new Athleticsgala();
			$post->Name=$name;
			$post->Email=$email;
			$post->Phone=$phone;
			$post->College=$college;
			$post->Gender=$gender;
			$post->Category=$category;
			$post->Time=date('Y-m-d H:i:s');
			$post->run100=$run100;
			$post->run200=$run200;
			$post->run400=$run400;
			$post->run800=$run800;
			$post->run1500=$run1500;
			$post->hurdles110=$hurdles110;
			$post->hurdles400=$hurdles400;
			$post->longjump=$longjump;
			$post->highjump=$highjump;
			$post->triplejump=$triplejump;
			$post->javelin=$javelin;
			$post->shotput=$shotput;
			$post->discus=$discus;
			$post->polevault=$polevault;
			$post->relay100=$relay100;
			$post->relay100_2=$relay100_2;
			$post->relay100_3=$relay100_3;
			$post->relay100_4=$relay100_4;
			$post->relay400=$relay400;
			$post->relay400_2=$relay400_2;
			$post->relay400_3=$relay400_3;
			$post->relay400_4=$relay400_4;

			$payment1=$run100+$run200+$run400+$run800+$run1500+$hurdles110+$hurdles400+$longjump+$highjump+$triplejump+$javelin+$shotput+$discus+$polevault;
	
			if($payment1<=5)
			{
				$payment2=$relay100+$relay400;
				$payment=$payment1*50+$payment2*150;

				if($post->save())
				{
					echo "<h4>Selected Events:</h4>";
					if($run100==1) echo "100m<br>";
					if($run200==1) echo "200m<br>";
					if($run400==1) echo "400m<br>";
					if($run800==1) echo "800m<br>";
					if($run1500==1) echo "1500m<br>";
					if($hurdles110==1) echo "110m Hurdles<br>";
					if($hurdles400==1) echo "400m Hurdles<br>";
					if($longjump==1) echo "Long Jump<br>";
					if($highjump==1) echo "High Jump<br>";
					if($triplejump==1) echo "Triple Jump<br>";
					if($javelin==1) echo "Javelin Throw<br>";
					if($shotput==1) echo "Shotput<br>";
					if($discus==1) echo "Discus Throw<br>";
					if($polevault==1) echo "Pole Vault<br>";
					if($relay100==1) echo "4x100m Relay<br>";
					if($relay400==1) echo "4x400m Relay<br>";

					echo"<br>Category: ". $category;

					echo "<br><br>Thank you for registering. As per your selected events, your total registration 	fees is <span style='font-size:xx-large'><b>₹". $payment. "</b></span>";
					echo "<br><br>Please <a href='https://www.instamojo.com/@IITB_Sports/' target='_blank'>Click Here</a> for payment. Type <span style='font-size:large'>'IIT Bombay Athletics Gala'</span> as purpose of payment";
					echo "<br><br><span style='font-size:x-large'><b>NOTE:</b></span> Please save the payment ID. We may require it for verification. Registration will NOT be 	considered complete until above mentioned amount is payed in full<br><br>";

					echo "<br><br>We have also emailed you the details<br>Please contact us if you would like to change any details";
		
					$mail = new YiiMailer();
					$body=nl2br("Name - ". $name. "\nGender - ". $gender. "\nPhone Number - ". $phone. "\nEmail ID - ". $email. "\nCollege/Club - ". $college. "\nCategory - ". $category. "\nRegistered At - ". date('Y-m-d H:i:s'). "\nPayment Status: Not Paid
						<br><br>Thank you for registering. As per your selected events, your total registration fees is <span style='font-size:xx-large'><b>₹". $payment. "</b></span><br><br>Please <a href='https://www.instamojo.com/@IITB_Sports/' target='_blank'>Click Here</a> for payment. Type <span style='font-size:large'>'IIT Bombay Athletics Gala'</span> as purpose of payment<br><br><span style='font-size:x-large'><b>NOTE:</b></span> Please save the payment ID. We may require it for verification. Registration will NOT be considered complete until above mentioned amount is payed in full<br><br>Please contact us if you would like to change any details");

					$subject="Athletics Gala Registration";
	
					$mail->setFrom(Yii::app()->params['adminEmail']);
					$mail->setTo($email);
					$mail->setSubject($subject);
					$mail->setBody($body);		
					$mail->send();
				}

				else echo "Please fill all fields and try again.";
		

			}

			else echo "You may register for a maximum of 5 individual events";

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