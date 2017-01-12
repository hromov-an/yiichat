<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Привет <?=Yii::$app->user->identity->username?>!</h1>

        <p class="lead">Добро пожаловать в наш чат.</p>

        <?php
        if(Yii::$app->user->isGuest)
            echo '<p>Для доступа вам надо Авторизоваться!</p>
            <p><a class="btn btn-lg btn-success" href="/site/login">Войти</a></p>
            <p>или Зарегистрироваться</p>
            <p><a class="btn btn-lg btn-success" href="/site/signup">Зарегистрироваться</a></p>';
        ?>

    </div>

    <div class="body-content">

    </div>
</div>
