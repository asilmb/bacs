<?php

use yii2lab\rest\web\helpers\RestModuleHelper;

$config = [
	'error' => 'yii2module\error\module\Module',
	'user' => 'yii2module\account\module\Module',
	'baks' => 'frontend\modules\baks\Module',
];

if(YII_ENV_DEV) {
	$config = RestModuleHelper::appendConfig($config);
}

return $config;
