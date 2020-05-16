<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayoutJSAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [
    	'js/modernizr-2.6.2.min.js'
	];
	public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
	public $depends = [];
}
