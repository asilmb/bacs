<?php
namespace backend\modules\personal\controllers;


use domain\v4\active\forms\PictureForm;

use domain\v4\active\forms\ProviderForm;
use Yii;
use yii\web\Controller;


class BonusController extends Controller {
	
	public function actions() {
		return [
			'index' => [
				'class' => 'backend\modules\personal\actions\indexAction',
				'service' => Yii::$app->personal->bonus,
				'serviceMethod' => 'getBonusClubList',
				'view' => '/main',
			],
			'create' => [
				'class' => 'backend\modules\personal\actions\CreateAction',
				'service' => Yii::$app->active->provider,
				'form' => 'ProviderForm',
				'model' => new ProviderForm(),
				'view' => '/main',
				'returnUrl' => '/bonus',
			],
			'update' => [
				'class' => 'backend\modules\personal\actions\UpdateAction',
				'service' => Yii::$app->active->provider,
				'form' => 'ProviderForm',
				'model' => new ProviderForm(),
				'view' => '/main',
				'returnUrl' => '/bonus',
			],
			'view' => [
				'class' => 'backend\modules\personal\actions\ViewAction',
				'service' => Yii::$app->active->provider,
				'model' => new ProviderForm(),
				'view' => '/main',
			],
			'delete' => [
				'class' => 'backend\modules\personal\actions\DeleteAction',
				'service' => Yii::$app->active->provider,
				'returnUrl' => '/bonus',
			],
			'addLogo' => [
				'class' => 'backend\modules\personal\actions\AddLogoAction',
				'service' => Yii::$app->active->picture,
				'model' => new PictureForm(),
				'view' => '/main',
			],
		];
	}
}

