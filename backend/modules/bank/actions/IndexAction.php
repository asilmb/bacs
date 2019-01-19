<?php

namespace backend\modules\bank\actions;

use Yii;
use yii\base\Action;
use yii\data\ArrayDataProvider;

class IndexAction extends Action {
	public $service;
	public $serviceMethod;
	public $view;
	
	public function run() {
		$method = $this->serviceMethod;
		
		$dataProvider = new ArrayDataProvider([
			'allModels' => $this->service->$method(),
			'sort' => [
				'attributes' => ['id'],
			],
			'pagination' => [
				'pageSize' => 100,
			],
		]);
		return $this->controller->render($this->view . '/index', [
			'dataProvider' => $dataProvider,
		]);
	}
}
