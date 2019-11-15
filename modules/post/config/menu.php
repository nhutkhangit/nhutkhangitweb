<?php

return [
	'label'      => 'Post Management',
	'permission' => 'post',
	'icon'       => 'fas fa-newspaper',
	'module'     => 'post',
	'sort'       => '1', // sort menu
	'children'   => [
		'post-list' => [
			'label'      => 'Post List',
			'link'       => '/post',
			'permission' => 'post',
			'module'     => 'create',
			'icon'       => 'fas fa-newspaper'
		]
	]
];