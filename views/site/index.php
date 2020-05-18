<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;

/* @var $data_provider yii\data\BaseDataProvider */
/* @var $item_view_name yii\web\View */

$this->title = 'Campus';
?>
<?php echo ListView::widget([
    'dataProvider' => $data_provider,
    'itemView' => $item_view_name,
]); ?>