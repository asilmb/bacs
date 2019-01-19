<?php

use yii2lab\app\domain\enums\YiiEnvEnum;
use yii2lab\extension\common\helpers\StringHelper;
use yii2lab\extension\enum\enums\TimeEnum;

$domain = 'core.yii';

$servers = [
	'acquiring' => [
		'host' => 'https://pci-ws.wooppay.com',
	],
	'tps' => [
		'webPath' => 'http://tps:8080/',
	],
	'static' => [
		'publicPath' => '@frontend/web/',
		'domain' => 'https://static.test.wooppay.com/',
		'driver' => 'local',
		'connection' => [
			'path' => '@frontend/web',
		],
	],
	/*'mail' => [
		'host' => '',
		'username' => '',
		'password' => '',
		'port' => 25,
		//'encryption' => 'ssl', // It is often used, check your provider or mail server specs
	],*/
	'db' => [
		'main' => [
			'driver' => 'pgsql',
			'host' => 'dbweb',
			'username' => 'logging',
			'password' => 'moneylogger',
			'dbname' => 'core',
			'defaultSchema' => 'core',
			/*'migrator' => [
				'username' => 'migrator',
				'password' => 'the_best_migrator',
			],*/
		],
	],
];

$jwtProfiles = [
	'default' => [
		'key' => StringHelper::generateRandomString(32),
		'issuer_url' => 'http://api.' . $domain . '/v1/auth',
		'life_time' => TimeEnum::SECOND_PER_MINUTE * 20,
		'allowed_algs' => ['HS256', 'SHA512', 'HS384'],
		'default_alg' => 'HS256',
		'audience' => ['http://api.' . $domain],
	],
	'auth' => [
		'key' => StringHelper::generateRandomString(32),
		'issuer_url' => 'http://api.' . $domain . '/v1/auth',
		'life_time' => TimeEnum::SECOND_PER_MINUTE * 20,
		'allowed_algs' => ['HS256', 'SHA512', 'HS384'],
		'default_alg' => 'HS256',
		'audience' => ['http://api.wooppay.yii'],
	],
	'partner_8' => [
		/*'key' => [
			'public' =>
'-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhBfXFWk034XvmmwnCpQ+
LEDT/dm0CZ4pm9YenSKV6z60kQfv5jfvEzaVRXzx+HWKaMQmrewATkppWvYE5tsp
lqSGFnsHJE7YXJt4Xpu7bs8o4ZC4qInTNwcOFi3+7Pmj5wjxtjz4BRp9L0WmS7vS
KDfZOyAUnBmYHwLXL29ZHjxhpRsMegXjf2XSFYObz4iInMVQ9q4zM5E3d4UNsSie
It4wwIJlTTeJSQc2T4jvxqNlpNshv52FXZA3CBCIgu3izedhmNTjYuodRY5ROSK5
kjIhQ1Z2Vu30uzsBOi55E05Dv18Xwpin28FI2M2x0SfnuT5XZgk6dwyqpzKydWUY
zwIDAQAB
-----END PUBLIC KEY-----',
		],*/
		'key' => 'secret_key_for_wooppay',
	],
];

$authclientProfiles = [
	'github' => [
		'class' => 'yii\authclient\clients\Github',
		'clientId' => '7c16a98aa622ddb44b7e',
		'clientSecret' => '5353b6de215534691d046d9d173642a222b6ef80',
	],
	'facebook' => [
		'class' => 'yii\authclient\clients\Facebook',
		'clientId' => '',
		'clientSecret' => '',
	],
	'google' => [
		'class' => 'yii\authclient\clients\Google',
		'clientId' => '',
		'clientSecret' => '',
	],
	'yandex' => [
		'class' => 'yii\authclient\clients\Yandex',
		'clientId' => '',
		'clientSecret' => '',
	],
	'twitter' => [
		'class' => 'yii\authclient\clients\TwitterOAuth2',
		'clientId' => '',
		'clientSecret' => '',
	],
	'vkontakte' => [
		'class' => 'yii\authclient\clients\VKontakte',
		'clientId' => '',
		'clientSecret' => '',
	],
];

$config = [
	'title' => 'Develop',
	'filters' => [
		[
			'class' => 'yii2lab\init\domain\filters\input\Custom',
			'title' => 'Custom env config',
			'segment' => null,
			'value' => [
				'url' => [
					'frontend' => 'http://' . $domain . '/',
					'backend' => 'http://admin.' . $domain . '/',
					'api' => 'http://api.' . $domain . '/',
				],
				'servers' => $servers,
				'mode' => [
					'env' => YiiEnvEnum::DEV,
					'debug' => true,
				],
				'jwt' => [
					'profiles' => $jwtProfiles,
				],
				'authclient' => [
					'profiles' => $authclientProfiles,
				],
			
			],
		],
	],
];

$commonConfig = include(realpath(__DIR__ . '/../snipet/commonFilters.php'));
$config['filters'] = array_merge($config['filters'], $commonConfig);
return $config;