<?php
namespace backend\modules\bank\controllers;


use domain\v4\active\forms\PictureForm;

use domain\v4\active\forms\ProviderForm;
use Yii;
use yii\web\Controller;


class MainController extends Controller {
	
	public function actions() {
		return [
			'index' => [
				'class' => 'backend\modules\bank\actions\indexAction',
				'service' => \App::$domain->bank->bank,
				'serviceMethod' => 'getBankList',
				'view' => '/main',
			],
			'create' => [
				'class' => 'backend\modules\bank\actions\CreateAction',
				'service' => \App::$domain->active->provider,
				'form' => 'ProviderForm',
				'model' => new ProviderForm(),
				'view' => '/main',
				'returnUrl' => '/bank',
			],
			'update' => [
				'class' => 'backend\modules\bank\actions\UpdateAction',
				'service' => \App::$domain->active->provider,
				'form' => 'ProviderForm',
				'model' => new ProviderForm(),
				'view' => '/main',
				'returnUrl' => '/bank',
			],
			'view' => [
				'class' => 'backend\modules\bank\actions\ViewAction',
				'service' => \App::$domain->active->provider,
				'model' => new ProviderForm(),
				'view' => '/main',
			],
			'delete' => [
				'class' => 'backend\modules\bank\actions\DeleteAction',
				'service' => \App::$domain->active->provider,
				'returnUrl' => '/bank',
			],
			'addLogo' => [
				'class' => 'backend\modules\bank\actions\AddLogoAction',
				'service' => \App::$domain->active->picture,
				'model' => new PictureForm(),
				'view' => '/main',
			],
		];
	}
}

