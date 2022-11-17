<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WaterTracker $model */

$this->title = 'Water';
?>
<div class="tracker-create">

    <h1 class="tracker-title"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
