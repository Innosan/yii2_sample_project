<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DietTracker $model */

$this->title = 'Diet';
$this->params['breadcrumbs'][] = ['label' => 'Diet Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tracker-create">

    <h1 class="tracker-title"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
