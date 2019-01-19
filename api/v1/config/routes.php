<?php

return [
	
	'@import' => [
		'vendor/yii2module/yii2-account/src/api/v2',
		'vendor/yii2module/yii2-summary/src/api',
		'vendor/yii2woop/yii2-history/src/api',
		'vendor/yii2woop/yii2-operation/src/api/v2',
		'vendor/yii2woop/yii2-bank/src/api/v2',
		'vendor/yii2woop/yii2-service/src/api/v3',
		'vendor/yii2woop/yii2-partner/src/api',
		'vendor/yii2lab/yii2-geo/src/api',
		'vendor/yii2lab/yii2-notify/src/api/v1',
	],
	
	// ----------------- User module -----------------
	
	'v1/auth/pseudo' => 'account/auth/pseudo',

];
