<?php

namespace backend\modules\bank\actions;

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
		\App::$domain->notify->flash->send(['bank/main', 'delete_success'], Alert::TYPE_SUCCESS);
		return $this->controller->redirect($returnUrl);
	}
}
