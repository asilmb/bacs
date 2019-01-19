<?php

namespace backend\modules\bank\actions;

use yii\base\Action;

class ViewAction extends Action {
	public $service;
	public $model;
	public $view;
	public $returnUrl;
	
	public function run($id) {
		$entity = $this->service->oneById($id);
		$model = $this->model;
		$model->setAttributes($entity->toArray(), false);
		
		return $this->controller->render($this->view . '/view', ['model' => $model]);
	}
}
