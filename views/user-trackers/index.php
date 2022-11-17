<?php

use app\models\UserTrackers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserTrackersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User Trackers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-trackers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Trackers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'body_tracker_id',
            'diet_tracker_id',
            'sleep_tracker_id',
            'water_tracker_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserTrackers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'user_id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>


</div>
