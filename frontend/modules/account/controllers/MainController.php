<?php

namespace frontend\modules\account\controllers;

use Yii;
use yii\web\Controller;

class MainController extends Controller {
	
	public function actions() {
		return [
			'index' => [
				'class' => 'frontend\modules\account\actions\IndexAction',
				'service' => Yii::$app->profile->active,
				'view' => '/main',
			],
			'typeList' => [
				'class' => 'frontend\modules\account\actions\TypeListAction',
				'service' => Yii::$app->active->type,
				'view' => '/main',
			],
		
			//'update' => [
			//	'class' => 'frontend\modules\account\actions\UpdateActiveAction',
			//	'service' => Yii::$app->profile->active,
			//	'view' => '/main',
			//],
		];
	}
	
}