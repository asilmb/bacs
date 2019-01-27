<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class StockForm extends Model
{

    public $id;
    public $descPresent;
    public $descFull;
    public $date;
    public $image;


    public function rules()
    {
        return [
            [['descPresent', 'descFull', 'date'], 'required'],

        ];
    }


    public function attributeLabels()
    {
        return [
            'descPresent' => 'Описание превью',
            'descFull' => 'Полный текст Акции',
            'date' => 'Дата',
        ];
    }
}