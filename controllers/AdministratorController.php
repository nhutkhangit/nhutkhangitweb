<?php
namespace app\controllers;
use yii\web\Controller;

class AdministratorController extends Controller{
	public function actionIndex() {
		return $this->render('index');
	}
}
