<?php

$config = [];

if(APP == API) {
	$config['controllerBehaviors'] = [
		'writeLog' => [
			'class' => 'yii2woop\common\behaviors\WriteLogBehavior',
			'file' => 'core.log',
		],
	];
}

return $config;
