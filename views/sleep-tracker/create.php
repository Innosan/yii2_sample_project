<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SleepTracker $model */
/** @var app\models\DietTracker $dietModel */

$this->title = 'Create Sleep Tracker';
?>
<div class="sleep-tracker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
