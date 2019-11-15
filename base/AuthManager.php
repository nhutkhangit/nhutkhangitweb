<?php


namespace app\base;


use Yii;
use yii\base\Component;
use yii\helpers\ArrayHelper;

/**
 * Class AuthManager
 *
 * @package app\helper
 */
class AuthManager extends Component{

	/**
	 * @param $user_id
	 * @param $role
	 * @param array $params
	 *
	 * @return bool
	 */
	public function checkAccess($user_id, $role, $params = []){
		if (Yii::$app->user->isGuest){
			return FALSE;
		}

		/** @var \app\models\User $user */
		$user = Yii::$app->user->identity;

		if ($user->isAdmin()){
			return TRUE;
		}

		$user_roles = ArrayHelper::getColumn($user->roles, 'name');
		if (ArrayHelper::isIn($role, $user_roles)){
			return TRUE;
		}

		return FALSE;
	}
}