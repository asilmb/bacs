<?php

namespace domain\v1\finance\services;

use domain\v1\finance\enums\StockTypeEnum;
use domain\v1\finance\interfaces\services\GalleryInterface;
use domain\v1\finance\interfaces\services\StockInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class GalleryService
 *
 * @package domain\v1\finance\services
 *
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\GalleryInterface $repository
 */
class GalleryService extends BaseActiveService implements GalleryInterface
{


    public function sort()
    {
        return [
            'attributes' => [
                'id',
            ],
        ];
    }


}
