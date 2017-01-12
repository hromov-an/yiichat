<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use \sintret\chat\ChatRoom;

class ChatController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionSendChat() {
		var_dump(Yii::$app->request->post());
		if (!empty(Yii::$app->request->post())) {
			echo ChatRoom::sendChat(Yii::$app->request->post());
		}
	}
}