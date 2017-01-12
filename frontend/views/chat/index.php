<?php

/* @var $this yii\web\View */
use \sintret\chat\ChatRoom;
$this->title = 'My Yii Chat';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
	            <?= ChatRoom::widget(['url'=>  \yii\helpers\Url::to(['/chat/send-chat'])]); ?>
            </div>
        </div>

    </div>
</div>
<script>
    //Костыть, не видно кнопку отправки.
    document.getElementsByClassName("fa fa-plus")[0].innerHTML = "Отправить!";
</script>