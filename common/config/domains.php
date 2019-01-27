<?php

use yii2lab\extension\enum\enums\TimeEnum;
use yii2module\account\domain\v2\filters\login\LoginPhoneValidator;

return [
	'lang' => 'yii2module\lang\domain\Domain',
	'vendor' => 'yii2module\vendor\domain\Domain',
	'navigation' => 'yii2lab\navigation\domain\Domain',
	'jwt' => 'yii2lab\extension\jwt\Domain',
	'summary' => 'yii2module\summary\domain\Domain',
	'guide' => 'yii2module\guide\domain\Domain',
	'notify' => 'yii2lab\notify\domain\Domain',
	'rbac' => 'yii2lab\rbac\domain\Domain',
	'account' => 'yii2module\account\domain\v2\Domain',
    'finance' => 'domain\v1\finance\Domain',
];
