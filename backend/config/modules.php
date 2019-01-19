<?php

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\web\helpers\Behavior;

return [
	'vendor' => 'yii2module\vendor\admin\Module',
	'service' => 'yii2woop\service\admin\Module',
	'error' => 'yii2module\error\module\Module',
	'notify' => 'yii2lab\notify\admin\Module',
	'user' => 'yii2module\account\module\BackendModule',
	'offline' => 'yii2module\offline\admin\Module',
	'rbac' => \yii2lab\rbac\admin\helpers\ModuleHelper::config(),
	'dashboard' => [
		'class' => 'yii2module\dashboard\admin\Module',
		'log' => [
			'Frontend' => '@frontend/runtime/logs/app.log',
			'Backend' => '@backend/runtime/logs/app.log',
			'Console' => '@console/runtime/logs/app.log',
			'Api' => '@api/runtime/logs/app.log',
		],
	],
	'cleaner' => [
		'class' => 'yii2module\cleaner\admin\Module',
		'as access' => Behavior::access(PermissionEnum::CLEANER_MANAGE),
	],
	/*'active' => [
		'class' => 'backend\modules\active\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	'personal' => [
		'class' =>  'backend\modules\personal\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	'bank' => [
		'class' => 'backend\modules\bank\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],*/
	'gridview' => [
		'class' => 'kartik\grid\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],
	/*'logreader' => [
		'class' => 'zhuravljov\yii\logreader\Module',
		'aliases' => [
			'Frontend' => '@frontend/runtime/logs/app.log',
			'Backend' => '@backend/runtime/logs/app.log',
			'Console' => '@console/runtime/logs/app.log',
			'Api' => '@api/runtime/logs/app.log',
		],
		'as access' => Behavior::access(PermissionEnum::LOGREADER_MANAGE),
	],*/
	'logreader' => [
		'class' => 'alyanik\viewlog\Module',
		'as access' => Behavior::access(PermissionEnum::LOGREADER_MANAGE),
	],
	/*'app' => [
		'class' => 'yii2lab\app\admin\Module',
		'as access' => Behavior::access(PermissionEnum::APP_CONFIG),
	],
	'init' => [
		'class' => 'yii2lab\init\admin\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],*/
];
