<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserTrackers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-trackers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'body_tracker_id')->textInput() ?>

    <?= $form->field($model, 'diet_tracker_id')->textInput() ?>

    <?= $form->field($model, 'sleep_tracker_id')->textInput() ?>

    <?= $form->field($model, 'water_tracker_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
