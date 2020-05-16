<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayoutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/icomoon.css',
        'css/bootstrap.css',
        'css/superfish.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easing.1.3.js',
        'js/bootstrap.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.stellar.min.js',
        'js/hoverIntent.js',
        'js/superfish.js',
        'js/main.js',
    ];
    public $depends = [];
}
