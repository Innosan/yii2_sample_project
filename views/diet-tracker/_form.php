<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DietTracker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="diet-tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calories')->textInput() ?>

    <?= $form->field($model, 'is_eaten_breakfast')->textInput() ?>

    <?= $form->field($model, 'diet_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
