<?php

namespace backend\modules\gallery\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {


    public function toArray() {
        return [
            [
                'label' => ['finance/gallery', 'manage'],
                'url' => 'gallery',
                'icon' => 'file-text-o',
                'module' => 'gallery',
                'access' => PermissionEnum::BACKEND_ALL,
            ],
        ];
    }
}
