<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AudienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Аудитории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audience-index">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="h-100 w-100 d-flex justify-content-center align-items-center flex-column">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'summary' => '',
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

//            'id',
                'audience_number',
                'floor_number',
                'audience_width',
                'audience_length',
                'number_of_seats',
                [
                    'attribute' => 'audienceType.name_of_type',
                ],
//            'audience_type_id',
//            'subdivision_id',

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
        <p class="text-center">
            <?= Html::a('Добавить аудиторию', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <?php Pjax::end(); ?>

</div>
