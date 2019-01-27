<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;


/**
 * Class CollectionEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $desc
 * @property string $brand
 * @property string $color
 * @property string $brandCountry
 * @property string $madeIn
 * @property string $collection
 * @property string $composition
 * @property string $collectionType
 * @property string $size
 * @property string $price
 * @property string $image
 */
class CollectionEntity extends BaseEntity
{

    protected $id;
    protected $desc;
    protected $brand;
    protected $color;
    protected $brandCountry;
    protected $madeIn;
    protected $collection;
    protected $collectionType;
    protected $size;
    protected $price;
    protected $composition;
    protected $image;

}
