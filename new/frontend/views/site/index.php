<?php

/* @var $this yii\web\View */
use frontend\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);

$this->title = 'IIT Bombay Sports';
?>

<div class="fh5co-hero" style="height:100vh">
    <div class="fh5co-overlay" style = "height:100vh;background:url(images/index-bg-1.jpg) no-repeat center center fixed; background-size:cover"></div>
    <!-- <?= Html::img('@web/images/index-bg-1.jpg', ['class' => 'fh5co-overlay', 'alt' => 'My logo', 'style'=>'center fixed;', 'title'=>'Welcome to IIT Bombay Sports']) ?> -->
    <div class="fh5co-cover text-center" style="height:100vh" data-stellar-background-ratio="0.5">
        <div class="desc animate-box">
          <h2>UNTIL. VICTORY. ALWAYS.</h2><br>
          <span><a class="btn btn-primary" href="index.php?r=site/login">SIGN IN</a></span>
        </div>
    </div>
</div>
    
<div id="fh5co-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3><a href="index.php?r=about/news" style="color:inherit">LATEST NEWS</a></h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>

<div class="fh5co-hero" style="height:400px">
    <div class="fh5co-overlay" style = "background:url(images/index-bg-2.jpg) no-repeat center fixed; background-size:cover;height:100%">
        
    </div>
</div>

<div id="fh5co-blog-section">
    <div class="container" style="height:80%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3 class="text-center top-space" style="margin-top:30px;"><a href="index.php?r=events/calendar" style="color:inherit">Upcoming Events </a></h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
           
        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
