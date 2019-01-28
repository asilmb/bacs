<?php

namespace backend\modules\collection\controllers;

use backend\modules\collection\actions\CreateAction;
use backend\modules\collection\actions\DeleteAction;
use backend\modules\collection\actions\UpdateAction;
use domain\v1\finance\enums\CollectionTypeEnum;
use domain\v1\finance\forms\CollectionForm;
use domain\v1\finance\forms\UploadForm;
use Yii;
use yii\web\UploadedFile;
use yii2lab\app\domain\helpers\EnvService;
use yii2lab\domain\data\Query;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller
{

    public $serviceName = 'finance.collection';
    public $formClass = CollectionForm::class;
    public $service = 'finance.collection';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['render'] = 'index';
        $actions['create']['class'] = CreateAction::class;
        $actions['update']['class'] = UpdateAction::class;
        $actions['delete']['class'] = DeleteAction::class;
        return $actions;
    }

    public function actionMen()
    {
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::MEN);
        $dataProvider = \App::$domain->finance->collection->getDataProvider($query);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        $entity = $this->service->oneById($id);
        $path = Yii::getAlias('@frontend/web') . '/images/collections/' . $entity->collectionType;
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->image->name = str_replace(' ', '_', $model->image->name);
            if ($model->upload($path)) {
                if ($entity->image) {
                    try {
                        unlink($path . '/' . $entity->image);
                    } catch (\Exception $e) {

                    }
                }
                $entity->image = $model->image->baseName . '.' . $model->image->extension;
                $this->service->update($entity);
                return $this->redirect('/collection/' . $entity->collectionType);
            }
        }
        if ($entity->image) {
            $model->image = env('url.frontend') . 'images/collections/' . $entity->collectionType . '/' . $entity->image;
        }
        return $this->render('download', ['model' => $model]);
    }

    public function actionWomen()
    {
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::WOMEN);
        $dataProvider = \App::$domain->finance->collection->getDataProvider($query);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionTravel()
    {
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::TRAVEL);
        $dataProvider = \App::$domain->finance->collection->getDataProvider($query);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}
