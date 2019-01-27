<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class CollectionForm extends Model
{

    public $id;
    public $decs;
    public $brand;
    public $color;
    public $brandCountry;
    public $madeIn;
    public $collection;
    public $collectionType;
    public $size;
    public $price;
    public $image;

    public function rules()
    {
        return [
            [['decs', 'brand', 'color', 'brandCountry', 'madeIn', 'collection', 'collectionType', 'size', 'price'], 'required'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload($path)
    {
        if ($this->validate()) {
            $this->image->saveAs($path . '/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }
}