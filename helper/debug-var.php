<?php
/**
 * Debug function
 * d($var);
 *
 * @param $var
 * @param null $caller
 */
function d($var, $caller = NULL){
	if (!isset($caller)){
		$caller = array_shift(debug_backtrace(1));
	}
	echo '<div style="background-color:black; padding-bottom: 5px">';
	echo '<pre>';
	yii\helpers\VarDumper::dump($var, 10, TRUE);
	echo '</pre>';
	echo '<div style="text-align: center;margin-top: 10px">';
	echo '<span style="color: #00fdda;">-- Hãy sống đẹp như những con thiên nga của Tchaikovsky --</span>';
	echo '</div>';
	echo '</div>';
}

/**
 * Debug function with die() after
 * dd($var);
 *
 * @param $var
 */
function dd($var){
	$debug  = debug_backtrace(1);
	$caller = array_shift($debug);
	d($var, $caller);
	die();
}