<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;


/**
 * Class GalleryEntity
 *
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $desc
 * @property string $image
 * @property string $title
 */
class GalleryEntity extends BaseEntity
{

    protected $id;
    protected $title;
    protected $desc;
    protected $image;
}
