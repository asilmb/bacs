<?php

namespace domain\v1\finance\repositories\ar;


use DateInterval;
use DateTime;
use yii2lab\domain\BaseEntity;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\CollectionInterface;
use yii2lab\domain\data\Query;

/**
 * Class CollectionRepository
 *
 * @package domain\v1\finance\repositories\ar
 *
 * @property-read \domain\v1\finance\Domain $domain
 */
class CollectionRepository extends BaseActiveArRepository implements CollectionInterface {



    public function fieldAlias()
	{
		return [
			'brandCountry' => 'brand_country',
			'madeIn' => 'made_in',
            'collectionType' => 'collection_type',
		];
	}
}