<?php

use yii2lab\db\console\controllers\MigrateController;
use yii2module\lang\domain\enums\LanguageEnum;

return [
	'language' => LanguageEnum::EN, // current Language
	'components' => [
		'user' => [
			'enableSession' => false, // ! important
		],
	],
	'controllerMap' => [
		'migrate' => MigrateController::class,
	],
];
