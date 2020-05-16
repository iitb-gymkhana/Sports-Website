<?php

$urlRules = require __DIR__ . '/url-rules.php';
$db = require __DIR__ . '/database.php';
$response = require __DIR__ . '/response.php';

return array_merge([
    // Assets
    'assetManager' => ['bundles' => false],             // Disable all asset bundles

    // OAuth2.0 Authentication extension
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'sso' => [
                'class' => 'api\components\SSO',
                'clientId' => 'Q6xnfRDrTIETnBlmErxKtaguAbMJkeUCTFCTEzT0',
                'clientSecret' => 'tX1E3XVb4jAzJUOXurcJDk5UKnh1RLsZ96d6HngA7CQ25cEuKMIl51GQjWLffsw5cy9htRWbYiXZG6dh2MNtjM8ZFWfPM5O97AHxSluKU64uWFewvHJgx5YrjzIcEqeh',
             ],
        ],
    ],
	
    // Database
    'db' => $db,
    
    // User relevant properties
    'user' => [
        'class' => 'api\models\User',
        'identityClass' => 'api\models\UserIdentity',        //TODO
        'enableSession' => false,                       // Disable client sessions on server
        'loginUrl' => null,
    ],

    // Yii Logs
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],

    // Error Handler
    'errorHandler' => [
        'errorAction' => false ? 'error' : 'site/error',
    ],

    // URL Routing
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,                      // Don't show "index.php" in URL
        'enableStrictParsing' => false,                 // Allow only described URLs for access
        'rules' => $urlRules,
    ],

    // Application request settings
    'request' => [
        'class' => 'api\components\Request',
        'parsers' => [
            'application/json' => 'yii\web\JsonParser', // JSON request
        ],
        'enableCookieValidation' => false,              // Disable cookies
    ],

    // Application response settings
    'response' => $response,
]);
