<?php
	return [
		'action' => '操作',

		'user' => [
			'index' => '用户列表',
			'edit' => '用户修改',
			'status' => [
				'1' => '正常',
				'2' => '禁止',
			]
		],
		'permission' => [
			'index' => '权限列表',
			'edit' => '修改',
			'create' => '添加',
			'trash' => '回收站',
			'delete' => '彻底删除',
			'undo' => '恢复',
			'audit' => '通过',
			'status' => [
				'2' => ['fa fa-paw','待审核'],
				'1' => ['fa fa-navicon','正常'],
				'99' => ['fa fa-trash','回收站'],
			]
		],
		'role' => [
			'index' => '角色列表',
			'edit' => '修改',
			'create' => '添加',
			'create_role' => '添加角色',
			'trash' => '回收站',
			'delete' => '彻底删除',
			'undo' => '恢复',
			'audit' => '通过',
			'status' => [
				'audit' => ['fa fa-paw','待审核','2'],
				'active' => ['fa fa-navicon','正常','1'],
				'ban' => ['fa fa-trash','禁用','99'],
			]
		]
	];