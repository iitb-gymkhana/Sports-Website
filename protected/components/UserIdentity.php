<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	private $_id;

	public function authenticate()
	{

	  $options = Yii::app()->params['ldap'];
	  $dc_string = "dc=" . implode(",dc=",$options['dc']);
	   
	  $connection = ldap_connect($options['host']);
	  ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
	  ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);

	  $sr = ldap_search($connection,"{$dc_string}","uid={$this->username}");
 	  $info = ldap_get_entries($connection, $sr);

	  if(isset($info[0]['dn']))
	  {
	      // Note: in general it is bad to hide errors, however we're checking for an error below
 	  	  $ldapId = $info[0]['dn'];
	      $bind = @ldap_bind($connection, $ldapId, $this->password);
	   
	      if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
	      else 
	      {
	      	$this->errorCode = self::ERROR_NONE;

	      	$this->_id = $info[0]['cn'][0];
			$user = SportsCouncil::model()->findByAttributes(array('ldap'=>$this->username));
			$this->setState('ldap', $this->username);
			$this->setState('rollno', $info[0]['employeenumber'][0]);
	      	if(!isset($user)) { $this->setState('post', "user"); }
	      	else { $this->setState('post', $user->category); $this->setState('sport', $user->post); }
	      	
	      }

	  }
	   return !$this->errorCode;
	}

	public function getId()
	{
	    return $this->_id;
	}

}