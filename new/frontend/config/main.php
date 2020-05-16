<?php

/* Include debug functions */
require_once(__DIR__.'/functions.php');

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);

$components = array_merge(
    require __DIR__ . '/components.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'IIT Bombay Sports',
    'homeUrl' => 'https://www.gymkhana.iitb.ac.in/~sports',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@assetroot' => dirname(dirname(__DIR__)) . '/assets/',
        '@asset' => dirname(dirname(__DIR__)) . '/assets/'
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => $components,
    'params' => $params,
];
