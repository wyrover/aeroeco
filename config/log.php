<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Developer Name
	|--------------------------------------------------------------------------
	|
	| The name of users for logged activities that have the "developer"
	| flag set.
	|
	*/
	'developer_name' => 'Developer',
	'full_name_as_name'         => true,
	'full_name_last_name_first' => false,
	'auto_set_user_id' => true,
	'auth_method' => '\Auth::user',
	'action_icon' => [
		'element'      => 'i',
		'class_prefix' => 'fa fa-',
	],

	'action_icons' => [
		'x'          => 'info-circle',
		'create'     => 'plus-circle',
		'update'     => 'edit',
		'delete'     => 'minus-circle',
		'ban'        => 'ban',
		'unban'      => 'circle-o',
		'approve'    => 'ok-circle',
		'unapprove'  => 'ban',
		'activate'   => 'ok-circle',
		'deactivate' => 'ban',
		'log_in'     => 'sign-in',
		'log_out'    => 'sign-out',
		'view'       => 'eye',
		'comment'    => 'comment',
	],

	'content_types' => [

		/* 'item' => [
			'uri'       => 'view/:id',
			'subdomain' => 'items',
			'model'     => 'App\Models\Item',
		], */

	],

];
