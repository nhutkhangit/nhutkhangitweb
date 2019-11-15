<?php

namespace app\helper;

use yii\helpers\ArrayHelper;

Class ModuleHelper{

	/**
	 * @return array
	 *
	 * Get migration namespace array
	 *
	 *
	 */
	public static function moduleMigrationMerge(){
		$path      = 'modules';
		$folder    = self::getDirectories($path);
		$migration = [];
		foreach ($folder as $key => $value){
			$urlPath                         = $value . '\\migrations';
			$migration['modules\\' . $value] = "app\modules\\" . $urlPath;
		}

		return $migration;
	}

	/**
	 * @param $path
	 *
	 * @return array
	 *
	 * Get all directories of the $path
	 */
	public static function getDirectories($path){
		$items       = scandir($path);
		$directories = [];
		foreach ($items as $item){
			if ($item == '..' || $item == '.'){
				continue;
			}
			if (is_dir($path . "/" . $item)){
				$directories[] = $item;
			}
		}

		return $directories;
	}

	/**
	 * @return array
	 *
	 * Get menu array in menu.php of each modules;
	 */
	public static function moduleMenuMerge(){
		$path       = '../modules';
		$folder     = self::getDirectories($path);
		$activeMenu = [];
		foreach ($folder as $key => $value){
			$urlPath = $value . '\\config\\menu.php';
			if (file_exists($path . "\\" . $urlPath)){
				$activeMenu[] = require($path . "\\" . $urlPath);
			}
		}
		$activeMenu = ArrayHelper::toArray($activeMenu);

		usort($activeMenu, function ($a, $b){
//			return $a['sort'] <=> $b['sort'];
			return ($a<$b)?-1:1;
		});

		$menu = json_decode(json_encode($activeMenu));

		return $menu;
	}

	public static function moduleRouteMerge(){
		$path   = '../modules';
		$folder = self::getDirectories($path);
		$array  = [];
		$route  = [];
		foreach ($folder as $value){
			$urlPath = $value . '\\config\\route.php';
			if (file_exists($path . "\\" . $urlPath)):
				$array[$value] = require($path . "\\" . $urlPath);
				foreach ($array as $val):
					foreach ($val['admin'] as $key_ad => $admin){
						$route[$key_ad] = $admin;
					}
					foreach ($val['web'] as $key_web => $web){
						$route[$key_web] = $web;
					}
				endforeach;
			endif;
		}

		return $route;
	}
}