<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BodyTracker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="body-tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'body_weight')->textInput() ?>

    <?= $form->field($model, 'body_height')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
