<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class CollectionForm extends Model
{

    public $id;
    public $desc;
    public $brand;
    public $color;
    public $brandCountry;
    public $madeIn;
    public $collection;
    public $collectionType;
    public $size;
    public $price;
    public $composition;
    public $image;


    public function rules()
    {
        return [
            [['desc', 'brand', 'color', 'brandCountry', 'madeIn', 'collection','composition', 'collectionType', 'size', 'price'], 'required'],

        ];
    }


    public function attributeLabels()
    {
        return ['desc' => 'Описание',
            'brand' => 'Бренд',
            'color' => 'Цвет',
            'brandCountry' => 'Страна бренда',
            'madeIn' => 'Производитель',
            'collection' => 'Коллекция',
            'collectionType' => 'Тип Коллекции',
            'composition' => 'Состав',
            'size' => 'Размер',
            'price' => 'Цена',
        ];
    }
}