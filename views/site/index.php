<?php

/** @var yii\web\View $this */

use \yii\helpers\Url;

if ( Yii::$app->user->isGuest )
    return \Yii::$app->response->redirect(['site/about']);

$this->title = 'Foodie';

$trackers = \app\models\UserTrackers::findOne(Yii::$app->user->id);
?>
<div class="site-index">

    <div class="d-flex justify-content-between mt-4">
        <p class="greeting">Ну привет,<br><?= Yii::$app->user->identity->username?>!</p>
        <div class="rating-container">
            <p class="rating-heading mb-2">
                Мой Рейтинг
            </p>
            <p class="rating-value glitch">
                <span aria-hidden="true">ультрамегахорош</span>
                ультрамегахорош
                <span aria-hidden="true">ультрамегахорош</span>
            </p>
        </div>
    </div>

    <div class="body-content w-75 m-auto d-flex justify-content-between">

        <div class="trackers-container d-flex">
            <div class="tracker-card tall body-weight">
                <div class="card-heading">
                    <img class="card-icon" src="../../web/media/icons/barbell.svg"/>
                    <p class="card-title">Вес</p>
                </div>
                <img class="card-subicon" src=""/>
                <p class="card-content"><?=$trackers->bodyTracker->body_weight?> кг.,<br>сбросить бы</p>
            </div>
            <div class="tracker-cards-container d-flex flex-column justify-content-between">
                <div class="tracker-card wide sleep">
                    <div class="card-heading">
                        <img class="card-icon" src="../../web/media/icons/moon.svg"/>
                        <p class="card-title">Сон</p>
                    </div>
                    <p class="card-content"><?=$trackers->sleepTracker->sleep_time?> часа(ов) за сегодня,<br>довольно мало</p>
                    <p class="card-content">просыпался <?=$trackers->sleepTracker->wake_up_times?> раз(а)</p>
                </div>
                <div class="tracker-card wide water">
                    <div class="card-heading">
                        <img class="card-icon" src="../../web/media/icons/Water%20Glass.svg"/>
                        <p class="card-title">Водичка</p>
                    </div>
                    <p class="card-content"><?=$trackers->waterTracker->cup_counter?> стакан(а)<br><?=(int)$trackers->waterTracker->cup_counter * 250?>ml.</p>
                </div>
            </div>
            <div class="tracker-card ultrawide mt-4 food">
                <div class="card-heading">
                    <img class="card-icon" src="../../web/media/icons/Spoon.svg"/>
                    <p class="card-title">Хавчик</p>
                </div>
                <h1><?=$trackers->dietTracker->calories?> калорий</h1>
<!--                <div class="input-group justify-content-between w-75 calories-inputs mt-4">-->
<!--                    <label for="mondayCalories">-->
<!--                        Mon-->
<!--                        <input id="mondayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="tuesdayCalories">-->
<!--                        Tue-->
<!--                        <input id="tuesdayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="wednesdayCalories">-->
<!--                        Wed-->
<!--                        <input id="wednesdayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="thursdayCalories">-->
<!--                        Thu-->
<!--                        <input id="thursdayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="fridayCalories">-->
<!--                        Fri-->
<!--                        <input id="fridayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="saturdayCalories">-->
<!--                        Sat-->
<!--                        <input id="saturdayCalories" type="range">-->
<!--                    </label>-->
<!--                    <label for="sundayCalories">-->
<!--                        Sun-->
<!--                        <input id="sundayCalories" type="range">-->
<!--                    </label>-->
<!--                </div>-->
            </div>
        </div>
        <div class="daily-tasks">
            <label for="taskCheckbox">
                <input name="task" id="taskCheckbox" type="checkbox">
                покушал утром?
            </label>
            <label for="taskCheckbox">
                <input name="task" id="taskCheckbox" type="checkbox">
                покушал днем?
            </label>
            <label for="taskCheckbox">
                <input name="task" id="taskCheckbox" type="checkbox">
                покушал вечером?
            </label>
            <label for="taskCheckbox">
                <input name="task" id="taskCheckbox" type="checkbox">
                покушал ночью?
            </label>
            <label for="taskCheckbox">
                <input name="task" id="taskCheckbox" type="checkbox">
                поспал?
            </label>
        </div>

    </div>
</div>
