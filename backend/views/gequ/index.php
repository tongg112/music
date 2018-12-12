<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GequSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gequs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gequ-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gequ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gequ_id',
            'user_id',
            'song_name',
            'singer',
            'album',
            //'release_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
