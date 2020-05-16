<?php
namespace api\components;

use yii\authclient\OAuth2;

/**
 * Custom auth client to connect with Gymkhana SSO, IITB
 */
class SSO extends OAuth2
{
	/**
 	* {@inheritdoc}
 	*/
 	public $autoRefreshAccessToken = true;

    /**
 	* {@inheritdoc}
 	*/
 	public $authUrl = 'https://gymkhana.iitb.ac.in/sso/oauth/authorize/';

    /**
 	* {@inheritdoc}
 	*/
 	public $tokenUrl = 'https://gymkhana.iitb.ac.in/sso/oauth/token/';

    /**
 	* {@inheritdoc}
 	*/
 	public $apiBaseUrl = 'https://gymkhana.iitb.ac.in/sso/user/api/user/';

    /**
 	* {@inheritdoc}
 	*/
 	public $scope = 'basic profile sex ldap phone insti_address program secondary_emails';
    
    /**
 	* {@inheritdoc}
 	*/
 	protected function initUserAttributes()
    {
    	$resources = [
    		'first_name', 'last_name', 'type',
    		'sex', 'username', 'program', 'email',
    		'insti_address', 'mobile', 'roll_number',
    		'contacts', 'secondary_emails'
    	];
    	$response = $this->createApiRequest()
        	->setMethod('GET')
        	->setUrl($this->apiBaseUrl)
        	->setData(['fields' => implode(',', $resources)])
        	->send();

        if(!$response->isOk)
        	throw new \yii\web\ServerErrorHttpException('Unable to get user resources from SSO');

        return $response->data;
    }
}
