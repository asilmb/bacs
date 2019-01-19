<?php

namespace frontend\modules\account\actions;

use yii2lab\domain\data\Query;
use Yii;
use yii\base\Action;
use yii\data\ArrayDataProvider;

class IndexAction extends Action {
	
	public $service;
	public $view;
	
	public function run() {
		Yii::$app->personal->bonus->createBonuses();
		Yii::$app->personal->bonus->checkAmountDifferent();
		$activeList = $this->service->allWithProvider();
		return $this->controller->render($this->view . '/index', [
			'activeList' => $activeList,
		]);
	}
}
