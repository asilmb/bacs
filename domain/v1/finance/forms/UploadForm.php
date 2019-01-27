<?php

namespace domain\v1\finance\forms;

use yii2lab\domain\base\Model;

class UploadForm extends Model
{

    public $image;



    public function rules()
    {
        return [
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