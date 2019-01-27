<?php

namespace backend\modules\collection;

use common\enums\rbac\PermissionEnum;
use yii\base\Module as YiiModule;
use yii2lab\extension\web\helpers\Behavior;


/**
 * welcome module definition class
 */
class Module extends YiiModule
{

	public static $langDir = '@frontend\domain\v1\finance\messages';

    public function behaviors()
    {
        return [
           'access' => Behavior::access(PermissionEnum::BACKEND_ALL),
        ];
    }
}
