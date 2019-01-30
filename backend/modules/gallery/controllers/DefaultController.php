<?php

namespace backend\modules\gallery\controllers;

use backend\modules\stock\actions\CreateAction;
use backend\modules\stock\actions\DeleteAction;
use backend\modules\stock\actions\UpdateAction;
use domain\v1\finance\forms\StockForm;
use domain\v1\finance\forms\UploadForm;
use Yii;
use yii\web\UploadedFile;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller
{

    public $serviceName = 'finance.gallery';
    public $formClass = StockForm::class;
    public $service = 'finance.gallery';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['render'] = 'index';
        $actions['create']['class'] = CreateAction::class;
        $actions['update']['class'] = UpdateAction::class;
        $actions['delete']['class'] = DeleteAction::class;
        return $actions;
    }

    public function actionView($id)
    {
        $entity = $this->service->oneById($id);
        $path = Yii::getAlias('@frontend/web') . '/images/gallery/';
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');
            $dateTime = new \DateTime();
            $model->image->name = $dateTime->getTimestamp(). str_replace(' ', '_', $model->image->name);
            if ($model->upload($path)) {
                if ($entity->image) {
                    try {
                        unlink($path . '/' . $entity->image);
                    } catch (\Exception $e) {

                    }
                }
                $entity->image = $model->image->baseName . '.' . $model->image->extension;
                $this->service->update($entity);
                return $this->redirect('/gallery/');
            }
        }
        if ($entity->image) {
            $model->image = env('url.frontend') . 'images/gallery/'. $entity->image;
        }
        return $this->render('download', ['model' => $model]);
    }


}
