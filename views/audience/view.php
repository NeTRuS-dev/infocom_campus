<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Audience */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Audiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audience-view">

    <h1 class="text-center">Аудитория №<?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'audience_number',
            'floor_number',
            'audience_width',
            'audience_length',
            'number_of_seats',
            'audience_type_id',
            'subdivision_id',
        ],
    ]) ?>

    <div class="d-flex justify-content-center">
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary m-3']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger m-3',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту аудиторию?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
