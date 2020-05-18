<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AudienceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audience-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'audience_number') ?>

    <?= $form->field($model, 'floor_number') ?>

    <?= $form->field($model, 'audience_width') ?>

    <?= $form->field($model, 'audience_length') ?>

    <?php // echo $form->field($model, 'number_of_seats') ?>

    <?php // echo $form->field($model, 'audience_type_id') ?>

    <?php // echo $form->field($model, 'subdivision_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
