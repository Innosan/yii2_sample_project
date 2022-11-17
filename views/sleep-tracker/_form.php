<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SleepTracker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sleep_time')->textInput() ?>

    <?= $form->field($model, 'is_daytime_sleep')->checkbox() ?>

    <?= $form->field($model, 'wake_up_times')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Next', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
