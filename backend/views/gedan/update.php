<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gedan */

$this->title = 'Update Gedan: ' . $model->gedan_id;
$this->params['breadcrumbs'][] = ['label' => 'Gedans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gedan_id, 'url' => ['view', 'id' => $model->gedan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gedan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
