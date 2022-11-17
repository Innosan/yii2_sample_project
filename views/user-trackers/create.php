<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserTrackers $model */

$this->title = 'Create User Trackers';
$this->params['breadcrumbs'][] = ['label' => 'User Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-trackers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
