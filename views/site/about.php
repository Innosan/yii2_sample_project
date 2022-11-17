<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
?>
<div class="site-about">
    <h1 class="about-heading"><?= Yii::$app->name = "Foodie" ?></h1>

    <p class="about-title">
        Foodie - beautiful, yet lightweight health tracker,<br>that allows you to control your state, like weight, hydration level or something like that
    </p>

    <div class="about-redirections">
        <div class="a-container">
            <a href="?r=site%2Flogin">Login</a>
            <p>to continue</p>
        </div>
        <div class="a-container">
            <a href="?r=site%2Fsign-up">Sign Up</a>
            <p>to create a brand-new account<br>and develop a better version of yourself!</p>
        </div>
    </div>
</div>
