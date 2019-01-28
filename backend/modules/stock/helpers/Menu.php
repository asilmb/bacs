<?php

namespace backend\modules\stock\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {


    public function toArray() {
        return [
            [
                'label' => ['finance/stock', 'manage'],
                'url' => 'stock',
                'icon' => 'file-text-o',
                'module' => 'stock',
                'access' => PermissionEnum::BACKEND_ALL,
            ],
        ];
    }
}
