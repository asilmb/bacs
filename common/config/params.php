<?php

return [
	'MaintenanceMode' => false,
	'pageSize' => 25,
	'fixture' => [
		'dir' => '@common/fixtures',
		'exclude' => [
			'migration',
		],
	],
	'static' => [
		'path' => [
			'avatar' => 'images/avatars',
			'provider' => 'images/provider',
			'qr' => 'images/qr',
		],
	],
	'PRIVATE_KEY_FN' => 'test_prv.pem',
	'PUBLIC_KEY_FN' => 'test_pub.pem',
	'SPP_ORDER_NOTIFICATION' => 'support@test.com',
	'SECURITY_EMAIL' => 'security@test.com',
];