<?php

namespace backend\modules\active\actions;

use Yii;
use yii\base\Action;
use yii2lab\navigation\domain\widgets\Alert;

class CreateAction extends Action {
	public $service;
	public $model;
	public $form;
	public $view;
	
	public function run($active_id = null, $field_id = null) {
		$model = $this->model;
		$body = Yii::$app->request->getBodyParam($this->form);
		$returnUrl ='/active';
		if (!empty($field_id)) {
			$model->field_id = $field_id;
			$returnUrl = '/active/field/view?id=' . $field_id;
		}
		if (!empty($active_id)) {
			$model->active_id = $active_id;
			$returnUrl = '/active/view?id=' . $active_id;
		}
	
		$isValid = $model->load($body, '') && $model->validate();
		if ($isValid) {
			$this->service->create($body);
			Yii::$app->notify->flash->send(['active/type', 'create_success'], Alert::TYPE_SUCCESS);
			return $this->controller->redirect($returnUrl);
		};
		return $this->controller->render($this->view . '/create', ['model' => $model]);
	}
}
