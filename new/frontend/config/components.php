<?php

$urlRules = array_merge(
    require __DIR__ . '/url-rules.php'
);

return [
	'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'linkAssets' => true,
            'bundles' => [
                // Disabling default css and js for Yii Nav and Dropdown widget since they interfere with the custom styles
                // Some options in Nav widget have also been disabled in init() function in yii\bootstrap\Nav
                'yii\bootstrap\BootstrapAsset' => ['css' => [], 'js' => []],
                'yii\bootstrap\BootstrapPluginAsset' => ['css' => [], 'js' => []],
                'yii\web\JqueryAsset' => ['css' => [], 'js' => []],
            ],
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => $urlRules,
        ],
];