<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gedan */

$this->title = '创建歌单';
$this->params['breadcrumbs'][] = ['label' => '歌单列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gedan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
