<?php

namespace backend\modules\collection\actions;

use yii2lab\domain\base\Action;
use yii2lab\navigation\domain\widgets\Alert;
use Yii;

class DeleteAction extends Action {
	
	public $serviceMethod = 'deleteById';
	
	public function run($id) {
		$method = $this->serviceMethod;
        $entity = $this->service->oneById($id);
		$this->service->$method($id);
		\App::$domain->navigation->alert->create(['main', 'delete_success'], Alert::TYPE_SUCCESS);
		return $this->redirect('/collection/' . $entity->collectionType);
	}
}
