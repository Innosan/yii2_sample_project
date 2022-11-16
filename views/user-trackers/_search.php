<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserTrackersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-trackers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'body_tracker_id') ?>

    <?= $form->field($model, 'diet_tracker_id') ?>

    <?= $form->field($model, 'sleep_tracker_id') ?>

    <?= $form->field($model, 'water_tracker_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
