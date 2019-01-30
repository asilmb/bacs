<?php

namespace backend\modules\collection\actions;

use yii2lab\domain\exceptions\UnprocessableEntityHttpException;
use yii2lab\navigation\domain\widgets\Alert;
use Yii;
use yii2lab\domain\base\Action;

class UpdateAction extends Action
{

    public $serviceMethod = 'updateById';
    public $serviceMethodOne = 'oneById';

    public function run($id)
    {
        $methodOne = $this->serviceMethodOne;
        $entity = $this->service->$methodOne($id);
        $this->view->title = Yii::t('finance/collection', $entity->collectionType);


        $model = $this->createForm($entity->toArray());
        if (Yii::$app->request->isPost && !$model->hasErrors()) {
            try {
                $method = $this->serviceMethod;
                $model->id = $id;
                $this->service->$method($id, $model->toArray());
                \App::$domain->navigation->alert->create(['main', 'update_success'], Alert::TYPE_SUCCESS);
                return $this->redirect(['/collection/' . $entity->collectionType]);
            } catch (UnprocessableEntityHttpException $e) {
                $model->addErrorsFromException($e);
            }
        }
        return $this->render($this->render, compact('model'));
    }
}
