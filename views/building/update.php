<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = 'Изменение здания ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="building-update">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
