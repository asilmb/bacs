<?php

return [
	'mainMenu' => [
		[
			'label' => ['service/service', 'payment'],
			'url' => 'transaction\payment',
			'access' => ['@'],
		],
		[
			'label' => ['service/favorite', 'title'],
			'url' => 'service/favorite',
			'access' => ['@'],
		],
		[
			'label' => ['convertation/main', 'title'],
			'url' => 'convertation',
			'access' => ['@'],
		],
		[
			'label' => 'qr-code',
			'url' => '#',
			'module' => 'qrcode',
			'access' => ['@'],
		],
		'yii2lab\rest\web\helpers\Menu',
	],
	'rightMenu' => [
		'yii2module\account\module\helpers\Menu',
	],
];