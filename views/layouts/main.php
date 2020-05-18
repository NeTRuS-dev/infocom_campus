<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <?php
    NavBar::begin(['brandLabel' => 'Кампус']);
    echo Nav::widget([
        'items' => [
            ['label' => 'Список лекционных аудиторий', 'url' => ['/']],
            ['label' => 'Список корпусов университета', 'url' => ['/buildings-list']],
            ['label' => 'Иерархический список корпусов', 'url' => ['/hierarchical-list']],
        ],
        'options' => ['class' => 'navbar-nav ml-lg-auto flex-lg-nowrap pr-lg-5 justify-content-lg-between'],
    ]);
    NavBar::end();?>
</header>
<div class="wrap">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
