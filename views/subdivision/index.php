<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubdivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подразделения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subdivision-index">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'building_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a('Посмотреть', $url, ['class' => 'btn btn-info m-1']);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a('Изменить', $url, ['class' => 'btn btn-primary m-1']);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('Удалить', $url, ['class' => 'btn btn-danger m-1']);
                    },
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

    <p>
        <?= Html::a('Добавить подразделение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
