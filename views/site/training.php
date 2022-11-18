<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$exercises[] = app\models\Exercise::find()->indexBy('id')->all();
?>
<div class="Training">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="body-content w-75 m-auto d-flex justify-content-between">
        <div class="trainings-container d-flex">
            <div class="training-card tall body-weight">
                <div class="card-heading-training">
                    <img class="card-icon-training" src="../../web/media/icons/barbell.svg"/>
                    <p class="card-title">Анигилятор вселенной</p>
                    <a class="link" href="?r=exercise%2Fcreate">Add Exercise</a>
                </div>
                <div class="list-card">
                    <?php foreach ($exercises[0] as $exercise) {?>
                        <div class="card-description-training">
                            <div>
                                <img class="card-pictures-training"">
                            </div>
                            <div class="container-desc">
                                <p class="training-title"><?=$exercise->attributes['title']?></p>
                                <p class="training-desc"><?=$exercise->attributes['description']?></p>
                                <div class="training-btn">
                                    <p class="training-time">
                                        <?=$exercise->attributes['time_to_complete']?> часа
                                    </p>
                                    <div class="training-task">
                                        <label for="trainingCheckbox">
                                            <input name="task" id="trainingCheckbox" type="checkbox" value="<?=$exercise->attributes['is_completed']?>">
                                            +База
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
