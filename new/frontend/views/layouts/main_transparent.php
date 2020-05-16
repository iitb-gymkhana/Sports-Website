<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\assets\LayoutAsset;
use frontend\assets\LayoutJSAsset;

LayoutAsset::register($this);
LayoutJSAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header"> <header id="fh5co-header-section">  <div class="container">
            <div class="nav-header">
                <!-- //<a href="/site/" class="js-fh5co-nav-toggle fh5co-nav-toggle" style="float: left;">IIT BOMBAY SPORTS</a> -->
                <?php echo Html::a(
                    Html::img('images/iitbsports-logo.png', ['style' => 'float:left; height:80px;']),
                    'index')
                ?>
                
                <nav id="fh5co-menu-wrap" role="navigation">
                    <?php
                    echo Nav::widget([
                        'items' => [
                            [
                                'label' => 'UPDATES',
                                'url' => ['/site/login'],
                                'items' => [
                                    ['label' => 'NEWS', 'url' => '/site/kreeda'],
                                    ['label' => 'GC TALLY', 'url' => '/site/kreeda'],
                                    ['label' => 'KREEDA', 'url' => '/site/kreeda'],
                                    ['label' => 'NEWSLETTER', 'url' => '/site/newsletter'],
                                ],
                                'dropDownOptions' => ['class' => 'fh5co-sub-menu'],
                                'linkOptions' => ['class' => 'fh5co-sub-ddown']
                            ],
                            [
                                'label' => 'EVENTS',
                                'url' => ['/site/about'],
                                'items' => [
                                    ['label' => 'CALENDAR', 'url' => '/site/kreeda'],
                                    ['label' => 'TREKS', 'url' => '/site/newsletter'],
                                    ['label' => 'WORKSHOPS', 'url' => '/site/newsletter'],
                                ],
                                'dropDownOptions' => ['class' => 'fh5co-sub-menu'],
                                'linkOptions' => ['class' => 'fh5co-sub-ddown']
                            ],
                            [
                                'label' => 'SPORTS',
                                'url' => ['/site/about'],
                                'items' => [
                                    ['label' => 'KREEDA', 'url' => '/site/kreeda'],
                                    ['label' => 'NEWSLETTER', 'url' => '/site/newsletter'],
                                ],
                                'dropDownOptions' => ['class' => 'fh5co-sub-menu'],
                                'linkOptions' => ['class' => 'fh5co-sub-ddown']
                            ],
                            [
                                'label' => 'PEOPLE',
                                'url' => ['/site/about'],
                                'items' => [
                                    ['label' => 'HALL OF FAME', 'url' => '/site/kreeda'],
                                    ['label' => 'COUNCIL', 'url' => '/site/newsletter'],
                                    ['label' => 'STAFF', 'url' => '/site/newsletter'],
                                ],
                                'dropDownOptions' => ['class' => 'fh5co-sub-menu'],
                                'linkOptions' => ['class' => 'fh5co-sub-ddown']
                            ]
                        ],
                        'options' => ['id' => 'fh5co-primary-menu', 'class' => 'sf-menu sf-js-enabled sf-arrows'],
                    ]);
                    ?>
                </nav>
            </div>
        </div></header></div>

        <?= $content ?>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
