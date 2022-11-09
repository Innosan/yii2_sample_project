<?php

/** @var yii\web\View $this */

$this->title = 'Foodie';
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
            <div class="tracker-card tall">
                <img class="card-icon" src=""/>
                <p class="card-title">Вес</p>
                <img class="card-subicon" src=""/>
                <p class="card-content">240 кг.,<br>сбросить бы</p>
            </div>
            <div class="tracker-cards-container d-flex flex-column justify-content-between">
                <div class="tracker-card wide">
                    <img class="card-icon" src=""/>
                    <p class="card-title">Сон</p>
                    <p class="card-content">4 часа за сегодня,<br>довольно мало</p>
                </div>
                <div class="tracker-card wide">
                    <img class="card-icon" src=""/>
                    <p class="card-title">Водичка</p>
                    <p class="card-content">3 стакана<br>700ml.</p>
                </div>
            </div>
            <div class="tracker-card ultrawide mt-4">
                <img class="card-icon" src=""/>
                <p class="card-title">Хавчик</p>
                <div class="input-group">
                    <input type="range">
                    <input type="range">
                    <input type="range">
                    <input type="range">
                    <input type="range">
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
