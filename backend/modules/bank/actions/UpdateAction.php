<?php

namespace backend\modules\bank\actions;

use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii\base\Action;

class UpdateAction extends Action {
	public $service;
	public $model;
	public $form;
	public $view;
	public $returnUrl;
	
	public function run($id) {
	
		$body = Yii::$app->request->getBodyParam($this->form);
		if (!empty($body)) {
			$this->service->updateById($id, $body);
			\App::$domain->notify->flash->send(['bank/main', 'update_success'], Alert::TYPE_SUCCESS);
			return $this->controller->redirect($this->returnUrl);
		}
		$entity = $this->service->oneById($id);
		$model = $this->model;
		$model->setAttributes($entity->toArray(),false);
		
		
		return $this->controller->render($this->view . '/update', ['model' => $model]);
	}
}
