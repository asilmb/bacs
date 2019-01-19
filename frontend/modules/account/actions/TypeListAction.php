<?php

namespace frontend\modules\account\actions;

use Yii;
use yii\base\Action;


class TypeListAction extends Action {
	
	public $service;
	public $view;
	
	public function run() {
		$typesList =  $this->service->all();
		return Yii::$app->view->render($this->view .'/typeList', [
			'typesList' => $typesList,
		]);
	}
}
