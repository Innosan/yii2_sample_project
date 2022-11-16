<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BodyTracker $model */

$this->title = 'Create Body Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Body Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body-tracker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
