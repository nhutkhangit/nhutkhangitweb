<?php

namespace app\modules\post\controllers;

use app\helper\ModuleHelper;
use yii\web\Controller;

/**
 * Default controller for the `post` module
 */
class PostController extends Controller{

	/**
	 * Renders the index view for the module
	 *
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}
}
