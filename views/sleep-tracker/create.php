<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SleepTracker $model */

$this->title = 'Create Sleep Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Sleep Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sleep-tracker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
