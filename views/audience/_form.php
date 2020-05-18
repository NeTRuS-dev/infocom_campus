<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Audience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audience-form mw-75">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'audience_number')->textInput() ?>

    <?= $form->field($model, 'floor_number')->textInput() ?>

    <?= $form->field($model, 'audience_width')->textInput() ?>

    <?= $form->field($model, 'audience_length')->textInput() ?>

    <?= $form->field($model, 'number_of_seats')->textInput() ?>

    <?= $form->field($model, 'audience_type_id')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
