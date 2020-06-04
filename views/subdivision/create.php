<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subdivision */

$this->title = 'Создать подразделение';
$this->params['breadcrumbs'][] = ['label' => 'Subdivisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdivision-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
