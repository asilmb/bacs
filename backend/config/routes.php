<?php

return [
	''=> 'dashboard',
	
	// ----------------- Active module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['active' => 'active/type']],
	
	'active/<action>' => 'active/type/<action>',
	
	// ----------------- Bank module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['bank' => 'bank/main']],
	
	'bank/<action>' => 'bank/main/<action>',
	
	// ----------------- Personal module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['bonus' => 'personal/bonus']],
	
	'bonus/<action>' => 'personal/bonus/<action>',
];
