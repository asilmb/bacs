<?php

namespace backend\modules\bank\actions;

use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii\base\Action;

class CreateAction extends Action {
	public $service;
	public $model;
	public $form;
	public $view;
	public $returnUrl;
	
	public function run($type_id) {
		$body = Yii::$app->request->getBodyParam($this->form);
		if(!empty($body)) {
			$this->service->create($body);
			Yii::$app->notify->flash->send(['bank/main', 'create_success'], Alert::TYPE_SUCCESS);
			return $this->controller->redirect($this->returnUrl);
		};
		$model = $this->model;
		$model->type_id = $type_id;
		return $this->controller->render($this->view . '/create', ['model' => $model]);
	}
}
