<?php

namespace backend\modules\personal\actions;

use Yii;
use yii2lab\navigation\domain\widgets\Alert;
use yii\base\Action;

class DeleteAction extends Action {
	public $serviceMethod = 'deleteById';
	public $service;
	public $returnUrl;
	
	//todo решить проблему с редиректом
	public function run($id) {
		$returnUrl = $this->returnUrl;
		$method = $this->serviceMethod;
		$this->service->$method($id);
		Yii::$app->notify->flash->send(['personal/main', 'delete_success'], Alert::TYPE_SUCCESS);
		return $this->controller->redirect($returnUrl);
	}
}
