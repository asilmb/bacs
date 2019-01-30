<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class StockForm extends Model
{

    public $id;
    public $title;
    public $descPresent;
    public $descFull;
    public $date;
    public $image;
    public $stockType;

    public function rules()
    {
        return [
            [['stockType'], 'required'],

        ];
    }


    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'descPresent' => 'Описание превью',
            'descFull' => 'Полный текст Акции',
            'date' => 'Дата',
            'stockType' => 'Тип Акции'
        ];
    }
}