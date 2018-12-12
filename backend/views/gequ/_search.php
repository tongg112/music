<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GequSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gequ-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gequ_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'song_name') ?>

    <?= $form->field($model, 'singer') ?>

    <?= $form->field($model, 'album') ?>

    <?php // echo $form->field($model, 'release_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
