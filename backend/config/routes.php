<?php

return [
	''=> 'dashboard',
	
	// ----------------- Active module -----------------
	
	['class' => 'yii\rest\UrlRule', 'controller' => ['active' => 'active/type']],
	
	'collection/<action>' => 'collection/default/<action>',
	];

