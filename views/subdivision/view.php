<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subdivision */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subdivisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subdivision-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'building_id',
        ],
    ]) ?>
    <div class="d-flex justify-content-center">
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary m-3']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger m-3',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить это подразделение?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
