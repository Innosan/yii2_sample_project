<?php

/** @var yii\web\View $this */

$this->title = 'Foodie';

$tracker = \app\models\DietTracker::findOne('1');
?>
<div class="site-index">

    <div class="d-flex justify-content-between mt-4">
        <p class="greeting">Ну привет,<br>Пипа!</p>
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
                <p class="card-content"><?= $tracker['calories']?> кг.,<br>сбросить бы</p>
            </div>
            <div class="tracker-cards-container d-flex flex-column justify-content-between">
                <div class="tracker-card wide sleep">
                    <div class="card-heading">
                        <img class="card-icon" src="../../web/media/icons/moon.svg"/>
                        <p class="card-title">Сон</p>
                    </div>
                    <p class="card-content">4 часа за сегодня,<br>довольно мало</p>
                </div>
                <div class="tracker-card wide water">
                    <div class="card-heading">
                        <p class="card-title">Водичка</p>
                        <img class="card-icon" src="../../web/media/icons/Water%20Glass.svg"/>
                    </div>
                    <p class="card-content">3 стакана<br>700ml.</p>
                </div>
            </div>
            <div class="tracker-card ultrawide mt-4 food">
                <div class="card-heading">
                    <img class="card-icon" src="../../web/media/icons/Spoon.svg"/>
                    <p class="card-title">Хавчик</p>
                </div>
                <div class="input-group justify-content-between w-75 calories-inputs mt-4">
                    <label for="mondayCalories">
                        Mon
                        <input id="mondayCalories" type="range">
                    </label>
                    <label for="tuesdayCalories">
                        Tue
                        <input id="tuesdayCalories" type="range">
                    </label>
                    <label for="wednesdayCalories">
                        Wed
                        <input id="wednesdayCalories" type="range">
                    </label>
                    <label for="thursdayCalories">
                        Thu
                        <input id="thursdayCalories" type="range">
                    </label>
                    <label for="fridayCalories">
                        Fri
                        <input id="fridayCalories" type="range">
                    </label>
                    <label for="saturdayCalories">
                        Sat
                        <input id="saturdayCalories" type="range">
                    </label>
                    <label for="sundayCalories">
                        Sun
                        <input id="sundayCalories" type="range">
                    </label>
                </div>
            </div>
        </div>
        <div class="daily-tasks">
            <label for="taskCheckbox">
                покушал утром?
                <input name="task" id="taskCheckbox" type="checkbox">
            </label>
        </div>

    </div>
</div>
