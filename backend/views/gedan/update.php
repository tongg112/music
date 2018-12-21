<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gedan */

$this->title = '编辑歌单: ' . $model->list_name;
$this->params['breadcrumbs'][] = ['label' => '歌单列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gedan_id, 'url' => ['view', 'id' => $model->gedan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gedan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
