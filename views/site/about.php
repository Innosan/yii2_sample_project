<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
?>
<div class="site-about">
    <h1 class="about-heading"><?= Yii::$app->name = "Foodie" ?></h1>

    <p class="about-title">
        Foodie - beautiful, yet lightweight health tracker,<br>that allows you to control your state, like weight, hydration level or something like that;
    </p>

    <div class="about-redirections">
        <a href="login.php">Login</a>
        <br>
        <p>to continue, or <br></p>
        <a href="signup.php">Sign Up</a><br>
        <p>to create a brand new account and develop a better version of yourself!</p>
    </div>
</div>
