<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use \sintret\chat\ChatRoom;

class ChatController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@']
					],
				],
				'denyCallback' => function($rule, $action) {
					Yii::$app->session->setFlash('error', 'Для доступа к этой странице, вам надо Авторизоваться!');
					return $action->controller->redirect('/site/login');
				},
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionSendChat() {
		if (!empty(Yii::$app->request->post())) {
			echo ChatRoom::sendChat(Yii::$app->request->post());
		}
	}
}