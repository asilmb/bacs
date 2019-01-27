<?php

namespace domain\v1\finance\interfaces\services;

use yii2lab\domain\interfaces\services\CrudInterface;

/**
 * Interface CollectionInterface
 * 
 * @package domain\v1\finance\interfaces\services
 * 
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\CollectionInterface $repository
 */
interface StockInterface extends CrudInterface {


    public function getStockTypeList();
}
