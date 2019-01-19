<?php

namespace backend\modules\personal\actions;

use yii2lab\domain\exceptions\UnprocessableEntityHttpException;
use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii\base\Action;

class AddLogoAction extends Action {
	
	public $service;
	public $model;
	public $form;
	public $view;
	
	public function run($id) {
		$model = $this->model;
		if(Yii::$app->request->isPost) {
			if(Yii::$app->request->post('submit')==='delete') {
				$this->service->deleteSelf($id);
				Yii::$app->notify->flash->send(['profile/avatar', 'delete_success'], Alert::TYPE_SUCCESS);
			} else {
				if($model->validate()) {
					try{
						$this->service->updateSelf($model->imageFile, $id);
						Yii::$app->notify->flash->send(['profile/avatar', 'uploaded_success'], Alert::TYPE_SUCCESS);
					} catch (UnprocessableEntityHttpException $e){
						$model->addErrorsFromException($e);
					}
				}
			}
		}
		$entity = $this->service->getSelf($id);
		return $this->controller->render($this->view . '/upload', ['model' => $model,'avatar' => $entity]);
	}
}
