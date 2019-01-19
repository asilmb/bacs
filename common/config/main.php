<?php

use yii2module\lang\domain\enums\LanguageEnum;

return [
	'name' => 'Core',
	'language' => LanguageEnum::RU, // current Language
	'sourceLanguage' => LanguageEnum::SOURCE, // Language development
	'bootstrap' => ['log', 'language', 'time', 'queue'],
	'timeZone' => 'UTC',
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'components' => [
		'time' => 'yii2lab\extension\time\components\TimeComponent',
		'language' => 'yii2module\lang\domain\components\Language',
        'user' => [
			'class' => 'yii2module\account\domain\v2\web\User',
		],
		'log' => [
			'targets' => [
				[
					'class' => 'yii\log\DbTarget',
					'levels' => ['error', 'warning'],
					'except' => [
						//'yii\web\HttpException:*',
						'yii2lab\domain\exceptions\UnprocessableEntityHttpException:*',
						'yii\web\NotFoundHttpException',
						'yii\web\HttpException:404',
						'yii\web\HttpException:401',
						'yii\web\HttpException:422',
						'yii\caching\FileCache::setValue',
						'yii\debug\Module::checkAccess',
						//YII_ENV_TEST ? 'yii2module\lang\domain\i18n\PhpMessageSource::loadMessages' : null,
					],
				],
			],
			'traceLevel' => YII_DEBUG ? 3 : 0,
		],
		//'sentry' => [
		//	'class' => 'mito\sentry\Component',
		//	'dsn' => (env('mode.env') == YiiEnvEnum::DEV) ?
		//		'http://01e17661e0d746cbb2910e7508d97c07:8717f46f071744fe8f71b083f464eac4@watchdog.wooppay.local/3':
		//		'https://9655b4786398491fb1359a4f68a17746:aa64190e43234f919c2db69c2e5be925@watchdog.wooppay.com/3',
		//	'environment' => 'staging',
		//	'jsNotifier' => true,
		//	'jsOptions' => [
		//		'whitelistUrls' => [
		//			'http://wooppay.yii',
		//			'http://api.wooppay.yii',
		//			'http://yii2-stage.test.wooppay.com/',
		//			'http://api.yii2-stage.test.wooppay.com/',
		//			'https://api-core.wooppay.com/',
		//			'https://core.wooppay.com/',
		//		],
		//	],
		//],
		//'log' => [
		//	'targets' => [
		//		[
		//			'class' => 'mito\sentry\Target',
		//			'levels' => ['error', 'warning'],
		//			'except' => [
		//				'yii\web\HttpException:404',
		//			],
		//		],
		//	],
		//],
		'authManager' => 'yii2lab\rbac\domain\rbac\PhpManager',
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
			'cachePath' => '@common/runtime/cache',
		],
		'i18n' => [
			'class' => 'yii2module\lang\domain\i18n\I18N',
			'aliases' => [
				'*' => '@common/messages',
			],
		],
		'db' => 'yii2lab\db\domain\db\Connection',
		'queue' => [
			'class' => 'yii2lab\extension\queue\drivers\file\Queue',
			'path' => '@common/runtime/queue',
			'autoRun' => !YII_ENV_PROD,
		],
	],
];
