<?php

namespace backend\modules\collection\actions;

use yii2lab\domain\exceptions\UnprocessableEntityHttpException;
use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii2lab\domain\base\Action;

class CreateAction extends Action {
	
	public $serviceMethod = 'create';
	
	public function run($detect) {
		$this->view->title =  Yii::t('finance/collection', $detect);
		$model =$this->createForm();
		if(Yii::$app->request->isPost && !$model->hasErrors()) {
			try{
			    $entity = $this->runServiceMethod($model->toArray());
				\App::$domain->navigation->alert->create(['main', 'create_success'], Alert::TYPE_SUCCESS);
				return $this->redirect('/collection/view?id='.$entity->id);
			} catch (UnprocessableEntityHttpException $e){
				$model->addErrorsFromException($e);
			}
		}
        $model->collectionType = $detect;
		return $this->render($this->render, compact('model'));
	}
}
