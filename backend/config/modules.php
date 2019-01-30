<?php

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\web\helpers\Behavior;

return [
    'user' => 'yii2module\account\module\Module',
	'error' => 'yii2module\error\module\Module',
	'collection' => 'backend\modules\collection\Module',
    'stock' => 'backend\modules\stock\Module',
    'gallery' => 'backend\modules\gallery\Module',
	'offline' => 'yii2module\offline\admin\Module',
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

	'gridview' => [
		'class' => 'kartik\grid\Module',
		'as access' => Behavior::access(PermissionEnum::BACKEND_ALL),
	],

];
