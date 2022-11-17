<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WaterTracker $model */

$this->title = 'Create Water Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Water Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="water-tracker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
