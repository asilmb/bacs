<?php

namespace domain\v1\finance\repositories\ar;


use DateInterval;
use DateTime;
use domain\v1\finance\interfaces\repositories\GalleryInterface;
use yii2lab\domain\BaseEntity;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use domain\v1\finance\interfaces\repositories\CollectionInterface;
use yii2lab\domain\data\Query;

/**
 * Class StockRepository
 *
 * @package domain\v1\finance\repositories\ar
 *
 * @property-read \domain\v1\finance\Domain $domain
 */
class GalleryRepository extends BaseActiveArRepository implements GalleryInterface
{


}