<?php

return [
	''=> 'baks',
	
	// ----------------- Account module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['baks' => 'baks/main']],

	'account/<action>' => 'account/main/<action>',
    'send' => 'baks/default/send',
    'send1' => 'baks/default/send1',
    'send2' => 'baks/default/send2',
];
