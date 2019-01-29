<?php

namespace frontend\modules\baks\models;

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
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => '*'],
        ];
    }

    public function upload($path)
    {
        if ($this->validate()) {
            $this->file->saveAs($path . '/' . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }


}