<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Training';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Training">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="body-content w-75 m-auto d-flex justify-content-between">
        <div class="trainings-container d-flex">
            <div class="training-card tall body-weight">
                <div class="card-heading-training">
                    <img class="card-icon-training" src="../../web/media/icons/barbell.svg"/>
                    <p class="card-title">Анигилятор вселенной</p>
                </div>
                <div class="list-card">
                    <div class="card-description-training">
                        <div>
                            <img class="card-pictures-training" src="../../web/media/pictures/image%201.png">
                        </div>
                        <div class="container-desc">
                            <p class="training-title">ЖЕСТОЧАЙШИЙ
                                БЕГ</p>
                            <p class="training-desc">Почувствуйте силу великого сенатора Армстронга, <br>
                                станьте поездом, сбивающим всех <br>
                                на своем пути к успеху</p>
                            <div class="training-btn">
                                <p class="training-time">
                                    1.5 часа
                                </p>
                                <div class="training-task">
                                    <label for="trainingCheckbox">
                                        <input name="task" id="trainingCheckbox" type="checkbox">
                                        +База
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-description-training">
                        <div>
                            <img class="card-pictures-training" src="../../web/media/pictures/image%202.png">
                        </div>
                        <div class="container-desc">
                            <p class="training-title">РУБИТЬ
                                КАТАНА ДЕРЕВО</p>
                            <p class="training-desc">Вы - Данте, величайший убйца демонов, гроза пива и богов. <br>
                                Рассекайте катаной саму материю, и, однажды, <br>
                                к вам придет Кодзима и подарит ящик белого монстра.</p>
                            <div  class="training-btn">
                                <p class="training-time">
                                    1.5 часа
                                </p>
                                <div class="training-task">
                                    <label for="trainingCheckbox">
                                        <input name="task" id="trainingCheckbox" type="checkbox">
                                        +База
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <code><?= __FILE__ ?></code>
</div>
