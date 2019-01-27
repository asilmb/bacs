<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\interfaces\services\CollectionInterface $process
 * @property-read \domain\v1\finance\interfaces\services\CollectionInterface $collection
 * @property-read \domain\v1\finance\interfaces\repositories\RepositoriesInterface $repositories
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