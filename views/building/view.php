<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="building-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>
    <div class="d-flex justify-content-center">
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary m-3']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger m-3',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить это здание?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
