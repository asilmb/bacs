<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\interfaces\services\CollectionInterface $collection
 * @property-read \domain\v1\finance\interfaces\services\StockInterface $stock
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'collection',
                'stock',
                'gallery',
			],
			'services' => [
				'collection',
                'stock',
                'gallery',
			],
		];
	}
	
}