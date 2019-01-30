<?php

namespace frontend\modules\baks\models;

use Yii;
use yii2lab\domain\base\Model;

class SendForm extends Model
{
    public $name;
    public $surname;
    public $orgName;
    public $contactFace;
    public $phone;
    public $email;
    public $file;


    public function rules()
    {
        return [
            [['name', 'surname', 'orgName', 'contactFace', 'phone', 'email'], 'required'],
            [['file'], 'file', 'skipOnEmpty' => true, 'maxSize' => 2048000, 'tooBig' => 'Limit is 500KB'],
        ];
    }

    public function upload()
    {
        $path = Yii::getAlias('@frontend/web') . '/';
        if ($this->validate()) {
            $this->file->saveAs($path . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }


}