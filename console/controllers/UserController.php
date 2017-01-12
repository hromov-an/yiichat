<?php
//namespace app\console\controllers;
namespace console\controllers;
use yii\console\Controller;
use common\models\User;
class UserController  extends Controller
{
	public function actionCreate()
	{
		$user = new User();
		$user->username = 'admin';
		$user->email = 'admin@gmail.com';
		$user->setPassword('admin');
		$user->generateAuthKey();
		$user->save();

		$user = new User();
		$user->username = 'user1';
		$user->email = 'qwe1@gmail.com';
		$user->setPassword('user1');
		$user->generateAuthKey();
		$user->save();

		$user = new User();
		$user->username = 'user2';
		$user->email = 'qwe2@gmail.com';
		$user->setPassword('user2');
		$user->generateAuthKey();
		$user->save();
	}
}
