<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DietTracker $model */

$this->title = 'Update Diet Tracker: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Diet Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diet-tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
