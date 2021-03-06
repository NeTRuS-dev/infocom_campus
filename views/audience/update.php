<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Audience */

$this->title = 'Изменение аудитории №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Audiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audience-update">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
