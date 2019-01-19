<?php

namespace frontend\modules\account\actions;

use yii2module\account\domain\v1\forms\ActiveForm;
use yii2lab\domain\data\Query;
use Yii;
use yii\base\Action;


class UpdateActiveAction extends Action {
	
	public $service;
	public $view;
	
	public function run($id) {
		$body = Yii::$app->request->getBodyParam('ActiveForm');
		$entity = $this->service->oneById($id);
		$activeType = Yii::$app->active->type->oneByIdWithFields($entity->active_id);
		$dynamicModel = Yii::$app->active->field->createDynamicModel($entity->active_id);
		$userArray = $entity->toArray();
		$dynamicModel->load($userArray['data'], '');
		if (!empty($body)) {
			$body['data'] = Yii::$app->request->getBodyParam('DynamicModel');
			try {
				$this->service->updateDataById($id,$body);
			} catch(UnprocessableEntityHttpException $e) {
				$dynamicModel->addErrorsFromException($e);
			}
		}
		return $this->controller->render($this->view . '/update', [
			'activeType' => $activeType,
			'dynamicModel' => $dynamicModel
		]);
	}
}
