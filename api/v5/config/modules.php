<?php

return [
	'service' => [
		'class' => 'yii2woop\service\api\v3\Module',
	],
	'bank' => [
		'class' => 'yii2woop\bank\api\v1\Module',
	],
	'account' => [
		'class' => 'yii2module\account\api\v1\Module',
	],
	'operation' => [
		'class' => 'yii2woop\operation\api\v1\Module',
	],
	'summary' => [
		'class' => 'yii2woop\summary\api\Module',
	],
	'geo' => [
		'class' => 'yii2lab\geo\api\Module',
	],
    'mbilling' => [
        'class' => 'yii2woop\mbilling\api\v1\Module',
    ],
];
