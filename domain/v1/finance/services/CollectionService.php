<?php

namespace domain\v1\finance\services;

use domain\v1\finance\entities\CollectionEntity;
use domain\v1\finance\enums\CollectionTypeEnum;
use domain\v1\finance\helpers\DateTimeHelper;
use domain\v1\finance\interfaces\services\CollectionInterface;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class CollectionService
 *
 * @package domain\v1\finance\services
 *
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\CollectionInterface $repository
 */
class CollectionService extends BaseActiveService implements CollectionInterface
{

    public function getCollectionTypeList()
    {
        return [
            CollectionTypeEnum::MEN => 'Мужская коллекция',
            CollectionTypeEnum::WOMEN => 'Женская коллекция',
            CollectionTypeEnum::TRAVEL => 'Путешествие'
        ];
    }

    public function sort()
    {
        return [
            'attributes' => [
                'id',
            ],
        ];
    }

}
