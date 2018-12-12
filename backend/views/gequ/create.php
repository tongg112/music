<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gequ */

$this->title = 'Create Gequ';
$this->params['breadcrumbs'][] = ['label' => 'Gequs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gequ-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
