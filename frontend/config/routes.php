<?php

return [
	''=> 'welcome',
	
	'@import' => [
		'vendor/yii2module/yii2-guide/src/module',
		'vendor/yii2module/yii2-article/src/web',
	],
	
	
	
	// ----------------- Account module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['account' => 'account/main']],

	
	'account/<action>' => 'account/main/<action>',
	
];
