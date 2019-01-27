<?php

namespace domain\v1\finance\services;

use domain\v1\finance\enums\StockTypeEnum;
use domain\v1\finance\interfaces\services\StockInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class StockService
 *
 * @package domain\v1\finance\services
 *
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\StockInterface $repository
 */
class StockService extends BaseActiveService implements StockInterface
{


    public function sort()
    {
        return [
            'attributes' => [
                'id',
            ],
        ];
    }

    public function getStockTypeList()
    {
        return [
            StockTypeEnum::FULL => 'Без описания',
            StockTypeEnum::INFO => 'С описанием',
        ];
    }
}
