<?php

namespace backend\modules\active\actions;

use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii\base\Action;

class UpdateAction extends Action {
	public $service;
	public $model;
	public $form;
	public $view;
	
	
	public function run($id) {
		$model = $this->model;
		$body = Yii::$app->request->getBodyParam($this->form);
		$thisEntity = $this->service->oneById($id);
		if (!empty($body)) {
			$returnUrl = '/active';
			if (!empty($thisEntity->active_id)) {
				$returnUrl = '/active/view?id=' . $thisEntity->active_id;
			}
			if (!empty($thisEntity->field_id)) {
				$returnUrl = '/active/field/view?id=' . $thisEntity->field_id;
			}
			$this->service->updateById($id, $body);
			Yii::$app->notify->flash->send(['active/type', 'update_success'], Alert::TYPE_SUCCESS);
			return $this->controller->redirect($returnUrl);
		}
		$entity = $this->service->oneById($id);
		$model->setAttributes($entity->toArray(),false);
		
		
		return $this->controller->render($this->view . '/update', ['model' => $model]);
	}
}
