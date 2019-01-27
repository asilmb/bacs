<?php

namespace backend\modules\collection\controllers;

use domain\v1\finance\forms\CollectionForm;
use Yii;
use yii2lab\domain\web\ActiveController as Controller;

class DefaultController extends Controller
{

    public $serviceName = 'finance.collection';
    public $formClass = CollectionForm::class;
    public $service = 'finance.collection';

    public function actionMan() {



        return $this->render('index', ['model' => $model]);
    }
    public function actionWomen() {
        $path = 'collection/women';
        $model = new CollectionForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = CollectionForm::getInstance($model, 'image');
            if($model->upload($path)) {
                $currentTable = $this->scan($model->imageFile->name, true);
                return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
            }
        }

        return $this->render('download', ['model' => $model]);
    }
    public function actionTravel() {
        $path = 'collection/travel';
        $model = new CollectionForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = CollectionForm::getInstance($model, 'image');
            if($model->upload($path)) {
                $currentTable = $this->scan($model->imageFile->name, true);
                return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
            }
        }

        return $this->render('download', ['model' => $model]);
    }
    public function actionDownloadMan() {
        $path = 'collection/man';
        $model = new CollectionForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = CollectionForm::getInstance($model, 'image');
            if($model->upload($path)) {
                $currentTable = $this->scan($model->imageFile->name, true);
                return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
            }
        }
        return $this->render('download', ['model' => $model]);
    }
    public function actionDownloadWomen() {
        $path = 'collection/women';
        $model = new CollectionForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = CollectionForm::getInstance($model, 'image');
            if($model->upload($path)) {
                $currentTable = $this->scan($model->imageFile->name, true);
                return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
            }
        }

        return $this->render('download', ['model' => $model]);
    }
    public function actionDownloadTravel() {
        $path = 'collection/travel';
        $model = new CollectionForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = CollectionForm::getInstance($model, 'image');
            if($model->upload($path)) {
                $currentTable = $this->scan($model->imageFile->name, true);
                return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
            }
        }

        return $this->render('download', ['model' => $model]);
    }
}
