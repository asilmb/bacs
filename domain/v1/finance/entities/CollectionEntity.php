<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;


/**
 * Class CollectionEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $decs
 * @property string $brand
 * @property string $color
 * @property string $brandCountry
 * @property string $madeIn
 * @property string $collection
 * @property string $collectionType
 * @property string $size
 * @property string $price
 */
class CollectionEntity extends BaseEntity
{

    protected $id;
    protected $decs;
    protected $brand;
    protected $color;
    protected $brandCountry;
    protected $madeIn;
    protected $collection;
    protected $collectionType;
    protected $size;
    protected $price;
}
