<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\interfaces\services\CollectionInterface $process
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'collection',
			],
			'services' => [
				'collection',
			],
		];
	}
	
}