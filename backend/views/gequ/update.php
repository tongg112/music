<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gequ */

$this->title = 'Update Gequ: ' . $model->gequ_id;
$this->params['breadcrumbs'][] = ['label' => 'Gequs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gequ_id, 'url' => ['view', 'id' => $model->gequ_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gequ-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
