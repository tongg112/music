<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Gedan */

$this->title = $model->list_name;
$this->params['breadcrumbs'][] = ['label' => '歌单列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gedan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gedan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gedan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'gedan_id',
            // 'user_id',
            [
                'label' => '歌单名称',
                'value' => $model->list_name,
            ],
            'description:html',
            [
                'label' => '创建时间',
                'value' =>date('Y-m-d H:i:s',intval($model->created)),
            ],
             'updated:datetime',
        ],
    ]) ?>

</div>
