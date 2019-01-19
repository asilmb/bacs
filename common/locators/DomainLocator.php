<?php

namespace common\locators;

use yii2lab\domain\base\BaseDomainLocator;

/**
 * @property-read \yii2woop\summary\domain\Domain $summary
 * @property-read \yii2woop\operation\domain\v2\Domain $operation
 * @property-read \yii2woop\history\domain\Domain $history
 * @property-read \yii2woop\service\domain\v3\Domain $service
 * @property-read \yii2woop\bank\domain\v2\Domain $bank
 * @property-read \yii2woop\partner\domain\Domain $partner
 * @property-read \yii2module\account\domain\v2\Domain $account
 */
class DomainLocator extends BaseDomainLocator {}
