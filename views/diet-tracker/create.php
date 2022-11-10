<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DietTracker $model */

$this->title = 'Create Diet Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Diet Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diet-tracker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
