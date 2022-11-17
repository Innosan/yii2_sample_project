<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WaterTracker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cup_counter')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Next', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
