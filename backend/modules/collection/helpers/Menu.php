<?php

namespace backend\modules\collection\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\extension\menu\interfaces\MenuInterface;


class Menu implements MenuInterface {


    public function toArray() {
        return [
            [
                'label' => ['finance/collection', 'manage'],
                'icon' => 'file-text-o',
                'access' => PermissionEnum::BACKEND_ALL,
                'items' => [
                    [
                        'label' => ['finance/collection', 'women'],
                        'url' => 'collection/women',
                        'icon' => 'file-text-o',
                        'module' => 'collection',
                        'access' => PermissionEnum::BACKEND_ALL,
                    ],
                    [
                        'label' => ['finance/collection', 'men'],
                        'url' => 'collection/men',
                        'icon' => 'file-text-o',
                        'module' => 'collection',
                        'access' => PermissionEnum::BACKEND_ALL,
                    ],
                    [
                        'label' => ['finance/collection', 'travel'],
                        'url' => 'collection/travel',
                        'icon' => 'file-text-o',
                        'module' => 'collection',
                        'access' => PermissionEnum::BACKEND_ALL,
                    ],
                ],
            ]
        ];
    }
}
