<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;


/**
 * Class CollectionEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $descPresent
 * @property string $descFull
 * @property string $title
 * @property string $date
 * @property string $image
 * @property string $stockType
 */
class StockEntity extends BaseEntity
{

    protected $id;
    protected $title;
    protected $descPresent;
    protected $descFull;
    protected $date;
    protected $image;
    protected $stockType;
}
