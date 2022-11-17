<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DietTracker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calories')->textInput() ?>

    <?= $form->field($model, 'is_eaten_breakfast')->checkbox() ?>

    <?= $form->field($model, 'diet_date')->widget(\yii\jui\DatePicker::className(), [
        'options' => ['class' => 'form-control'],
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Go to Dashboard', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
