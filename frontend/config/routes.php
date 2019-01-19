<?php

return [
	''=> 'welcome',
	
	// ----------------- Account module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['baks' => 'baks/main']],

	'account/<action>' => 'account/main/<action>',
	
];
